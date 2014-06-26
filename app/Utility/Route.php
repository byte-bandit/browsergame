<?php
class Route
{
    private $Smarty;

    protected $Database;
    protected $player;
    protected $template;

    protected $logged  = false;
    protected $success = '';
    protected $error   = '';
    

    public function __construct()
    {
        $this->Database = new MysqliDb(
            DatabaseConfig::$default['host'],
            DatabaseConfig::$default['username'],
            DatabaseConfig::$default['password'],
            DatabaseConfig::$default['database']
        );

        if (isset($_SESSION['player_id']))
        {
            $this->logged = true;

            $this->player = $this->Database->where('player_id', $_SESSION['player_id'])->getOne('players');

            $this->player['health']    = $this->getPlayerStat('health');
            $this->player['maxHealth'] = $this->getPlayerStat('health_max');
            $this->player['energy']    = $this->getPlayerStat('energy');
            $this->player['maxEnergy'] = $this->getPlayerStat('energy_max');
            $this->player['str']       = $this->getPlayerStat('str');
            $this->player['dex']       = $this->getPlayerStat('dex');
            $this->player['int']       = $this->getPlayerStat('int');
            $this->player['money']     = $this->getPlayerStat('money');
            $this->player['pet']       = $this->getPlayerStat('pet');

            if ($this->player["pet"]) {
                $this->player["pet"] = Item::$items[$this->player["pet"]]["name"];
            }
        }

        
        $this->Smarty = new Smarty();
         
        $this->Smarty->setTemplateDir(VIEWS_DIR);
        $this->Smarty->setCompileDir(LIB_DIR . DS . 'Smarty' . DS . 'templates_c');
        $this->Smarty->setCacheDir(  LIB_DIR . DS . 'Smarty' . DS . 'cache');
        $this->Smarty->setConfigDir( LIB_DIR . DS . 'Smarty' . DS . 'configs');
    }

    protected function render($template = null)
    {
        if (empty($template) AND empty($this->template)) {
            return false;
        }

        if ( ! empty($template)) {
            $this->template = $template;
        }

        if ($this->logged) {
            $this->set('player', $this->player);
        }
        $this->set('logged',  $this->logged);
        $this->set('success', $this->success);
        $this->set('error',   $this->error);

        $this->Smarty->display($this->template);
    }

    protected function set($templateVariable, $value)
    {
        $this->Smarty->assign($templateVariable, $value);
    }

    /*
     * Check if the user is logged in. Will redirect
     * the user to the login page if not.
     */
    protected function redirectIfUserIsNotLoggedIn()
    {
        if ( ! $this->logged) {
            Misc::redirect('Login', 'index');
        }
    }

    /*
     * Adds the given amount of experience points to the
     * players experience balance.
     *
     * @param ($experience) The amount of experience to add
     */
    protected function addExperience($experience)
    {
        $player['exp'] += $experience;
      
        // Keep checking in case the player earned enough experience
        // for multiple levels.
        while ($player['exp'] >= $player['expNext'])
        {
            ++$player['level'];
            $player['exp'] -= $player['expNext'];  
            $player['expNext'] = Misc::levelExperience($player['level'] + 1);

            //FIXME: Increase the stats in a useful manner.
            $stat = $this->getPlayerStat(Stat::STR);
            $this->updatePlayerStat(Stat::STR, $stat + 2);

            $stat = $this->getPlayerStat(Stat::DEX);
            $this->updatePlayerStat(Stat::DEX, $stat + 2);

            $stat = $this->getPlayerStat(Stat::INTEL);
            $this->updatePlayerStat(Stat::INTEL, $stat + 2);
        }
     
        $updateData = array(
            'exp'     => $player['exp'],
            'expNext' => $player['expNext'],
            'level'   => $player['level'],
        );

        $this->Database->where('player_id', $player['player_id'])->update('players', $updateData);
    }

    /*
     * Gets the given stat from the player database.
     *
     * @param ($stat_id) The id of the stat to retrieve
     * @param ($player_id) The player who to use for the lookup (optional)
     * @return (int) The retrieved stat value from the database.
     */
    protected function getPlayerStat($stat_id, $player_id = false)
    {
        // if not player_id provided, get current player
        if (!$player_id) $player_id = $this->player['player_id'];

        // shortname provided?
        if (!ctype_digit((string)$stat_id))
        {
            $stat = $this->Database->where('short', $stat_id)->getOne('stats', 'stat_id');
            $stat_id = $stat['stat_id'];
        }

        $stat = $this->Database->where('player_id', $player_id)
                               ->where('stat_id', $stat_id)
                               ->getOne('player_stats', 'value');
                 
        if (isset($stat['value']))
            return $stat['value'];

        // In case we retrieve nothing, create the stat and return 0
        $insertData = array(
            'player_id' => $player_id,
            'stat_id' => $stat_id
        );

        $this->Database->insert('player_stats', $insertData);
        return 0;
    }

    /*
     * Updates the given stat using the parsed value and player id.
     *
     * @param ($stat_id) The stat id to modify
     * @param ($value) The value which is used to modify the stat.
     * @param ($player_id) The player id to use for the stat updates (optional)
     */
    protected function updatePlayerStat($stat_id, $value, $player_id = false)
    {
        // if not player_id provided, get current player
        if (!$player_id) $player_id = $this->player['player_id'];

        // shortname provided?
        if (!ctype_digit((string)$stat_id))
        {
            $stat = $this->Database->where('short', $stat_id)->getOne('stats', 'stat_id');
            $stat_id = $stat['stat_id'];
        }

        // use getPlayerStat to create the row if it doesn't exist
        $this->getPlayerStat($stat_id, $player_id);

        $updateData = array('value' => $value);

        $this->Database->where('player_id', $player_id)
                       ->where('stat_id', $stat_id)
                       ->update('player_stats', $updateData, 1);
    }
     
    /*
     * Return data from the warehouse using
     * the given player and item id.
     *
     * @param ($item_id) The item id to lookup.
     * @param ($player_id) The player to use for the lookup
     * @return (array) The item(s) retrieve 
     */
    protected function getPlayerWarehouseItem($item_id, $player_id = false)
    {
        if (!$player_id) $player_id = $this->player['player_id'];

        return $this->Database->where('player_id', $player_id)
                              ->where('item_id', $item_id)
                              ->getOne('warehouse', 'quantity');
    }

    /*
     * Adds a new item to the player warehouse.
     *
     * @param ($item_id) The item id to add.
     * @param ($quantity) The amount to add (optional).
     * @param ($player_id) The player to give the items to (optional).
     */
    protected function addItemToPlayerWarehouse($item_id, $quantity = 1, $player_id = false)
    {
        if (!$player_id) $player_id = $this->player['player_id'];

        $item = $this->getPlayerWarehouseItem($item_id, $player_id);

        if (isset($item['quantity']))
        {
            $updateData = array('quantity' => $item['quantity'] + $quantity);

            $this->Database->where('player_id', $player_id)
                           ->where('item_id', $item_id)
                           ->update('warehouse', $updateData);

            return;
        }

        // if we reached this line, it means user does not own
        // current type of item_id
        $dataInsert = array(
            'item_id'   => $item_id,
            'player_id' => $player_id,
            'quantity'  => $quantity
        );
        $this->Database->insert('warehouse', $dataInsert);
    }

    /*
     * Removes a new item from the player warehouse.
     *
     * @param ($item_id) The item id to remove.
     * @param ($quantity) The amount to remove (optional).
     * @param ($player_id) The player to remove the items from (optional).
     */
    protected function removeItemFromPlayerWarehouse($item_id, $quantity = 1, $player_id = false)
    {
        if (!$player_id) $player_id = $this->player['player_id'];

        // this will decrease quantity since it will be quantity + (-another_quantity)
        $this->addItemToPlayerWarehouse($item_id, -$quantity, $player_id);

        // now simply check if new quantity is <= 0
        $item = $this->getPlayerWarehouseItem($item_id, $player_id);

        // if it is <= 0, remove the row from database
        if ($item['quantity'] <= 0)
            $this->Database->where('player_id', $player_id)->where('item_id', $item_id)
                           ->delete('warehouse', 1);
    }

    /*
     * Computes the players total stats used in battle.
     *
     * @param ($player_id) The player to use for the lookup (optional).
     * @return (array) An Array holding all player stats used in battle.
     */
    protected function computeStatsForBattle($player_id = false)
    {
        if (!$player_id) $player_id = $this->player["player_id"];

        $thePlayer["strength"] = $this->getPlayerStat('str', $player_id);
        $INT                   = $this->getPlayerStat('dex', $player_id);
        $DEX                   = $this->getPlayerStat('int', $player_id);
        $health                = $this->getPlayerStat('health', $player_id);

        // stat_id's for all equipment components
        $equipment = array(9, 10, 11, 12, 13, 14, 15);

        foreach ($equipment as $piece)
        {
            $item = $this->getPlayerStat($piece, $player_id);
            if ($item)
            {
                $thePlayer["strength"] += Item::$items[$item]["stats"][5];
                $INT                   += Item::$items[$item]["stats"][6];
                $DEX                   += Item::$items[$item]["stats"][7];
                $health                += Item::$items[$item]["stats"][1];
            } 
        }

        /* Get player strength and health and compute defense as dex + int / 2 */

        $thePlayer["defense"] = $DEX + intval($INT / 2);
        $thePlayer["health"] = $health;

        return $thePlayer;
    }
}

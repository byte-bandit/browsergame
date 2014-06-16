<?php
/**
*    Filename: functions.php
*    Author:Christian Lohr
*
*    This program is free software: you can redistribute it and/or modify
*    it under the terms of the GNU General Public License as published by
*    the Free Software Foundation, either version 3 of the License, or
*    (at your option) any later version.
*
*    This program is distributed in the hope that it will be useful,
*    but WITHOUT ANY WARRANTY; without even the implied warranty of
*    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*    GNU General Public License for more details.
*
*    You should have received a copy of the GNU General Public License
*    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
*/
 
/*
 * Redirect the user to a certain URL
 *
 * @param ($location) The URL to navigate to.
 */
function do_redirect($location)
{
    header('Location: '.$location);
}
 
/*
 * Check if the user is logged in. Will redirect
 * the user to the login page if not.
 */
function must_login()
{
    global $logged;
    if (!$logged)
    {
        do_redirect('login.php');
    }
}

/*
 * Calculates the experience needed for the
 * current level.
 *
 * @param ($level) The level to calculate the experience for
 * @return (int) The experience needed to gain the level.
 */
function levelExperience($level)
{
    return $level * 50;
}

/*
 * Adds the given amount of experience points to the
 * players experience balance.
 *
 * @param ($experience) The amount of experience to add
 */
function addExperience($experience)
{
    global $player, $db;
    
    $player['exp'] += $experience;
  
    // Keep checking in case the player earned enough experience
    // for multiple levels.
    while ($player['exp'] >= $player['expNext'])
    {
        ++$player['level'];
        $player['exp'] -= $player['expNext'];  
        $player['expNext'] = levelExperience($player['level'] + 1);

        //FIXME: Increase the stats in a useful manner.
        $stat = getPlayerStat(Stat::STR);
        updatePlayerStat(Stat::STR, $stat + 2);

        $stat = getPlayerStat(Stat::DEX);
        updatePlayerStat(Stat::DEX, $stat + 2);

        $stat = getPlayerStat(Stat::INTEL);
        updatePlayerStat(Stat::INTEL, $stat + 2);
    }
 
    $updateData = array(
        'exp'     => $player['exp'],
        'expNext' => $player['expNext'],
        'level'   => $player['level'],
    );

    $db->where('player_id', $player['player_id'])->update('players', $updateData);
}

/*
 * Gets the given stat from the player database.
 *
 * @param ($stat_id) The id of the stat to retrieve
 * @param ($player_id) The player who to use for the lookup (optional)
 * @return (int) The retrieved stat value from the database.
 */
function getPlayerStat($stat_id, $player_id = false)
{
    global $db, $player;

    // if not player_id provided, get current player
    if (!$player_id) $player_id = $player['player_id'];

    // shortname provided?
    if (!ctype_digit((string)$stat_id))
    {
        $stat = $db->where('short', $stat_id)->getOne('stats', 'stat_id');
        $stat_id = $stat['stat_id'];
    }

    $stat = $db->where('player_id', $player_id)
                ->where('stat_id', $stat_id)
                ->getOne('player_stats', 'value');
             
    if (isset($stat['value']))
        return $stat['value'];

    // In case we retrieve nothing, create the stat and return 0
    $insertData = array(
        'player_id' => $player_id,
        'stat_id' => $stat_id
    );

    $db->insert('player_stats', $insertData);
    return 0;
}

/*
 * Updates the given stat using the parsed value and player id.
 *
 * @param ($stat_id) The stat id to modify
 * @param ($value) The value which is used to modify the stat.
 * @param ($player_id) The player id to use for the stat updates (optional)
 */
function updatePlayerStat($stat_id, $value, $player_id = false)
{
    global $db, $player;

    // if not player_id provided, get current player
    if (!$player_id) $player_id = $player['player_id'];

    // shortname provided?
    if (!ctype_digit((string)$stat_id))
    {
        $stat = $db->where('short', $stat_id)->getOne('stats', 'stat_id');
        $stat_id = $stat['stat_id'];
    }

    // use getPlayerStat to create the row if it doesn't exist
    getPlayerStat($stat_id, $player_id);

    $updateData = array('value' => $value);

    $db->where('player_id', $player_id)
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
function getPlayerWarehouseItem($item_id, $player_id = false)
{
    global $db, $player;
    if (!$player_id) $player_id = $player['player_id'];

    return $db->where('player_id', $player_id)
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
function addItemToPlayerWarehouse($item_id, $quantity = 1, $player_id = false)
{
    global $db, $player;
    if (!$player_id) $player_id = $player['player_id'];

    $item = getPlayerWarehouseItem($item_id, $player_id);

    if (isset($item['quantity']))
    {
        $updateData = array('quantity' => $item['quantity'] + $quantity);

        $db->where('player_id', $player_id)
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

    $db->insert('warehouse', $dataInsert);
}

/*
 * Removes a new item from the player warehouse.
 *
 * @param ($item_id) The item id to remove.
 * @param ($quantity) The amount to remove (optional).
 * @param ($player_id) The player to remove the items from (optional).
 */
function removeItemFromPlayerWarehouse($item_id, $quantity = 1, $player_id = false)
{
    global $db, $player;
    if (!$player_id) $player_id = $player['player_id'];

    // this will decrease quantity since it will be quantity + (-another_quantity)
    addItemToPlayerWarehouse($item_id, -$quantity, $player_id);

    // now simply check if new quantity is <= 0
    $item = getPlayerWarehouseItem($item_id, $player_id);

    // if it is <= 0, remove the row from database
    if ($item['quantity'] <= 0)
        $db->where('player_id', $player_id)->where('item_id', $item_id)
            ->delete('warehouse', 1);
}

/*
 * Computes the players total stats used in battle.
 *
 * @param ($player_id) The player to use for the lookup (optional).
 * @return (array) An Array holding all player stats used in battle.
 */
function computeStatsForBattle($player_id = false)
{
    global $player;
    if (!$player_id) $player_id = $player["player_id"];

    $thePlayer["strength"] = getPlayerStat('str', $player_id);
    $INT                   = getPlayerStat('dex', $player_id);
    $DEX                   = getPlayerStat('int', $player_id);
    $health                = getPlayerStat('health', $player_id);

    // stat_id's for all equipment components
    $equipment = array(9, 10, 11, 12, 13, 14, 15);
    require_once("includes/constants/items.php");

    foreach ($equipment as $piece)
    {
        $item = getPlayerStat($piece, $player_id);
        if ($item)
        {
            $thePlayer["strength"] += $items[$item]["stats"][5];
            $INT                   += $items[$item]["stats"][6];
            $DEX                   += $items[$item]["stats"][7];
            $health                += $items[$item]["stats"][1];
        } 
    }

    /* Get player strength and health and compute defense as dex + int / 2 */

    $thePlayer["defense"] = $DEX + intval($INT / 2);
    $thePlayer["health"] = $health;

    return $thePlayer;
}

/*
 * Retrieves a text displayed after a battle has been won.
 *
 * @param ($monster) The monster that has been defeated.
 * @return (string) The victory message.
 */
function getVictoryText($monster)
{
    $selector = rand(1, 3);

    if ($selector == 1)
        return $monster['victory1'];
    elseif ($selector == 2) 
        return $monster['victory2'];
    else
        return $monster['victory3'];
}

/*
 * Retrieves a text displayed after a battle has been lost.
 *
 * @param ($monster) The monster that has defeated the player.
 * @return (string) The message of defeat.
 */
function getDefeatText($monster)
{
    $selector = rand(1, 3);

    if ($selector == 1)
        return $monster['defeat1'];
    elseif ($selector == 2) 
        return $monster['defeat2'];
    else
        return $monster['defeat3'];
}
?>
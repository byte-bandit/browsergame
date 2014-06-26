<?php
/**
*    Filename: warehouse.php
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
class InventoryRoute extends Route
{
    public function index()
    {
        $this->redirectIfUserIsNotLoggedIn();
        $this->template = 'inventory.tpl';

        // Get all items from warehouse
        $warehouse = $this->Database->where('player_id', $this->player['player_id'])->get('warehouse');
         
        $this->player['firstWeapon']  = Item::$items[$this->getPlayerStat('f_weap')];
        $this->player['secondWeapon'] = Item::$items[$this->getPlayerStat('s_weap')];
        $this->player['helmet']       = Item::$items[$this->getPlayerStat('helmet')];
        $this->player['armour']       = Item::$items[$this->getPlayerStat('armour')];
        $this->player['gloves']       = Item::$items[$this->getPlayerStat('gloves')];
        $this->player['boots']        = Item::$items[$this->getPlayerStat('boots')];
         
        $this->set('items', Item::$items);
        $this->set('warehouse', $warehouse);

        $this->render();
    }

    public function use_item()
    {
        $this->redirectIfUserIsNotLoggedIn();

        if ( ! isset(Item::$items[$_POST['use']]['usable'])) {
            Misc::redirect('Inventory', 'index');
        }

        // fetch user warehouse data for item $_POST['use']
        $item = $this->getPlayerWarehouseItem($_POST['use']);
     
        if ($item['quantity'] > 0) {
            // increase the stats according to Item::$items[$_POST['use']]['stats']
            foreach (Item::$items[$_POST['use']]['stats'] as $stat_id => $value)
                $this->updatePlayerStat($stat_id, $this->getPlayerStat($stat_id) + $value);
     
            // now we need to remove 1 piece of this item from warehouse
            $this->removeItemFromPlayerWarehouse($_POST['use']); 
        }

        Misc::redirect('Inventory', 'index');
    }

    public function wear_item()
    {
        $this->redirectIfUserIsNotLoggedIn();

        if ( ! isset(Item::$items[$_POST['wear']]['wearable'])) {
            Misc::redirect('Inventory', 'index');
        }

        // fetch user warehouse data for item $_POST['use']
        $item = $this->getPlayerWarehouseItem($_POST['wear']);
     
        if ($item['quantity'] > 0)
        {
            $stat = $this->getPlayerStat(Item::$items[$_POST['wear']]['wearable']);
     
            // if player was wearing something in slot, send item to warehouse
            if ($stat != 0) $this->addItemToPlayerWarehouse($stat);
     
            // equip item
            $this->updatePlayerStat(Item::$items[$_POST['wear']]['wearable'], $_POST['wear']);
     
            // remove 1 piece of this item from warehouse
            $this->removeItemFromPlayerWarehouse($_POST['wear']);
        }

        Misc::redirect('Inventory', 'index');
    }
}

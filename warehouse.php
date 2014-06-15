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
require_once('includes/header.php');
 
must_login();
 
require_once('includes/constants/items.php');
 
// if the requested item is of type usable in our constants
if (isset($_POST['use']) && isset($items[$_POST['use']]['usable']))
{
  // fetch user warehouse data for item $_POST['use']
  $item = getPlayerWarehouseItem($_POST['use']);
 
  if ($item['quantity'] > 0)
  {
    // increase the stats according to $items[$_POST['use']]['stats']
    foreach ($items[$_POST['use']]['stats'] as $stat_id => $value)
      updatePlayerStat($stat_id, getPlayerStat($stat_id) + $value);
 
    // now we need to remove 1 piece of this item from warehouse
    removeItemFromPlayerWarehouse($_POST['use']); 
  }
}
elseif (isset($_POST['wear']) && isset($items[$_POST['wear']]['wearable']))
{
   // fetch user warehouse data for item $_POST['use']
   $item = getPlayerWarehouseItem($_POST['wear']);
 
    if ($item['quantity'] > 0)
    {
      $stat = getPlayerStat($items[$_POST['wear']]['wearable']);
 
      // if player was wearing something in slot, send item to warehouse
      if ($stat != 0) addItemToPlayerWarehouse($stat);
 
      // equip item
      updatePlayerStat($items[$_POST['wear']]['wearable'], $_POST['wear']);
 
      // remove 1 piece of this item from warehouse
      removeItemFromPlayerWarehouse($_POST['wear']);
    }
  }
 
// Get all items from warehouse
$warehouse = $db->where('player_id', $player['player_id'])->get('warehouse');
 
$player['firstWeapon']  = $items[getPlayerStat('f_weap')];
$player['secondWeapon'] = $items[getPlayerStat('s_weap')];
$player['helmet']       = $items[getPlayerStat('helmet')];
$player['armour']       = $items[getPlayerStat('armour')];
$player['gloves']       = $items[getPlayerStat('gloves')];
$player['boots']        = $items[getPlayerStat('boots')];
 
$templateVariables['items']     = $items;
$templateVariables['warehouse'] = $warehouse;
$templateVariables['display']   = 'warehouse.tpl';
require('includes/footer.php');
<?php
/**
*    Filename: shop.php
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
 
if ($_POST['buy'] && isset($items[$_POST['buy']]['price']))
{
    // fetch player curency balance
    $playerMoney = getPlayerStat('money');
  
    // and check if he has enough to purchase item
    if ($items[$_POST['buy']]['price'] <= $playerMoney)
    {
        $playerMoney -= $items[$_POST['buy']]['price'];
        updatePlayerStat('money', $playerMoney);
    
        addItemToPlayerWarehouse($_POST['buy']);
    
        $success = 'Item bought';
    }
    else 
        $error = 'Not enough currency';
}
 
$templateVariables['items']    = $items;
$templateVariables['display'] = 'shop.tpl';
require_once('includes/footer.php');
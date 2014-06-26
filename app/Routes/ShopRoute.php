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
 
class ShopRoute extends Route
{
    public function index()
    {
        $this->redirectIfUserIsNotLoggedIn();
        $this->template = 'shop.tpl';

        $this->set('items', Item::$items);

        $this->render();
    }

    public function buy()
    {
        $this->redirectIfUserIsNotLoggedIn();
        $this->template = 'shop.tpl';

        if ( ! isset(Item::$items[$_POST['buy']]['price'])) {
            $this->render();
            return;
        }

        // fetch player curency balance
        $playerMoney = $this->getPlayerStat('money');
      
        // and check if he has enough to purchase item
        if (Item::$items[$_POST['buy']]['price'] <= $playerMoney) {
            $playerMoney -= Item::$items[$_POST['buy']]['price'];
            $this->updatePlayerStat('money', $playerMoney);
        
            $this->addItemToPlayerWarehouse($_POST['buy']);
        
            $this->success = 'Item bought';
        } else {
            $this->error = 'Not enough currency';
        }

        $this->set('items', Item::$items);

        $this->render();
    }
}

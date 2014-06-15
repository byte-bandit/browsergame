<?php
/**
*    Filename: items.php
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
$items = array(
  1 => array(
    'name' => 'K&uuml;chenmesser',
    'description' => 'V&ouml;llig ausreichend f&uuml; den Durchschnittsspieler.',
    'image' => 'item/weapon/short_sword1.png',
    'price' => 125,
    'wearable' => 'f_weap',
    'stats' => array(
      'str' => 1
    ),
  ),
  2 => array(
    'name' => 'Milchreis',
    'description' => 'Erh&ouml;ht die allgemeine Leistungsf&auml;higkeit.',
    'image' => 'item/food/cheese.png',
    'price' => 2500,
    'usable' => true,
    'stats' => array(
      'str' => 1
    ),
  ),
  3 => array(
    'name' => 'TEMPLATE_HEAD',
    'description' => 'Ipsum Lorem',
    'image' => 'helmet.png',
    'wearable' => 'helmet',
    'stats' => array(
      'str' => 3,
      'dex' => 2
    ),
  ),
  5 => array(
    'name' => 'TEMPLATE_PLATE',
    'description' => 'Ipsum Lorem',
    'image' => 'plate.png',
    'wearable' => 'armour',
    'stats' => array(
      'str' => 3,
      'dex' => 2
    ),
  ),
  6 => array(
    'name' => 'TEMPLATE_GLOVES',
    'description' => 'Ipsum Lorem',
    'image' => 'gloves.png',
    'wearable' => 'gloves',
    'stats' => array(
      'str' => 3,
      'dex' => 2
    ),
  ),
  7 => array(
    'name' => 'TEMPLATE_BOOTS',
    'description' => 'Ipsum Lorem',
    'image' => 'boots.png',
    'wearable' => 'boots',
    'stats' => array(
      'str' => 3,
      'dex' => 2
    ),
  ),
  8 => array(
    'name' => 'Golem',
    'description' => 'Er ist aus Lehm!.',
    'image' => 'dc-mon/nonliving/flesh_golem.png',
    'wearable' => 'pet',
    'price' => 2500,
    'stats' => array(
      'str' => 7,
      'dex' => 5
    ),
  ),
  9 => array(
    'name' => 'Hund',
    'description' => 'Dein bester (und einziger) Freund.',
    'image' => 'dc-mon/animals/jackal.png',
    'wearable' => 'pet',
    'price' => 80,
    'stats' => array(
      'str' => 3,
      'dex' => 2
    ),
  10 => array(
    'name' => 'Stein',
    'description' => 'Du hast schon immer gern den ersten Stein geworfen.',
    'image' => 'item/weapon/ranged/stone.png',
    'price' => 125,
    'wearable' => 'f_weap',
    'stats' => array(
      'dex' => 1
    ),
  ),
  ),
);
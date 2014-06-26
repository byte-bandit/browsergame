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
class Item
{
    public static $items = array(
        1 => array(
            'name' => 'Küchenmesser',
            'description' => 'Völlig ausreichend für den Durchschnittsspieler.',
            'image' => 'item/weapon/short_sword1.png',
            'price' => 125,
            'quality' => 1,
            'wearable' => 'f_weap',
            'stats' => array(
                'str' => 1
            )
        ),
        2 => array(
            'name' => 'Milchreis',
            'description' => 'Erhöht die allgemeine Leistungsfähigkeit.',
            'image' => 'item/food/cheese.png',
            'price' => 2500,
            'quality' => 2,
            'usable' => true,
            'stats' => array(
                'str' => 1
            )
        ),
        3 => array(
            'name' => 'Lederhut',
            'description' => 'Das Ding schützt dich maximal vor dem Regen. Wenigstens bleibt dein Kopf warm.',
            'image' => 'item/armour/headgear/elven_leather_helmet.png',
            'quality' => 1,
            'wearable' => 'helmet',
            'stats' => array(
                'int' => 1
            )
        ),
        5 => array(
            'name' => 'Lederschürze',
            'description' => 'In einem Kostümwettbewerb würdest du damit mindestens den 4. Platz erreichen.',
            'image' => 'item/armour/animal_skin1.png',
            'quality' => 1,
            'wearable' => 'armour',
            'stats' => array(
                'str' => 1
            )
        ),
        6 => array(
            'name' => 'Lederstulplen',
            'description' => 'Ein wenig ekelhaft findest du es ja schon, deine Hände dort rein zu stecken.',
            'image' => 'item/armour/glove1.png',
            'quality' => 1,
            'wearable' => 'gloves',
            'stats' => array(
                'int' => 1,
                'dex' => -1
            )
        ),
        7 => array(
            'name' => 'Ausgelatschte Treter',
            'description' => 'Dieses Exemplar hat scheinbar einige Vorbesitzer gehabt, dem Geruch nach zu Urteilen.',
            'image' => 'item/armour/boots1_brown.png',
            'quality' => 1,
            'wearable' => 'boots',
            'stats' => array(
                'dex' => 1
            )
        ),
        8 => array(
            'name' => 'Golem',
            'description' => 'Er ist aus Lehm!',
            'image' => 'dc-mon/nonliving/flesh_golem.png',
            'wearable' => 'pet',
            'quality' => 3,
            'price' => 2500,
            'stats' => array(
                'str' => 7,
                'dex' => 5
            )
        ),
        9 => array(
            'name' => 'Hund',
            'description' => 'Dein bester (und einziger) Freund.',
            'image' => 'dc-mon/animals/jackal.png',
            'wearable' => 'pet',
            'quality' => 2,
            'price' => 80,
            'stats' => array(
                'str' => 3,
                'dex' => 2
            )
        ),
        10 => array(
            'name' => 'Stein',
            'description' => 'Du hast schon immer gern den ersten Stein geworfen.',
            'image' => 'item/weapon/ranged/stone.png',
            'price' => 125,
            'quality' => 1,
            'wearable' => 'f_weap',
            'stats' => array(
                'dex' => 1
            )
        ),
        11 => array(
            'name' => 'Holzschild',
            'description' => 'Eilig und unfachmännig zusammengeschustert. Das Holz ist morsch. Selbst die Nägel rosten schon.',
            'image' => 'item/armour/shields/buckler1.png',
            'price' => 250,
            'quality' => 1,
            'wearable' => 's_weap',
            'stats' => array(
                'str' => 1,
                'dex' => -1
            )
        )
    );
}

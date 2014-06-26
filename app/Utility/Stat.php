<?php
/**
*    Filename: stats.php
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
abstract class Stat
{
    const HEALTH = 'health';
    const HEALTH_MAX = 'health_max';
    const ENERGY = 'energy';
    const ENERGY_MAX = 'energy_max';
    const STR = 'str';
    const DEX = 'dex';
    const INTEL = 'int';
    const GOLD = 'money';
    const WEAPON_PRIMARY = 'f_weap';
    const WEAPON_SECONDARY = 's_weap';
    const ARMOR_HELMET = 'helmet';
    const ARMOR_CHEST = 'armor';
    const ARMOR_GLOVES = 'gloves';
    const ARMOR_BOOTS = 'boots';
    const PET = 'pet';
}

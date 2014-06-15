<?php
/**
*    Filename: header.php
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

// We are going full error reporting mode for this
// game while in development stage
// TODO: Adapt for release environment
error_reporting(E_ALL ^ E_NOTICE);
 
require('includes/smarty/Smarty.class.php');
$smarty = new Smarty();
 
$smarty->setTemplateDir('layout/templates');
$smarty->setCompileDir('includes/smarty/templates_c');
$smarty->setCacheDir('includes/smarty/cache');
$smarty->setConfigDir('includes/smarty/configs');
 
require_once('db_config.php');
require_once('MysqliDb.php');
$db = new Mysqlidb($host, $user, $password, $dbname);
 
session_start();
 
$logged = false;
 
if (isset($_SESSION['player_id']))
{
  $player = $db->where('player_id', $_SESSION['player_id'])->getOne('players');
  $logged = true;
}
 
require('functions.php');
require_once('stats.php');

$player['health']    = getPlayerStat('health');
$player['maxHealth'] = getPlayerStat('health_max');
$player['energy']    = getPlayerStat('energy');
$player['maxEnergy'] = getPlayerStat('energy_max');
$player['str']       = getPlayerStat('str');
$player['dex']       = getPlayerStat('dex');
$player['int']       = getPlayerStat('int');
$player['money']     = getPlayerStat('money');
 
$player['pet']       = getPlayerStat('pet');
if ($player["pet"])
{
  require_once("includes/constants/items.php");
  $player["pet"] = $items[$player["pet"]]["name"];
}
?>
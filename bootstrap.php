<?php
/**
*    Filename: bootstrap.php
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

if (getPlayerStat(Stat::HEALTH_MAX) == 0)
{
    $id = $player['player_id'];

    updatePlayerStat(Stat::HEALTH, 20, $id);
    updatePlayerStat(Stat::HEALTH_MAX, 20, $id);
    updatePlayerStat(Stat::ENERGY, 10, $id);
    updatePlayerStat(Stat::ENERGY_MAX, 10, $id);
    updatePlayerStat(Stat::STR, 5, $id);
    updatePlayerStat(Stat::DEX, 5, $id);
    updatePlayerStat(Stat::INTEL, 5, $id);
    updatePlayerStat(Stat::GOLD, 20, $id);
}

do_redirect('index.php');
?>
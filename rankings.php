<?php
/**
*    Filename: rankings.php
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
 
$rankings = $db->orderBy('level', 'desc')
                    ->get('players', null, 'player_id, username, level');
 
$templateVariables['rankings'] = $rankings;
$templateVariables['display'] = 'rankings.tpl';
 
require_once('includes/footer.php');
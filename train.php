<?php
/**
*    Filename: train.php
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
 
$statsToGive = array('str' => 4, 'int' => 3, 'dex' => 2);
 
$levelFactor = intval($player['level'] / 2);
 
// make sure levelFactor is at least 1
$levelFactor = $levelFactor >= 1 ? $levelFactor : 1;
 
foreach ($statsToGive as $stat_id => &$defaultValue)
    $defaultValue = $defaultValue * $levelFactor;
 
// check if player has trained in the last 24 hours
$check = $db->where('player_id', $player['player_id'])
            ->where('created', array('>' => time() - 24*60*60))
            ->getOne('player_train_logs', 'created');
 
if (!isset($check['created']))   
    $whenCanTrain = 'now';
else
    $whenCanTrain = date('d/F/Y H:m:s', $check['created'] + 24*60*60);      
 
if ($_POST['train'] && $whenCanTrain == 'now')
{
    foreach ($statsToGive as $stat_id => $value)
    {
        $statValue = getPlayerStat($stat_id);
        updatePlayerStat($stat_id, $statValue + $value);
    }
 
    $dataInsert = array('player_id' => $player['player_id'], 'created' => time());
    $db->insert('player_train_logs', $dataInsert);
  
    do_redirect('train.php');
}
 
$templateVariables['whenCanTrain'] = $whenCanTrain;
$templateVariables['display'] = 'train.tpl';
require_once('includes/footer.php');
?>
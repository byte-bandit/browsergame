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
class TrainRoute extends Route
{
    public function index()
    {
        $this->redirectIfUserIsNotLoggedIn();
        $this->template = 'train.tpl';

        $this->set('whenCanTrain', $this->getTimePlayerIsAllowedToTrainAgain());

        $this->render();
    }

    public function train()
    {
        $this->redirectIfUserIsNotLoggedIn();

        if ($this->getTimePlayerIsAllowedToTrainAgain() !== 'now') {
            Misc::redirect('Train', 'index');
        }

        $statsToGive = array(
            'str' => 4,
            'int' => 3,
            'dex' => 2
        );
        foreach ($statsToGive as $stat_id => $value) {
            $statValue = $this->getPlayerStat($stat_id);
            $this->updatePlayerStat($stat_id, $statValue + $value);
        }
     
        $dataInsert = array('player_id' => $this->player['player_id'], 'created' => time());
        $this->Database->insert('player_train_logs', $dataInsert);
      
        Misc::redirect('Train', 'index');
    }

    private function getTimePlayerIsAllowedToTrainAgain()
    {
        // check if player has trained in the last 24 hours
        $check = $this->Database->where('player_id', $this->player['player_id'])
                                ->where('created', array('>' => time() - 24*60*60))
                                ->getOne('player_train_logs', 'created');
         
        if (isset($check['created'])) {
            return date('d/F/Y H:m:s', $check['created'] + 24*60*60);
        }

        return 'now';
    }
}

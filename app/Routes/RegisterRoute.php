<?php
/**
*    Filename: register.php
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
class RegisterRoute extends Route
{
    public function index()
    {
        $this->template = 'register.tpl';
        $this->render();
    }

    public function register()
    {
        $this->template = 'register.tpl';

        if ( ! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $this->error = 'Invalid email';
            $this->render();
            return;
        }
     
        if ( ! ctype_alnum($_POST['username']) OR strlen($_POST['username']) < 3 OR strlen($_POST['username']) > 25) {
            $this->error = 'Invalid username';
            $this->render();
            return;
        }
     
        if (strlen($_POST['password']) < 3 OR strlen($_POST['password']) > 25) {
            $this->error = 'Invalid password';
            $this->render();
            return;
        }
     
        $result = $this->Database->where('username', $_POST['username'])->getOne('players', 'player_id');
        if ($result['player_id']) {
            $this->error = 'Username already in use!';
            $this->render();
            return;
        }
        
        $result = $this->Database->where('email', $_POST['email'])->getOne('players', 'player_id');
        if ($result['player_id']) {
            $this->error = 'Email already in use!';
            $this->render();
            return;
        }
      
        $this->success = 'Account created! Welcome, '.$_POST['username'];
    
        $username     = $_POST['username'];
        $passwordHash = hash('sha512', 'ThisIsTheSalt'.$username.$_POST['password']);
        $email        = $_POST['email'];
        $expNext      = Misc::levelExperience(2);
    
        $player = array(
            'username' => $username,
            'password' => $passwordHash,
            'expNext'  => $expNext,
            'email'    => $email
        );
        $this->Database->insert('players', $player);

        $baseStats = array(
            Stat::HEALTH     => 20,
            Stat::HEALTH_MAX => 20,
            Stat::ENERGY     => 10,
            Stat::ENERGY_MAX => 10,
            Stat::STR        => 5,
            Stat::DEX        => 5,
            Stat::INTEL      => 5,
            Stat::GOLD       => 20,
        );
        foreach ($baseStats as $statName => $statValue) {
            $playerStat = array(
                'player_id' => $player_id,
                'stat_id'   => $statName,
                'value'     => $statValue
            );
            $this->Database->insert('player_stats', $playerStat);
        }

        $this->render();
    }
}
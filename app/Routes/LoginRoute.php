<?php
/**
*    Filename: login.php
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
class LoginRoute extends Route
{
    public function index()
    {
        $this->template = 'login.tpl';
        $this->render();
    }

    public function login()
    {
        $this->template = 'login.tpl';

        $username = $_POST['username'];
        $password = $_POST['password'];

        if ( ! ctype_alnum($username) OR strlen($username) > 25) {
            $this->render();
            return;
        }

        $passwordHash = hash('sha512', 'ThisIsTheSalt' . $username . $_POST['password']);
        
        $result = $this->Database->where('username', $username)
                                 ->where('password', $passwordHash)
                                 ->getOne('players', 'player_id');
        $playerId = $result['player_id'];

        if (empty($playerId)) {
            $this->error = 'Access denied';
            $this->render();
            return;
        }

        // login user
        $_SESSION['player_id'] = $playerId;

        // redirect user to home page
        Misc::redirect('Home', 'index');
    }
}

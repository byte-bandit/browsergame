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
require_once('includes/header.php');
 
if (isset($_POST['login']))
{
  $username = $_POST['username'];
  $password = $_POST['password'];
  if (ctype_alnum($username) && strlen($username) <= 25)
  {
    $passwordHash = hash('sha512', 'ThisIsTheSalt'.$username.$_POST['password']);
 
    $check = $db->where('username', $username)
                ->where('password', $passwordHash)
                ->getOne('players', 'player_id');
    if ($check['player_id'])
    {
      // login user
      $_SESSION['player_id'] = $check['player_id'];
 
      // redirect user to index
      do_redirect('index.php');
    }
    else
      $error = 'Access denied';
  }
}
 
$templateVariables['display'] = 'login.tpl';
require('includes/footer.php');
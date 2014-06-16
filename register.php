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
require('includes/header.php');
 
if (isset($_POST['register']))
{
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        $error = 'Invalid email';
 
    if (!ctype_alnum($_POST['username']) || strlen($_POST['username']) < 3 || strlen($_POST['username']) > 25)
        $error = 'Invalid username';
 
    if (strlen($_POST['password']) < 3 || strlen($_POST['password']) > 25)
        $error = 'Invalid password';
 
    $check = $db->where('username', $_POST['username'])->getOne('players', 'player_id');
    if ($check['player_id'])
        $error = 'Username already in use!';
    
    $check = $db->where('email', $_POST['password'])->getOne('players', 'player_id');
    if ($check['player_id'])
        $error = 'Email already in use!';
  
    if (!isset($error))
    {
        $success = 'Account created! Welcome, '.$_POST['username'];
    
        $username = $_POST['username'];
        $passwordHash = hash('sha512', 'ThisIsTheSalt'.$username.$_POST['password']);
        $email = $_POST['email'];
        $expNext = levelExperience(2);
    
        $dataInsert = array(
            'username' => $username,
            'password' => $passwordHash,
            'expNext'  => $expNext,
            'email' => $email
        );
 
        $db->insert('players', $dataInsert);

        //relay player to bootstrapping
        // check if user credentials are valid
        $check = $db->where('username', $username)
                    ->where('password', $passwordHash)
                    ->getOne('players', 'player_id');
                    
        if ($check['player_id'])
        {
            // login user
            $_SESSION['player_id'] = $check['player_id'];
 
            // redirect user to index
            do_redirect('bootstrap.php');
        }
        else
        {
            $error = 'An error occured during bootstrapping. Access denied';
        }
    } 
} 
 
$templateVariables['display'] = 'register.tpl';
require('includes/footer.php');
<?php
/**
*    Filename: profile.php
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
 
require_once("includes/header.php");
 
must_login();
 
if (ctype_digit($_GET["player"]))
{
    $profile = $db->where("player_id", $_GET["player"])
                    ->getOne("players", "player_id, username, level");
}
 
// if player not found or not specified in url, get current player
if (!$profile["player_id"])
    $profile = $player;
  
// is profile different from current player's profile?
if ($profile["player_id"] != $player["player_id"])
{
    if ($_POST["attack"])
    {
        $attackerPlayer = computeStatsForBattle();
        $defenderPlayer = computeStatsForBattle($profile["player_id"]);
    
        /* Initiate fight */
        $rounds = 0;
 
        while (true)
        {
            $rounds++;
            
            // Start report for current round
            $report .= "Round ".$rounds.": ";
            
            /* Decide who fights now*/
            if ($rounds % 2 !=0)
            {
                // this code gets executed if $rounds is an odd number
                $attacker = &$attackerPlayer; $defender = &$defenderPlayer;
                $report .= $attackerPlayer["username"]." vs ".$defenderPlayer["username"]." : ";
            }
            else
            {
                $attacker = &$defenderPlayer; $defender = &$attackerPlayer;
                $report .= $defenderPlayer["username"]." vs ".$attackerPlayer["username"]." : ";
            }
      
            /* 
             does attacker have more strength that defendant defense?
             if yes, subtract attacker strength from defender health
             otherwise subtract (def health - attacker strength) / 2 from attacker health
            */
            if ($attacker["strength"] > $defender["defense"])
            {
                $defender["health"] -= $attacker["strength"];
                $report .= "Attacker dealt ".$attacker["strength"]." damage. ";
            }
            else 
            {
                $dmg = intval(($defender["defense"] - $attacker["strength"]) / 2);
                $attacker["health"] -= $dmg;
                $report .= "Attacker failed and received ".$dmg." damage. ";
            }
            
            // Log health of fighter on each round
            $report .= "Attacker health: ".$attacker["health"]." | Defender health: ".$defender["health"];
      
            // has the player or monster died?
            if ($attacker["health"] <= 0 || $defender["health"] <= 0)
            {
                // find who's the winner, the one who still has health
                if ($attacker["health"] <= 0)
                    $winner = $defender;
                else
                    $winner = $attacker;

            break;
            }
      
            $report .= "<br/>";
        }
 
        if ($winner == $attackerPlayer)
            $success = "You have won!";
        else 
            $error = "You've lost :(.";
  } 
} 
 
$templateVariables["report"]  = $report;
$templateVariables["profile"] = $profile;
 
$templateVariables["display"] = "profile.tpl";
require_once("includes/footer.php");
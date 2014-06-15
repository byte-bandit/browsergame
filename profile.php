<?php
// File: profile.php
// Author: makingbrowsergames.com
// Basic Tutorial
 
require_once("includes/header.php");
 
must_login();
 
if (ctype_digit($_GET["player"]))
{
  $profile = $db->where("player_id", $_GET["player"])
                ->getOne("players", "player_id, username, level");
} // if player specified in url
 
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
      } // if
  
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
        else $winner = $attacker;
    
        // stop the while loop
        break;
      } // if one of them is dead
  
      $report .= "<br/>";
    } // while
 
    if ($winner == $attackerPlayer)
      $success = "You have won!";
    else 
      $error = "You've lost :(.";
  } // attack request?
} // if
 
$templateVariables["report"]  = $report;
$templateVariables["profile"] = $profile;
 
$templateVariables["display"] = "profile.tpl";
require_once("includes/footer.php");
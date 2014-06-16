<?php
/**
*    Filename: forest.php
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
 
require_once("includes/constants/maps/forest.php");
 
if ($_POST["explore"])
{
    $random = rand(1, 100);
    if ($random < 50)
    {
        // get all monster id's
        $monsterIds = array_keys($monsters);
        // randomize them
        shuffle($monsterIds);
        // get the first random monster 
        $monster = $monsters[$monsterIds[0]];
        $_SESSION["monsterFight"] = $monsterIds[0];
    }
    else if ($random > 90)
    {
        $gold = rand(1, 100);
        $success = "You have found ".$gold." currency on the ground!";
        $stat = getPlayerStat('money');
        updatePlayerStat('money', $stat + $gold);
    }
    else
        $success = "Nothing found. Keep exploring! Better luck next time";
}
 
if ($_POST["fight"] && $_SESSION["monsterFight"])
{
    $monster = $monsters[$_SESSION["monsterFight"]];

    $thePlayer = computeStatsForBattle();

    /* Initiate fight */
    $rounds = 0;

    while (true)
    {
        $rounds++;
        // Start report for current round
        $report .= "Round ".$rounds.": ";
        /* Decide who fights now | $var = &$var2 means when editing $var, $var2 gets edited as well */
        if ($rounds % 2 !=0)
        {
            // this code gets executed if $rounds is an odd number
            $attacker = &$thePlayer; $defender = &$monster;
            $report .= $player["username"]." vs ".$monster["name"]." : ";
        }
        else
        {
            $attacker = &$monster; $defender = &$thePlayer;
            $report .= $monster["name"]." vs ".$player["username"]." : ";
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
  
    // compute how much currency lost/earned
    $currency = rand(1, 100);

    if ($winner == $thePlayer)
    {
        $success = getVictoryText($monster)." Du pl&uuml;nderst ".$currency." Gold.";

        // give exp
        addExperience($monster['exp']);
        
        // calculate loot
        foreach($monster['loot'] as $lootId => $lootset)
        {
            $itemID = -1;
            foreach($lootset as $key => $value)
            {
                if ($key == "id")
                {
                    $itemID = $value;
                }
                elseif ($key == "rate")
                {
                    if (rand(1,100) <= ($value * 100))
                    {
                        addItemToPlayerWarehouse($itemID, 1);
                        $success .= " Du hast einen Gegenstand gefunden!";
                    }
                }
            }
        }
    }
    else 
    {
        $error = getDefeatText($monster)." Du verlierst ".$currency." Gold.";
        // set currency to negative so that it's deducted from user currency
        $currency *= -1;
    }
    
    // give/take currency
    $stat = getPlayerStat('money');
    updatePlayerStat('money', $stat + $currency);

    unset($_SESSION["monsterFight"]);
}
 
$templateVariables["map"]      = $map;
$templateVariables["monster"]  = $monster;
$templateVariables["report"]   = $report;
 
$templateVariables["display"] = "forest.tpl";
require_once("includes/footer.php");
?>
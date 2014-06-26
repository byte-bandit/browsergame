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
class Forest
{
    public static $map = array(
        "name" => "Der Dunkelwald",
        "image" => ".png",
        "description" => "Unheimlich. Verdammt unheimlich.",
        // etc, maybe required level and so on
    );
     
    public static $monsters = array(
        1 => array(
            "name" => "Alte Wanderschildkröte", 
            "image" => "dc-mon/animals/snapping_turtle.png", 
            "health" => 10, 
            "strength" => 5, 
            "defense" => 5,
            "exp" => 100,
            "victory1" => "Der alten lahmen Kröte hast du aber wirklich gezeigt, wer der Herr im Haus ist.",
            "victory2" => "Du hast den merkwürdigen Drang, weitere wehrlose Geschöpfe zu quälen, um deine Selbstwertprobleme zu überspielen.",
            "victory3" => "Hah! Die steht nicht mehr auf! Du kannst wirklich stolz auf dich sein.",
            "defeat1" => "Das Biest hat eindeutig mit faulen Tricks gearbeitet...",
            "defeat2" => "Das nächste mal klappts bestimt, dem langsamen alten Ding den Hals umzudrehen. Du musst nur an dich glauben!",
            "defeat3" => "Diese alten ehrwürdigen Tieren sollte man mit Respekt begegnen, so viel hast du heute gelernt.",
            "loot" => array(
                1 => array(
                    "id" => 3,
                    "rate" => 0.2
                ),
                2 => array(
                    "id" => 5,
                    "rate" => 0.1
                )
            )
        ),
        2 => array(
            "name" => "Ameise", 
            "image" => "dc-mon/animals/soldier_ant.png", 
            "health" => 10, 
            "strength" => 6, 
            "defense" => 3,
            "exp" => 100,
            "victory1" => "Jahaa, gegen Kleinere konntest du dich schon immer gut behaupten.",
            "victory2" => "So, endlich kannst du die Picknick-Decke ausbreiten, Krabbeltierprobleme wirst du nicht mehr haben...",
            "victory3" => "Na, da hast du ja wirklich gezeigt was in dir steckt!",
            "defeat1" => "Na warte. Das nächste mal bringst du dein Vergrößerungsglas mit...",
            "defeat2" => "Also dass sie ihre Freunde geholt hat war echt gemein. Ein fairer Kampf war DAS auf jeden Fall nicht!",
            "defeat3" => "Wer konnte denn ahnen, dass die Biester so stark zwicken können?! Das tut ja richtig weh!",
            "loot" => array(
                1 => array(
                    "id" => 6,
                    "rate" => 0.3
                ),
                2 => array(
                    "id" => 7,
                    "rate" => 0.2
                )
            )
        ),
    );
}

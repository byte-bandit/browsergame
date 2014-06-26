<?php
class Misc
{
    /*
     * Redirect the user to a certain Route and Action
     */
    public static function redirect($route, $action)
    {
        header('Location: index.php?route=' . $route . '&action=' . $action);
    }

    /*
     * Calculates the experience needed for the
     * current level.
     *
     * @param ($level) The level to calculate the experience for
     * @return (int) The experience needed to gain the level.
     */
    public static function levelExperience($level)
    {
        return $level * 50;
    }

    /*
     * Retrieves a text displayed after a battle has been won.
     *
     * @param ($monster) The monster that has been defeated.
     * @return (string) The victory message.
     */
    public static function getVictoryText($monster)
    {
        $selector = rand(1, 3);

        if ($selector == 1)
            return $monster['victory1'];
        elseif ($selector == 2) 
            return $monster['victory2'];
        else
            return $monster['victory3'];
    }

    /*
     * Retrieves a text displayed after a battle has been lost.
     *
     * @param ($monster) The monster that has defeated the player.
     * @return (string) The message of defeat.
     */
    public static function getDefeatText($monster)
    {
        $selector = rand(1, 3);

        if ($selector == 1)
            return $monster['defeat1'];
        elseif ($selector == 2) 
            return $monster['defeat2'];
        else
            return $monster['defeat3'];
    }
}
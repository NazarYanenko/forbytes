<?php
use Letters\Letter;
class Debugger
{
    public static function isOn() : string
    {
        $debug = include 'config/config.php';
        return $debug['Debugger'];
    }

    public static function debug(Letter $letter)
    {
        var_dump($letter);
    }

    public static function showError(){
        throw new Exception("Cannot send email");
    }
}
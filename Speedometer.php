<?php


class Speedometer
{
    public static $kmToMiles = 0.621371;
    public static $milesToKm = 1.60934;

    public static function convertKmToMiles(int $km) : float
    {
        return $km * Speedometer::$kmToMiles;
    }

    public static function convertMilesToKm($miles) : float
    {
        return $miles * Speedometer::$milesToKm;
    }
}
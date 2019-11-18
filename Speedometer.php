<?php


class Speedometer
{
    public static function convertKmToMiles(int $km) : float
    {
        return $km * 0.621371;
    }

    public static function convertMilesToKm($miles) : float
    {
        return $miles * 1.60934;
    }
}
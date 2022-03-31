<?php
class Area
{
    public static float $pi = 3.1415;

    public static function circle(float $radius): float
    {
        return pow($radius, 2) * self::$pi;
    }
}

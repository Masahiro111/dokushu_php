<?php

class MySinleton
{
    private static self $instance;

    private function __construct()
    {
    }

    public static function getInstance(): self
    {
        if (!isset(self::$instance)) {
            self::$instance = new MySinleton();
        }
        return self::$instance;
    }
}

$c1 = MySinleton::getInstance();
$c2 = MySinleton::getInstance();

var_dump($c1 === $c2);

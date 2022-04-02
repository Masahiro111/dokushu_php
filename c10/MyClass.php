<?php

namespace c10;

class MyClass
{
    public static function showClass(): void
    {
        print __CLASS__;
    }
}

$p = new MyClass();
$p->showClass();

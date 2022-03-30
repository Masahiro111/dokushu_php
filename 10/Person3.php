<?php

class Person
{
    public string $fistName;
    public string $lastName;

    public function show(): void
    {
        print "名前は {$this->lastName}{$this->firstName}";
    }
}

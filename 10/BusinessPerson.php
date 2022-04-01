<?php

require_once 'Person.php';

class BusinessPerson extends Person
{
    public function work(): void
    {
        print "{$this->lastName} {$this->firstName} は働いています";
    }
}

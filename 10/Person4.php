<?php

class Person
{
    public string $firstName;
    public string $lastName;

    public function __construct(string $firstName, string $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function show(): void
    {
        print "私は {$this->firstName} {$this->lastName}";
    }
}

<?php

class Person
{
    public function __construct(
        public string $firstName = "太郎",
        public string $lastName = '山田'
    ) {
    }
}

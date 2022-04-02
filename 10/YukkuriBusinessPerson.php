<?php

require_once 'BusinessPerson.php';

class YukkuriBusinessPerson extends BusinessPerson
{
    public function work(): void
    {
        parent::work();
        print "ただし、ぼちぼちと…";
    }
}

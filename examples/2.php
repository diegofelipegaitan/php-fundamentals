<?php

class Person
{
    public $firstName;
    public $lastName;
    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }
    public function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

$person1 = new Person('Diego', 'Gaitán');
echo "{$person1->fullName()} <br />";

if( $person1->firstName = 'Lucas' ) { }

echo "{$person1->fullName()} <br />";


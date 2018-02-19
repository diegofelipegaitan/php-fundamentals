<?php

$firstName = 'Lucas';
$lastName = 'Gaitán';

$fullName = "$firstName $lastName";
echo "Hello $fullName<br />";

$firstName2 = 'Felipe';
$lastName2 = 'Hidalgo';

$fullName2 = "$firstName2 $lastName2";
echo "Hello $fullName2 <br /><br />";

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
$person1 = new Person('Lucas', 'Gaitán');
$person2 = new Person('Felipe', 'Hidalgo');

echo "{$person1->fullName()} is friend of {$person2->fullName()}";


var_dump($person1);
var_dump($fullName);
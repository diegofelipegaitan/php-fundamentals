<?php
class Person {
    protected $firstName; // public, protected <-> private
    protected $lastName;

    public function __construct($firstName, $lastName)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    public function getFirstName()
    {
        return strtolower($this->firstName);
    }

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function fullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }
}

$person1 = new Person('Diego', 'Gaitán');
echo "{$person1->fullName()} <br />";

// if( $person1->firstName = 'Lucas' ) { }

$person1->setFirstName( 'Lucas' );

echo "{$person1->fullName()} <br />";
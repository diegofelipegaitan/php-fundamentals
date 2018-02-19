<?php

class Fruit {
    private $color;

    public function eat() {
        //
    }

    public function setColor($c) {
        $this->color = $c;
    }
}

class Apple extends Fruit {
    public function eat() {
        echo "eat apple <br />";
    }
}

class Orange extends Fruit {
    public function eat() {
        echo "eat orange <br />";
    }
}

$apple = new Apple();
$orange = new Orange();

$apple->eat();

$orange->eat();
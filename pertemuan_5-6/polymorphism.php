<?php

class Animal {
    protected $name;

    public function __construct($name) {
        $this->name= $name;
    }

    public function getName() {
        return $this->name;
    }
}

class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}

class cat extends Animal {
    public function makeSound() {
        return "Meow";
    }
}

$dog = new Dog("Buddy");
echo $dog->getName() . "says " . $dog->makeSound() . "<br>"; //output: Buddy says


class printer {
    public function print(Animal $animal) {
        echo $animal->getName() . " says " . $animal->makeSound() . "<br>";
    }
}

$dog = new Dog("Buddy");
$cat = new Cat("Kitty");

$printer= new Printer();
$printer->print($dog);
$printer->print($cat);
?>
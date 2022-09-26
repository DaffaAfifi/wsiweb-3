<?php
interface Animal{
    public function makeSound();
}

class Cat implements Animal{
    public function makeSound(){
        echo "Meow";
    }
}

class Dog implements Animal{
    public function makeSound(){
        echo "Bark";
    }
}

class Mouse implements Animal{
    public function makeSound(){
        echo "Squeak";
    }
}

$cat1 = new Cat();
$dog1 = new Dog();
$mouse1 = new Mouse();
$animals = array($cat1, $dog1, $mouse1);

foreach($animals as $animal){
    $animal->makeSound();
}
?>
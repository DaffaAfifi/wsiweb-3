<?php
interface Bird{
    public function makeSound();
}

class Perkutut implements Bird{
    public function makeSound(){
        echo "kur kur";
    }
}

$burung1 = new Perkutut();
$burung1->makeSound();
?>
<?php
abstract class Person{
    abstract public function greet();
}

class English extends Person{
    public function greet(){
        echo "Good morning sir!";
    }
}

class German extends Person{
    public function greet(){
        echo "Guten Morgen mein Herr!";
    }
}

class French extends Person{
    public function greet(){
        echo "Bonjour Monsieur!";
    }
}

$harryMaguire = new English();
$timoWerner = new German();
$kylianMbappe = new French();

echo $harryMaguire->greet() . "<br>";
echo $timoWerner->greet() . "<br>";
echo $kylianMbappe->greet() . "<br>";
?>
<?php
class Car{
    private $model;

    public function setModel($model){
        $this-> model = $model;
    }
}

class SportsCar extends Car{
    public function hello(){
        return "beep! I am a <i>" . $this-> model . "</i><br />";
    }
}

$SportsCar1 = new SportsCar();

$SportsCar1-> setModel('Mercedes Benz');

echo $SportsCar1-> hello();
?>
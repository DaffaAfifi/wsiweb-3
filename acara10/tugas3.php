<?php
class tablet{
    private $merk;
    protected $camera;
    public $memory;

    public function setMerk($merk){
        $this-> merk = $merk;
    }

    public function setCamera($camera){
        $this-> camera = $camera;
    }

    public function setMemory($memory){
        $this-> memory = $memory;
    }
}

class handphone extends tablet{
    private $handphone_baru;

    public function setHandphone_baru($handphone_baru){
        $this-> handphone_baru = $handphone_baru;
    }

    public function beli_handphone(){
        return "Selamat kamu memiliki handphone baru yaitu " . $this-> handphone_baru . 
        " dengan merk " . $this-> merk . " yang memiliki camera " . $this-> camera . 
        " dan memory internal sebesar " . $this->memory;
    }
}

$hp1 = new handphone();

$hp1->setHandphone_baru("Realme 3");
$hp1->setMerk("Realme");
$hp1->setCamera("24 MP");
$hp1->setMemory("64 GB");

echo $hp1->beli_handphone();
?>
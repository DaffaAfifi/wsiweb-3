<?php

class PersegiPanjang{
    private $panjang, $lebar;

    function set_nilai($x, $y){
        $this->panjang = $x;
        $this->lebar = $y;
    }

    function get_nilai(){
        return ($this->panjang * $this->lebar);
    }
}

class Segitiga{
    private $alas, $tinggi;

    function set_nilai($x, $y){
        $this->alas = $x;
        $this->tinggi = $y;
    }

    function get_nilai(){
        return ($this->alas * $this->tinggi * 0.5);
    }
}

$persegi1 = new PersegiPanjang();
$segitiga1 = new Segitiga();

$persegi1->set_nilai(20,10);
$segitiga1->set_nilai(20,30);

echo "Luas Persegi 1 adalah : ". $persegi1->get_nilai(). "<br>";
echo "Luas Segitiga 1 adalah : ". $segitiga1->get_nilai();
?>
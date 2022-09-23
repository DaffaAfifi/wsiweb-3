<?php
class produk{
    private $ukuran;
    private $warna;
    private $nama;

    public function setUkuran($ukuran){
        $this-> ukuran = $ukuran;
    }

    public function getUkuran(){
        return $this-> ukuran;
    }

    public function setWarna($warna){
        $this-> warna = $warna;
    }

    public function getWarna(){
        return $this-> warna;
    }

    public function setNama($nama){
        $this-> nama = $nama;
    }

    public function getNama(){
        return $this-> nama;
    }
}

class topi extends produk{
    private $model;

    public function setModel($model){
        $this-> model = $model;
    }

    public function getModel(){
        return $this-> model;
    }
}

class celana extends produk{
    private $tipe;
    private $model;

    public function setTipe($tipe){
        $this-> tipe = $tipe;
    }

    public function getTipe(){
        return $this-> tipe;
    }

    public function setModel($model){
        $this-> model = $model;
    }

    public function getModel(){
        return $this-> model;
    }
}

class baju extends produk{
    private $tipe;

    public function setTipe($tipe){
        $this-> tipe = $tipe;
    }

    public function getTipe(){
        return $this-> tipe;
    }    
}

$topi1 = new topi();
$topi1->setNama('Blangkon');
$topi1->setWarna('Coklat');
$topi1->setModel('Jogjakarta');
$topi1->setUkuran('L');
echo "Ini adalah " . $topi1->getNama() . ", dengan model " . $topi1->getModel();
?>
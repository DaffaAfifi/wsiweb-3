<?php
interface Kolam{
    public function hitungVolumeKolam();
}

abstract class Kriteria{
    abstract public function tinggiMinimal();
}

class Balok extends Kriteria implements Kolam{
    private $panjang;
    private $lebar;
    private $tinggi;

    public function __construct($panjang, $lebar, $tinggi){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
        $this->tinggi = $tinggi;
    }

    public function hitungVolumeKolam(){
        return $this->panjang * $this->lebar * $this->tinggi;
    }

    public function tinggiMinimal(){
        return "Tinggi minimal 160 cm";
    }
}

class Tabung extends Kriteria implements Kolam{
    private $pi = 3.14;
    private $jariJari;
    private $tinggi;

    public function __construct($jariJari, $tinggi){
        $this->jariJari = $jariJari;
        $this->tinggi = $tinggi;
    }

    public function hitungVolumeKolam(){
        return $this->jariJari * $this->jariJari * $this->pi * $this->tinggi;
    }

    public function tinggiMinimal(){
        return "Tinggi minimal 120 cm";
    }
}

class Kubus extends Kriteria implements Kolam{
    private $rusuk;

    public function __construct($rusuk){
        $this->rusuk = $rusuk;
    }

    public function hitungVolumeKolam(){
        return $this->rusuk * $this->rusuk * $this->rusuk;
    }

    public function tinggiMinimal(){
        return "tinggi minimal 80 cm";
    }
}

$kolamDewasa = new Balok(10, 5, 1.5);
$kolamAnak = new Tabung(5, 1);
$kolamBalita = new Kubus(0.5);

echo "Kolam Dewasa memiliki volume air sebesar " . $kolamDewasa->hitungVolumeKolam() . " m3 ";
echo "Dengan persyaratan " . $kolamDewasa->tinggiMinimal() . "<br>";

echo "Kolam Anak memiliki volume air sebesar " . $kolamAnak->hitungVolumeKolam() . " m3 ";
echo "Dengan persyaratan " . $kolamAnak->tinggiMinimal() . "<br>";

echo "Kolam Balita memiliki volume air sebesar " . $kolamBalita->hitungVolumeKolam() . " m3 ";
echo "Dengan persyaratan " . $kolamBalita->tinggiMinimal();
?>
<?php
abstract class mobilLengkap{
    abstract function nontonTv();
}

class MobilBMW extends mobilLengkap{
    function nontonTv(){
        echo "Tv dihidupkan... <br> Tv mencari channel... <br> 
        Tv menampilkan gambar... <br>";
    }
}

class MobilBMWberaksi extends MobilBMW{
    public $mesinMobil = false;
    public $gigi = [1,2,3,4,5,6];
    public $gigiSekarang;

    public function kondisiMobil(){
        $this->mesinMobil = !$this->mesinMobil;
        $this->mesinMobil ? print_r("Mesin Hidup <br>") : print_r("Mesin Mati<br>");
    }

    public function ubahGigi(int $gigi){
        $this->gigiSekarang = $this->gigi[$gigi];

        echo "Gigi diubah ke : " . $this->gigiSekarang . "<br>";
    }
}

$mobilBMW1 = new MobilBMWBeraksi();
$mobilBMW1->kondisiMobil();
$mobilBMW1->ubahGigi(3);
$mobilBMW1->nontonTv();
?>
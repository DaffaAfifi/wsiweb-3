<?php
interface hitungLuas{
    public function hitungLuasPersegi($sisi);
    public function hitungLuasSegitiga($alas, $tinggi);
    public function hitungLuasLingkaran($r);
}

class bangunDatar implements hitungLuas{
    public function hitungLuasPersegi($sisi){
        echo "Luas persegi adalah : " . $sisi * $sisi;
    }

    public function hitungLuasSegitiga($alas, $tinggi){
        echo "Luas segitiga adalah : " . 0.5 * $alas * $tinggi;
    }

    public function hitungLuasLingkaran($r){
        echo "Luas lingkaran adalah : " . 3.14 * $r * $r;
    }
}

$persegi1 = new bangunDatar();
$segitiga1 = new bangunDatar();
$lingkaran1 = new bangundatar();
$persegi1->hitungLuasPersegi(4);
echo "<br>";
$segitiga1->hitungLuasSegitiga(4, 10);
echo "<br>";
$lingkaran1->hitungLuasLingkaran(7);
?>
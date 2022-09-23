<?php
class mobilLengkap{
    public function nontonTv(){
        return "TV dihidupkan, TV mencari channel, TV menampilkan gambar";
    }
}

class MobilBMW extends mobilLengkap{

}

class MobilBMWberaksi {
    public function nontonTv(){
        return "TV dihidupkan, TV mencari channel, TV menampilkan gambar";
    }

    public function HidupkanMobil(){
        return "Mobil dihidupkan";
    }

    public function MatikanMobil(){
        return "Mobil dimatikan";
    }

    public function ubahGigi(){
        return "Gigi telah diubah";
    }
}
?>
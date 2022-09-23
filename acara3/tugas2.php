<?php
$total = 20000;
$bayar = 50000;
$kembalian = $bayar - $total;

if($bayar < $total){
    echo "Uang anda kurang!";
} else if($bayar == $total){
    echo "Terimakasih sudah berbelanja di toko kami :)";
} else{
    echo "Uang kembalian anda $kembalian Rupiah, terimakasih sudah berbelanja di toko kami :)";
}
?>
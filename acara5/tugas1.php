<?php
function compare($bil1, $bil2){
    if($bil1 < $bil2){
        return $bil2;
    }else {
        return $bil1;
    }
}

$angka1 = 90;
$angka2 = 10;
echo compare($angka1,$angka2);
?>
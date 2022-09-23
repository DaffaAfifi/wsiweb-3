<?php
function greeting($name = "Admin"){
    date_default_timezone_set("Asia/Jakarta");
    $now = date("G");
    if($now <10){
        return "Selamat Pagi $name";
    } else if($now <14){
        return "Selamat Siang $name";
    } else if($now <19){
        return "Selamat Sore $name";
    } else{
        return "Selamat Malam $name";
    }
}

$date = date("d M Y");
$day = "Senin";
switch($day){
    case "Senin" : echo "Senin, $date <br>"; echo greeting("Daffa"); break;
    case "Selasa" : echo "Selasa, $date <br>"; echo greeting("Daffa"); break;
    case "Rabu": echo "Rabu, $date <br>"; echo greeting("Daffa"); break;
    case "Kamis" : echo "Kamis, $date <br>"; echo greeting("Daffa"); break;
    case "Jumat" : echo "Jumat, $date <br>"; echo greeting("Daffa"); break;
    case "Sabtu" : echo "Sabtu, $date <br>"; echo greeting("Daffa"); break;
    case "Minggu" : echo "Minggu, $date <br>"; echo greeting("Daffa"); break;
}
?>
<?php
$subtotal = 1050000;
$total;

if($subtotal >= 100000 && $subtotal < 200000){
    $total = $subtotal * 95 /100;
    echo "Selamat anda mendapatkan diskon sebesar 5% <br>";
    echo "Total belanja : $subtotal <br>";
    echo "Uang yang harus dibayarkan setelah dipotong diskon : $total";
} else if($subtotal >= 200000 && $subtotal < 400000){
    $total = $subtotal * 90 /100;
    echo "Selamat anda mendapatkan diskon sebesar 10% <br>";
    echo "Total belanja : $subtotal <br>";
    echo "Uang yang harus dibayarkan setelah dipotong diskon : $total";
} else if($subtotal >= 400000 && $subtotal < 600000){
    $total = $subtotal * 85 /100;
    echo "Selamat anda mendapatkan diskon sebesar 15% <br>";
    echo "Total belanja : $subtotal <br>";
    echo "Uang yang harus dibayarkan setelah dipotong diskon : $total";
} else if($subtotal >= 600000 && $subtotal < 800000){
    $total = $subtotal * 80 /100;
    echo "Selamat anda mendapatkan diskon sebesar 20% <br>";
    echo "Total belanja : $subtotal <br>";
    echo "Uang yang harus dibayarkan setelah dipotong diskon : $total";
} else if($subtotal >= 800000){
    $total = $subtotal * 75 /100;
    echo "Selamat anda mendapatkan diskon sebesar 25% <br>";
    echo "Total belanja : $subtotal <br>";
    echo "Uang yang harus dibayarkan setelah dipotong diskon : $total";
}
?>
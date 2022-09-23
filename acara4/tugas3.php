<?php
echo "Silahkan masukkan jumlah lembar yang akan dicetak! \n";
$print = readline();
for($i = 1; $i <= $print; $i++){
    echo "Lembar ke " . $i . " telah dicetak. \n";
}
?>
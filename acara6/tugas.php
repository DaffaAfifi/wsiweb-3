<?php
$matriks1 = array(
    array("1","1","1"),
    array("2","2","2"),
    array("3","3","3"),
    );

$matriks2 = array(
    array("3","3","3"),
    array("2","2","2"),
    array("1","1","1"),
    );

for($i = 0; $i < count($matriks1); $i++){
    for($j = 0; $j < count($matriks2[$i]); $j++){
        echo $matriks1[$i][$j]+$matriks2[$i][$j];
        echo ",";
    }
    echo "<br>";
}
?>
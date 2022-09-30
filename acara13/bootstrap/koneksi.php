<?php
$host = "localhost";
$username = "root";
$password = "";
$db = "user2";

//$koneksi = mysqli_connect($server, $username, $password, $db);
$koneksi = mysqli_connect("localhost", "root", "", "user2");
if (mysqli_connect_errno()) {
        echo "koneksi gagal" . mysqli_connect_error();
        //if(mysqli_connect_errno()){
        //echo "gagal";

} else {}

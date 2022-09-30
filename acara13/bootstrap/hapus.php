<?php
require('koneksi.php');
session_start();

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM user_detail WHERE id='$id'") or die(mysql_error());
header("Location:tables.php");

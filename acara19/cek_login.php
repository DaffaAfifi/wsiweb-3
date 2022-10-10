<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = md5($_POST['password']);

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi,"select * from user_detail where
user_email='$username' and user_password='$password'"); 

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
while($row = mysqli_fetch_array($data)){
    $fullname = $row['user_fullname'];
}
if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['fullname'] = $fullname;
    $_SESSION['status'] = "login";
    header("location:admin/index.php");
}else{
    header("location:index.php?pesan=gagal");
}
?>

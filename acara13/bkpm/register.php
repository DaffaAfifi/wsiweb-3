<?php
require('koneksi.php');
if (isset($_POST['register'])) {
    $email    = $_POST['txt_email'];
    $fullName = $_POST['txt_nama'];
    $password = $_POST['txt_pass'];

    $query    = "INSERT INTO user_detail VALUES ('', '$email', '$password', '$fullName', 2)";
    $result   = mysqli_query($koneksi, $query);
    header('Location: home.php');
}
?>
<html>

<head>
    <title>Register</title>
</head>

<body>
    <form action="" method="POST">
        <p>email &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="txt_email" required></p>
        <p>password : <input type="password" name="txt_pass" required></p>
        <p>nama &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<input type="text" name="txt_nama" required></p>
        <button type="submit" name="register"> Register </button>
    </form>
    <p><a href="login.php">Login</p>
</body>
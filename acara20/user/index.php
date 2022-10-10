<?php
require("../koneksi.php");
// $email = $_GET['user_fullname'];
session_start();

if(!isset($_SESSION['id'])){
    $_SESSION['msg'] = 'anda harus login untuk mengakses halaman ini';
    header('Location: ../index.php');
}

$sesID = $_SESSION['id'];
$sesName = $_SESSION['fullname'];
?>

<html>

<head>
    <title>Web Calculator</title>
    <link rel="stylesheet" href="assets/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" </head>

    <body>
        <h1 style="text-align : center">Selamat Datang <?php echo $sesName; ?></h1>
        <br>
        <br>
        <div class="flex-container-column card">
            <div class="display">
                <h1 id="displayNumber">0</h1>
            </div>
            <div class="flex-container-row">
                <div class="button">7</div>
                <div class="button">8</div>
                <div class="button">9</div>
                <div class="button negative">+/-</div>
            </div>
            <div class="flex-container-row">
                <div class="button">4</div>
                <div class="button">5</div>
                <div class="button">6</div>
                <div class="button operator">-</div>
            </div>
            <div class="flex-container-row">
                <div class="button">1</div>
                <div class="button">2</div>
                <div class="button">3</div>
                <div class="button operator">+</div>
            </div>
            <div class="flex-container-row">
                <div class="button clear">CE</div>
                <div class="button">0</div>
                <div class="button equals double">=</div>
            </div>
        </div>
        <div class="history card">
            <h2>Riwayat Perhitungan</h2>
            <table>
                <thead>
                    <tr>
                        <th>Angka Pertama</th>
                        <th>Operator</th>
                        <th>Angka Kedua</th>
                        <th>Hasil</th>
                    </tr>
                </thead>
                <tbody id="historyList"></tbody>
            </table>
        </div>
        <br>
        <br>
        <br>
        <center><a href="logout.php" style="text-align : center">Logout</a></center>
        <script src="assets/storage.js"></script>
        <script src="assets/kalkulator.js"></script>
    </body>

</html>
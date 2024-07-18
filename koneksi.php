<?php

$servername = "localhost";
$username = "admin123";
$password = "admin12345";
$dbname = "kendaraan.php";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Koneksi Gagal: " . $conn->connect_error);
}
?>

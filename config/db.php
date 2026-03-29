<?php
$host = "127.0.0.1";
$user = "root";
$password = "";
$database = "google_drive_lite";
$port = 3307;

$conn = mysqli_connect($host, $user, $password, $database, $port);

if (!$conn) {
    die("Ket noi database that bai: " . mysqli_connect_error());
}
?>
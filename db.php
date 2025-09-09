<?php
$host = "localhost";   // biasanya localhost
$user = "root";        // username default XAMPP
$pass = "";            // password MySQL (kosong kalau default XAMPP)
$db   = "auth_db";     // nama database

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Koneksi gagal: " . $conn->connect_error);
}
?>

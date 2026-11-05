<?php

$host = "db";
$user = "root";
$password = "secretPassword";
$database = "db_berita";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

echo "Koneksi berhasil";

$conn->close();

?>
<?php

header("Content-Type: application/json; charset=UTF-8");

$host = "db";
$user = "root";
$password = "secretPassword";
$database = "db_berita";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    http_response_code(500);

    echo json_encode([
        "status" => "error",
        "message" => "Koneksi database gagal: " . $conn->connect_error
    ]);

    exit;
}

$sql = "SELECT * FROM tb_berita";
$result = $conn->query($sql);

$data = [];

if ($result) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode([
    "status" => "success",
    "code" => 200,
    "data" => $data
], JSON_PRETTY_PRINT);

$conn->close();

?>

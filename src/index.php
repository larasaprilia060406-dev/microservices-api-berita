<?php

header("Content-Type: application/json");

echo json_encode([
    "status" => "success",
    "message" => "Microservices API Berita berjalan",
    "service" => "API Berita",
    "endpoint" => "getBerita.php"
]);

?>
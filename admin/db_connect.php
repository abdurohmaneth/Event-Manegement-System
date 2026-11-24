<?php
$user = "root";
$pass = "";
$db   = "event_db";
$port = 3308;

$conn = @new mysqli("localhost", $user, $pass, $db, $port);

if ($conn->connect_error) {
    $conn = @new mysqli("127.0.0.1", $user, $pass, $db, $port);
}

if ($conn->connect_error) {
    die("Database connection failed");
}

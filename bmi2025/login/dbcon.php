<?php

$servername = "localhost";
$username = "Hemantha";
$password = "123";
$dbname = "test_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if (!$conn) {
    echo "Connection Failed" . $conn->error;
}

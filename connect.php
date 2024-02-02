<?php

$servername = "127.0.0.1:3307";
$username = "Julien";
$password = "ZKPNpcXZ@Y@MaS5U";
$dbname = "tp_app_web_v3";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
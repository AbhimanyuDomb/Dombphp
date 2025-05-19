<?php
$servername = "loan-app.cebcci480p02.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "Admin123";
$dbname = "quickloan_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
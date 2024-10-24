<?php
$host = 'db403-mysql';
$user = 'root';
$password = 'P@ssw0rd';
$dbname = 'DPU1';


$conn = new mysqli($host, $user, $password, $dbname);


if ($conn->connect_errno) {
    die("Connection failed: " . $conn->connect_error);
}
?>

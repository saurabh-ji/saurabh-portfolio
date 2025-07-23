<?php
$host = "database-1.cr0e6eoasitq.ap-south-1.rds.amazonaws.com";  // your RDS endpoint
$user = "admin";     // your DB username
$pass = "saurabh321";  // your DB password
$db   = "mywebsite";   // your DB name

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

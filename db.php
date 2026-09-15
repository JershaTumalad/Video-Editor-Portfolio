<?php
$host = "localhost";
$user = "root";
$password = ""; 
$database = "jersha_edits_db";
$port = 3307; 

// connection gamit yung MySQLi
$conn = new mysqli($host, $user, $password, $database, $port);

// magccheck ng connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
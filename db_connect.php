<?php
// Database configuration
$host = 'localhost'; // MySQL server host (e.g., 'localhost')
$username = 'root'; // MySQL username
$password = ''; // MySQL password
$database = 'byanjan'; // MySQL database name

// Create connection
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set character set to utf8mb4 for proper Unicode support
$conn->set_charset('utf8mb4');

// Uncomment the line below if you want to use procedural style
// $conn = mysqli_connect($host, $username, $password, $database);

?>

<?php
// Database configuration
$servername = "localhost";  // or your database host
$username = "root";         // your database username
$password = "";             // your database password
$dbname = "online_library";  // your database name

// Create connection using MySQLi
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully!";
}
?>
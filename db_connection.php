<?php
// Database connection details
$servername = "localhost";
$username = "root";  // Change this if you have a different username
$password = "";      // Change this if your MySQL has a password
$dbname = "users";   // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

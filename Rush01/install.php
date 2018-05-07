<?php
$servername = "localhost";
$username = "root";
$password = "qwerty01";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS `space_battle`";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

mysqli_select_db($conn, "space_battle");

$sql = "CREATE TABLE IF NOT EXISTS `users` (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
login VARCHAR(30) NOT NULL,
pass VARCHAR(30) NOT NULL,
raiting INT
)";

if ($conn->query($sql) === TRUE) {
    echo "Table `users` created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
echo "Connected successfully";
?>

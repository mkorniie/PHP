<?php
function get_db() {
	$servername = "localhost";
	$username = "root";
	$password = "qwerty01";

	// Create connection
	$conn = new mysqli($servername, $username, $password);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	mysqli_select_db($conn, "space_battle");
	return ($conn);
}
?>

<?php
	$hostname = "localhost";

	/*Konfigurasi MySQL*/
	$user_db = "root";
	$pass_db = "";
	$db_name = "db_webakademis_test";

	// Create connection
	$conn = new mysqli($hostname, $user_db, $pass_db);

	// Check connection
	if ($conn->connect_error) {
	  die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
	mysqli_select_db($conn, $db_name);
?>
<?php
	include "../../db_connection.php";
	if(isset($_GET['nim'])){
		$nim = $_GET['nim'];

		$query = "DELETE FROM mahasiswa WHERE NIM='$nim'";
		
		if ($conn->query($query) === TRUE) {
		   	header("location:../admin_home_page.php?page=mahasiswa");
		} else {
		   	echo "Error: " . $query . "<br>" . $conn->error;
		}
	}		
?>
<?php
	include "../../db_connection.php";
	if(isset($_GET['nim'])){
		$nim = $_GET['nim'];

		$sql = "DELETE FROM mahasiswa WHERE NIM='$nim'";
		
		if ($conn->query($sql) === TRUE) {
		   	header("location:../admin_home_page.php?page=mahasiswa");
		} else {
		   	echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}		
?>
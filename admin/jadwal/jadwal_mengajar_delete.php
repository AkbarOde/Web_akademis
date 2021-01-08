<?php
	include "../../db_connection.php";
	if(isset($_GET['id'])){
		echo $_GET['id'];
		$id = $_GET['id'];	
		$id_dosen = $_GET['dosen'];	
		$id_mengajar = $_GET['mengajar'];	
		
		$sql = "DELETE FROM jadwal WHERE ID_Jadwal='$id'";
		$res = $conn->query($sql);		

		 // Delete Mengajar
        $sql = "DELETE FROM mengajar WHERE ID_Mengajar='$id_mengajar'";  
        $res = $conn->query($sql);
		mysqli_close($conn);
	
		if($res){		
		  	header("location:../admin_home_page.php?page=jadwal_mengajar&dosen=".$id_dosen);
		} else {
		   	echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}		
?>
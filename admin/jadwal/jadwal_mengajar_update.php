<?php	
	$old_id = $_POST['old_id'];	
	$old_id_dosen = $_POST['old_id_dosen'];	
	$ruangan = $_POST['ruangan'];	
	$hari = $_POST['hari'];	
	
	echo $old_id;
	echo $ruangan;
	echo $hari;
	include "../../db_connection.php";

	$query = "UPDATE jadwal SET Kode_Ruangan='$ruangan', Hari='$hari' WHERE ID_Jadwal='$old_id'";	

	$res = $conn->query($query);
	mysqli_close($conn);
	
	if($res){
		header("location:../admin_home_page.php?page=jadwal_mengajar&dosen=".$old_id_dosen);		
	}
	else{		
		header("location:../admin_home_page.php?page=jadwal_mengajar&status=error"); 		
	}	
?>
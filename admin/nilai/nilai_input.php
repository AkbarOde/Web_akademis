<?php	
	$id = $_POST['matkul'];
	$nim = $_POST['nim'];	
	$nilai = $_POST['nilai'];		
	$tingkat = $_POST['tingkat'];

	include "../../db_connection.php";

	$query = "INSERT INTO nilai VALUES ('$id', '$nim', '$nilai')";

	$res = $conn->query($query);
	mysqli_close($conn);
	
	if($res){
		header("location:../admin_home_page.php?page=nilai&tingkat=".$tingkat."&detail=".$nim);		
	}
	else{		
		header("location:../admin_home_page.php?page=nilai&tingkat=".$tingkat."&detail=".$nim."&status=error"); 	
	}	
?>
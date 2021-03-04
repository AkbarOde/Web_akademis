<?php	
	$old_nim = $_POST['old_nim'];
	$nim = $_POST['nim'];
	$nama = $_POST['nama'];	
	$alamat = $_POST['alamat'];	
	$tingkat = $_POST['tingkat'];	
	
	include "../../config/db_connection.php";

	$query = "UPDATE mahasiswa SET NIM='$nim', Nama_Mhs='$nama', Tingkat='$tingkat', Alamat='$alamat' WHERE NIM='$old_nim'";	

	$res = $conn->query($query);
	mysqli_close($conn);
	
	if($res){
		header("location:../admin_home_page.php?page=mahasiswa");		
	}
	else{		
		header("location:../admin_home_page.php?page=mahasiswa&status=error"); 		
	}	
?>
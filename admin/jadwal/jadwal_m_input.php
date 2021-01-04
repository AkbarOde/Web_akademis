<?php	
	$id_dosen = $_POST['dosen'];
	$id_matkul = $_POST['matkul'];	
	$id_ruangan = $_POST['ruangan'];	
	$hari = $_POST['hari'];	
	
	include "../../db_connection.php";

	$cek_query = "SELECT * FROM mengajar WHERE Kode_Matkul ='$id_matkul' AND Kode_Dosen = '$id_dosen'";
	$result = mysqli_query($conn, $cek_query);
	
	if (mysqli_num_rows($result) == 0) {				
		$query = "INSERT INTO mengajar VALUES ('','$id_dosen', '$id_matkul')";
		$res = $conn->query($query);

		$query_jadwal = "INSERT INTO jadwal VALUES ('','$id_ruangan', '$id_matkul', '$hari','')";
		$res_jadwal = $conn->query($query_jadwal);
		mysqli_close($conn);
	
		if($res_jadwal AND $res){
			echo "Berhasil";
			header("location:../admin_home_page.php?page=jadwal_mengajar");		
		}
		else{		
			echo "gagal";
			header("location:../admin_home_page.php?page=jadwal_mengajar&status=error"); 		
		}	
	}	
	else{		
			header("location:../admin_home_page.php?page=jadwal_mengajar&status=error"); 		
	}		    				
	
?>
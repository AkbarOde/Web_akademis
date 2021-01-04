<?php
	include "../db_connection.php";

	$sql = "SELECT * FROM mahasiswa";
	$mahasiswa = mysqli_query($conn, $sql);

	if (mysqli_num_rows($mahasiswa) > 0) {
		$jumlah_mhs = mysqli_num_rows($mahasiswa);
	}

	$sql = "SELECT * FROM dosen";
	$dosen = mysqli_query($conn, $sql);

	if (mysqli_num_rows($dosen) > 0) {
		$jumlah_dosen = mysqli_num_rows($dosen);
	}
    	
?>
	    

<div class="d-dosen">
	<div class="icon-user">
		<i class="fa fa-user-circle fa-5x" aria-hidden="true"></i>	
	</div>
	<div class="data-user">		
		<table class="data">
			<tr>
				<td class="jumlah-dosen">
					<?php echo $jumlah_dosen?>
				</td>			
			</tr>
			<tr>
				<td>Dosen</td>			
			</tr>
		</table>
	</div>
</div>

<div class="d-mahasiswa">
	<div class="icon-user">
		<i class="fa fa-user-circle fa-5x" aria-hidden="true"></i>
	</div>
	<div class="data-user">	
		<table class="data">
			<tr>
				<td class="jumlah-dosen">
					<?php echo $jumlah_mhs?>
				</td>			
			</tr>
			<tr>
				<td>Mahasiswa</td>			
			</tr>
		</table>
	</div>
</div>
<?php
	$id_dosen = "'K0'";

	if(isset($_GET['dosen'])){
		$id_dosen = $_GET['dosen'];
	}
?>

<div class="tabel-page">
	 <div class="update-header">
	 	<h2>Input Jadwal Mengajar</h2>
      	<hr>
      </div>
     <div class="update-body">
	 	<form name="input" method="post" action="jadwal/jadwal_m_input.php">
	 		<!-- Data Dosen -->
	      	<label for="fdosen">Dosen: <input list="dosen" name="dosen" type="text">
			</label>
			<datalist id="dosen">
			<!-- Select Data Dosen -->
			<?php
			include "../db_connection.php";

			$sql = "SELECT * from dosen";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {				
		    	while($row = mysqli_fetch_assoc($result)) {		    	
			?>
				<option value="<?php echo $row['ID_Dosen']?>">
					<?php echo $row['Nama_Dosen']?>
				</option>
			<?php				
		    	}
			} 						
			?>			 
			</datalist>	

			<!-- Data Mata Kuliah -->
			<label for="fmatkul">Mata Kuliah: <input list="matkul" name="matkul" type="text">
			</label>
			<datalist id="matkul">
			<!-- Select Data Mata Kuliah -->
			<?php			
			$sql = "SELECT * from mata_kuliah";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {				
		    	while($row = mysqli_fetch_assoc($result)) {		    	
			?>
				<option value="<?php echo $row['ID_Matkul']?>">
					<?php echo $row['Nama_Matkul']?>
				</option>
			<?php				
		    	}
			} 						
			?>			 
			</datalist>
			<!-- Data Mata Ruangan -->
			<label for="fruangan">Ruangan: <input list="ruangan" name="ruangan" type="text">
			</label>
			<datalist id="ruangan">
			<!-- Select Data Mata Kuliah -->
			<?php			
			$sql = "SELECT * from ruangan";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {				
		    	while($row = mysqli_fetch_assoc($result)) {		    	
			?>
				<option value="<?php echo $row['ID_Ruangan']?>">
					<?php echo $row['Nama_Ruangan']?>
				</option>
			<?php				
		    	}
			} 						
			?>			 
			</datalist>		

			<!-- Data Mata Hari -->
			<label for="fhari">Hari: <input list="hari" name="hari" type="text">
			</label>
			<datalist id="hari">			
				<option value="Senin"></option>
				<option value="Selasa"></option>
				<option value="Rabu"></option>
				<option value="Kamis"></option>
				<option value="Jumat"></option>
				<option value="Sabtu"></option>					
			</datalist>

			
			<input type="submit" value="Input">
		</form>
	</div>
</div>
<?php
	$hostname = "localhost";
	$user_db = "root";
	$pass_db = "";
	$db_name = "db_webakademis_test";

	$conn = new mysqli($hostname, $user_db, $pass_db);
	mysqli_select_db($conn, $db_name);

	$query = "SELECT * FROM mahasiswa";
	$result = mysqli_query($conn, $query);
?>

</!DOCTYPE html>
<html>
	<head>
		<title>Melihat data mahasiswa</title>
	</head>
	<body>
		<table>	
			<tr>
				<th><h5>NIM</h5></th>
				<th><h5>Nama</h5></th>
				<th><h5>Tingkat</h5></th>
				<th><h5>Alamat</h5></th>
			</tr>

			<?php
			if (mysqli_num_rows($result) > 0) {
		    	while($row = mysqli_fetch_assoc($result)) {
			?>
		        <tr>
		        	<td><?php echo $row["NIM"];?></td>
		        	<td><?php echo $row["Nama_Mhs"];?></td>
		        	<td><?php echo $row["Tingkat"];?></td>
		        	<td><?php echo $row["Alamat"];?></td>	        	
		        </tr>
		    <?php
		    	}
		    }
		    ?>
		</table>
	</body>
</html>
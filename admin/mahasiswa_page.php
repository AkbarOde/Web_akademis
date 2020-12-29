<div class="dosen-page">
	<table id="dosen">
		<tr>
			<td colspan="5">Data Mahasiswa</td>
		</tr>
		<tr>
			<th><h5>NIM</h5></th>
			<th><h5>Nama</h5></th>
			<th><h5>Alamat</h5></th>
			<th><h5>Update</h5></th>
			<th><h5>Delete</h5></th>			
		</tr>
		<?php
			include "../db_connection.php";

			$sql = "SELECT * FROM mahasiswa";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
		    	while($row = mysqli_fetch_assoc($result)) {
		    ?>

		        <tr>
		        	<td><?php echo $row["NIM"];?></td>
		        	<td><?php echo $row["Nama_Mhs"];?></td>
		        	<td><?php echo $row["Alamat"];?></td>		        	
		        	<td>
		        		<i class="fa fa-pencil" aria-hidden="true"></i>
		        		Update
		        	</td>
		        	<td>
		        		<i class="fa fa-trash" aria-hidden="true"></i>
		        		<a href="delete_mahasiswa.php?NIM=<?php echo $row['NIM']?>">
		        			Delete
		        		</a>
		        	</td>		        	
		        </tr>
			    
			<?php
		    	}
			} 
			else {
		    		echo "0 results";
			}

			mysqli_close($conn);
		?>
	</table>
</div>
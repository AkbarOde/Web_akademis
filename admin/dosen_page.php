<div class="dosen-page">
	<table id="dosen">
		<tr>
			<td colspan="4">Data Dosen</td>
		</tr>
		<tr>
			<th><h5>ID Dosen</h5></th>
			<th><h5>Nama Dosen</h5></th>
			<th><h5>Update</h5></th>
			<th><h5>Delete</h5></th>			
		</tr>
		<?php
			include "../db_connection.php";

			$sql = "SELECT * FROM dosen";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
		    	while($row = mysqli_fetch_assoc($result)) {
		    ?>

		        <tr>
		        	<td><?php echo $row["ID_Dosen"];?></td>
		        	<td><?php echo $row["Nama_Dosen"];?></td>
		        	<td>
		        		<i class="fa fa-pencil" aria-hidden="true"></i>
		        		Update
		        	</td>
		        	<td>
		        		<i class="fa fa-trash" aria-hidden="true"></i>
		        		<a href="delete_dosen.php?id=<?php echo $row['ID_Dosen']?>">
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
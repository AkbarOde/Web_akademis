<?php
	session_start();	
	if(!isset($_SESSION['logged-in']))
	{		
		header('Location: index.php');
	}
?>

<!DOCTYPE html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../style/homepage.css">
		<link rel="stylesheet" href="../style/tabel.css">
		<link rel="stylesheet" href="../style/dashboard.css">		
		<link rel="stylesheet" href="../style/modal.css">

		<!-- Datatables -->		
		<link href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css" rel="stylesheet" />
		
		<!-- <link href="../style/datatables.min.css" rel="stylesheet" /> -->
		<script src="../js/jquery.min.js" type="text/javascript"></script>
		<script src="../js/datatables.min.js"></script>
		<!-- <script src="../js/datatables.min.js"></script>		 -->

		<title>Mahasiswa</title>						
	</head>
	<body>
	<div class="container">
		<div id="page-h" class="page-header">
			<div class="page-logo">
				<img class="logo" src="../assets/gadget.png"/>
			</div>
			<a href="?page=dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a>
	  		<a href="?page=dosen" >Daftar Dosen</a>	  			  	
	  		<a href="?page=matkul">Daftar Mata Kuliah</a>
	  		<a href="?page=nilai">Daftar Nilai</a>	  			  			  
		</div>	
		<div class="page-content">
			<div class="content-header">
				<span><?php echo $_SESSION['username']?></span>
				<img src="../assets/user.png" class="icon" />
				<div class="admin-icon">
				<a class="link" href="logout.php">										
					<i class="fa fa-sign-out" aria-hidden="true"></i>
					<span>Logout</span>					
				</a>
				</div>			
			</div>

			<div class="content">				
				<?php
				if (isset($_GET['page'])) {
					$page = $_GET['page'];
					switch ($page) {
						case "dashboard":
							include "dashboard.php";
							break;
						case "dosen":
							include "dosen_page.php";
							break;												
						case "matkul":
							include "matkul_page.php";
							break;						
						case "nilai":
							include "nilai_page.php";
							break;											
						case "jadwal_mengajar":
							include "jadwal/jadwal_mengajar_page.php";
							break;												
					}
				}
			?>
			</div>		
		</div>
	</div>	

	
	<script>		
		// In your Javascript (external .js resource or <script> tag)
		$(document).ready( function () {
    		$('#list-data').DataTable();
		} );
		$('#list-data').dataTable({
  			aaSorting: []
		})		

		// Untuk komfirmasi delete data
		function hapusData(id, identifier){
			console.log(id);
	        if (confirm("Apakah anda yakin akan menghapus data ini?")){
	        	switch(identifier) {
				  case 1:
				    window.location.href = 'dosen/dosen_delete.php?id=' + id;
				    break;
				  case 2:
				    window.location.href = 'matkul/matkul_delete.php?id=' + id;
				    break;
				  case 3:
				    window.location.href = 'ruangan/ruangan_delete.php?id=' + id;
				    break;		
				  case 4:
				    window.location.href = 'jadwal/jadwal_mengajar_delete.php?id=' + id;
				    break;			  
				}	          
	        }
    	}
    	
    	function hapusDataJadwal(id_jadwal, id_dosen){    
	        if (confirm("Apakah anda yakin akan menghapus data ini?")){
	          window.location.href = 'jadwal/jadwal_mengajar_delete.php?id=' +id_jadwal+'&dosen='+id_dosen;
	        }
      	}

    	function hapusDataNilai(nim, id_matkul, tingkat){
    		console.log(nim);
	        if (confirm("Apakah anda yakin akan menghapus data ini?")){
	          window.location.href = 'nilai/nilai_delete.php?nim='+nim+'&id='+id_matkul+'&tingkat='+tingkat;
	        }
      	}
        function hapusDataMhs(nim){
	        if (confirm("Apakah anda yakin akan menghapus data ini?")){
	          window.location.href = 'mahasiswa/mahasiswa_delete.php?nim=' + nim;
	        }
      	}

      	function show_form(id){
      		var form = document.getElementById(id);

      		form.style.display = "block";
      	}

	</script>
	<script type="text/javascript" src="../js/modal.js"></script>
	</body>
</html>
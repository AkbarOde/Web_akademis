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
		<link rel="stylesheet" href="../style/dosen.css">
		<link rel="stylesheet" href="../style/dashboard.css">

		<title>Admin</title>						
	</head>
	<body>
	<div class="container">
		<div id="page-h" class="page-header">
			<div class="page-logo">
				<img class="logo" src="../assets/gadget.png"/>
			</div>
			<a href="?page=dashboard"><i class="fa fa-tachometer" aria-hidden="true"></i>Dashboard</a>		
			<button class="dropdown-btn">Dosen
    			<i class="fa fa-caret-down"></i>
  			</button>
			<div class="dropdown-container">
			    <a href="?page=dosen">Data Dosen</a>
			    <a href="#">Input Data</a>
  			</div>

	  		<a href="?page=mahasiswa" >Mahasiswa</a>
	  		<a href="?page=ruangan" >Ruangan</a>
	  		<a href="?page=nilai" >Nilai</a>
		</div>	
		<div class="page-content">
			<div class="content-header">
				<span>Welcome to Management System</span>
				<div class="admin-icon">
					<span>Hello admin</span>
					<img src="../assets/user.png" class="icon" />
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
						case "mahasiswa":
							include "mahasiswa_page.php";
							break;
						
					}
				}
			?>
			</div>
		
		</div>
	</div>		
	<script>
		/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
		var dropdown = document.getElementsByClassName("dropdown-btn");
		var i;

		for (i = 0; i < dropdown.length; i++) {
		  dropdown[i].addEventListener("click", function() {
		  this.classList.toggle("active");
		  var dropdownContent = this.nextElementSibling;
		  if (dropdownContent.style.display === "block") {
		  dropdownContent.style.display = "none";
		  } else {
		  dropdownContent.style.display = "block";
		  }
		  });
		}
	</script>
	</body>
</html>
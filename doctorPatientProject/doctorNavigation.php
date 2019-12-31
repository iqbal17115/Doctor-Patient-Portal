<?php 
   require_once 'bootstrap.php';
   require_once 'dbms.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>
    .upper{
		background-color: #F414F4;
		height: 190px;
    }
	</style>
</head>
<body class="m-0">
			
      <center>
        <div class="upper">
          <img class="pt-2" width="400px" height="170px" src="images/dWall.jpg" alt="">
        </div>
      </center>
<nav class="navbar navbar-expand-md navbar-dark bg-dark justify-content-center">
          <div class="navbar-nav">
            
              <a href="doctorDetails.php" class="nav-item nav-link">My Details</a>
              <a href="doctorsIndivApp.php" class="nav-item nav-link">My Appointment</a>
              <a href="searchPatient.php" class="nav-item nav-link">Search Patient</a>
              <a href="addDescription.php" class="nav-item nav-link">Add Description</a>
              <a href="doctorLogout.php" class="nav-item nav-link">Logout</a>
                       
         </div>
</nav>
      
	
</body>
</html>
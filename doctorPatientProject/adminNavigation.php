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
		background-color: #0B5345;
		height: 190px;
    }
	</style>
</head>
<body class="m-0">
	<center>
		<div class="upper">
		<img class="pt-2" width="400px" height="170px" src="images/aUpper.jpg" alt="">
	</div>
	</center>

	<nav class="navbar navbar-expand-sm justify-content-center bg-secondary navbar-dark mt-1">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="addDoctor.php">Add Doctor</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="viewDoctor.php">View Doctor</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="viewPatient.php">View Patient</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="viewFromA.php">View Appointment</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="searchDonar.php">Search Donar</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="adminLogout.php">Logout</a>
    </li>
  </ul>
</nav>

</body>
</html>
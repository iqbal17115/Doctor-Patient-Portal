<?php 
  require_once 'bootstrap.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		.box{
			height: 200px;
			background-color: #9EF3DC;
		}a>img:hover{
			border: 3px solid #04060B;
			background-color: blue;
		}
	</style>
</head>
<body style="background-color: #B2DFDB;">
	
    	<div class="card">
    		<img style="height: 200px;" src="images/wall1.jpg" alt="">
    	</div>
    	<div class="row">
    		<div class="col-2">
    			
    		</div>
    		<div class="col-3 mt-2">
    			<a href="adminLogin.php"><img src="images/admin.jpg" alt=""></a>
    		</div>
    		<div class="col-3 mt-2">
    			<a href="patientLogin.php"><img src="images/patient1.png" alt=""></a>
    		</div>
    		<div class="col-3 mt-2">
    			<a href="doctorLogin.php"><img src="images/doctor.jpg" alt=""></a>
    		</div>
    		<div class="col-2">
    			
    		</div>
    	</div>
  
</body>
</html>



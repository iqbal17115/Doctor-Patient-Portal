<?php 
session_start();
  require_once('bootstrap.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin-login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
	<style>
		body{
	       background-image: url('images/pLogin1.jpg');
	       background-size: cover;
		}.box{
			width: 270px;
			height: 250px;
			background-color: rgba(25, 200, 25, .4);
			margin: 100px auto;

		}
	</style>
</head>
<body>
	
	<div class="container">

<form action="pLoginValidation.php" method="POST">
		<div class="box">
		<div  class="form-group">
		      <span class="pl-1"><i class="fa fa-user-plus"></i></span>
		      <label for="email">Enter email</label>
				<input class="form-control" type="email" name="email" placeholder="Email">
		</div>
		<div  class="form-group">
			<span class="pl-1"><i class="fa fa-lock"></i></span>
		      <label for="password">Enter Password</label>
			<input class="form-control" type="password" name="password" placeholder="Password">
		</div>
		<input class="btn btn-success btn-block" type="submit" name="submit" value="Submit">

		<span class="pl-5 text-white">Not yet register!! <a class="text-warning" href="patientReg.php">register</a></span>
	</div>
</form>
	</div>


</body>
</html>
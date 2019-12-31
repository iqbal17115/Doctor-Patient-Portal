<?php 
   session_start();
   require_once 'patientNavigation.php';
   if(isset($_POST['submit'])){
       $sql="DELETE FROM bappointment WHERE aId='$_POST[id]'";
       mysqli_query($con, $sql);
   }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>
		body{
		background-color: #4F2348;
	    }.box{
			width: 300px;
			background-color: #FAE5D3;
			border: 1px solid #E3C394 ;
		}
	</style>
</head>
<body>
	<center>
		<div class="box m-5 p-1">
		   <center>
		   	  <form action="" method="POST">
		   	  	<table>
		   	  	<tr>
		   	  		<td>Appoint Id</td>
		   	  		<td><input class="border border-success" type="number" name="id"></td>
		   	  	</tr>
		   	  	<tr>
		   	  		<td colspan="2">
		   	  			<center>
		   	  				<input type="submit" name="submit" value="Delete" class="btn btn-warning btn-sm mt-4 btn-block">
		   	  			</center>
		   	  		</td>
		   	  	</tr>
		   	  </table>
		   	  </form>
		   </center>
	    </div>
	</center>
</body>
</html>
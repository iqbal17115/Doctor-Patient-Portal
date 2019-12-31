<?php 

   require_once('bootstrap.php');
   require_once('dbms.php');
  
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin-registration</title>
	<style>
		body{
			background-color: #F19CE1;
		}.box{
			width: 350px;
			background-color: #BFE3DE;
		}table, tr, td{
			border: 2px solid #5763F9;
		}
	</style>
</head>
<body>
	 
    	<center>
    		
    <div class="container">
    	<div class="mt-4 box">
    		<form action="aRegValidation.php" method="POST">
    			<table>
    			<tbody>
    				<h3>Admin Registration</h3>
    		
    			
    			<tr>
    				<td>Name</td>
    				<td><input class="m-2 border-info" type="text" name="name" required></td>
    			</tr>
    		    <tr>
    				<td>Address</td>
    				<td><input class="m-2 border-info" type="text" name="address" required></td>
    			</tr>
    			<tr>
    				<td>Contact No</td>
    				<td><input class="m-2 border-info" type="text" name="cNo" required></td>
    			</tr>
    			<tr>
    				<td>Email</td>
    				<td><input class="m-2 border-info" type="email" name="email" required></td>
    			</tr>
    			
    			<tr>
    				<td>password</td>
    				<td><input class="m-2 border-info" type="password" name="password" required></td>
    			</tr>
    			</tbody>
    			<tfoot>
    				<tr>
    					<td colspan="2"><input class="btn btn-success btn-block" type="submit" name="submit" value="Submit">
    					<center>
    						<a href="adminLogin.php">Login now!</a>
    					</center>
    					</td>
    				</tr>
    			</tfoot>
    		</table>
    		</form>
    	</div>
    </div>
    
    	</center>
    	
</body>
</html>
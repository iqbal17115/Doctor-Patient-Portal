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
			background-color: #9C27B0;
		}.box{
			width: 350px;
			background-color: #FAE5D3;
		}table, tr, td{
			border: 2px solid #DC7633;
		}
	</style>
</head>
<body>
    	<center>
    		
    <div class="container">
    	<div class="mt-4 box">
    		<form action="dRegValidation.php" method="POST">
    			<table>
    			<tbody>
    				<h3>Doctor Registration</h3>
    		
    			<tr>
    				<td>User Id</td>
    				<td>
                        <?php 

                          $sql="SELECT dId FROM doctorreg ORDER BY dId DESC";
                          $res=mysqli_query($con, $sql);
                 $res1=mysqli_fetch_array($res);
                 $id=$res1['dId'];
                         ?>
                        <input class="m-2 border-success" type="text" value="<?php echo ++$id; ?>" name="did" readonly></td>
    			</tr>
    			<tr>
    				<td>Name</td>
    				<td><input class="m-2 border-success" type="text" name="name"></td>
    			</tr>
    		    <tr>
    				<td>Address</td>
    				<td><input class="m-2 border-success" type="text" name="address"></td>
    			</tr>
    			<tr>
    				<td>Contact No</td>
    				<td><input class="m-2 border-success" type="text" name="cNo"></td>
    			</tr>
    			<tr>
    				<td>Email</td>
    				<td><input class="m-2 border-success" type="text" name="email"></td>
    			</tr>
    			<tr>
    				<td>password</td>
    				<td><input class="m-2 border-success" type="text" name="password"></td>
    			</tr>
    			</tbody>
    			<tfoot>
    				<tr>
    					<td colspan="2"><input class="btn btn-primary btn-block" type="submit" name="submit" value="Submit">
    					<center>
    						<a href="doctorLogin.php">Login now!</a>
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
<?php 
   require_once('bootstrap.php');
   require_once('dbms.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>patient-registration</title>
	<style>
		body{
			background-color: #0033FF;
		}.box{
			width: 350px;
			background-color: #CCCC66;
		}table, tr, td{
			border: 2px solid #FF5722;
		}
	</style>
</head>
<body>
	
    
    	<center>
    	
    		
    <div class="container">
    	<div class="mt-4 box">
    		<form action="pRegValidation.php" method="POST">
    			<table>
    			<tbody>
    				<h3>Patient Registration</h3>
    		
    			<tr>
                    <td>User Id</td>
                    <td>
                        <?php 

                 $sql="SELECT uId FROM ureg ORDER BY uId DESC";
                          $res=mysqli_query($con, $sql);
                 $res1=mysqli_fetch_array($res);
                 $id=$res1['uId'];
                         ?>
                        <input class="m-2 border-info" type="text" name="uid" value="<?php echo ++$id; ?>" name="uid" readonly></td>
                </tr>
    			<tr>
    				<td>Name</td>
    				<td><input class="m-2 border-danger" type="text" name="name" required></td>
    			</tr>
    		    <tr>
    				<td>Address</td>
    				<td><input class="m-2 border-danger" type="text" name="address" required></td>
    			</tr>
    			<tr>
    				<td>Contact No</td>
    				<td><input class="m-2 border-danger" type="text" name="cNo" required></td>
    			</tr>
    			<tr>
    				<td>Email</td>
    				<td><input class="m-2 border-danger" type="text" name="email" required></td>
    			</tr>
    			<tr>
    				<td>password</td>
    				<td><input class="m-2 border-danger" type="text" name="password" required></td>
    			</tr>
    			</tbody>
    			<tfoot>
    				<tr>
    					<td colspan="2"><input class="btn btn-warning btn-block" type="submit" name="submit" value="Submit">
    					<center>
    						<a href="patientLogin.php">Login now!</a>
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
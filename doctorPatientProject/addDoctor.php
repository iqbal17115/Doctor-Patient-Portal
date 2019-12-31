<?php 
   require_once 'adminNavigation.php';
   if(isset($_POST['submit'])){
    
     $sql="INSERT INTO adddoctor(name, address, cNo, category) VALUES('$_POST[name]', '$_POST[address]', '$_POST[cNo]', '$_POST[category]')";
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
		background-color: #8B99EC;
	}
		.bg{
			background-color: #94E3D4;
			
		}.box{
			width: 400px;
			background-color: #E394DC;
			border: 1px solid #E3C394 ;
		}table, tr, th, td{
			border: 1px solid #F6F6F9;
		}
	</style>
</head>
<body>
	<div class="mt-1 bg">
		<center>

			<div class="box">
				<h2>Add Doctor</h2>
			  <form action="" method="POST">
			  	<table>

			  	<tr>
			  		<td>Doctor Id</td>
			  		<td>
			  			<?php 
                    $sql="SELECT dId FROM adddoctor";
                    $res=mysqli_query($con, $sql);
                    $res1=mysqli_fetch_array($res);
                    $id=$res1['dId'];
			  			 ?>
			  			<input class="border border-success m-2" type="number" name="id" value="<?php echo ++$id; ?>" readonly>
			  		</td>
			  	</tr>
			  	<tr>
			  		<td>Name</td>
			  		<td><input class="border border-success m-2" type="text" name="name"></td>
			  	</tr>
			  	<tr>
			  		<td>Address</td>
			  		<td><input class="border border-success m-2" type="text" name="address"></td>
			  	</tr>
			  	<tr>
			  		<td>Contact No</td>
			  		<td><input class="border border-success m-2" type="text" name="cNo"></td>
			  	</tr>
			  	<tr>
			  		<td>Category</td>
			  		<td><input class="border border-success m-2" type="text" name="category"></td>
			  	</tr>
                <tfoot>
                	<tr>
                		<td colspan="2">
                			<center>  
<input class="btn btn-info btn-block" type="submit" name="submit" value="Submit">
                			</center>
                		</td>
                	</tr>
                </tfoot>
			  </table>
			  </form>
		    </div>
		</center>

	</div>
</body>
</html>
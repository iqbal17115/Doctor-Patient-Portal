<?php 
   session_start();
   echo $_SESSION['pId'];
   require_once 'patientNavigation.php';
   if(isset($_POST['submit'])){
     $sql="INSERT INTO dorgan(uId, organ, bGroup)VALUES('$_POST[id]', '$_POST[organ]', '$_POST[bG]')";
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
		background-color: #C2F75E;
	    }.box{
			width: 350px;
			background-color: #FAE5D3;
			border: 1px solid #E3C394 ;
		}
 	</style>
 </head>
 <body>
 	<center>
 		<div class="box my-2 p-2">
 			<center>
 			   <form action="" method="POST">
 			   		<table>
 					<?php 
                      $sql="SELECT pId, name, address, cNo FROM ureg WHERE pId='$_SESSION[pId]'";
                      $res=mysqli_query($con, $sql);
                      $res1=mysqli_fetch_array($res);
 					 ?>
 					<tr>
 						<td>User Id</td>
 						<td><input type="number" name="id" value="<?php echo $_SESSION['pId']; ?>" class="border border-info my-2" readonly></td>
 					</tr>
 					<tr>
 						<td>Name</td>
 						<td><input type="text" value="<?php echo $res1['name']; ?>" class="border border-info my-2"></td>
 					</tr>
 					<tr>
 						<td>Address</td>
 						<td><input type="text" value="<?php echo $res1['address']; ?>" class="border border-info my-2"></td>
 					</tr>
 					<tr>
 						<td>Contact No</td>
 						<td><input type="text" value="<?php echo $res1['cNo']; ?>" class="border border-info my-2"></td>
 					</tr>
 					<tr>
 						<td>Blood Group</td>
 						<td>
 							<select name="bG" id="" class="border border-info my-2">
 								<option value="">---select---</option>
 								<option value="A+">A+</option>
 								<option value="O+">O+</option>
 								<option value="B+">B+</option>
 								<option value="AB+">AB+</option>
 								<option value="A-">A-</option>
 								<option value="O-">O-</option>
 								<option value="B-">B-</option>
 								<option value="AB-">AB-</option>
 							</select>
 						</td>
 					</tr>
 					<tr>
 						<td>Organ</td>
 						<td>
 							<select name="organ" id="" class="border border-info my-2">
 								<option value="">---select---</option>
 								<option value="Eye">Eye</option>
 								<option value="Kidney">Kidney</option>
 							</select>
 						</td>
 					</tr>
 					<tr>
 						<td colspan="2"><input type="submit" name="submit" value="Submit" class="btn btn-success btn-sm btn-block"></td>
 					</tr>
 				</table>
 			   </form>
 			</center>
 		</div>
 	</center>
 </body>
 </html>
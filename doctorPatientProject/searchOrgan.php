<?php 
   session_start();
   require_once 'patientNavigation.php';
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title></title>
 	<style>
 		body{
		background-color: #58551C;
	    }.box{
			width: 250px;
			background-color: #EFC186;
			border: 1px solid #E3C394 ;
		}.details{
            width: 450px;
			background-color: #F3CBF3;
			border: 1px solid #E3C394 ;
		}
 	</style>
 </head>
 <body>
 	<center>
 		<div class="box my-2">
 		<form action="" method="POST">
 			<table>
 			<tr>
 				<td>Organ:</td>
 				<td>
 					<select name="organ" id="">
 						<option value="Eye">Eye</option>
 						<option value="Kidney">Kidney</option>
 					</select>
 				</td>
 			</tr>
 			<tr>
 				<td colspan="2">
 				<input type="submit" class="btn btn-info btn-sm btn-block" name="search" value="Search">
 				</td>
 			</tr>
 		</table>
 		</form>
 	</div>
    <?php 
      if(isset($_POST['search'])){
        ?>
          <div class="details my-2 p-2">
          	<table class="table table-hover bg-info">
          	<thead>
          		<tr>
          			<td>User Id</td>
          			<td>Name</td>
          			<td>Address</td>
          			<td>Contact No</td>
          			<td>Blood Group</td>
          			<td>Organ</td>
          		</tr>
          	</thead>
          	<tbody>
          		<?php 
                   $sql="SELECT dorgan.uId, name, address, cNo, organ, bGroup FROM ureg, dorgan WHERE dorgan.uId=dorgan.uId AND dorgan.organ='$_POST[organ]'";
                   $res=mysqli_query($con, $sql);
                   while($res1=mysqli_fetch_array($res)){
                    ?>
                       <tr>
                       	  <td><?php echo $res1['uId']; ?></td>
                       	  <td><?php echo $res1['name']; ?></td>
                       	  <td><?php echo $res1['address']; ?></td>
                       	  <td><?php echo $res1['cNo']; ?></td>
                       	  <td><?php echo $res1['bGroup']; ?></td>
                       	  <td><?php echo $res1['organ']; ?></td>
                       </tr>
                   	<?php
                   }
          		 ?>
          	</tbody>
          </table>
          </div>
        <?php
      }
     ?>
 	</center>
 </body>
 </html>
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
		background-color: #CACFD2;
	    }.box{
			width: 300px;
			background-color: #FAE5D3;
			border: 1px solid #E3C394 ;
		}
		table, th,td{
			border: 1px solid #FDFEFE;
		}
 	</style>
 </head>
 <body>
 	<center>
 	<div class="box mt-2">
 		<form action="" method="POST">
 			<table>
 			<tr>
 				<td>Category</td>
 				<td>
 					<select name="cat">
 						<option value="name">name</option>
 						<option value="category">category</option>
 					</select>
 				</td>
 			</tr>
 			<tr>
 				<td colspan="2"><input type="text" name="check" placeholder="Enter value for search"></td>
 			</tr>
 			<tr>
 				<td colspan="2"><input class="btn btn-success btn-sm btn-block my-2" type="submit" name="search" value="Search"></td>
 			</tr>
 		</table>
 		</form>
 	</div>
 	<div class="content my-2 bg-info" style="width:550px;">
 		<?php 
            if(isset($_POST['search'])){
               if($_POST['cat']=='name'){
                  ?>
       <table class="table table-hover table-striped">
 			<thead>
 				<tr>
 					<th>Doctor Id</th>
 					<th>Name</th>
 					<th>Address</th>
 					<th>Contact No</th>
 					<th>Category</th>
 				</tr>
 			</thead>
 			<tbody>
 				<?php 
                   $sql="SELECT dId, name, address, cNo, category FROM adddoctor WHERE name='$_POST[check]'";
                   $res=mysqli_query($con, $sql);
                   while($res1=mysqli_fetch_array($res)){
                   	?>
                 <tr>
 					<td><?php echo $res1['dId']; ?></td>
 					<td><?php echo $res1['name']; ?></td>
 					<td><?php echo $res1['address']; ?></td>
 					<td><?php echo $res1['cNo']; ?></td>
 					<td><?php echo $res1['category']; ?></td>
 				</tr>
                   	<?php
                   }
 				 ?>
 				
 			</tbody>
 		</table>
                  <?php
               }else{
                 ?>
                 <table class="table table-hover table-striped">
 			<thead>
 				<tr>
 					<th>Doctor Id</th>
 					<th>Name</th>
 					<th>Address</th>
 					<th>Contact No</th>
 					<th>Category</th>
 				</tr>
 			</thead>
 			<tbody>
 				<?php 
                   $sql="SELECT dId, name, address, cNo, category FROM adddoctor WHERE category='$_POST[check]'";
                   $res=mysqli_query($con, $sql);
                   while($res1=mysqli_fetch_array($res)){
                   	?>
                 <tr>
 					<td><?php echo $res1['dId']; ?></td>
 					<td><?php echo $res1['name']; ?></td>
 					<td><?php echo $res1['address']; ?></td>
 					<td><?php echo $res1['cNo']; ?></td>
 					<td><?php echo $res1['category']; ?></td>
 				</tr>
                   	<?php
                   }
 				 ?>
 				
 			</tbody>
 		</table>
                 <?php
               }
            }
 		 ?>
 		
 	</div>
 	</center>
 </body>
 </html>
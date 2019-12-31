<?php
   session_start();
   require_once 'adminNavigation.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>
		body{
		background-color: #67C9CE;
	    }.box{
			width: 650px;
			background-color: #FAE5D3;
			border: 1px solid #E3C394 ;
		}
	</style>
</head>
<body>
	
		<center>
			<div class="box my-3">
			<center>
				<table class="table table-hover">
		<thead class="thead-light">
			<tr>
			<th>Patient Id</th>
			<th>Appoint Id</th>
			<th>Category</th>
			<th>Date</th>
			<th>Time</th>
			<th>Doctor Id</th>
	
			</tr>
		</thead>
		<tbody>
			<?php 
       $sql="SELECT * FROM bappointment ORDER BY aId DESC";
       $res1=mysqli_query($con, $sql);
       while($res2=mysqli_fetch_array($res1)){
        ?>
           <tr>
          
           	<td><?php echo $res2['pId']; ?></td>
           	<td><?php echo $res2['aId']; ?></td>
           	<td><?php echo $res2['category']; ?></td>
           	<td><?php echo $res2['date']; ?></td>
           	<td><?php echo $res2['time']; ?></td>
           	<td><?php echo $res2['dId']; ?></td>
           	
           </tr>
       	<?php
       }
	 ?>
		</tbody>
	</table>
			</center>
		</div>
		</center>
	
</body>
</html>
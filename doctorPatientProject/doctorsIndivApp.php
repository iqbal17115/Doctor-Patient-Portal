<?php 
 session_start();
   require_once 'doctorNavigation.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<style>
		body{
          background-color: #EBDEF0;
	    }
	    
	</style>
</head>
<body>
	<center>
             <div class="box1">
			<table class="table table-hover table-striped">
				<thead class="table table-info">
					<td>Patient Id</td>
					<td>Name</td>
					<td>Address</td>
					<td>Contact No</td>
					<td>Email Id</td>
					<td>Date</td>
					<td>Time</td>
				</thead>
				<?php 
                  $sql="SELECT DISTINCT ureg.*, bappointment.dId, bappointment.category,bappointment.date, bappointment.time FROM ureg, bappointment WHERE bappointment.dId='$_SESSION[id]' AND ureg.pId=bappointment.pId";
                  $res=mysqli_query($con, $sql);
                  while($res1=mysqli_fetch_array($res)){
                 ?>
                   <tr>
                   	
                   	<td>
                      <?php echo $res1['pId']; ?>
                      </td>
                   	<td>
                      <?php echo $res1['name']; ?>
                        
                      </td>
                   	<td>
                      <?php echo $res1['address']; ?>
                      </td>
                   	<td>
                      <?php echo $res1['cNo']; ?>
                      </td>
                   	<td><?php echo $res1['category']; ?></td>
                    <td><?php echo $res1['date']; ?></td>
                    <td><?php echo $res1['time']; ?></td>
                   </tr>
                 <?php
                  }
				 ?>
			</table>
		</div>
	</center>
</body>
</html>
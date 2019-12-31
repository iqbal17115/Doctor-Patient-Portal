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
        background-color: #A266BC;
      }
	    .box1{
          width: 300px;
          background: #00FFFF;
          border: 10px solid #A67E7E;
          margin: 2px;
          padding: 1px;
	    }
		
	</style>
</head>
<body>
	<center>
    <div class="table box1">
			  <table class="bg-muted">
				       <?php 
                  $sql="SELECT * FROM adddoctor WHERE dId='$_SESSION[id]'";
                  $res=mysqli_query($con, $sql);
                  while($res1=mysqli_fetch_array($res)){
                 ?>
                   <tr>
                   	<td>My Id:</td>
                   	<td><?php echo $res1['dId']; ?></td>
                   </tr>
                   <tr>
                   	<td>Name:</td>
                   	<td><?php echo $res1['name']; ?></td>
                   </tr>
                   <tr>
                   	<td>Address:</td>
                   	<td><?php echo $res1['address']; ?></td>
                   </tr>
                   <tr>
                   	<td>Contact No:</td>
                   	<td><?php echo $res1['cNo']; ?></td>
                   </tr>
                   <tr>
                   	<td>Specialist In:</td>
                   	<td><?php echo $res1['category']; ?></td>
                   </tr>
                 <?php
                  }
				 ?>
			</table>
		</div>
     
		</center>
</body>
</html>
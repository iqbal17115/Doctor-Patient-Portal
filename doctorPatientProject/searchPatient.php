<?php 
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
	    .box{
          width: 200px;
          background: #00FFFF;
          border: 1px solid #4B0082;
          margin: 2px;
          padding: 1px;
	    }
		.box1{
          
		}	
    </style>
 </head>
 <body>
 	<center>
 		<div class="box">
			<form action="" method="POST">
				<div class="form-group">
					<lavel>Patient Id</lavel>
					<input type="text" class="form-control form-sm" name="id">
				</div>
				<input type="submit" name="search" value="Search" class="btn btn-primary btn-outline-danger btn-block">
			</form>
		</div>
		<?php 
          if(isset($_POST['search'])){
          	?>
          	<div class="box1">
			  <?php 
                 $sql="SELECT pId, name, address, cNo, email FROM ureg WHERE pId='$_POST[id]'";
                 $res=mysqli_query($con, $sql);
                 $res1=mysqli_fetch_array($res);
			   ?>
			   <table>
			   	<thead>
			   		<tr>
			   		    <td>Patient Id</td>
			   		    <td>Name</td>
			   		    <td>Address</td>
			   		    <td>Contact No</td>
			   		    <td>Email Id</td>
			   		</tr>
			   	</thead>
			   	<tbody>
			   		<tr>
			   			<td><?php echo $res1['pId']; ?></td>
			   			<td><?php echo $res1['name']; ?></td>
			   			<td><?php echo $res1['address']; ?></td>
			   			<td><?php echo $res1['cNo']; ?></td>
			   			<td><?php echo $res1['email']; ?></td>
			   		</tr>
			   	</tbody>
			   </table>
		    </div>
		    <div class="box2">
		    	<table>
		    		<thead>
		    			<tr>
		    				<td>Patient Id</td>
		    				<td>Name</td>
		    				<td>Treatment Done</td>
		    				<td>Treatment For</td>
		    				<td>Note</td>
		    			</tr>
		    		</thead>
		    		<tbody>
		    			<?php 
                          $sql="SELECT adddescription.*, name FROM adddescription, ureg WHERE adddescription.pId='$_POST[id]'";
                          $res=mysqli_query($con, $sql);
                          while($res1=mysqli_fetch_array($res)){
                          	?>
                              <tr>
			   			<td><?php echo $res1['pId']; ?></td>
			   			<td><?php echo $res1['name']; ?></td>
			   			<td><?php echo $res1['tFor']; ?></td>
			   			<td><?php echo $res1['tDone']; ?></td>
			   			<td><?php echo $res1['note']; ?></td>
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
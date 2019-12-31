<?php 
   session_start();
   require_once 'patientNavigation.php';
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Pa</title>
 	<style>
 		body{
			background-color: #808B96;
		}.box1{
          width: 300px;
          background: #00FFFF;
          border: 10px solid #A67E7E;
          left: 0px;
          right: 0px;
          top: 0px;
          bottom: 0px;
          margin: 5px auto;
          padding: 1px;
	    }.box2{
          background: #E5E8E8;
          border: 10px solid #AEB6BF;
          bottom: 0px;
          padding: 1px;
	    }
 	</style>
 </head>
 <body>
    <div class="box1">
			  <?php 
                 $sql="SELECT pId, name, address, cNo, email FROM ureg WHERE pId='$_SESSION[pId]'";
                 $res=mysqli_query($con, $sql);
                 $res1=mysqli_fetch_array($res);
			   ?>
			   <table class="">
			   	<tbody>
			   		<tr>
			   			<td>
			   				Patient Id:
			   			</td>
			   			<td>
			   				<?php echo $res1['pId']; ?>
			   				</td>
			   			<tr/>
			   			<tr>
			   				<td>
			   					Name:
			   				</td>
			   			<td>
			   				<?php echo $res1['name']; ?>
			   				
			   			</td>
			   			<tr/>
			   			<tr>
			   				<td>
			   				  Address:	
			   				</td>
			   			<td>
			   				<?php echo $res1['address']; ?>
			   				</td>
			   			<tr/>
			   			<tr>
			   				<td>
			   					Contact No:
			   				</td>
			   			<td>
			   				<?php echo $res1['cNo']; ?>
			   			</td>
			   			<tr/>
			   			<tr>
			   				<td>
			   				  Email Id:
			   				</td>
			   			<td>
			   				<?php echo $res1['email']; ?>
			   			</td>
			   		</tr>
			   	</tbody>
			   </table>
		    </div>
		    <div class="box2">
		    	<table class="table table-hover">
		    		<thead class="table-dark">
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
                          $sql="SELECT adddescription.*, name FROM adddescription, ureg WHERE adddescription.pId='$_SESSION[pId]'";
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

 </body>
 </html>
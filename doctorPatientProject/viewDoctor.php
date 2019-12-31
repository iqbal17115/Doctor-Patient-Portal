<?php 
    require_once 'adminNavigation.php';
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>View Doctor</title>
 	<style>
 	    body{
		background-color: #8B99EC;
	    }

 		.box{
			width: 400px;
			background-color: #E488D7;
			border: 1px solid #E3C394 ;
		}table, tr, th, td{
			border: 1px solid #F6F6F9;
			text-align: center;
		}
 	</style>
 </head>
 <body>
 	<div class="bg">
 		<center>
 			<div class="box">
 			   <form action="" method="POST">
 			   	  <table>
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
                           $sql="SELECT * FROM adddoctor";
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
 			   	  	<tfoot>
 			   	  		
 			   	  	</tfoot>
 			   	  </table>
 			   </form>
 		    </div>
 		</center>
 	</div>
 </body>
 </html>
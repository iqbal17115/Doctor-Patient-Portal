<?php 
  require_once 'doctorNavigation.php';
  if(isset($_POST['search1'])){
    $sql="INSERT INTO adddescription(dId, pId, tFor, tDone, note) VALUES('$_POST[dId]','$_POST[pid]', '$_POST[tf]', '$_POST[t]', '$_POST[note]')";
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
          <form action="" method="POST">
          	<table>
          	<?php 
              $sql="SELECT * FROM ureg WHERE pId='$_POST[id]'";
              $res=mysqli_query($con, $sql);
              $res1=mysqli_fetch_array($res);
          	 ?>
          	 <tr>
          		<td>Doctors Id</td>
          		<td><input type="number"  name="did"></td>
          	</tr>
          	<tr>
          		<td>Patient Id</td>
          		<td><input type="number" value="<?php echo $res1['pId']; ?>" name="pid" readonly></td>
          	</tr>
          	<tr>
          		<td>Name</td>
          		<td><input type="text" value="<?php echo $res1['name']; ?>" name="name" readonly></td>
          	</tr>
          	<tr>
          		<td>Treated For</td>
          		<td><input type="text" name="tf"></td>
          	</tr>
          	<tr>
          		<td>Treatment</td>
          		<td><input type="text" name="t"></td>
          	</tr>
          	<tr>
          		<td>Note</td>
          		<td><input type="text" name="note"></td>
          	</tr>
          	<tr>
          		<td colspan="2">
          			<input type="submit" name="search1" value="Search">
          		</td>
          	</tr>
          </table> 
          </form>
        <?php
          }
        ?>
 	</center>
 </body>
 </html>
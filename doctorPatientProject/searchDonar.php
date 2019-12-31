<?php 
    require_once 'adminNavigation.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Search-donar</title>
	<style>
		body{
		background-color: #4389AA;
	    }

 		.box{
			width: 400px;
			background-color: #8BF4E7;
			border: 1px solid #030303;
		}.box1{
			width: 550px;
			background-color: #8BF4E7;
			border: 1px solid #030303;
		}table, tr, th, td{
			border: 1px solid #F6F6F9;
			text-align: center;
		}
	</style>
</head>
<body>
	<center>
		<div class="box my-2">
	    <form action="" method="POST">
	    		<table class="m-1">
			<tr>
				<td colspan="2" style="text-align: center;">Search by</td>
			</tr>
			<tr>
				<td>Organ</td>
				<td>
					<select class="m-1" name="organ" id="" style="width: 200px; border: 1px solid #1036F3;">
						<option value="">---Select---</option>
						<option value="Eye">Eye</option>
						<option value="Kidney">Kidney</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<mark><b class="bg-primary">OR</b></mark>
				</td>
			</tr>
			<tr>
				<td>Blood Group</td>
				<td>
					<select class="m-1" name="bg" id="" style="width: 200px; border: 1px solid #1036F3;">
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
				<td colspan="2"><input class="btn btn-info btn-block my-1" type="submit" value="Search" name="search"></td>
			</tr>
		</table>
	    </form>
	</div>
	<div class="box1 my-2">
		<?php 
          if(isset($_POST['search'])){
             if($_POST['bg']=='A+' OR $_POST['bg']=='O+' OR $_POST['bg']=='B+' OR $_POST['bg']=='AB+' OR$_POST['bg']=='A-' OR $_POST['bg']=='O-' OR $_POST['bg']=='B-' OR $_POST['bg']=='AB-'){
        ?>
           <table class="m-1">
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
                 $sql="SELECT dorgan.pId, organ, bGroup, ureg.name, ureg.address, ureg.cNo FROM dorgan, ureg WHERE dorgan.pId=ureg.pId AND '$_POST[bg]'=bGroup";
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
          <?php
           }
           if($_POST['organ']=='Eye' OR $_POST['organ']=='Kidney'){
           ?>
                <table class="m-1">
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
                 $sql="SELECT dorgan.pId, organ, bGroup, ureg.name, ureg.address, ureg.cNo FROM dorgan, ureg WHERE dorgan.pId=ureg.pId AND '$_POST[organ]'=organ";
                 $res=mysqli_query($con, $sql);
          while($res1=mysqli_fetch_array($res)){
                 ?>
                   <tr>
                   	   <td><?php echo $res1['pId']; ?></td>
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
           <?php
           }
          }
		 ?>
	</div>
	</center>
</body>
</html>
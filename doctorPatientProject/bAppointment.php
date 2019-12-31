<?php 
   session_start();
   require_once 'patientNavigation.php';
 ?>
 <!DOCTYPE html>
 <html lang="en">
  <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
         rel = "stylesheet">
  <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
 <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js"></script>

   <script>
         $(function() {
            $( "#datepicker-3" ).datepicker({
               dateFormat:"yy-mm-dd",
               altField: "#datepicker-4",
            });
         });
      </script>

 <head>
 	<meta charset="UTF-8">
 	<title></title>
 	<style>
 		    body{
               background-color: #EEF069;
            }
            .bg{
            	background-color: #8ADCC6;
            	width: 400px;
            	height: 200px;
            }
 	</style>
 	<script>
 		$(document).ready(function(){
        $('.timepicker').timepicker({});
         });
 	</script>
 </head>
 <body>
 	  <center>
 	  	<h4>Book Appointment</h4>
 	  	<form action="" method="POST">
 	  	<div class="mt-1 bg">
 	  	  <div class="row">
 	  	  	<div class="mt-2 col-sm-1"></div>
 	  	  	<div class="mt-2 col-sm-4">
 	  	  		Appoint Id
 	  	  	</div>
 	  	  	<div class="mt-2 col-sm-6">
 	  	  		<?php 
                  $sql="SELECT aId FROM bappointment ORDER BY aId DESC";
                  $res=mysqli_query($con, $sql);
                  $res1=mysqli_fetch_array($res);
                  $id=$res1['aId'];
 	  	  		 ?>
 	  	  		<input type="number" name="id" value="<?php echo ++$id; ?>" name="id" readonly>
 	  	  	</div>
 	  	  	<div class="mt-2 col-sm-1"></div>
 	  	  </div>
 	  	  <div class="row">
 	  	  	<div class="mt-2 col-sm-1"></div>
 	  	  	<div class="mt-2 col-sm-4">
 	  	  		 Category
 	  	  	</div>
 	  	  	<div class="mt-2 col-sm-6">
 	  	  		<select name="cat" id="" class="browser-default custom-select border ">
 	  	  			<option value="" selected>category</option>
 	  	  			<?php 
                       $sql="SELECT DISTINCT category FROM adddoctor";
                       $res=mysqli_query($con, $sql);
                       while($res1=mysqli_fetch_array($res)){
                       	?>
                          <option value="<?php  ?><?php echo $res1['category']; ?>"><?php  ?><?php echo $res1['category']; ?></option>
                       <?php
                       }
 	  	  			 ?>
 	  	  		</select>
 	  	  	</div>
 	  	  	<div class="mt-2 col-sm-1"></div>
 	  	  </div>
 	  	  <div class="row">
 	  	  	<div class="mt-2 col-sm-1"></div>
 	  	  	<div class="mt-2 col-sm-4">
 	  	  		Date
 	  	  	</div>
 	  	  	<div class="mt-2 col-sm-6">
 	  	  		<input type = "text" id="datepicker-3" name="date">
 	  	  	</div>
 	  	  	<div class="mt-2 col-sm-1"></div>
 	  	  </div>
 	  	  <div class="row">
 	  	  	<div class="mt-2 col-sm-1"></div>
 	  	  	<div class="mt-2 col-sm-4">
 	  	  		Time
 	  	  	</div>
 	  	  	<div class="mt-2 col-sm-6">
 	  	  		<input type="time" class="timepicker" name="time">
 	  	  	</div>
 	  	  	<div class="mt-2 col-sm-1"></div>
 	  	  </div>
 	  	  <div class="row">
 	  	  	<div class="mt-2 col-sm-3"></div>
 	  	  	<div class="mt-2 col-sm-6">
 	  	  		<input type="submit" name="submit" value="Search" class="btn btn-danger">
 	  	  	</div>
 	  	  	<div class="mt-3 col-sm-1"></div>
 	  	  </div>
 	     </div>
 	  	</form>
 	  	<form action="" method="POST">
 	  	
 	  		<?php 
          if(isset($_POST['submit'])){
              
              $sql="SELECT dId FROM adddoctor WHERE category='$_POST[cat]'";
              $res=mysqli_query($con, $sql);
              while($res1=mysqli_fetch_array($res)){
                ?>
                <input type="submit" value="<?php echo $res1['dId']; ?>" name="r" class="btn btn-info mt-2">
              	<?php
              }
               ?>
            <input type="text" value="<?php echo $_POST['cat']; ?>" name="cat" hidden>
 	  		<input type="text" value="<?php echo $_POST['date']; ?>" name="date" hidden>
 	  		<input type="text" value="<?php echo $_POST['time']; ?>" name="time" hidden>
                  
              <?php
          }
 	  	 ?>
 	  	</form>
 	  </center>
 	  <?php 
         if(isset($_POST['r'])){
           
            $sql="INSERT INTO bappointment(dId, pId, `date`, `time`, category) VALUES('$_POST[r]', '$_SESSION[pId]', '$_POST[date]', '$_POST[time]', '$_POST[cat]')";

            mysqli_query($con, $sql);
         }
 	   ?>
 </body>
 </html>
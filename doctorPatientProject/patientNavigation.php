<?php 
    require_once 'patientSideDesign.php';
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title></title>
 	<style>
 		a{
 			text-decoration: none;
 		}
 	</style>
 </head>
 <body>
 	<div class="bg-dark mt-1 bs-example">
    <nav class="nav justify-content-center">
       <div class="row">
       	<div class="ml-2 bg-secondary col-1.5">
       		<a class="text-white" href="patientDetails.php">My Details</a>
       	</div>
       	<div class="ml-2 bg-secondary col-1.5">
       		<span><i class="fas fa-qrcode"></i></span>
       		<a class="text-white" href="bAppointment.php">Book Appointment</a>
       	</div>
       	<div class="ml-2 bg-secondary col-1.5">
       		<a class="text-white" href="vAppointment.php">View Appointment</a>
       	</div>
       	<div class="ml-2 bg-secondary col-1.5">
       		<a class="text-white" href="delAppointment.php">Cancel Booking</a>
       	</div>
       	<div class="ml-2 bg-secondary col-1.5">
       		<a class="text-white" href="searchDoctor.php">Search Doctor</a>
       	</div>
       	<div class="ml-2 bg-secondary col-1.5">
       		<a class="text-white" href="donateOrgan.php">Donate Organ</a>
       	</div>
       	<div class="ml-2 bg-secondary col-1.5">
       		<a class="text-white" href="searchOrgan.php">Search Donar</a>
       	</div>
       	<div class="ml-2 bg-secondary col-1.5">
       		<a class="text-white" href="start.php">Logout</a>
       	</div>
       </div>
    </nav>
</div>
 </body>
 </html>
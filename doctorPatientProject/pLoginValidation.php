<?php 
 session_start();
 require_once('dbms.php');
 $email = $_POST['email'];
 $password = $_POST['password'];

 $s= "SELECT * FROM ureg WHERE email='$email' AND password='$password'";
                                                                                                                                       
 $result = mysqli_query($con, $s);
 $num = mysqli_num_rows($result);
 $result1 = mysqli_fetch_array($result);

 if($num == 1){
 	$_SESSION['email']=$email;
 	$_SESSION['password']=$password;
 	$_SESSION['pId']=$result1['pId'];
 	
 	header('location:patientDetails.php');
 }else{
    echo "Username or password is wrong here!";
 }

 ?>
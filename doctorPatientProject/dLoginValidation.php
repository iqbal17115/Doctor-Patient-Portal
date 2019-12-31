<?php 
 session_start();
 require_once('dbms.php');

 $id = $_POST['id'];
 $password = $_POST['password'];

 $s= "SELECT * FROM doctorreg WHERE dId='$id' AND password='$password'";
                                                                                                                                       
 $result = mysqli_query($con, $s);
 $num = mysqli_num_rows($result);
 $result1 = mysqli_fetch_array($result);

 if($num == 1){
 	$_SESSION['email']=$email;
 	$_SESSION['password']=$password;
 	$_SESSION['id']=$result1['dId'];
 	
 	header('location:doctorDetails.php');
 }else{
    echo "Username or password is wrong here!";
 }

 ?>
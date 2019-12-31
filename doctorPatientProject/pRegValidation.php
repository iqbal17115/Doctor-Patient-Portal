
<?php 
session_start();
 require_once('dbms.php');
                                                     
  
 $name = $_POST['name']; 
 $address = $_POST['address']; 
 $cNo = $_POST['cNo']; 
 $email = $_POST['email']; 
 $password = $_POST['password'];
 

 $s= "SELECT * FROM ureg WHERE email='$email' AND password='$password'";

 $result = mysqli_query($con, $s);
 $num = mysqli_num_rows($result);

 if($num == 1){
   echo "Username already Taken";
 }else{

   $reg = "INSERT INTO ureg(name, address, cNo, email, password) VALUES('$name', '$address', '$cNo', '$email', '$password')";
   
        mysqli_query($con, $reg);
        header('location:adminReg.php');
 }
 ?>
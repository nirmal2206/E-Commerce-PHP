<?php

require 'include/common.php';
require 'include/salt.php';

$email = mysqli_real_escape_string($con, $_POST['email']);
$password1 = mysqli_real_escape_string($con,$_POST['password']);
$password2 = md5($salt1.$password1); 
$password3 = md5($password2.$salt2);
$query = "SELECT id,email, password FROM users WHERE email='".$email."' AND password='".$password3."'";
$query_result = mysqli_query($con, $query) or die(mysqli_error($con));
if(mysqli_num_rows($query_result) == 0){
    header('location:login.php');
}
else{
    $row = mysqli_fetch_array($query_result);
    $_SESSION['email']=$row['email'];
    $_SESSION['id']=$row['id'];
    header('location:product.php');
}
?>

<?php

require 'include/common.php';
require 'include/salt.php';


$name = mysqli_real_escape_string($con, $_POST['name']);
$email = $_POST['email'];
$password1 = mysqli_real_escape_string($con, $_POST['password']);
$contact = $_POST['contact'];
$city = mysqli_real_escape_string($con, $_POST['city']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$regex_email= "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if(!preg_match($regex_email, $email)){
    echo 'Inavlid Email';
    die();
}
if(strlen($password1)<8){
    echo 'Password is too short';
    die();
}

$email = mysqli_real_escape_string($con, $_POST['email']);
$select_query = "SELECT id FROM users WHERE email='".$email."' OR contact='".$contact."'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
if(mysqli_num_rows($select_query_result) > 0){
    echo 'Email/Contact already exists';
    header("refresh:3; url=signup.php");
    die();
}
else{
    $password2 = md5($salt1.$password1); 
    $password3 = md5($password2.$salt2);
    $insert_query = "INSERT INTO users (name, email, password, contact, city, address) VALUES ('"
        .$name."', '".$email."', '".$password3."', '".$contact."', '".$city."', '".$address."')" ;
    $insert_query_result = mysqli_query($con, $insert_query) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email']=$email;
    $_SESSION['id']=$user_id;
    header("location:product.php");
}
?>

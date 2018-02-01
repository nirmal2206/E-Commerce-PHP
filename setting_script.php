<?php

require 'include/common.php';
require 'include/salt.php';

$old_password = $_POST['oldpassword'];
$new_password = $_POST['newpassword'];
$renew_password = $_POST['renewpassword'];
$old_password1 = mysqli_real_escape_string($con, $_POST['oldpassword']);
$new_password1 = mysqli_real_escape_string($con, $_POST['newpassword']);
$renew_password1 = mysqli_real_escape_string($con, $_POST['renewpassword']);
$email = mysqli_real_escape_string($con,$_SESSION['email']);

if(strlen($old_password)>=8 && (strlen($new_password)>=8 && strlen($renew_password)>=8)){
if(strcmp($new_password1, $renew_password1)==0)
{
    $old_password2 = md5($salt1.$old_password1); 
    $old_password3 = md5($old_password2.$salt2);
    $select_query = "SELECT * FROM users WHERE email = '$email' AND password='$old_password3'";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con)) ;
    if(mysqli_num_rows($select_query_result) >0){
        $new_password2 = md5($salt1.$new_password1); 
        $new_password3 = md5($new_password2.$salt2);
        $update_query = "UPDATE users SET password = '$new_password3' WHERE email = '$email' AND id = {$_SESSION['id']}";
        $update_query_result = mysqli_query($con, $update_query) or die(mysqli_error($con));
        echo '<p><em><strong><h3>Password Changed Successfully</h3></strong></em></p>';
        header('refresh:2;url=setting.php');
    }
 else {
        echo '<p><em><strong><h3>Invalid Password</h3></strong></em></p>' ;
    header("refresh:2; url=setting.php");
    }
}
}

else {
    echo '<p><em><strong><h3>Invalid Password</h3></strong></em></p>' ;
    header("refresh:2; url=setting.php");
}
?>

<?php

require 'include/common.php';
if(!isset($_SESSION['email'])){
    header("location:index.php");   
}
$len = $_GET['len'];
    $i=0;
    $id=array();
    while ($i<$len){
        $id[]=$_GET[$i];
       $update_query = "UPDATE users_items SET status='Confirmed' WHERE user_id= {$_SESSION['id']} AND item_id=$_GET[$i]";
       $update_query_result = mysqli_query($con, $update_query) or die(mysqli_affected_rows($con));
       $i++;
    }
    
    
?>

<!DOCTYPE html>
<!--
Author : Nirmal Chandra Panda
-->
<html>
    <head>
        <title>LifeStyleStore-Success</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <!--Navigation bar-->        
        <?php //include 'include/header.php'; ?>
        
        <!--Content-->
        <div class="container">
            <div class="row_style">
                <center>
                <h3>Your order is confirmed. Thank you for shopping with us.</h3>
                <hr>
                <p><a href="product.php">Click here</a> to purchase any other item.</p>
                </center>
            </div>
        </div>
        
        
        <!--Footer-->
               
        <?php include 'include/footer.php'; ?>
        
    </body>
</html>

<?php

require 'include/common.php';
if(isset($_SESSION['email'])){
    header('location:product.php');
}
?>

<!DOCTYPE html>
<!--
Created on : Nov 24, 2017, 9:41:21 PM
Author     : Nirmal Chandra Panda
-->
<html>
    <head>
        <title>LifeStyleStore-Home</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css">
      
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
        
    <body>
        
        <!-- Navigation Bar-->
        <?php include 'include/header.php'; ?>
                
        <!--Background image--> 
        <div class="banner_image">
            <div class="container">
                <div class="inner_banner_image">
                    <div class="banner_content">
                        <h1>We sell lifestyle.</h1>
                        <p>Flat 40% OFF on premium brands</p><br>
                        <a href="product.php" class="btn btn-danger btn-lg active">Shop Now</a>
                    </div>
                </div>                       
            </div>
        </div>
                
        <!--Footer-->
        <?php include 'include/footer.php' ?>;
                
    </body>
    
</html>

<?php

require 'include/common.php';

if(isset($_SESSION['email'])){
    header('location:product.php');
}
?>

<!DOCTYPE html>
<!--
author: Nirmal Chandra Panda
-->
<html>
    <head>
        <title>LifeStyleStore-SignUp</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <!--Navigation Bar-->
        <?php include 'include/header.php'; ?>
        
        <!--Sign Up-->
        <div class="container">
            <div class="row_style">
                <div class="col-md-5 col-md-offset-4">                   
                        
                            <h3>SIGN UP</h3>
                        
                        
                            <form method="POST" action="signup_script.php">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email" 
                                           required pattern="{a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="e.g john123@gmail.com">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" name="password" placeholder="Password" 
                                           minlength="8" required>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" name="contact" placeholder="Contact" 
                                           required minlength="10" maxlength="10" pattern="[0-9]{10}" title="e.g 9475120683">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="city" placeholder="City" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="address" placeholder="Address" required>
                                </div>
                                 <button type='submit' class="btn btn-primary">Submit</button>
                            </form>
                           
                        </div>
                    </div>
                </div>
                
           
        <!--Footer-->
            
        <?php include 'include/footer.php'; ?>
        
    </body>

</html>

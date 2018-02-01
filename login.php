<?php

require 'include/common.php';
?>

<!DOCTYPE html>
<!--
Author     : Nirmal Chandra Panda
-->
<html>
    <head>
        <title>LifeStyleStore-LogIn</title>
        
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css">
      
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body>
        
        <!--Navigation Bar-->
        <?php include 'include/header.php'; ?>
        
        <!--login-->
        <div class="container">
            <div class="row_style">
                <div class="col-md-6 col-md-offset-3">   
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>LOG IN</h3>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">Login to make a purchase</p>
                            <form method="POST" action="login_submit.php">
                                <div class="form-group">
                                    <input type="email" class="form-control input-lg" name="email" placeholder="Email" required> 
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control input-lg" name="password" placeholder="Password" minlength="8" maxlength="25" required> 
                                </div>
                                <button type="submit" class="btn btn-primary">Log In</button>
                            </form>
                        </div>
                        <div class="panel-footer">
                            <a href='signup.php'> <p>Don't have an account? Register</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!--Footer-->
        <?php include 'include/footer.php'; ?>
        
    </body>
</html>

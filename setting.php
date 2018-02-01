<?php

require 'include/common.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>LifeStyleStore-Setting</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <!--Navigation bar-->        
        <?php include 'include/header.php'; ?>
        
        <!--Content-->
        <div class="container">
            <div class="row row_style">
                <div class="col-md-5 col-md-offset-4">
                <h3>Change Password</h3>                
                <form action="setting_script.php" method="POST">
                    <div class="form-group">
                        <input name="oldpassword" type="password" class="form-control form-group-lg" placeholder="Old Password" minlength="8" required>
                    </div>
                    <div class="form-group">
                        <input name="newpassword" type="password" class="form-control form-group-lg" placeholder="New Password" minlength="" required>
                    </div>
                    <div class="form-group">
                        <input name="renewpassword" type="password" class="form-control form-group-lg" placeholder="Re-type New Password" minlength="" required>
                    </div>                
                    <button type="submit" class="btn btn-primary">Change</button>
                </form>
                </div>
            </div>
        </div>
        
        <!--Footer-->
        
        <?php include 'include/footer.php'; ?>
        
    </body>
</html>

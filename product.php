<?php

require 'include/common.php';
?>

<!DOCTYPE html>
<!--
Author: Nirmal Chandra Panda
-->
<html>
    <head>
        <title>LifeStyleStore-Product</title>
        
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <!--Navigation bar-->        
        <?php include 'include/header.php'; ?>
        <!--Function-->
        <?php include 'check-if-added.php'; ?>
        
        <!--Content-->        
        <div class="container">
            <div class="jumbotron row_style">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place</p>
            </div>
        </div>
            
       
        <!--First Row-->            
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/nikon_dslr.jpg" alt="Nikon DSLR">   
                    </div>
                    <div class="caption">
                        <h2>Nikon DSLR</h2>
                        <p>Price:Rs.36000.00</p>
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-block btn-primary">Buy Now</a></p>
                        <?php }else{ 
                            if(check_if_added_to_cart(1)){
                                echo '<a href="#" class="btn btn-block btn-primary" disabled>Added to cart</a>';
                            }else{
                        ?>
                        <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                          } 
                        ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/canon_dslr.jpg" alt="Canon DSLR">
                    </div>
                    <div class="caption">
                        <h2>Canon DSLR</h2>
                        <p>Price:Rs.40000.00</p>
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-block btn-primary">Buy Now</a></p>
                        <?php }else{ 
                            if(check_if_added_to_cart(2)){
                                echo '<a href="#" class="btn btn-block btn-primary" disabled>Added to cart</a>';
                            }else{
                        ?>
                        <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                          } 
                        ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/camera.jpg" alt="Canon DSLR">
                    </div>
                    <div class="caption">
                        <h2>Canon EOS</h2>
                        <p>Price:Rs.50000.00</p>
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-block btn-primary">Buy Now</a></p>
                        <?php }else{ 
                            if(check_if_added_to_cart(3)){
                                echo '<a href="#" class="btn btn-block btn-primary" disabled>Added to cart</a>';
                            }else{
                        ?>
                        <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                          } 
                        ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/olympus_dslr.jpg" alt="Olympus DSLR">
                    </div>
                    <div class="caption">
                        <h2>Olympus DSLR</h2>
                        <p>Price:Rs.80000.00</p>
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-block btn-primary">Buy Now</a></p>
                        <?php }else{ 
                            if(check_if_added_to_cart(4)){
                                echo '<a href="#" class="btn btn-block btn-primary" disabled>Added to cart</a>';
                            }else{
                        ?>
                        <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                          } 
                        ?>
                    </div>
                </div>            
            </div>
                <br><br>
        </div>
            
            
        <!--Second Row-->            
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/watch.jpg" alt="Faber Luba">   
                    </div>
                    <div class="caption">
                        <h2>Faber Luba</h2>
                        <p>Price:Rs.3000.00</p>
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-block btn-primary">Buy Now</a></p>
                        <?php }else{ 
                            if(check_if_added_to_cart(5)){
                                echo '<a href="#" class="btn btn-block btn-primary" disabled>Added to cart</a>';
                            }else{
                        ?>
                        <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                          } 
                        ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/titan_gold.jpg" alt="Titan Gold">
                    </div>
                    <div class="caption">
                        <h2>Titan Gold</h2>
                        <p>Price:Rs.18000.00</p>
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-block btn-primary">Buy Now</a></p>
                        <?php }else{ 
                            if(check_if_added_to_cart(6)){
                                echo '<a href="#" class="btn btn-block btn-primary" disabled>Added to cart</a>';
                            }else{
                        ?>
                        <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                          } 
                        ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/omega_chrono.jpg" alt="Omega Chrono">
                    </div>
                    <div class="caption">
                        <h2>Omega Chrono</h2>
                        <p>Price:Rs.8000.00</p>
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-block btn-primary">Buy Now</a></p>
                        <?php }else{ 
                            if(check_if_added_to_cart(7)){
                                echo '<a href="#" class="btn btn-block btn-primary" disabled>Added to cart</a>';
                            }else{
                        ?>
                        <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                          } 
                        ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/accurate_lxgeto.jpg" alt="Accurate Lxgeto">
                    </div>
                    <div class="caption">
                        <h2>Accurate Lxgeto</h2>
                        <p>Price:Rs.13000.00</p>
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-block btn-primary">Buy Now</a></p>
                        <?php }else{ 
                            if(check_if_added_to_cart(8)){
                                echo '<a href="#" class="btn btn-block btn-primary" disabled>Added to cart</a>';
                            }else{
                        ?>
                        <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                          } 
                        ?>
                    </div>
                </div>
            </div>
                <br><br>
        </div>
        
        
        <!--Third Row-->            
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shirt_3.jpg" alt="Jhalsani">   
                    </div>
                    <div class="caption">
                        <h2>Jhalsani</h2>
                        <p>Price:Rs.800.00</p>
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-block btn-primary">Buy Now</a></p>
                        <?php }else{ 
                            if(check_if_added_to_cart(9)){
                                echo '<a href="#" class="btn btn-block btn-primary" disabled>Added to cart</a>';
                            }else{
                        ?>
                        <a href="cart-add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                          } 
                        ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shirt.jpg" alt="H&W">
                    </div>
                    <div class="caption">
                        <h2>H&W</h2>
                        <p>Price:Rs.1000.00</p>
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-block btn-primary">Buy Now</a></p>
                        <?php }else{ 
                            if(check_if_added_to_cart(10)){
                                echo '<a href="#" class="btn btn-block btn-primary" disabled>Added to cart</a>';
                            }else{
                        ?>
                        <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                          } 
                        ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shirt_1.jpg" alt="John Zok">
                    </div>
                    <div class="caption">
                        <h2>John Zok</h2>
                        <p>Price:Rs.1500.00</p>
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-block btn-primary">Buy Now</a></p>
                        <?php }else{ 
                            if(check_if_added_to_cart(11)){
                                echo '<a href="#" class="btn btn-block btn-primary" disabled>Added to cart</a>';
                            }else{
                        ?>
                        <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                          } 
                        ?>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/shirt_2.jpg" alt="Luis Phil">
                    </div>
                    <div class="caption">
                        <h2>Luis Phil</h2>
                        <p>Price:Rs.1300.00</p>
                        <?php if(!isset($_SESSION['email'])){ ?>
                        <p><a href="login.php" role="button" class="btn btn-block btn-primary">Buy Now</a></p>
                        <?php }else{ 
                            if(check_if_added_to_cart(12)){
                                echo '<a href="#" class="btn btn-block btn-primary" disabled>Added to cart</a>';
                            }else{
                        ?>
                        <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                        <?php
                            }
                          } 
                        ?>
                    </div>
                </div>
            </div>
            <br><br><br><br>
        </div>
        
        <!--Footer-->
        
        <?php include 'include/footer.php'; ?>
        
    </body>
</html>
<?php

require 'include/common.php';
if(!isset($_SESSION['email'])){
    header("location:login.php");
}
?>

<!DOCTYPE html>
<!--
Author : Nirmal Chandra Panda
-->
<html>
    <head>
        <title>LifeStyleStore-Cart</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="index.css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <!--Navigation bar-->        
        <?php include 'include/header.php'; ?>
        
        
        <!--Table-->
        <div class="container">
            <div class="row row_style">
                <div class="col-md-6 col-md-offset-3">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <th>Item Number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th></th>
                    </tr>
        
        <!--code-->                
        <?php
            $sum=0;
            $id=array();
            $count_result=0;
            $user_id = $_SESSION['id'];
            $select_query = "SELECT * FROM users_items INNER JOIN items ON users_items.item_id = items.pid WHERE users_items.user_id = $user_id AND users_items.status='Added to cart'";
            $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
            if(mysqli_num_rows($select_query_result)==0){
                echo '<p class="text-warning"><em><strong><h3>Add items to cart first</h3></strong></em></p>';
                header("refresh:1;url=product.php");
            }else{
                while ($row = mysqli_fetch_array($select_query_result)) {
                    $sum = $sum + $row['price'];
                    $id[] =$row['item_id'];
                    ?>
                    <tr>
                        <td><?php echo $row['item_id']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['price']?></td>
                        <td><?php echo "<a href='cart-remove.php?id={$row['item_id']}' class='remove_item_link'> Remove</a>"; ?></td>
                    </tr>
              <?php  }
              $count_result = count($id);              
            }
        ?>
                    
                    <tr>
                        <td></td>
                        <td>Total</td>
                        <td><?php echo "$sum" ;?> /-</td>
                        <td><?php echo "<a href='success.php?len=$count_result&".http_build_query($id)."'><button type='button' class='btn btn-primary'>Confirm Order</button></a>"; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
            </div>
        </div>
        
        <!--Footer-->
        
        <?php include 'include/footer.php'; ?>
        
        
    </body>
</html>

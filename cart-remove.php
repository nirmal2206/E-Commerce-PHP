<?php

require 'include/common.php';
$id = $_GET['id'];
$user_id = $_SESSION['id'];
$delete_query = "DELETE FROM users_items WHERE item_id = $id and user_id = $user_id";
$delete_query_result = mysqli_query($con, $delete_query) or die(mysqli_error($con));
header('location:cart.php');
?>


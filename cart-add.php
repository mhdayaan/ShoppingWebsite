<?php
$item_id=$_GET['id'];
require ('common.php');
$user_id= $_SESSION['id'];
$_SESSION['Added to cart'] = mysqli_insert_id($con); 
$select2_query="INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
$select2_query_submit=mysqli_query($con, $select2_query) or die(mysqli_error($con));
header('Location:home.php');
?>

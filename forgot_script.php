<?php
require ('common.php');
$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  header('location: forgot_password.php?email_error=enter correct email');
}
$email = mysqli_real_escape_string($con, $email);
$select_query = "select email from users where email='$email'";
$select_query_submit = mysqli_query($con, $select_query) or die(mysqli_error($con));
$row = mysqli_num_rows($select_query_submit);
if ($row==0)
{   
    echo'User Not Found';
}
else{
header('Location:change_password.php');    
}
?>


<?php
require ('common.php');
$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  header('location: login.php?email_error=enter correct email');
}
$password = $_POST['password'];
if (strlen($password) < 6) {
 header('location: login.php?password_error=enter correct password');
}
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);
$ecp=md5(md5($password));
$select_query = "select email, password from users where email='$email' and password='$ecp'";
$select_query_submit = mysqli_query($con, $select_query) or die(mysqli_error($con));
$row = mysqli_num_rows($select_query_submit);
if ($row==0)
{   
    echo'User Not Found';
}
else{
$_SESSION['email'] = $email;
$_SESSION['id'] = mysqli_insert_id($con);
header('Location:home.php');    
}
?>


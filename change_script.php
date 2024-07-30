<?php
require ('common.php');
if (!isset($_SESSION['email'])) {
 header('location: index.php');
$npassword=$_POST['New password'];
if (strlen($npassword) < 6) {
  header('location: change_password.php?password_error=enter correct password');
}
$new_password=md5(md5($npassword));
$rnpassword=$_POST['Re-type New Password'];
if (strlen($rnpassword) < 6) {
  header('location: change_password.php?password_error=enter correct password');
}
$rnew_password=md5(md5($rnpassword));
if(new_password==rnew_password){
$new_password = mysqli_real_escape_string($con, new_password);
$rnew_password = mysqli_real_escape_string($con, $rnew_password);
}
else{
    echo 'Incorrect Password';
}
$user_id = $_SESSION['id'];
$user_verification_query="select password from users where id ='$user_id";
$result = mysqli_query($con, $user_verification_query);
$row = mysqli_num_rows($result);
if ($row==1)
{   
$user_update_query="update users set password='$new_password' where id ='$user_id'"; 
header('location: change_password.php?error=Password Updated');  
}
else
{
    header('Location:change_password.php?error=Wrong Password');
}
}
?>


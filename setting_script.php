<?php
require ('common.php');
if (!isset($_SESSION['email'])) {
 header('location: index.php'); 
$Old_password=$_POST['Old password'];
if (strlen($Old_password) < 6) {
  header('location: setting.php?password_error=enter correct password');
}
$password=md5(md5($Old_password));
$password= mysqli_real_escape_string($con, $password);
$npassword=$_POST['New password'];
if (strlen($npassword) < 6) {
  header('location: setting.php?password_error=enter correct password');
}
$new_password=md5(md5($npassword));
$rnpassword=$_POST['Re-type New Password'];
if (strlen($rnpassword) < 6) {
  header('location: setting.php?password_error=enter correct password');
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
If ($row==1){
$user_update_query="update users set password='$new_password' where id ='$user_id'";   
header('location: home.php?error=Password Updated');
}
else{
    echo 'Incorrect Password';
 header('location: setting.php');
}
}
?>


<?php
require ('common.php');
$firstname = $_POST['firstname'];
$secondname = $_POST['secondname'];
$email = $_POST['email'];
$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";
if (!preg_match($regex_email, $email)) {
  header('location: signup.php?email_error=enter correct email');
}
$passw=$_POST['password'];
if (strlen($passw) < 6) {
  header('location: index.php?password_error=enter correct password');
}
$password=md5(md5($passw));
$contact = $_POST['contact'];
$firstname = mysqli_real_escape_string($con, $firstname);
$secondname = mysqli_real_escape_string($con,$secondname);
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con ,$password);
$contact = mysqli_real_escape_string($con, $contact);
$user_verification_query="select email from users where email='$email'";
$result = mysqli_query($con, $user_verification_query);
$row = mysqli_num_rows($result);
If ($row>0){
echo 'Email already exists';}
else{
$user_signup_query = "insert into users(first_name, second_name, email, password, contact) values ('$firstname','$secondname', '$email', '$password', '$contact')";
$user_signup_submit = mysqli_query($con, $user_signup_query) or die(mysqli_error($con));
$_SESSION['email'] = $email;
$_SESSION['id'] = mysqli_insert_id($con);
header('location: home.php');
}
?>


<?php  
function check_if_added_to_cart($item_id)  
{ 
   $con = mysqli_connect("localhost", "root", "Minu@2010", "dreamstime") or die(mysqli_error($con));
   $user_id = $_SESSION['id'];
   $select1_query="SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' AND status='Added to cart'";
$select1_query_submit=mysqli_query($con, $select1_query)or die(mysqli_error($con));
$row = mysqli_num_rows($select1_query_submit);
if ($row>=1)
{   
  return 1 ;
}
 else {
return 0;    
}
}
?> 

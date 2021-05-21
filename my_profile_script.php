<?php
session_start();
include 'Connection/common.php';
$name= mysqli_real_escape_string($con,$_POST['name']);
$email=  mysqli_real_escape_string($con,$_POST['email']);
$phone=  $_POST['phone'];
$DOB=  $_POST['DOB'];
$Address=  $_POST['Address'];
$id=$_SESSION['id'];
//echo $name;
//echo $email;
//echo $phone;
//echo $DOB;
//echo $Address;
$query = "SELECT  user_name ,user_id , user_email FROM  user_details WHERE user_email = '" . $email . "'";
$result = mysqli_query($con, $query) or die($mysqli_error($con));
$num = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);
$id1= $row['user_id'];

if($id1==$id){


$update_password_query = "UPDATE user_details SET user_name = '$name' , user_email='$email' , user_phone='$phone' , user_dob='$DOB' , user_address='$Address' WHERE user_id = '" . $id . "' ";
$update_password_result = mysqli_query($con, $update_password_query) or die($mysqli_error($con));
 echo '<script>alert("Your Profile  update successfully...!")</script>';
 echo '<script>window.location="my_profile.php"</script>';


}
else{
    echo '<script>alert("This Email Is Already Present in Our Database...!..Please Check Your Email Id..")</script>';
    echo '<script>window.location="my_profile.php"</script>';
} 

?>
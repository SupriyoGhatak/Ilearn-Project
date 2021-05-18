<?php
session_start();
include 'Connection/common.php';
$Email= mysqli_real_escape_string($con,$_POST['Username']);
$Password= $_POST['Password'];
$Password= MD5($Password);

$query = "SELECT  user_name ,user_id , user_email FROM  user_details WHERE user_email = '" . $Email . "' AND user_password = '" . $Password . "' ";
$result = mysqli_query($con, $query) or die($mysqli_error($con));
$num = mysqli_num_rows($result);



if($num == 0){
    echo '<script>alert("Enter Correct E-mail and Password Combination...!")</script>';
    echo '<script>window.location="signup.php"</script>';
} else{
    $row = mysqli_fetch_array($result);
    $_SESSION['email'] = $row['user_email'];
    $_SESSION['id'] = $row['user_id'];
    $_SESSION['username']=$row['user_name'];
    header('location: index.php');
    
}



?>
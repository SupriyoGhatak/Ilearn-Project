
<?php
session_start();
include 'Connection/common.php';
$fullname=mysqli_real_escape_string($con,$_POST['fullname']); 
$email=mysqli_real_escape_string($con,$_POST['email']); 
$address=mysqli_real_escape_string($con,$_POST['address']); 
$city=mysqli_real_escape_string($con,$_POST['city']); 
$state=mysqli_real_escape_string($con,$_POST['state']); 
$zip=mysqli_real_escape_string($con,$_POST['zip']); 
$ccname=mysqli_real_escape_string($con,$_POST['cardname']); 
$ccnum=mysqli_real_escape_string($con,$_POST['cardnumber']); 
$expmonth=mysqli_real_escape_string($con,$_POST['expmonth']); 
$expyear=mysqli_real_escape_string($con,$_POST['expyear']); 
$cvv=mysqli_real_escape_string($con,$_POST['cvv']); 

$abc= "INSERT INTO billing(fullname,email,address,city,state,zip,ccname,ccnum,expmonth,expyear,cvv) VALUES('$fullname','$email','$address','$city','$state','$zip','$ccname','$ccnum','$expmonth','$expyear','$cvv')";
$res = mysqli_query($con, $abc) or die(mysqli_error($con));

  
                      $id1=$_SESSION['id'];
                      
                      $user_buy_query = " insert into user_buyed_course(user_id) values ('$id1')";
                      $user_course_submit= mysqli_query($con,$user_buy_query) or die(mysqli_error($con));


$course=$_SESSION['course'];
$id=$_SESSION['id'];

$update_course_query = "UPDATE user_buyed_course SET $course='1' WHERE user_id = '" . $id . "' ";
$update_course_result = mysqli_query($con, $update_course_query) or die($mysqli_error($con));



echo '<script>window.location="successful.php"</script>';

 ?>


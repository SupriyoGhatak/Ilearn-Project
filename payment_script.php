
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
$id1=$_SESSION['id'];
$payment="Paid";
$status="Delivered";
 $course=$_SESSION['course'];
  $ccnum= MD5($ccnum);
<<<<<<< HEAD
 // $cvv= MD5($cvv);
=======
  $cvv= MD5($cvv);
>>>>>>> 89f32441c50a309d5b659c5ea5e927b7e49c91be
 // $cvv=MD5($cvv);
$abc= "UPDATE  billing SET fullname='$fullname',email='$email',address='$address',city='$city',state='$state',zip='$zip',ccname='$ccname',ccnum='$ccnum',expmonth='$expmonth',expyear='$expyear',
        cvv='$cvv',payment='$payment',status='$status' WHERE user_id = '" . $id1 . "' AND course = '" . $course . "'   ";
$res = mysqli_query($con, $abc) or die(mysqli_error($con));



$query = "SELECT user_id   FROM  user_buyed_course WHERE user_id = '" . $id1 . "'";
$result = mysqli_query($con, $query) or die($mysqli_error($con));
$num = mysqli_num_rows($result);
if($num==0){
    echo 'hay';

  
                      
                      
                      $user_buy_query = " insert into user_buyed_course(user_id) values ('$id1')";
                      $user_course_submit= mysqli_query($con,$user_buy_query) or die(mysqli_error($con));


                      $course=$_SESSION['course'];
                      $id=$_SESSION['id'];

                      $update_course_query = "UPDATE user_buyed_course SET $course='1' WHERE user_id = '" . $id . "' ";
                      $update_course_result = mysqli_query($con, $update_course_query) or die($mysqli_error($con));
}
else
{
                      $course=$_SESSION['course'];
                      $id=$_SESSION['id'];

                      $update_course_query = "UPDATE user_buyed_course SET $course='1' WHERE user_id = '" . $id . "' ";
                      $update_course_result = mysqli_query($con, $update_course_query) or die($mysqli_error($con));
}



echo '<script>window.location="successful.php"</script>';

 ?>


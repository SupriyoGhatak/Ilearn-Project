

<?php
$con = mysqli_connect("localhost","root","","payment") or die(mysqli_error($con));




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
 ?>


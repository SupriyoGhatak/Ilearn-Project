<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/logo_1.png" style="height: 40px; width: 40px;" type="image/png" />
    <title>Ilearn Education</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/stylee.css"/>
    
  </head>

  <body>
<?php
 include 'header_index.php';
    ?>
      
  <div class="popular_courses section_gap_top">   
    <div class="container"> 
        <div class="row"> 
          <div class="col-50">
            <h3>Billing Address</h3>  
 
  </body>
</html>
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


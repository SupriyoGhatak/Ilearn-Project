<?php
session_start();
include 'Connection/common.php';
$complaintnumber=$_GET['cid'];
$status=mysqli_real_escape_string($con,$_POST['status']);


$remark=mysqli_real_escape_string($con,$_POST['remark']);

$remark_query="insert into complaintremark(complaintNumber,status,remark) values('$complaintnumber','$status','$remark')";
$remark_sql= mysqli_query($con, $remark_query) or die(mysqli_error($con));
$remark_update="update complaints set status='$status' where complaintNumber='$complaintnumber'";
$update_sql = mysqli_query($con, $remark_update) or die(mysqli_error($con));


echo "<script>alert('Complaint details updated successfully');</script>";
echo '<script>window.location="admin_query.php"</script>';
 ?>
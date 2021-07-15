<?php
session_start();
include 'Connection/common.php';
$title=mysqli_real_escape_string($con,$_POST['title']); 
$descrip=mysqli_real_escape_string($con,$_POST['descrip']); 
$noticedate=mysqli_real_escape_string($con,$_POST['noticedate']); 
$noticecontent=mysqli_real_escape_string($con,$_POST['noticecontent']); 
$notice_query = "insert into notice(title,descrip,noticedate,noticecontent) values ('$title','$descrip','$noticedate','$noticecontent')";
$notice_submit= mysqli_query($con,$notice_query) or die(mysqli_error($con));
echo '<script> alert("Your Notice details has been successfully submitted")</script>';
echo '<script>window.location="admin_notice.php"</script>';
?>
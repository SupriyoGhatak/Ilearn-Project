<?php
session_start();
include 'Connection/common.php';

$userid1=$_SESSION['id'];


$noc=$_POST['noc']; 
$complaintdetails=mysqli_real_escape_string($con,$_POST['complaintdetails']);

$complaint_query = "insert into complaints(user_id,noc,complaintdetails) values ('$userid1','$noc','$complaintdetails')";
echo "hiii";
$res = mysqli_query($con, $complaint_query) or die(mysqli_error($con));
$sql1="select complaintNumber from complaints order by complaintNumber desc limit 1";
$res1 = mysqli_query($con, $sql1) or die(mysqli_error($con));
while($row=mysqli_fetch_array($res1))
{
 $cmpn=$row['complaintNumber'];
}
$complainno=$cmpn;
echo '<script> alert("Your Query has been successfully submitted and your Query Number is  "+"'.$complainno.'")</script>';
echo '<script>window.location="contact.php"</script>';
?>

<?php
$con=mysqli_connect('localhost','root','','ilearn');
if(!isset($_COOKIE['visit'])){
	setCookie('visit','yes',time()+(60*60));
	mysqli_query($con,"update visit set total_count=total_count+1");
}
?>
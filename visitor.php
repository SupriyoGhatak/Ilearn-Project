<?php
<<<<<<< HEAD
include 'Connection/common.php';
=======
$con=mysqli_connect("localhost","root","","Ilearn");
>>>>>>> 2267ac62e77dfa83a2740d333773f62a45514d39
if(!isset($_COOKIE['visit'])){
	setCookie('visit','yes',time()+(60));
	mysqli_query($con,"update visit set total_count=total_count+1");
}
?>
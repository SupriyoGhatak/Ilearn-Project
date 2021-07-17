<?php
//session_start();
function Insert($c,$b,$a) {
  //echo "Hello world!" .$b;
    include 'Connection/common.php';
    $id=$_SESSION['id'];
    
    
    
    $insert = "SELECT * FROM $a WHERE  user_id = '" . $id . "' AND $b = '" . $c . "' ";
    $insert_r = mysqli_query($con, $insert);
    $num = mysqli_num_rows($insert_r);
    if($num ==0){
        //echo 'hi';
        $static_query = "insert into c_statictics(user_id,$b) values ('$id','$c')";
        $user_signup_submit= mysqli_query($con,$static_query) or die(mysqli_error($con));        
    }
}
function calculate($b,$a) {
  //echo "Hello world!" .$b;
    include 'Connection/common.php';
    $id=$_SESSION['id'];
    
    
    
    $insert = "SELECT * FROM $a WHERE  user_id = '" . $id . "' ";
    $insert_r = mysqli_query($con, $insert);
    $num = mysqli_num_rows($insert_r);
    return $num;
}

?>
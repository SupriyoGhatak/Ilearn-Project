<?php
session_start();
include 'Connection/common.php';
$Name= mysqli_real_escape_string($con,$_POST['Name']); 
$Email= mysqli_real_escape_string($con,$_POST['Email']);
$Password= $_POST['CreatePassword'];

$ConfirmPassword= $_POST['ConfirmPassword'];





if($Password == $ConfirmPassword)
{
        $Password= MD5($Password);
        $query = "SELECT   user_email FROM  user_details WHERE user_email = '" . $Email . "'";
        $result = mysqli_query($con, $query) or die($mysqli_error($con));
        $num = mysqli_num_rows($result);
        if($num >0){
               echo '<script>alert("Email is already Exist")</script>';
               echo '<script>window.location="signup.php"</script>';
    
                }else{
                    $user_signup_query = "insert into user_details(user_name,user_email,user_password) values ('$Name','$Email','$Password')";
                     $user_signup_submit= mysqli_query($con,$user_signup_query) or die(mysqli_error($con));
                      $_SESSION['email'] = $Email;
                      $_SESSION['username']=$Name;
                      $_SESSION['id']= mysqli_insert_id($con);
                      
                      $id1=$_SESSION['id'];
                      
                      $user_buy_query = " insert into user_buyed_course(user_id) values ('$id1')";
                      $user_course_submit= mysqli_query($con,$user_buy_query) or die(mysqli_error($con));
                   
                     echo '<script>alert("User successfully inserted")</script>';
                     echo '<script>window.location="index.php"</script>';
                }
                
    
}
else
{
    echo '<script>alert("Password Not Matched,Check Properly")</script>';
    echo '<script>window.location="signup.php"</script>';
}

?>
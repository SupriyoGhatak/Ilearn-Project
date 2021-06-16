<?php
            session_start();
            include 'Connection/common.php';
$course= mysqli_real_escape_string($con,$_POST['country']);            
$videoName= mysqli_real_escape_string($con,$_POST['videoName']); 
$VideoLink= mysqli_real_escape_string($con,$_POST['VideoLink']);

      //echo $course;      
            
         $user_video = "insert into $course(video_id,src) values ('$videoName','$VideoLink')";
         $user_video_submit= mysqli_query($con,$user_video) or die(mysqli_error($con));   
         echo '<script>alert("Information successfully inserted")</script>';
         echo '<script>window.location="admin_video.php"</script>';
            
?>
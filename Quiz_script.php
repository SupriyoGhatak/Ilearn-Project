<?php
session_start();
include 'Connection/common.php';
 $counter = 0;
 $type=$_GET['type'];
 $course=$_GET['course'];
 //echo $type;
 //echo $course;
         $Resultans = 0;
            if(isset($_POST['submit'])){
            if(!empty($_POST['quizcheck'])) {
            // Counting number of checked checkboxes.
            $checked_count = count($_POST['quizcheck']);
            // print_r($_POST['quizcheck']);
            $selected = $_POST['quizcheck'];
            
            $q1= " select ans_id from question WHERE  type = '".$type."' AND course = '".$course."'";
            $ansresults = mysqli_query($con,$q1);
           $e= mysqli_num_rows($ansresults);
          // echo $e;
            $i = 1;
            while($rows = mysqli_fetch_array($ansresults)) {
               
              // print_r($rows);
               //echo $rows['ans_id'];
              // print_r ($selected[$i] );
            	$flag = $rows['ans_id'] == $selected[$i];
            	
            			if($flag){
            				// echo "correct ans is ".$rows['ans']."<br>";				
            				$counter++;
            				$Resultans++;
            				// echo "Well Done! your ". $counter ." answer is correct <br><br>";
            			}else{
            				$counter++;
            				// echo "Sorry! your ". $counter ." answer is innncorrect <br><br>";
            			}					
            		$i++;		
            	}
            }
            }
            $persentage=$Resultans*(100/$checked_count);
            $id=$_SESSION['id'];
            if($persentage>70){
                
            $query4 = "SELECT user_id   FROM  user_exam_result WHERE user_id = '" . $id . "'";
            $result41 = mysqli_query($con, $query4) or die($mysqli_error($con));
            $num = mysqli_num_rows($result41);
            if($num==0){    
                
            $q="INSERT INTO user_exam_result (user_id ,$type) values ('$id','$persentage')";
            $q_submit= mysqli_query($con,$q) or die(mysqli_error($con));
             echo '<script>alert("Congrats, New Modules Unloacked")</script>';
             echo '<script>window.location="c_video_file.php"</script>';
            }
            else{
             
                 $update_exam = "UPDATE user_exam_result SET $type='$persentage' WHERE user_id = '" . $id . "' ";
                 $update_exam_result = mysqli_query($con, $update_exam) or die($mysqli_error($con));
                 if($course=="c"){
                 echo '<script>alert("Congrats, New Modules Unloacked")</script>';
                 echo '<script>window.location="c_video_file.php"</script>';
                 }
                 if($course=="java"){
                 echo '<script>alert("Congrats, New Modules Unloacked")</script>';
                 echo '<script>window.location="java_video_file.php"</script>';
                 }
                 if($course=="c_plus"){
                 echo '<script>alert("Congrats, New Modules Unloacked")</script>';
                 echo '<script>window.location="c++_video_file.php"</script>';
                 }
                  if($course=="rdbms"){
                 echo '<script>alert("Congrats, New Modules Unloacked")</script>';
                 echo '<script>window.location="rdbms_video_file.php"</script>';
                 }
                
                
            }
            }
            else{
                 if($course=="c"){
                 echo '<script>alert("Better Luck Next Time, Try Again")</script>';
                 echo '<script>window.location="c_video_file.php"</script>';
                 }
                 if($course=="java"){
                 echo '<script>alert("Better Luck Next Time, Try Again")</script>';
                 echo '<script>window.location="java_video_file.php"</script>';
                 }
                 if($course=="c_plus"){
                 echo '<script>alert("Better Luck Next Time, Try Again")</script>';
                 echo '<script>window.location="c++_video_file.php"</script>';
                 }
                  if($course=="rdbms"){
                 echo '<script>alert("Better Luck Next Time, Try Again")</script>';
                 echo '<script>window.location="dbms_video_file.php"</script>';
                 }
             //echo '<script>alert("Better Luck Next Time, Try Again")</script>';
            //echo '<script>window.location="c_video_file.php"</script>';
            }
            
?>
            	
    		

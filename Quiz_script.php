<?php
session_start();
include 'Connection/common.php';
 $counter = 0;
 $type=$_GET['type'];
 $course=$_GET['course'];
 //echo $type;
         $Resultans = 0;
            if(isset($_POST['submit'])){
            if(!empty($_POST['quizcheck'])) {
            // Counting number of checked checkboxes.
            $checked_count = count($_POST['quizcheck']);
            // print_r($_POST['quizcheck']);
            $selected = $_POST['quizcheck'];
            
            $q1= " select ans_id from question WHERE  type = '" . $type . "' AND course = '" . $course . "'";
            $ansresults = mysqli_query($con,$q1);
            $i = 1;
            while($rows = mysqli_fetch_array($ansresults)) {
               
              // print_r($rows);
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
            $q="INSERT INTO user_exam_result (user_id ,c_1st) values ('$id','$persentage')";
            $q_submit= mysqli_query($con,$q) or die(mysqli_error($con));
             echo '<script>alert("Congrats, New Modules Unloacked")</script>';
             echo '<script>window.location="c_video_file.php"</script>';
            }
            else{
             echo '<script>alert("Better Luck Next Time, Try Again")</script>';
             echo '<script>window.location="c_video_file.php"</script>';
            }
            
?>
            	
    		

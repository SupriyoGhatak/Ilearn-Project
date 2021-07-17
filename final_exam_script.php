<?php
  session_start();
  include 'Connection/common.php';
  
  //$value=$_POST['fav'];
  //echo $value;
 /* print_r($_POST['quizcheck']);
  $s=$_POST['quizcheck'];
  if(empty($s[2]))
      echo 'no value';
  $flag=$s[3]==3;
  echo $flag;*/
  
 $counter = 0;
 $leave=0;
 $Resultans = 0;
 $type=$_GET['type'];
 $course=$_GET['course'];
 if(!empty($_POST['quizcheck']))
 {
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
                if(empty($selected[$i]))
                {
                    $leave++;
                    $i++;
                    $checked_count++;
                }
                else{
            	$flag = $rows['ans_id'] == $selected[$i];
            	
            			if($flag){
            				// echo "correct ans is ".$rows['ans']."<br>";				
            				//$counter++;
            				$Resultans++;
            				// echo "Well Done! your ". $counter ." answer is correct <br><br>";
            			}else{
            				$counter++;
            				// echo "Sorry! your ". $counter ." answer is innncorrect <br><br>";
            			}					
            		$i++;
                }
            }
            $right=$Resultans*4;
            $right=$right-$counter;
            $persentage=($right/($checked_count*4))*100;
           // echo $persentage,$Resultans,$counter,$checked_count,$leave;
            $id=$_SESSION['id'];
            if($persentage>70){
                
            $query4 = "SELECT user_id   FROM  user_exam_result WHERE user_id = '" . $id . "'";
            $result41 = mysqli_query($con, $query4) or die($mysqli_error($con));
            $num = mysqli_num_rows($result41);
            if($num==0){    
                
            $q="INSERT INTO user_exam_result (user_id ,$type) values ('$id','$persentage')";
            $q_submit= mysqli_query($con,$q) or die(mysqli_error($con));
             echo '<script>alert("Congrats, Download Your Certificate")</script>';
             echo '<script>window.location="dashreports.php"</script>';
            }
            else{
             
                 $update_exam = "UPDATE user_exam_result SET $type='$persentage' WHERE user_id = '" . $id . "' ";
                 $update_exam_result = mysqli_query($con, $update_exam) or die($mysqli_error($con));
                 echo '<script>alert("Congrats, Download Your Certificate")</script>';
                 echo '<script>window.location="dashreports.php"</script>';
                
                
            }
            }
            else{
             echo '<script>alert("Better Luck Next Time, Try Again")</script>';
            echo '<script>window.location="dashexamboard.php"</script>';
            }
  
 }else{
     echo '<script>alert("Please select one of ")</script>';
     echo '<script>window.location="dashexamboard.php"</script>';
 }
?>
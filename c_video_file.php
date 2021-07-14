<?php
session_start();
include 'Connection/common.php';
 $id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <link rel="icon" href="img/logo_1.png" style="height: 40px; width: 40px;" type="image/png" />
     <title>Videos</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">

   
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
        
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/videostyle.css" />
    <link rel="stylesheet" href="css/try.css" />
    
  </head>
  <body method="POST">
      
<div class="wrapper">
	
 <nav id="sidebar">
 	
 	 <div class="sidebar-header">
             <center><i class="fas fa-graduation-cap" style="color:white;"></i></center>
             <center><h3>ILearn</h3></center>
               
 	 </div>
 	 <ul class="lisst-unstyled components">

             <p><strong><center>C Concepts</center></strong></p>
 	 	<li class="active">
 	 		<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">C Language Overview</a>
 	 	  <ul class="collapse list-unstyled" id="homeSubmenu">
 	 	  	<!--<li>
                            <a href="c_video_file.php?action=video1">Fact About C</a>
 	 	  	</li>-->
 	 	  	<li>
 	 	  		<a href="c_video_file.php?action=video2">Introduction to c</a>
 	 	  	</li>
<!--                        <li>
 	 	  		<a href="#video3">Foundation of C</a>
 	 	  	</li>-->

 	 	  </ul>
 	 	</li>
 	 	
 	 	<li>
 	 		<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">C Environment Setup</a>
 	 		<ul class="collapse list-unstyled" id="pageSubmenu">
 	 			<li>
                                    <a href="c_video_file.php?action=video3">Installation On Unix/Linux</a>
 	 			</li>
 	 			<li>
 	 				<a href="c_video_file.php?action=video4">Installation On Windows</a>
 	 			</li>
                                <li>
 	 				<a href="c_video_file.php?action=video5">Installation On Mac Os</a>
 	 			</li>
 	 			

 	 		</ul>
 	 	</li>
                <li>
 	 		<a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">C Basic Syntax</a>
 	 		<ul class="collapse list-unstyled" id="pageSubmenu2">
 	 			
 	 			<li>
 	 				<a href="c_video_file.php?action=video6">Tokens And Semicolons</a>
 	 			</li>
                                <li>
 	 				<a href="c_video_file.php?action=video7">Comments</a>
 	 			</li>
                                <li>
 	 				<a href="c_video_file.php?action=video8">Identifiers And Keywords</a>
 	 			</li>
                                <li>
 	 				<a href="c_video_file.php?action=video9">DataTypes And Variables</a>
                                </li><!-- comment -->
                                <li>
 	 				<a href="c_video_file.php?action=video10">Constants And Literals</a>
 	 			</li>
                                <li>
 	 				<a href="c_video_file.php?action=video11">Operators</a>
 	 			</li>
 	 			

 	 		</ul>
 	 	</li>
                <?php
                
                $check=0;
                $check1=0;
                $check2=0;
                
                ?>
                
                <li>
 	 		<a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Core C Topics</a>
 	 		<ul class="collapse list-unstyled" id="pageSubmenu3">
 	 			
 	 			<li>
 	 				<a href="c_video_file.php?action=video12">Loops</a>
 	 			</li>
                                <li>
                                    <a href="c_video_file.php?action=coding1">Coding1</a>
 	 			</li>
                                <li>
 	 				<a href="c_video_file.php?action=video13">Functions</a>
 	 			</li>
                                <li>
 	 				<a href="c_video_file.php?action=video14">Scope Rules</a>
 	 			</li>
                                <li>
 	 				<a href="c_video_file.php?action=video15">Arrays and Pointers</a>
                                </li><!-- comment -->
                                <li>
                                    <a href="c_video_file.php?action=coding2">Coding2</a>
 	 			</li>
                                <li>
 	 				<a href="c_video_file.php?action=video16">Structure and Unions</a>
 	 			</li>
                                <?php 
                                $sql_r1 = "SELECT * FROM user_exam_result WHERE  user_id = '" . $id . "' ";
                                $result12 = mysqli_query($con, $sql_r1);
                                $row1 = mysqli_fetch_assoc($result12);
                                $check= $row1['c_1st'];
                                if($check>70)
                                {
                                ?>
                                <li style="pointer-events: none; color: red;">
                                    <a href="quiz.php?type=c_1st&course=c">Quiz</a>
 	 			</li>
                                <?php
                                }else{
                                    ?>
                                <li >
                                    <a href="quiz.php?type=c_1st&course=c">Quiz</a>
 	 			</li>
                                <?php
                                }
                                ?>
                                
                                
 	 		</ul>
 	 	</li>
        <?php 
        
       $sql_r = "SELECT * FROM user_exam_result WHERE  user_id = '" . $id . "' ";
       $result1 = mysqli_query($con, $sql_r);
        if (mysqli_num_rows($result1) > 0) {
            $row1 = mysqli_fetch_assoc($result1);
            $check= $row1['c_1st'];
            $check1=$row1['c_2nd'];
            if($check>70)
            {
        
           ?>
             <li>
                 <a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Input And Output</a>
 	 		<ul class="collapse list-unstyled" id="pageSubmenu4">
 	 			
 	 			<li>
                                    <a href="c_video_file.php?action=video17">Standard Files</a>
 	 			</li>
                                <li>
 	 				<a href="c_video_file.php?action=video18">Files I/O</a>
 	 			</li>
                                
                                
 	 		</ul>
 	 	</li>
                <li >
 	 		<a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Error Handling</a>
 	 		<ul class="collapse list-unstyled" id="pageSubmenu5">
 	 			
 	 			<li>
                                    <a href="c_video_file.php?action=video19">Different Blocks</a>
 	 			</li>
                                <li>
 	 				<a href="c_video_file.php?action=video20">Memory Management</a>
 	 			</li>
                                <?php 
                                $sql_r3 = "SELECT * FROM user_exam_result WHERE  user_id = '" . $id . "' ";
                                $result13 = mysqli_query($con, $sql_r3);
                                $row3 = mysqli_fetch_assoc($result13);
                                $check2= $row3['c_2nd'];
                                if($check2>70)
                                {
                                ?>
                                <li style="pointer-events: none; color: red;">
 	 				<a href="quiz.php?type=c_2nd&course=c">Quiz</a>
 	 			</li>
                                 <?php
                                }else{
                                    ?>
                                <li>
 	 				<a href="quiz.php?type=c_2nd&course=c">Quiz</a>
 	 			</li>
                                 <?php
                                }
                                ?>
                                
                                
 	 		</ul>
 	 	</li>
               
            <?php }}else{ ?>     
           <li style="pointer-events: none; color: red;">
 	 		<a href="#pageSubmenu4" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Input And Output</a>
 	 		<ul class="collapse list-unstyled" id="pageSubmenu4">
 	 			
 	 			<li>
                                    <a href="c_video_file.php?action=video17">Standard Files</a>
 	 			</li>
                                <li>
 	 				<a href="c_video_file.php?action=video18">Files I/O</a>
 	 			</li>
                                
                                
 	 		</ul>
 	 	</li>
                <li style="pointer-events: none; color: red;">
 	 		<a href="#pageSubmenu5" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Error Handling</a>
 	 		<ul class="collapse list-unstyled" id="pageSubmenu5">
 	 			
 	 			<li>
                                    <a href="c_video_file.php?action=video19">Different Blocks</a>
 	 			</li>
                                <li>
 	 				<a href="c_video_file.php?action=video20">Memory Management</a>
 	 			</li>
                                
                                
 	 		</ul>
 	 	</li>
                
        <?php } ?>
                
                
                <?php
               // $_SESSION['c_result']=$check1;
                 if($check1>70)
                 {
                ?>
                 <li>
 	 				<a href="#">Final Assassment</a>
 	        </li>
                <?php
                 }else{
                ?>
                <li style="pointer-events: none; color: red;">
 	 				<a href="#">Final Assassment</a>
 	        </li>
                <?php
                 }
                ?>
 	 	 	 	

 	 </ul>
 </nav>


<div id="content">
	
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                      <div class="container-fluid">
                              <button type="button" id="sidebarCollapse" class="btn  btn-info">
                                      <i class="fas fa-align-left"></i>
                                      <span>Toggle</span>

                              </button>
                          <button type="button" id="sidebarCollapse" class="btn  btn-info">
                                 <i class="fas fa-home"></i>
                                 <span><a href="index.php">Home</a></span>

                              </button>
                          
                             
                      </div>
                </nav>

        <br><br>

        <?php
            //session_start();
            include 'Connection/common.php';
            if (isset($_GET["action"])){

            $c=$_GET["action"];
            $query = "SELECT  src FROM  c_video WHERE video_id = '" . $c . "' ";
            $result = mysqli_query($con, $query) or die($mysqli_error($con));
            $num = mysqli_num_rows($result);
            $row = mysqli_fetch_array($result);   
            $src = $row['src'];
            }
        ?>
        <?php if(!isset($_GET["action"])){?>
        <section  style="height: 100vh; display: flex;
            text-align: center;
            justify-content: center;">
            <img style=""height="80%; width:70%;"src="img/video_bg_c.jpg" >

        </section>
        <?php
        }
        else
        {
            
            if($c=="coding1"){
            ?>
             <h1><center>Coding Question</center></h1>
             <p style="color: black;"><strong><h2><center>Find minimum and maximum element in an array</center></h2></strong><br>

          Given an array A of size N of integers.<br><!-- comment -->Your task is to find the minimum and maximum elements in the array.<br>

 

          Example 1:<br>
          <br>
          Input:<br>
          N = 6<br>
          A[] = {3, 2, 1, 56, 10000, 167}<br>
          Output:<br><!-- comment -->
          min = 1, max =  10000<br>
 

          Example 2:<br>

          Input:<br>
          N = 5<br>
          A[]  = {1, 345, 234, 21, 56789}<br>
          Output:<br>
          min = 1, max = 56789<br>
 
          <br><!-- comment -->
          
          Your Task:  <br>
          Your task is to complete the function getMinMax() which takes the array A[] and its size N as inputs and returns the minimum and maximum element of the array.<br>

 
          <br><!-- comment -->
          <!-- comment -->
         
          Expected Time Complexity: O(N)<br>
          Expected Auxiliary Space: O(1)<br><!-- comment -->

 

          Constraints:<br><!-- comment -->
          1 <= N <= 105<br>
          1 <= Ai <=1012</p><br>
             <center><button style="color: black; border-radius: 2px; background: yellow;" onclick="window.location.href='http://tpcg.io/MqVMJoo2';" target="_blank">Click Here For Coding</button></center>
            <?php 
            
            }
            else if($c=="coding2")
            {    
            ?>
             
             <h1><center>Coding Question</center></h1>
             <p style="color: black;"><strong><h2><center>Rotate the Array</center></h2></strong><br>
             <p style="color: black;"> Given an unsorted array arr[] of size N, rotate it by D elements (clockwise).<br><!-- comment --> 
                 <br>
                 Input:<br>
                 The first line of the input contains T denoting the number of testcases.<br><!-- comment --> First line of each test case contains two space separated elements, N denoting the size of the array and an integer D denoting the number size of the rotation. Subsequent line will be the N space separated array elements.<br><!-- comment -->

                 Output:<br>
                 For each testcase, in a new line, output the rotated array.<br>
                 <br>
                 Constraints:<br>
                 1 <= T <= 200<br>
                 1 <= N <= 107<br>
                 1 <= D <= N<br>
                 0 <= arr[i] <= 105<br>
                 <br>
                 Example:<br>
                 Input:<br>
                 2<br>
                 5 2<br>
                 1 2 3 4 5 <br>
                 10 3<br>
                 2 4 6 8 10 12 14 16 18 20<br>
                 <br>
                 Output:<br>
                 3 4 5 1 2<br>
                 8 10 12 14 16 18 20 2 4 6<br><!-- comment -->
                 <br>
                 Explanation :<br>
                 Testcase 1: <br><!-- comment -->1 2 3 4 5  when rotated by 2 elements, it becomes 3 4 5 1 2.<br></p>
             <center><button style="color: black; border-radius: 2px; background: yellow;" onclick="window.location.href='http://tpcg.io/MqVMJoo2';" target="_blank">Click Here For Coding</button></center>
             
             <?php 
            }
            else 
            {
             ?>
        <section style="height: 100vh;" class="section-content">

           <iframe src="<?php echo $src; ?>" width="1100" height="500" controls style="width: 100%;max-height: 100%;"></iframe>
           <p><center style="font-weight: bold; font-family: oswal; font-size: 20px; color: black;">Take Notes Here</center></p>
        <center> <textarea id="my-textarea" placeholder="Take Your Notes Here.." class="notes" style="height: 20vh; width: 100%; border: 2px solid black;"  >
                                       
                
            </textarea></center>
        <center> <button type="button" onclick="download()" class="savebutton" style="font-weight: bold;
                
                background-color: mediumseagreen;
                color: white;
                
            }">Save</button></center>
        </section>
            <?php }} ?>
        
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>

            $(document).ready(function () {
                        $('#sidebarCollapse').on('click', function () {
                            $('#sidebar').toggleClass('active');
                        });
                    });


</script>
<script>
            function download(){
            var text = document.getElementById("my-textarea").value;
            text = text.replace(/\n/g, "\r\n"); // To retain the Line breaks.
            var blob = new Blob([text], { type: "text/plain"});
            var anchor = document.createElement("a");
            anchor.download = "Notes.txt";
            anchor.href = window.URL.createObjectURL(blob);
            anchor.target ="_blank";
            anchor.style.display = "none"; // just to be safe!
            document.body.appendChild(anchor);
            anchor.click();
            document.body.removeChild(anchor);
         }

</script>
   
  </body>
  
</html>
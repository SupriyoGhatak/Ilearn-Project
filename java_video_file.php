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

             <p><strong><center>Java Concepts</center></strong></p>
 	 	<li class="active">
 	 		<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Introduction to Java</a>
 	 	  <ul class="collapse list-unstyled" id="homeSubmenu">
 	 	  	<li>
                            <a href="java_video_file.php?action=video1">Installation of JDK</a>
 	 	  	</li>
 	 	  	<li>
 	 	  		<a href="java_video_file.php?action=video2">Installation of JDK in MacOS</a>
 	 	  	</li>


 	 	  </ul>
 	 	</li>
                 <li>
 	 		<a href="java_video_file.php?action=video3" data-toggle="collapse" aria-expanded="false">Variables and Types</a>
 	 		
 	 	</li>
 	 	<li>
 	 		<a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Loop Statements</a>
 	 		<ul class="collapse list-unstyled" id="pageSubmenu2">
 	 			
 	 			<li>
 	 				<a href="java_video_file.php?action=video4">for loop</a>
 	 			</li>
                                <li>
 	 				<a href="java_video_file.php?action=video5">while loop</a>
 	 			</li>
                                <li>
 	 				<a href="java_video_file.php?action=video6">do-while loop</a>
 	 			</li>
                                
 	 			

 	 		</ul>
 	 	</li>
 	 	<li>
 	 		<a href="java_video_file.php?action=video7" data-toggle="collapse" aria-expanded="false">Parameter Passing and Returning Value</a>
 	 		
 	 	</li>
                <li>
 	 		<a href="java_video_file.php?action=video8" data-toggle="collapse" aria-expanded="false">Arrays in Java</a>
 	 		
                </li>
                <?php 
                                $sql_r1 = "SELECT * FROM user_exam_result WHERE  user_id = '" . $id . "' ";
                                $result12 = mysqli_query($con, $sql_r1);
                                $row1 = mysqli_fetch_assoc($result12);
                                $check= $row1['java_1st'];
                                if($check>70)
                                {
                                ?>
                                <li style="pointer-events: none; color: red;">
                                    <a href="quiz.php?type=java_1st&course=java">Quiz-1</a>
 	 			</li>
                                <?php
                                }else{
                                    ?>
                                <li >
                                    <a href="quiz.php?type=java_1st&course=java">Quiz-1</a>
 	 			</li>
                                <?php
                                }
                                ?>
                                
                 <?php 
        
       $sql_r = "SELECT * FROM user_exam_result WHERE  user_id = '" . $id . "' ";
       $result1 = mysqli_query($con, $sql_r);
        if (mysqli_num_rows($result1) > 0) {
            $row1 = mysqli_fetch_assoc($result1);
            $check= $row1['java_1st'];
            $check1=$row1['java_2nd'];
            if($check>70)
            {
        
           ?>           
 	 		
 	 	
                <li>
 	 		<a href="java_video_file.php?action=video9" data-toggle="collapse" aria-expanded="false">Classes and Objects in Java</a>
 	 		
 	 	</li>
                <li>
 	 		<a href="java_video_file.php?action=video10" data-toggle="collapse" aria-expanded="false">Inheritence in Java</a>
 	 		
 	 	</li>
                <li>
 	 		<a href="java_video_file.php?action=video11" data-toggle="collapse" aria-expanded="false">Polymorphism in Java</a>
 	 		
 	 	</li>
                <li>
 	 		<a href="java_video_file.php?action=video12" data-toggle="collapse" aria-expanded="false">Class Constructors</a>
 	 		
 	 	</li>
                <?php 
                                $sql_r3 = "SELECT * FROM user_exam_result WHERE  user_id = '" . $id . "' ";
                                $result13 = mysqli_query($con, $sql_r3);
                                $row3 = mysqli_fetch_assoc($result13);
                                $check2= $row3['java_2nd'];
                                if($check2>70)
                                {
                                ?>
                                <li style="pointer-events: none; color: red;">
 	 				<a href="quiz.php?type=java_2nd&course=java">Quiz-2</a>
 	 			</li>
                                 <?php
                                }else{
                                    ?>
                                <li>
 	 				<a href="quiz.php?type=java_2nd&course=java">Quiz-2</a>
 	 			</li>
                                 <?php
                                }
                                ?>
            <?php }}else{ ?>
                                
                  <li style="pointer-events: none; color: red;">
                  
 	 		<a href="java_video_file.php?action=video9" data-toggle="collapse" aria-expanded="false">Classes and Objects in Java</a>
 	 		
 	 	
         </li>
                 <li style="pointer-events: none; color: red;">
                
 	 		<a href="java_video_file.php?action=video10" data-toggle="collapse" aria-expanded="false">Inheritence in Java</a>
 	 		
 	 
               </li>
                <li style="pointer-events: none; color: red;">
                
 	 		<a href="java_video_file.php?action=video11" data-toggle="collapse" aria-expanded="false">Polymorphism in Java</a>
 	 		
 	 	
               </li>
                <li style="pointer-events: none; color: red;">
               
 	 		<a href="java_video_file.php?action=video12" data-toggle="collapse" aria-expanded="false">Class Constructors</a>
 	 		
 	 	
               </li>
                <li style="pointer-events: none; color: red;">
                 
 	 		<a href="java_video_file.php?action=video13" data-toggle="collapse" aria-expanded="false">Exception Handling</a>
 	 		

               </li>
                <li style="pointer-events: none; color: red;">
                 
 	 		<a href="java_video_file.php?action=video14" data-toggle="collapse" aria-expanded="false">Introduction to Java Threads</a>
 	 		
 	 	
         </li>
                <?php } ?>
                
                
                <?php
               // $_SESSION['c_result']=$check1;
                 if($check1>70)
                 {
                ?>
                 <li>
                     <a href="dashexamboard.php">Final Assessment</a>
 	        </li>
                <?php
                 }else{
                ?>
                <li style="pointer-events: none; color: red;">
 	 				<a href="#">Final Assessment</a>
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
            $query = "SELECT  src FROM  java_video WHERE video_id = '" . $java . "' ";
            $result = mysqli_query($con, $query) or die($mysqli_error($con));
            $num = mysqli_num_rows($result);
            $row = mysqli_fetch_array($result);   
            $src = $row['src'];
            }
        ?>
        <?php if(!isset($src)){?>
        <section  style="height: 100vh; display: flex;
            text-align: center;
            justify-content: center;">
            <img style=""height="80%; width:70%;"src="img/video_bg_c.jpg" >

        </section>
        <?php }else {?>

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
        <?php } ?>
        
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
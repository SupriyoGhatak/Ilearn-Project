<?php
session_start();
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
 	 	  		<a href="c_video_file.php?action=video1">Introduction to c</a>
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
                
                <li>
 	 		<a href="#pageSubmenu3" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Core C Topics</a>
 	 		<ul class="collapse list-unstyled" id="pageSubmenu3">
 	 			
 	 			<li>
 	 				<a href="c_video_file.php?action=video12">Loops</a>
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
 	 				<a href="c_video_file.php?action=video16">Structure and Unions</a>
 	 			</li>
                                
 	 		</ul>
 	 	</li>
                
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
                
                
                <li>
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

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
   
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"></script>
        
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/videostyle.css" />
    

    
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
 	 		<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Why C?</a>
 	 	  <ul class="collapse list-unstyled" id="homeSubmenu">
 	 	  	<li>
                            <a href="c_video_file.php?action=video1">Brief History</a>
 	 	  	</li>
 	 	  	<li>
 	 	  		<a href="c_video_file.php?action=video2">Use of C</a>
 	 	  	</li>
                        <li>
 	 	  		<a href="#video3">Foundation of C</a>
 	 	  	</li>

 	 	  </ul>
 	 	</li>
 	 	<li>
 	 		<a href="#">Basic Of C</a>
 	 	</li>
 	 	<li>
 	 		<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Syntax</a>
 	 		<ul class="collapse list-unstyled" id="pageSubmenu">
 	 			<li>
                                    <a href="#">Basic Syntax</a>
 	 			</li>
 	 			<li>
 	 				<a href="#">First Program</a>
 	 			</li>
 	 			

 	 		</ul>
 	 	</li>
                <li>
 	 		<a href="#pageSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Arrays</a>
 	 		<ul class="collapse list-unstyled" id="pageSubmenu2">
 	 			<li>
 	 				<a href="#">Array Idea</a>
 	 			</li>
 	 			<li>
 	 				<a href="#">Concept of Array</a>
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
            session_start();
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
        <section  style="height: 100vh;">
            <img src="img/login/back.jpeg">

        </section>
        <?php }else {?>

        <section style="height: 100vh;">

           <iframe src="<?php echo $src; ?>" width="1100" height="500" controls style="width: 100%;max-height: 100%;"></iframe>
           
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
   
  </body>
  
</html>
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
    <title>Reports</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/teststyle.css" />
    <link rel="stylesheet" href="css/reportstyle.css"/>
  </head>

  <body method="POST">
    <!--================ Start Header Menu Area =================-->
   
    <!--================ End Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    
    <!--================End Home Banner Area =================-->
      <input type="checkbox" name="" id="sidebar-toggle">
      <div class="sidebar">
          <div class="sidebar-header">
              <h3 class="brand">
                  <a href="index.php">
                  <span>iLearn</span>
                  </a>
              </h3>
              <label for="sidebar-toggle" class="ti-menu-alt"></span>
          </div>
          <div class="sidebar-menu">
               <ul>
                  <li>
                      
                      <a class="dashstat" href="test.php" title="Statistics" >
                          <span class="ti-home"></span>
                          <span> Statistics</span>
                      </a>
                  </li>
                  <li>
                      <a class="dashco" href="dashcourses.php" title="Courses">
                          <span class="ti-face-smile"></span>
                          <span> Courses</span>
                      </a>
                  </li>
                  <li>
                      <a class="dashlib" href="dashlibrary.php" title="E-library">
                          <span class="ti-book"></span>
                          <span> E-Library</span>
                      </a>
                  </li>
                  <li>
                      <a class="dashexam" href="dashexamboard.php" title="Exam board">
                          <span class="ti-agenda"></span>
                          <span> Exam board</span>
                      </a>
                  </li>
                  <li>
                      <a class="dashup" href="dashupcoming.php"title="Upcoming Events">
                          <span class="ti-clipboard" ></span>
                          <span> Upcoming Events</span>
                      </a>
                  </li>
                  <li>
                      <a class="dashre" href="dashreports.php" title="Reports">
                          <span class="ti-folder"></span>
                          <span> Reports</span>
                      </a>
                  </li>
                  <li>
                    <a class="dashquery" href="query_history.php" title="Query history">
                        <span class="ti-help" ></span>
                        <span>Query History</span>
                    </a>
                </li>
                 
              </ul>
          </div>
       </div>
      <div class="main-content">
          <header>
              
             <div class="inner_header">
                  <ul class="navigation">
                      <a href="index.php"><li>Home</li></a>
                     
                     
                      <a href="contact.php" ><li>Contact Us</li></a>
                      <a href="logout.php"><li>Logout</li></a>
                  </ul>
            </div>
              <!--
                 <div class="search-wrapper">
                 <span class="ti-search"></span>
                  <input type="search" placeholder="search here">
              </div> 
              <div class="inner_header">
                  <ul class="navigation">
                      <a href="index.php"><li>Home</li></a>
                     
                      <a href="logout.php"><li>Logout</li></a>
                  </ul>
            </div>-->
              <!--<div>
                 <span class="ti-search"></span>
                  <input type="search" placeholder="search">
              </div>
              <div class="social-icons">
                  <span class="ti-bell"></span>
                  <span class="ti-comment"></span>
                  <div></div>
              </div>-->
          </header>
         <!-- <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">-->
         <main>
           
	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Reports</li>
  </ol>
</nav>
            
<h1 class="h2 dash-title">Reports</h1>

<a href="dashreports.php?action=c&c_n=C Programing Language.&duration=6" style="text-decoration: none; color: white;"><button type="button"style="background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  margin-left: 1px;
  cursor: pointer;">C</button></a>
  
  <a href="dashreports.php?action=java&c_n=Java Programing Language.&duration=8" style="text-decoration: none; color: white;"><button type="button" style="background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;">Java</button></a>
  <a href="dashreports.php?action=c_plus&c_n=c_plus&duration=7" style="text-decoration: none; color: white;"><button type="button" style="background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;">C++</button></a>
  <a href="dashreports.php?action=rdbms&c_n=Rdbms Programing Language.&duration=6" style="text-decoration: none; color: white;"><button type="button" style="background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px; margin: 4px 2px;
  margin-bottom: 10px;
  cursor: pointer;">RDBMS</button></a>
  <?php
  if (isset($_GET["action"])){
  $c=$_GET["action"];
  $c_n=$_GET["c_n"];
  $duration=$_GET["duration"];
   //echo $c,$c_n,$duration;
  $query5 = "SELECT  $c FROM  user_buyed_course WHERE user_id = '" . $id . "' ";
  $result5 = mysqli_query($con, $query5) or die($mysqli_error($con));
  $num5 = mysqli_num_rows($result5);
  if($num5>0){
  $row5 = mysqli_fetch_array($result5);
  $course1=$row5[$c];
 if($course1>0){
    // echo $course1;
     $query45 = "SELECT *   FROM  user_exam_result WHERE user_id = '" . $id . "'";
      $result451 = mysqli_query($con, $query45) or die($mysqli_error($con));
      $num55 = mysqli_num_rows($result451);
     if($num55>0){
         $row51 = mysqli_fetch_array($result451);
         if($c=="c"){
         $quiz1=$row51['c_1st'];
         $quiz2=$row51['c_2nd'];
         $final=$row51['c_f'];
         }
         if($c=="java"){
         $quiz1=$row51['java_1st'];
         $quiz2=$row51['java_2nd'];
         $final=$row51['java_f'];
         }
         if($c=="c_plus"){
         $quiz1=$row51['c_plus_1st'];
         $quiz2=$row51['c_plus_2nd'];
         $final=$row51['c_plus_f'];
         }
         if($c=="rdbms"){
         $quiz1=$row51['rdbms_1st'];
         $quiz2=$row51['rdbms_2nd'];
         $final=$row51['rdbms_f'];
         }
         
  ?>

  <div class="row row-cols-1 row-cols-md-3 g-4">
   <div class="col">
       <div class="card h-100">
            <img src="img/quiz.png" class="card-img-top" alt="...">
         <div class="card-body">
           <h5 class="card-title" style="font-size: 35px;">Quiz-1</h5>
           <p class="card-text" style="font-size: 25px;padding-top: 10px;padding-bottom: 20px;">Your Score:&nbsp;&nbsp;<?php echo $quiz1; ?>%</p>
         </div>
      
       </div>
   </div>
   <div class="col">
       <div class="card h-100">
           <img src="img/quiz.png" class="card-img-top" alt="...">
       <div class="card-body">
           <h5 class="card-title" style="font-size: 35px;">Quiz-2</h5>
           <p class="card-text" style="font-size: 25px;padding-top: 10px;padding-bottom: 20px;">Your Score:&nbsp;&nbsp;<?php echo $quiz2; ?>%</p>
       </div>
      
       </div>
   </div>
   <div class="col">
       <div class="card h-100">
           <img src="img/final-assessment.jpg" class="card-img-top" alt="...">
       <div class="card-body">
           <h5 class="card-title" style="font-size: 35px;">final-assessment</h5>
           <p class="card-text" style="font-size: 25px;padding-top: 10px;padding-bottom: 20px;">Your Score:&nbsp;&nbsp;<?php echo $final; ?>%</p>
       </div>
      
       </div>
   </div>
                 
 </div> 

<?php 
if($final>70){

?>

  <div class="serti">
      <a href="certificate/certificate.php?c_n=<?php echo $c_n; ?>&duration=<?php echo $duration; ?>&marks=<?php echo $final;?>" class="cert" style="text-decoration: none;color: white;">Get Certificate</a>
</div>
<?php 

}
 else {
     ?>

<div class="serti ">
      <a href="#" class="cert btn-secondary disabled" style="text-decoration: none;color: white;">Get Certificate</a>
</div>

<?php
 }
    ?>          

             </main>
      </div>
      <?php
      }else{
       
      ?>
      <h1>PLease complete atleast 1  quiz from any topic to show your result</h1>
	
    <?php 
  }
  
  
 }
 else {
 ?>
      <h1>Please Purchcse this course to unlock the module's.</h1>

  <?php } } } ?>
    <!--================ End Testimonial Area =================-->



    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
    <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/owl-carousel-thumb.min.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/mail-script.js"></script>
    <!--gmaps Js-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
    <script src="js/gmaps.min.js"></script>
    <script src="js/theme.js"></script>
  </body>
</html>

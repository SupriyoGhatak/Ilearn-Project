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
    <title>courses</title>
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
  </head>

  <body>
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
                      <a href="test.php">
                          <span class="ti-home"></span>
                          <span> Statistics</span>
                      </a>
                  </li>
                  <li>
                      <a href="dashcourses.php">
                          <span class="ti-face-smile"></span>
                          <span> Courses</span>
                      </a>
                  </li>
                  <li>
                      <a href="dashexamboard.php">
                          <span class="ti-agenda"></span>
                          <span> Exam board</span>
                      </a>
                  </li>
                  <li>
                      <a href="dashupcoming.php">
                          <span class="ti-clipboard"></span>
                          <span> Upcoming Events</span>
                      </a>
                  </li>
                  <li>
                      <a href="dashreports.php">
                          <span class="ti-folder"></span>
                          <span> Reports</span>
                      </a>
                  </li>
                 
              </ul>
          </div>
       </div>
      <div class="main-content">
          <header>
              
              
                 <div class="search-wrapper">
                 <span class="ti-search"></span>
                  <input type="search" placeholder="search here">
              </div> 
              <div class="inner_header">
                  <ul class="navigation">
                      <a href="index.php"><li>Home</li></a>
                     
                      <a href="logout.php"><li>Logout</li></a>
                  </ul>
            </div>
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
      <li class="breadcrumb-item active" aria-current="page">Courses</li>
   </ol>
  </nav>
        <!--    
<h1 class="h2 dash-title">Our Courses</h1>
<p>This is the homepage of a simple admin interface which is part of a tutorial written on Themesberg</p>-->
        
         <?php
        include 'Connection/common.php';
        $id=$_SESSION['id'];
        $temp=0;
        $query = "SELECT * FROM user_buyed_course WHERE user_id = '" . $id . "'";
        $result1 = mysqli_query($con,$query);
        $row = mysqli_fetch_array($result1);
        $_SESSION['c'] = $row['c'];
        $_SESSION['c_plus']=$row['c_plus'];
        $_SESSION['java'] = $row['java'];
        $_SESSION['rdbms']=$row['rdbms'];
        if($_SESSION['c']>0)
        { 
          $temp=1;
          $item_array = array(
                'product_name' => "Programming With C",
                'picture_src' => "img/courses/c.jpg"
                
            );
          $_SESSION["cart"][0] = $item_array;  
        }
        if($_SESSION['java']>0)
        { 
          $temp=1;
          $item_array = array(
                'product_name' => "Programming With java",
                'picture_src' => "img/courses/java.jpg"
                
            );
          $_SESSION["cart"][1] = $item_array;  
        }
        
       
    ?>
        
     <?php
     if($temp>0)
     { 
         if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        
     ?>
         
<div class ="container">
         <div class="row"> 
             <div class="col-sm-4"> 
         <div class="single_course">
                <div class="course_head">
                    <a href="c_video_file.php"> <img class="img-fluid" src="<?php echo $value["picture_src"]; ?>" alt="centered image" style="height: 259px; width : 100%" /> </a>
             
                <div class="course_content"> 
                
                <div class="course_head">
                  <h2 class="mb-1">
                      <a href="c_video_file.php"><?php echo $value["product_name"]; ?></a>
                  </h4>
                  
                        
                    </div>
                    </div>
                </div>
              </div>
             </div>
         </div>
</div>
        
     
     
     <?php } }}else { ?>  

     <div class="popular_courses section_gap_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Our Popular Courses</h2>
              <p>
                Replenish man have thing gathering lights yielding shall you
              </p>
            </div>
          </div>
        </div>
        <div class="row">
         
          <div class="col-lg-12">
            <div class="owl-carousel active_course">
              <div class="single_course">
                <div class="course_head">
                    <a href="course-details.php"> <img class="img-fluid" src="img/courses/c++.jpg" alt="c++" style="height: 259px;" /> </a>
                </div>
                <div class="course_content">
                  <span class="price">Rs250</span>
                  <span class="tag mb-4 d-inline-block">C++</span>
                  <h4 class="mb-3">
                      <a href="course-details.php">C++ Basic And Advance</a>
                  </h4>
                  <p>
                    One make creepeth man bearing their one firmament won't fowl
                    meat over sea
                  </p>
                  <div
                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4"
                  >
                   <div class="authr_meta">
                      <img src="img/courses/mine.png" alt="mine_supriyo" style="height: 45px; width: 45px;" />
                      <span class="d-inline-block ml-2">Supriyo</span>
                    </div>
                    <div class="mt-lg-0 mt-3">
                      <span class="meta_info mr-4">
                        <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                      </span>
                      <span class="meta_info"
                        ><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span
                      >
                    </div>
                  </div>
                </div>
              </div>

              <div class="single_course">
                <div class="course_head">
                    <a href="course-details-c.php"> <img class="img-fluid" src="img/courses/c.jpg" alt="c" style="height: 259px;" /> </a>
                </div>
                <div class="course_content">
                  <span class="price">Rs350</span>
                  <span class="tag mb-4 d-inline-block">C</span>
                  <h4 class="mb-3">
                      <a href="course-details-c.php">Programming On C</a>
                  </h4>
                  <p>
                    One make creepeth man bearing their one firmament won't fowl
                    meat over sea
                  </p>
                  <div
                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4"
                  >
                   <div class="authr_meta">
                      <img src="img/courses/author2.png" alt="" />
                      <span class="d-inline-block ml-2">Tanmoy</span>
                    </div>
                    <div class="mt-lg-0 mt-3">
                      <span class="meta_info mr-4">
                        <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                      </span>
                      <span class="meta_info"
                        ><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span
                      >
                    </div>
                  </div>
                </div>
              </div>
   
              <div class="single_course">
                <div class="course_head">
                    <a href="course-details-java.php"> <img class="img-fluid" src="img/courses/java.jpg" alt="java" style="height: 259px;" /> </a>
                </div>
                <div class="course_content">
                  <span class="price">Rs500</span>
                  <span class="tag mb-4 d-inline-block">Java</span>
                  <h4 class="mb-3">
                      <a href="course-details-java.php">Fundamental Of Java</a>
                  </h4>
                  <p>
                    One make creepeth man bearing their one firmament won't fowl
                    meat over sea d
                    
                    ahsdbkasbdkjasdbkasjdb
                  </p>
                  <div
                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4"
                  >
                    <div class="authr_meta">
                      <img src="img/courses/author3.png" alt="" />
                      <span class="d-inline-block ml-2">Amrita</span>
                    </div>
                    <div class="mt-lg-0 mt-3">
                      <span class="meta_info mr-4">
                        <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                      </span>
                      <span class="meta_info"
                        ><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span
                      >
                    </div>
                  </div>
                </div>
              </div>
                
       
                <div class="single_course">
                <div class="course_head">
                    <a href="course-details-rdbms.php"> <img class="img-fluid" src="img/courses/sql.jpeg" alt="c" style="height: 259px;" /> </a>
                </div>
                <div class="course_content">
                  <span class="price">Rs450</span>
                  <span class="tag mb-4 d-inline-block">RDBMS</span>
                  <h4 class="mb-3">
                      <a href="course-details-c.php">Realtional Database And Management System</a>
                  </h4>
                  <p>
                    One make creepeth man bearing their one firmament won't fowl
                    meat over sea
                  </p>
                  <div
                    class="course_meta d-flex justify-content-lg-between align-items-lg-center flex-lg-row flex-column mt-4"
                  >
                   <div class="authr_meta">
                      <img src="img/courses/author2.png" alt="" />
                      <span class="d-inline-block ml-2">Sanchari</span>
                    </div>
                    <div class="mt-lg-0 mt-3">
                       
                      <span class="meta_info mr-4">
                        <a href="#"> <i class="ti-user mr-2"></i>25 </a>
                      </span>
                      <span class="meta_info"
                        ><a href="#"> <i class="ti-heart mr-2"></i>35 </a></span
                      >
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

     <?php } ?>    
        
        
        
        
        
        
        
   </main>
  </div>
      
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

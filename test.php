<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"
    />
    <link rel="icon" href="img/logo_1.png" style="height: 40px; width: 40px;" type="image/png" />
    <title>dashboard</title>
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
                  <span>ILearn</span>
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
              
              
<!--                 <div class="search-wrapper">
                 <span class="ti-search"></span>
                  <input type="search" placeholder="search here">
              </div> -->
              <div class="inner_header">
                  <ul class="navigation">
                      <a href="index.php" ><li>Home</li></a>
                     
                     
                      <a href="contact.php" ><li>Contact Us</li></a>
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
      <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Statistics</li>
  </ol>
</nav>
            
<h1 class="h2 dash-title">Dashboard</h1>
<p>This is the homepage of a simple admin interface which is part of a tutorial written on Themesberg</p>
<div class="col-md-4 my-3">
                <div class="bg-mattBlackLight px-3 py-3">
                  <h4 class="mb-2">C++</h4>
                  <div class="progress" style="height: 16px;">
                    <div
                      class="progress-bar bg-warning text-mattBlackDark"
                      role="progressbar"
                      style="width: 25%;"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    >
                      25
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 my-3">
                <div class="bg-mattBlackLight px-3 py-3">
                  <h4 class="mb-2">JAVA</h4>
                  <div class="progress" style="height: 16px;">
                    <div
                      class="progress-bar bg-info text-mattBlackDark"
                      role="progressbar"
                      style="width: 50%;"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    >
                      50
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 my-3">
                <div class="bg-mattBlackLight p-3">
                  <h4 class="mb-2">SQL</h4>
                  <div class="progress" style="height: 16px;">
                    <div
                      class="progress-bar bg-success"
                      role="progressbar"
                      style="width: 80%;"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    >
                      80
                    </div>
                  </div>
                </div>
              </div>
           
            <div class="col-md-4 my-3">
                <div class="bg-mattBlackLight p-3">
                  <h4 class="mb-2">C</h4>
                  <div class="progress" style="height: 16px;">
                    <div
                      class="progress-bar bg-success"
                      role="progressbar"
                      style="width: 75%;"
                      aria-valuenow="25"
                      aria-valuemin="0"
                      aria-valuemax="100"
                    >
                      75
                    </div>
                  </div>
                </div>
              </div>
              <!--</div>-->
            
            <div class="row">
              <div class="col-md-6">
                <div class="bg-mattBlackLight my-2 p-3">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                  Ratione libero totam rerum eos nam ab perspiciatis voluptatum
                  in. Quidem natus autem quae. Velit accusamus sit, perspiciatis
                  sunt earum tempora veniam.
                </div>
              </div>
              <div class="col-md-6">
                <div class="bg-mattBlackLight my-2 p-3">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                  Ratione libero totam rerum eos nam ab perspiciatis voluptatum
                  in. Quidem natus autem quae. Velit accusamus sit, perspiciatis
                  sunt earum tempora veniam.
                </div>
              </div>
                </div>
             </main>
  </div>
	
     
      

   
    <!--================ End Testimonial Area =================-->-->

    

    
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

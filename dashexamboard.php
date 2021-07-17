<?php
  session_start();
  include 'Connection/common.php';
?>
<!D
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
    <title>Examboard</title>
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
    <link rel="stylesheet" href="css/eboard.css" />
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
               <!--  <div class="search-wrapper">
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
    <li class="breadcrumb-item active" aria-current="page">Examboard</li>
  </ol>
</nav>
            
<h1 class="h2 dash-title">Exam Board</h1>
<p>This is the homepage of a simple admin interface which is part of a tutorial written on Themesberg</p>


<div class="card shadow mb-4">
    <div class="card-header py-3">
        <div class="row">
            <div class="col">
            <h6 class="m-0 font-weight-bold text-primary">Exam Subject List</h6>
            </div>
            </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <table class="table table-bordered dataTable no-footer">
            <thead>
                <tr role="row">
                    <th class="sorting" tabindex="0" aria-controls="exam_subject_table" rowspan="1" colspan="1" aria-label="Exam Name: activate to sort column ascending" style="width: 56px;">Exam Name</th>
                    <th class="sorting_asc" tabindex="0" aria-controls="exam_subject_table" rowspan="1" colspan="1" aria-label="Subject: activate to sort column descending" style="width: 81px;" aria-sort="ascending">Subject</th>
                    <th class="sorting" tabindex="0" aria-controls="exam_subject_table" rowspan="1" colspan="1" aria-label="Exam Datetime: activate to sort column ascending" style="width: 86px;">Exam Datetime</th>
                    <th class="sorting" tabindex="0" aria-controls="exam_subject_table" rowspan="1" colspan="1" aria-label="Total Question: activate to sort column ascending" style="width: 77px;">Total Question</th>
                    <th class="sorting" tabindex="0" aria-controls="exam_subject_table" rowspan="1" colspan="1" aria-label="Total Question: activate to sort column ascending" style="width: 77px;">Status</th>
                    <th class="sorting" tabindex="0" aria-controls="exam_subject_table" rowspan="1" colspan="1" aria-label="Right Answer Mark: activate to sort column ascending" style="width: 77px;">Right Answer Mark</th>
                    <th class="sorting" tabindex="0" aria-controls="exam_subject_table" rowspan="1" colspan="1" aria-label="Wrong Answer Mark: activate to sort column ascending" style="width: 80px;">Wrong Answer Mark</th>
                    <th class="sorting_disabled" rowspan="1" colspan="1" aria-label="Action" style="width: 54px;">Action</th>
                </tr>
            </thead>  
            <tbody>
                <?php
                 $id=$_SESSION['id'];
                 $sql_f = "SELECT * FROM user_exam_result WHERE  user_id = '" . $id . "' ";
                 $result13 = mysqli_query($con, $sql_f);
                 if (mysqli_num_rows($result13) > 0) {
                 $row1 = mysqli_fetch_assoc($result13);
                 $c_f= $row1['c_f'];
                 $check1=$row1['c_2nd'];
                if($check1>70){
                ?>
                <tr role="row" class="odd">
                    <td>Final Assassment</td>
                    <td class="sorting_1">C</td>
                    <td><?php
                    date_default_timezone_set("Asia/kolkata");
                    echo  date("Y-m-d h:i:sa"); ?></td>
                    <td>4 Question/topic</td>
                    <?php 
                    if($c_f>70)
                    {
                    ?>
                    <td><span class="badge badge-success">Completed</span></td>
                    <?php }else{ ?>
                    <td><span class="badge badge-secondary">Incomplete</span></td>
                    <?php } ?>
                    <td>4 Mark</td>
                    <td>-1 Mark</td>
                    <td>
                        <div align="center">
                            <a href="qctopic.php" class="btn btn-success small btn-sm active" role="button" aria-pressed="true">See EXAM</a>

                           
			</div>
	            </td>
                </tr>
                 <?php }} ?>
                <tr role="row" class="even">
                    <td>1st term</td>
                    <td class="sorting_1">C++</td>
                    <td>2021-05-13 17:45:00</td>
                    <td>10 Question/topic</td>
                    <td><span class="badge badge-secondary">Incomplete</span></td>
                    <td>4 Mark</td>
                    <td>-1 Mark</td>
                    <td>
                        <div align="center">
                            
                            <a href="qc++topic.php" class="btn btn-success small btn-sm active" role="button" aria-pressed="true">See EXAM</a>

			</div>
                    </td>
                </tr>
                <tr role="row" class="even">
                    <td>1st term</td>
                    <td class="sorting_1">JAVA</td>
                    <td>2021-05-13 17:45:00</td>
                    <td>10 Question/topic</td>
                    <td><span class="badge badge-success">Completed</span></td>
                    <td>4 Mark</td>
                    <td>-1 Mark</td>
                    <td>
                        <div align="center">
                            <a href="qjtopic.php" class="btn btn-success small btn-sm active" role="button" aria-pressed="true">See EXAM</a>
                        </div>
                    </td>
                </tr>
                <tr role="row" class="even">
                    <td>1st term</td>
                    <td class="sorting_1">RDBMS</td>
                    <td>2021-05-13 17:45:00</td>
                    <td>10 Question/topic</td>
                    <td><span class="badge badge-secondary">Incomplete</span></td>
                    <td>4 Mark</td>
                    <td>-1 Mark</td>
                    <td>
                        <div align="center">
                            <a href="qrtopic.php" class="btn btn-success small btn-sm active" role="button" aria-pressed="true">See EXAM</a>
                        </div>
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>
      <!--          <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Upcoming Events</li>
  </ol>
</nav>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Upcoming Events</li>
  </ol>
</nav>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Upcoming Events</li>
  </ol>
</nav>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Upcoming Events</li>
  </ol>
</nav>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Upcoming Events</li>
  </ol>
</nav>-->
                <!--<div class="my-3 p-3 bg-white rounded box-shadow">
    <h6 class="border-bottom border-gray pb-2 mb-0">Recent updates</h6>
    <div class="media text-dark pt-3">
   
      <p class="media-body pb-3 mb-0  lh-125 border-bottom border-gray ti-agenda nm">
       
          Notice regarding upcoming new batch &nbsp;
          <button type="button" class="btn btn-outline-info btn-sm " data-toggle="modal" data-target="#exampleModal">
  Read more
</button>

       
       </p>
      </div>
    
    
    
    <div class="media text-dark pt-3">
     
      <p class="media-body pb-3 mb-0  lh-125 border-bottom border-gray ti-agenda">
        
        Notice regarding exams of previous batch&nbsp;
          <button type="button" class="btn btn-outline-info btn-sm " data-toggle="modal" data-target="#exampleModa2">
  Read more
</button></p>
    </div>
    <div class="media text-dark pt-3">
      
      <p class="media-body pb-3 mb-0  lh-125 border-bottom border-gray ti-agenda">
        
        Notice for students having c course&nbsp;
          <button type="button" class="btn btn-outline-info btn-sm " data-toggle="modal" data-target="#exampleModa3">
  Read more
</button>
      </p>
    </div>
    <div class="media text-dark pt-3">
      
      <p class="media-body pb-3 mb-0  lh-125 border-bottom border-gray ti-agenda">
        
        Notice for students having c++ course&nbsp;
          <button type="button" class="btn btn-outline-info btn-sm " data-toggle="modal" data-target="#exampleModa4">
  Read more
</button>
      </p>
    </div>
    <div class="media text-dark pt-3">
      
      <p class="media-body pb-3 mb-0  lh-125 border-bottom border-gray ti-agenda">
        
        Notice for students having JAVA course&nbsp;
          <button type="button" class="btn btn-outline-info btn-sm " data-toggle="modal" data-target="#exampleModa5">
  Read more
</button>
      </p>
    </div>
    <div class="media text-dark pt-3">
      
      <p class="media-body pb-3 mb-0 lh-125 border-bottom border-gray ti-agenda">
        
        Notice for students having SQL course&nbsp;
          <button type="button" class="btn btn-outline-info btn-sm " data-toggle="modal" data-target="#exampleModa6">
  Read more
</button>
      </p>
    </div>
    <small class="d-block text-right mt-3">
      <a href="#">All notices</a>
    </small>
  </div>-->
             </main>
      </div>
	
     
      

   
    <!--================ End Testimonial Area =================-->-->

    <!--================ Start footer Area  =================
    <footer class="footer-area section_gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Best Courses</h4>
            <ul>
              <li><a href="#">C</a></li>
              <li><a href="#">C++</a></li>
              <li><a href="#">Java</a></li>
              <li><a href="#">Web Developement</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Quick Links</h4>
            <ul>
              <li><a href="#">Carrer</a></li>
              <li><a href="#">Exams</a></li>
              <li><a href="#">Notice Board</a></li>
              <li><a href="#">Certification</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Features</h4>
            <ul>
              <li><a href="#">Compiler</a></li>
              <li><a href="#">Videos</a></li>
              <li><a href="#">Online Library</a></li>
              <li><a href="#">Report</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 single-footer-widget">
            <h4>Instructors</h4>
            <ul>
              <li><a href="#">Amrita Pal</a></li>
              <li><a href="#">Sanchari Acharya</a></li>
              <li><a href="#">Supriyo Ghatak</a></li>
              <li><a href="#">Tanmoy Das</a></li>
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 single-footer-widget">
            <h4>Newsletter</h4>
            <p>You can trust us. we only send promo offers,</p>
            <div class="form-wrap" id="mc_embed_signup">
              <form
                target="_blank"
                action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                method="get"
                class="form-inline"
              >
                <input
                  class="form-control"
                  name="EMAIL"
                  placeholder="Your Email Address"
                  onfocus="this.placeholder = ''"
                  onblur="this.placeholder = 'Your Email Address'"
                  required=""
                  type="email"
                />
                <button class="click-btn btn btn-default">
                  <span>subscribe</span>
                </button>
                <div style="position: absolute; left: -5000px;">
                  <input
                    name="b_36c4fd991d266f23781ded980_aefe40901a"
                    tabindex="-1"
                    value=""
                    type="text"
                  />
                </div>

                <div class="info"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="row footer-bottom d-flex justify-content-between">
          <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
            
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Ilearn</a>

          </p>
          <div class="col-lg-4 col-sm-12 footer-social">
            <a href="#"><i class="ti-facebook"></i></a>
            <a href="#"><i class="ti-twitter"></i></a>
            <a href="#"><i class="ti-dribbble"></i></a>
            <a href="#"><i class="ti-linkedin"></i></a>
          </div>
        </div>
      </div>
    </footer>
    
    <!--================ End footer Area  =================-->

    
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

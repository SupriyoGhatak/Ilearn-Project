<?php
session_start();
include 'Connection/common.php';
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
                      <a href="#"><li>  </li></a>
                     
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
            </div>
              <div>
                 <span class="ti-search"></span>
                  <input type="search" placeholder="search">
              </div>
              <div class="social-icons">
                  <span class="ti-bell"></span>
                  <span class="ti-comment"></span>
                  <div></div>
              </div> -->
          </header>
         <!--<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"> -->
         <main>
           
	<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Query History</li>
  </ol>
</nav>
            
<!--<div class="row mt">
			  		<div class="col-lg-12"> 
                      <div class="content-panel"> -->
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>Complaint Number</th>
                                  <th>Reg Date</th>
                                  <th>Last Updation Date</th>
                                  <th>Status</th>
                                  <th>Action</th>
                                  
                              </tr>
                              </thead>
                              
                
            
     <!--</div> -->
     </main>
	<?php 
        $query4="select * from complaints where user_id='".$_SESSION['id']."'";
        $res4 = mysqli_query($con, $query4) or die(mysqli_error($con));
while($row=mysqli_fetch_array($res4))
{
  ?>
                              <tr>
                                  <td align="center"><?php echo htmlentities($row['complaintNumber']);?></td>
                                  <td align="center"><?php echo htmlentities($row['regDate']);?></td>
                                 <td align="center"><?php echo  htmlentities($row['lastUpdationDate']);

                                 ?></td>
                                  <td align="center"><?php 
                                    $status=$row['status'];
                                    if($status=="" or $status=="NULL") {
                                     ?>
                                      <button type="button" class="btn btn-theme04">Not Processed Yet</button> 
                                    <?php }
 if($status=="in process") { ?>
<button type="button" class="btn btn-warning">In Process</button>
 <?php }
if($status=="closed") 
{
?>
<button type="button" class="btn btn-success">Closed</button>
<?php } ?>
                                   <td align="center">
                                   <a href="user_complaintdetails.php?cid=<?php echo htmlentities($row['complaintNumber']);?>">
<button type="button" class="btn btn-primary">View Details</button></a>
                                   </td>
                                </tr>
                              <?php } ?>
                            
                              
                          </table>
                          </section>
                  </div>
               </div>		
		  	</div>
		  	
		  	
     
                     

   
    <!--================ End Testimonial Area =================-->

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

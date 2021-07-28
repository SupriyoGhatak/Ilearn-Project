<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/logo_1.png" style="height: 40px; width: 40px;" type="image/png" />
    <title>Courses</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
    
   <?php
        include 'header_other.php';
    ?>
    <!--================ End Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Courses</h2>
                <div class="page_link">
                    <a href="index.php">Home</a>
                  <a href="courses.php">Courses</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================ Start Popular Courses Area =================-->
    <div class="popular_courses section_gap_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Our Popular Courses</h2>
              <p>
                Explore our programs to find the most suitable one for you.
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single course -->
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
                    A comprehensive C++ course to start learning from the basics and progress towards the advanced topics.
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
                    A very well structured course to help you master programming with C in a structured manner.
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
    <!--JAVA AMRITA-->
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
                    Learn valuable core Java concepts and skills from scratch from this learner-friendly course.
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
                
       <!--RDBMS Course Sanchari-->
                <div class="single_course">
                <div class="course_head">
                    <a href="course-details-rdbms.php"> <img class="img-fluid" src="img/courses/sql.jpeg" alt="c" style="height: 259px;" /> </a>
                </div>
                <div class="course_content">
                  <span class="price">Rs450</span>
                  <span class="tag mb-4 d-inline-block">DBMS</span>
                  <h4 class="mb-3">
                      <a href="course-details-rdbms.php">Database Management System</a>
                  </h4>
                  <p>
                    This course is a quick,fun introduction to creating databases using proven concepts.
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
    <!--================ End Popular Courses Area =================-->

    
    <!--================ Start Feature Area =================-->
    <section class="feature_area section_gap">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Awesome Feature</h2>
              <p>
                Replenish man have thing gathering lights yielding shall you
              </p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-book"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">E-Library</h4>
                <p>
                  One make creepeth, man bearing theira firmament won't great
                  heaven
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-book"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Affordable Online Course</h4>
                <p>
                  One make creepeth, man bearing theira firmament won't great
                  heaven
                </p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-earth"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Certification</h4>
                <p>
                  One make creepeth, man bearing theira firmament won't great
                  heaven
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Feature Area =================-->

    <?php 
        include 'footer.php';
       
     ?>
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
            
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Ilearn</a>

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

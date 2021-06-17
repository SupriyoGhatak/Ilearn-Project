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
    <title>Courses Details</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <style>
      .dis:hover{
          color:black;
          background: yellow;
      }
  </style>

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
                <h2>Course Details</h2>
                <div class="page_link">
                  <a href="index.php">Home</a>
                  <a href="courses.php">Courses</a>
                  <a href="course-details-c.php">Courses Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================ Start Course Details Area =================-->
    <section class="course_details_area section_gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 course_details_left">
                    <div class="main_image">
                        <img class="img-fluid" src="img/courses/course-details.jpg" alt="">
                    </div>
                    <div class="content_wrapper">
                        <h4 class="title">Objectives</h4>
                        <div class="content">
                           The course aims to provide exposure to problem-solving through programming.
                           It aims to train the student to the basic concepts of the C-programming language. 
                           This course involves a lab-like component which is designed to give the student hands-on experience with the concepts.

                            <br>
                            <br>
                            <h6 class ="text"> Learning Outcomes :</h1>
                            <br>
                           After the course the students are expected to be able to :
                           <ul>
                               <li>Identify​ situations where computational methods and computers would be useful.</li>
                               <li>Given a computational problem, identify and abstract​the programming task involved.</li>                           

                               <li> Approach​ the programming tasks using techniques learned and write​ pseudo-code.</li>
                               <li> Write ​the program on a computer, edit, compile, debug, correct, recompile and run it.</li>
                           </ul>
                        </div>

                        <h4 class="title">Course Prerequisites</h4>
                        <div class="content">
                            This course is very much beginner friendly hence all that is needed is an understanding of fundamental programming concepts.
                            <br>
                            <br>
                           
                        </div>

                        <h4 class="title">Course Outline</h4>
                        <div class="content">
                            <ul class="course_list">
                                <li class="justify-content-between d-flex">
                                    <p>C Language Overview</p>
                                <botton class="primary-btn text-uppercase" data-toggle="collapse" data-target="#click1" type="button" style="color: black">View Details</botton>  
                                </li>
                                <div class="collapse" id="click1">
                                    <ul style="color: black;">
                                        <li>Facts about C</li>
                                            <li style="padding-bottom: 10px;">
                                                Why to use C?
                                            </li>
                                        </ul>
                                </div> 
                                
                                <li class="justify-content-between d-flex">
                                    <p>C Environment Setup</p>
                                    <botton class="primary-btn text-uppercase" data-toggle="collapse" data-target="#click2" type="button" style="color: black">View Details</botton>  
                                </li>
                                <div class="collapse" id="click2">
                                    <ul style="color: black;">
                                        <li>Installation on Unix/Linus</li>
                                            <li style="padding-bottom: 10px;">
                                                Installation on Windows
                                            </li>
                                            <li style="padding-bottom: 10px;">
                                                Installation on Mac OS
                                            </li>
                                        </ul>
                                </div> 
                         
                                <li class="justify-content-between d-flex">
                                    <p>C Basic Syntax</p>
                                    <botton class="primary-btn text-uppercase" data-toggle="collapse" data-target="#click4" type="button" style="color: black">View Details</botton>  
                                </li>
                                <div class="collapse" id="click4">
                                    <ul style="color: black;">
                                        <li>Tokens and Semicolons</li>
                                            <li style="padding-bottom: 10px;">
                                                Comments
                                            </li>
                                            <li style="padding-bottom: 10px;">
                                               Identifiers and Keywords
                                            </li>
                                            <li style="padding-bottom: 10px;">
                                               Datatypes and Variables
                                            </li>
                                            <li style="padding-bottom: 10px;">
                                               Constants and Literals
                                            </li>
                                            <li style="padding-bottom: 10px;">
                                               Operators
                                            </li>
                                        </ul>
                                </div> 
                                <li class="justify-content-between d-flex">
                                    <p>Core C Topics</p>
                                    <botton class="primary-btn text-uppercase" data-toggle="collapse" data-target="#click5" type="button" style="color: black">View Details</botton>  
                                </li>
                                <div class="collapse" id="click5">
                                    <ul style="color: black;">
                                        <li class="justify-content-between d-flex">
                                    
                                    <p>Loops</p> </li>
                                <li class="justify-content-between d-flex">
                                    <p>Functions</p> </li>
                                <li class="justify-content-between d-flex">
                                    <p>Scope Rules</p> </li>
                                <li class="justify-content-between d-flex">
                                    <p>Arrays and Pointers</p> 
                                        </li>
                                         <p>Structure and Unions</p> </li>
                                        <li class="justify-content-between d-flex">   
                                        </ul>
                                </div>
                             
                            

                                <li class="justify-content-between d-flex">
                                    <p>Input and Output</p>
                                    <botton class="primary-btn text-uppercase" data-toggle="collapse" data-target="#click7" type="button" style="color: black">View Details</botton>  
                                </li>
                                <div class="collapse" id="click7">
                                    <ul style="color: black;">
                                        <li>Standard Files</li>
                                         <li style="padding-bottom: 10px;">
                                                File I/O
                                            </li>   
                                        </ul>
                                </div> 

                                <li class="justify-content-between d-flex">
                                    <p>Error Handling</p>
                                    <botton class="primary-btn text-uppercase" data-toggle="collapse" data-target="#click8" type="button" style="color: black">View Details</botton>  
                                </li>
                                <div class="collapse" id="click8">
                                    <ul style="color: black;">
                                        <li>Different Blocks</li>
                                            <li style="padding-bottom: 10px;">
                                                Memory Management
                                            </li>
                                        </ul>
                                </div> 
                                
                                        </ul>
                                </div> 
                    </div>
                </div>

        
                <div class="col-lg-4 right-contents">
                    <ul>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Trainer’s Name</p>
                                <span class="or">Tanmoy Das</span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Course Fee </p>
                                <span class="or">Rs:350</span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Available Seats </p>
                                <span class="or">100</span>
                            </a>
                        </li>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Topic </p>
                                <span class="or">Programming in C</span>
                            </a>
                        </li>
                    </ul>
                     <?php
                        //session_start();
                        if(isset($_SESSION['username'])){
                            include 'Connection/common.php';
                            $id=$_SESSION['id'];
                             $temp=0;
                              $query = "SELECT * FROM user_buyed_course WHERE user_id = '" . $id . "'";
                              $result1 = mysqli_query($con,$query);
                              $row = mysqli_fetch_array($result1);
                              $c= $row['c'];
                            if($c>0){
                            
                            ?>
                    
                            <a onmouseover="this.style.background='black'" class="primary-btn2 text-uppercase enroll rounded-0 text-black" ><button class="dis" style="text-decoration: none; border:none; background: none; color: white;"  value="Enroll the course"disabled="true">Enroll the course</button></a>
                            <?php }else { ?>
                            <a href="course-buy-c.php" class="primary-btn2 text-uppercase enroll rounded-0 text-black">Enroll the course</a>
                    
                    
                        <?php } } else { ?> 
                    <a href="check_login_script.php" class="primary-btn2 text-uppercase enroll rounded-0 text-black">Enroll the course</a>
                     <?php } ?>
<!--comme-->        
                    <h4 class="title">Reviews</h4>
                    <div class="content">
                        <div class="review-top row pt-40">
                            <div class="col-lg-12">
                                <h6 class="mb-15">Provide Your Rating</h6>
                                <div class="d-flex flex-row reviews justify-content-between">
                                    <span>Quality</span>
                                    <div class="star">
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked "></i>
                                        <i class="ti-star"></i>
                                    </div>
                                    <span>Outstanding</span>
                                </div>
                                <div class="d-flex flex-row reviews justify-content-between">
                                    <span>Puncuality</span>
                                    <div class="star">
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star"></i>
                                    </div>
                                    <span>Outstanding</span>
                                </div>
                                <div class="d-flex flex-row reviews justify-content-between">
                                    <span>Quality</span>
                                    <div class="star">
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                        <i class="ti-star checked"></i>
                                    </div>
                                    <span>Outstanding</span>
                                </div>
                            </div>
                        </div>
                        <div class="feedeback">
                            <h6>Your Feedback</h6>
                            <textarea name="feedback" class="form-control" cols="10" rows="10"></textarea>
                            <div class="mt-10 text-right">
                                <a href="#" class="primary-btn2 text-right rounded-0 text-black">Submit</a>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="comments-area mb-30">
                            <div class="comment-list">
                                <div class="single-comment single-reviews justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c1.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Lisa Paul</a>
                                                <div class="star">
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star"></span>
                                                    <span class="ti-star"></span>
                                                </div>
                                            </h5>
                                            <p class="comment">
                                                Learned a lot from these lectures,very much informative.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-list">
                                <div class="single-comment single-reviews justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c2.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Tarun Raj</a>
                                                <div class="star">
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star"></span>
                                                    <span class="ti-star"></span>
                                                </div>
                                            </h5>
                                            <p class="comment">
                                                Concepts are well described in detail.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comment-list">
                                <div class="single-comment single-reviews justify-content-between d-flex">
                                    <div class="user justify-content-between d-flex">
                                        <div class="thumb">
                                            <img src="img/blog/c3.jpg" alt="">
                                        </div>
                                        <div class="desc">
                                            <h5><a href="#">Rita Ghosh</a>
                                                <div class="star">
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star checked"></span>
                                                    <span class="ti-star"></span>
                                                    <span class="ti-star"></span>
                                                </div>
                                            </h5>
                                            <p class="comment">
                                                Would 100% recommend this course.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ End Course Details Area =================-->

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
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

      <!--================ End footer Area  =================-->
      
          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script>
              var button=doucment.getElementById("dis");
              button.disabled=true;
              
              
          </script>
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
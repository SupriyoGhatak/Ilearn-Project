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
                      <a href="dashlibrary.php">
                          <span class="ti-book"></span>
                          <span> E-Library</span>
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
                 <li>
                    <a href="query_history.php">
                        <span class="ti-help"></span>
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
                <!-- <div class="search-wrapper">
                 <span class="ti-search"></span>
                  <input type="search" placeholder="search here">
              </div> 
              <div class="inner_header">
                  <ul class="navigation">
                      <a href="index.php"><li>Home</li></a>
                     
                      <a href="contact.php"><li>Contact Us</li></a>
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
      <li class="breadcrumb-item active" aria-current="page">E-Library</li>
   </ol>
  </nav>
        <!--    
<h1 class="h2 dash-title">Our Courses</h1>
<p>This is the homepage of a simple admin interface which is part of a tutorial written on Themesberg</p>-->
        
    <style>
    #cat-list li{
        cursor: pointer;
    }
       #cat-list li:hover {
        color: grey;
        background: #d3d3d3;
    }
    .prod-item p{
        margin: unset;
    }
    .bid-tag {
    position: absolute;
    right: .5em;
    
    .container1{
       
        display:flex;
        flex-direction: row;
    }
    .course_head{
        display: flex;
        flex-direction: row;

    }
    body {background-color: #ddd; margin: 3rem;}

#tv {
  position: relative;
  width: 350px;
  height: 550px;
  background: white;
  border-radius: 0% 0% 0% 0% / 0% 0% 0% 0% ;
  color: white;
  box-shadow: 20px 20px rgba(0,0,0,.15);
  transition: all .4s ease;
}
#tv:hover {
  border-radius: 0% 0% 50% 50% / 0% 0% 5% 5% ;
  box-shadow: 10px 10px rgba(0,0,0,.25);
}

    
    
}
</style>
  <body method="POST">
    <!--================ Start Header Menu Area =================-->
   
    <!--================ End Header Menu Area =================-->
    <?php
    include 'Connection/common.php';
    
    ?>
     <?php 
     $cid = isset($_GET['category_id']) ? $_GET['category_id'] : 0;
     if(isset($_GET['course'])){
         
     $course= $_GET['course'];
     
     }
     ?>
    
    
   
    <div class="container1">
        <div class="course_head" style="display:flex; flex-direction: row;">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header"><h3>Categories</div></h3>
                    <div class="card-body">
                        <ul class='list-group' id='cat-list'>
                            
                        <h6><li class='list-group-item' data-id='' data-href="dashlibrary.php?page=home&category_id=1&course=c">C</li> </h6>
                        <h6><li class='list-group-item' data-id='' data-href="dashlibrary.php?page=home&category_id=2&course=c_plus">C++</li> </h6><!-- comment -->
                        <h6><li class='list-group-item' data-id='' data-href="dashlibrary.php?page=home&category_id=3&course=java">JAVA</li> </h6><!-- comment -->
                        <h6><li class='list-group-item' data-id='' data-href="dashlibrary.php?page=home&category_id=4&course=rdbms">RDBMS</li> </h6>
                           
                        </ul>
                    </div>
                 </div>
            </div>
       
    
          
           
             <div class="card col-sm-4">
                    <!--<div class="card-body"> -->
                        <!--<div class="row"> -->
                            <?php
                            $id=$_SESSION['id'];
                            if(isset($_GET['course'])){
                                
                            
                            $temp=0;
                            $query = "SELECT $course FROM user_buyed_course WHERE user_id = '" . $id . "'";
                            $result1 = mysqli_query($con,$query);
                           $row = mysqli_fetch_array($result1);
                            $num=mysqli_num_rows($result1);
                            if($num>0 && $row[$course]>0)
                            {
                             
                               $where = "";
                               if($cid > 0){
                                   $where  = " where CONCAT('[',REPLACE(category_ids,',','],['),']') LIKE '%[".$cid."]%'  ";
                               } 
                                $books = $con->query("SELECT * from books $where order by title asc");
                                if($books->num_rows <= 0){
                                    echo "<center><h4><i>No Available Product.</i></h4></center>";
                                } 
                                while($row=$books->fetch_assoc()): 
                             ?>
                         
                            
                             <div class="col-sm-8">
                                 <!--<div class="card">-->
                                    
                                     <div class="card-img-top d-flex" allowtransparency="true" frameborder="0" style="background:white; height: 300px; width: 300px; display: flex; justify-content: center; align-items: center;">
                                         <iframe allowtransparency="true" style="background:#fff; height: 300px; width: 350px;" frameborder="0" src="<?php echo $row['image_path']  ?>"  alt="c" style="background-color: #FFFFFF" width="1000" height="400" frameborder="0"  ></iframe>
                                     
                                     </div>
                                      <div class="float-right align-top d-flex">
                                     </div>
                                     <div class="card-body prod-item">
                                         <h5>
                                         <p>Title: <?php echo $row['title'] ?></p>
                                         <p>Author: <?php echo $row['author'] ?></p>
                                         <p>
                                            
                                         </h5>
                                         <!-- t($cat_arr[$value])){
                                              $cats .= $cat_arr[$value];
                                            }
                                          }
                                          //echo $cats;
                                          ?> -->
</small>                                  
                                         <h7> <p class="truncate"><?php echo $row['description'] ?></p></h7>
                                         
                                         
                                         <a href="<?php echo $row['pdf_path'] ?> "> <button class="btn btn-primary btn-sm view_prod" type="button" style="background-color: #4682B4;
                        border: none;
                        color: white;
                        padding: 15px 32px;
                        text-align: left;
                        /*text-decoration: none;*/
                        display: inline-block;
                        font-size: 12px;
                        border-radius: 6px;
 
                        position: relative;
    left: 38%;">DOWNLOAD
                                             </button></a>
                                      
                                     </div>
                                 </div>
                             </div>
                         </div>
                    </div>
                </div>
            </div>
        </div>
                            <?php endwhile;
                            }else{ ?>
                            
                              <!--<div id="design" style="padding : 90px 7px 7px 7px;"> -->
                              <div class="sketchy" style="padding: 2rem 5rem;
    display: inline-block;
    border: 3px solid #333333;
    font-size: 1.5rem;
    border-radius: 2% 6% 5% 4% / 1% 1% 2% 4%;
    text-transform: uppercase;
    letter-spacing: 0.3ch;
    background: #ffffff;
    position: relative;
    ">  
                              <h5>SEEMS LIKE YOU HAVE YET TO BUY THIS COURSE</53>
                              <br>
                              <h3>PLEASE PURCHASE THE COURSE TO VIEW THE E-BOOKS</h3>
                              <a href="courses.php"> <button class="btn btn-primary btn-sm view_prod" type="button" style="background-color: #4682B4;
                        border: none;
                        color: white;
                        padding: 15px 32px;
                        text-align: left;
                        /*text-decoration: none;*/
                        display: inline-block;
                        font-size: 12px;
                        border-radius: 6px;
 
                        position: relative;
    left: 38%;">VIEW COURSES
                                             </button></a>
                                      
                            </div> </div></div>
                          <?php  }
                            
                                }else{ ?>
                            
                            <div class="sketchy" style="padding: 2rem 5rem;
    display: inline-block;
    border: 3px solid #333333;
    font-size: 1.5rem;
    border-radius: 2% 6% 5% 4% / 1% 1% 2% 4%;
    text-transform: uppercase;
    letter-spacing: 0.3ch;
    background: #ffffff;
    position: relative;
    ">  
                                
                                
                                <h1>PLEASE SELECT THE COURSE BOUGHT </h1>
                            </div>
                                  
                               
                            </div>
                          <?php  }
                            ?>
                           
           
    </div>
</div>
</div>        
        
     
     
     
     
        
        
        
   </main>
  
      
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
    <script>
    $('#cat-list li').click(function(){
        location.href = $(this).attr('data-href')
    })
     $('#cat-list li').each(function(){
        var id = '<?php echo $cid > 0 ? $cid : 'all' ?>';
        if(id == $(this).attr('data-id')){
            $(this).addClass('active')
        }
    })
     $('.view_prod').click(function(){
        uni_modal_right('View Book','view_prod.php?id='+$(this).attr('data-id'))
     })
</script>
<script>
    $('iframe').css('background', 'white');
$('iframe').contents().find('body').css('backgroundColor', 'white');
    
</script>

  </body>
</html>

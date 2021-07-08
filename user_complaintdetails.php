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
    <li class="breadcrumb-item active" aria-current="page">Query Details</li>
    </ol>
</nav>
   
     <?php 
     $query5="select complaints.*,user_details.user_name as name from complaints join user_details on user_details.user_id=complaints.user_id where complaints.complaintNumber='".$_GET['cid']."'";

      $res5 = mysqli_query($con, $query5) or die(mysqli_error($con));
      $ret="select * from complaintremark where complaintremark.complaintNumber='".$_GET['cid']."'";
      $cde = mysqli_query($con, $ret) or die(mysqli_error($con));       
      while($row=mysqli_fetch_array($res5))
      {?>
      <div class="row mt">
            <label class="col-sm-2 col-sm-2 control-label"><b>Complaint Number : </b></label>
          		<div class="col-sm-4">
          		<p><?php echo htmlentities($row['complaintNumber']);?></p>
          		</div>
             <label class="col-sm-2 col-sm-2 control-label"><b>Reg. Date :</b></label>
              <div class="col-sm-4">
              <p><?php echo htmlentities($row['regDate']);?></p>
              </div>
          <label class="col-sm-2 col-sm-2 control-label"><b>Nature of Complaint :</b></label>
              <div class="col-sm-10">
              <p><?php echo htmlentities($row['noc']);?></p>
              </div>

<?php } ?>

               
 
            

  <?php while($row=mysqli_fetch_array($cde))
      {?>        
      </div>
 <div class ="row mt">
     <label class="col-sm-2 col-sm-2 control-label"><b>Remark:</b></label>
              <div class="col-sm-10">
                  <p><?php echo htmlentities($row['remark']);?></p>
              </div>
   
     <label class="col-sm-2 col-sm-2 control-label"><b>Remark Date :</b></label>
              <div class="col-sm-10">
              <?php echo htmlentities($row['remarkDate']);?>
              </div>
            
     <label class="col-sm-2 col-sm-2 control-label"><b>Final Status :</b></label>
              <div class="col-sm-10">
 <?php echo  htmlentities($row['status']); ?>
              </div>
            </div>

      <?php } ?>

 
              </div>
            </div> 
            




  </ol>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Notice Board</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/admin_style.css">
</head>

<body>
    <div class="container">
        <div class="navigator">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fa fa-graduation-cap" aria-hidden="true"></i></span>
                        <span class="title">
                            <h2>Ilearn</h2>
                        </span>
                    </a>
                </li>
                <li>
                    <a href="admin_dashboard.php">
                        <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="">
                        <span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
                        <span class="title">Customers</span>
                    </a>
                </li>
                <li>
                    <a href="admin_notice.php">
                        <span class="icon"><i class="fa fa-comment" aria-hidden="true"></i></span>
                        <span class="title">Notice Board</span></a>
                </li>
                <li>
                    <a href="admin_video.php">
                        <span class="icon"><i class="fa fa-video-camera" aria-hidden="true"></i></span>
                        <span class="title">Video Links</span></a>
                </li>
                <li>
                    <a href="admin_exam.php">
                        <span class="icon"><i class="fa fa-book" aria-hidden="true"></i></span>
                        <span class="title">Exam Details</span></a>
                </li>
                <li>
                    <a href="admin_query.php">
                        <span class="icon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                        <span class="title">Manage Queries</span></a>
                </li>
                <!-- <li>
                    <a href="">
                        <span class="icon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                        <span class="title">Password</span></a>
                </li> -->
                <li>
                    <a href="logout.php">
                        <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                        <span class="title">Logout</span></a>
                </li>
            </ul>
        </div>
        <div class="main">
            <div class="topbar">
                <div class="toggle" onclick="toggleMenu();"></div>
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search Here">
                    </label>

                </div>
                <div class="user">
                    <img src="a.jpg" alt="" style="height: 90px; width: 90px;">
                </div>
            </div>
            <div class="cardbox">
                <div class="card">
                    <div>
                        <div class="number">1024</div>
                        <div class="cardName">Views</div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="number">10</div>
                        <div class="cardName">Sales</div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="number">10000</div>
                        <div class="cardName">Earning</div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-rupee" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="details_notice">
                <div class="recentNotice">
                    <div class="cardHeader">
                        <h2>Notice Board Area</h2>
                    </div>
                    <div class="container1">
                        <form name="noticeboard" action="notice_script.php" method = "post">
                          <div class="row">
                            <div class="col-25">
                              <label for="fname">Enter Title</label>
                            </div>
                            <div class="col-75">
                              <input type="text"  name="title" placeholder="Your Notice Title..">
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-25">
                              <label for="lname">Enter Small Description</label>
                            </div>
                            <div class="col-75">
                              <input type="text"  name="descrip" placeholder="Small description">
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-25">
                              <label for="lname">Enter Date</label>
                            </div>
                            <div class="col-75">
                              <input type="date" name="noticedate" placeholder="Enter The Date">
                            </div>
                          </div>

                            <!--
                          <div class="row">
                            <div class="col-25">
                              <label for="country">Course</label>
                            </div>
                            <div class="col-75">
                              <select id="course" name="course">
                                <option value="c">C</option>
                                <option value="c++">C++</option>
                                <option value="Java">JAVA</option>
                                <option value="rdbms">RDBMS</option>
                              </select>
                            </div>
                          </div>
                            -->
                          <div class="row">
                            <div class="col-25">
                              <label for="subject">Content Of Notice</label>
                            </div>
                            <div class="col-75">
                              <textarea id="subject" name="noticecontent" placeholder="Write something.." style="height:200px"></textarea>
                            </div>
                          </div>
                          <div class="row">
                            <input type="submit" value="Submit">
                          </div>
                        </form>
                      </div>
                </div>
            </div>

        </div>
</div>
</body>
<script>
    function toggleMenu() {
        let toggle = document.querySelector('.toggle');
        let navigator = document.querySelector('.navigator');
        let main = document.querySelector('.main');
        toggle.classList.toggle('active');
        navigator.classList.toggle('active');
        main.classList.toggle('active');
    }
</script>

</html>
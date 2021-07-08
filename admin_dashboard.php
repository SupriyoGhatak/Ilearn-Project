 <?php
            session_start();
            include 'Connection/common.php';
            $sales=0;
            $cost=0;
            //for visitor
            $query = "SELECT  * FROM  visit";
            $result = mysqli_query($con, $query) or die($mysqli_error($con));
            $num = mysqli_num_rows($result);
            $row = mysqli_fetch_array($result);
            $visit=$row['total_count'];
            $_SESSION['visit']=$visit;
            //for course
            $query1 = "SELECT  * FROM  user_buyed_course WHERE c = '1'";
            $result1 = mysqli_query($con, $query1) or die($mysqli_error($con));
            $num1 = mysqli_num_rows($result1);
            $cost+=($num1*350);
            $sales+=$num1;
            //for c++
            $query2 = "SELECT  * FROM  user_buyed_course WHERE c_plus = '1'";
            $result2 = mysqli_query($con, $query2) or die($mysqli_error($con));
            $num2 = mysqli_num_rows($result2);
            $cost+=($num2*250);
            $sales+=$num2;
            //for java
            $query3 = "SELECT  * FROM  user_buyed_course WHERE java = '1'";
            $result3 = mysqli_query($con, $query3) or die($mysqli_error($con));
            $num3 = mysqli_num_rows($result3);
            $cost+=($num3*500);
            $sales+=$num3;
            //for rdbms
            $query4 = "SELECT  * FROM  user_buyed_course WHERE rdbms = '1'";
            $result4 = mysqli_query($con, $query4) or die($mysqli_error($con));
            $num4 = mysqli_num_rows($result4);
            $cost+=($num4*450);
            $sales+=$num4;
             $_SESSION['cost']=$cost;
             $_SESSION['sales']=$sales;
            
            
            
            
            
            ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/admin_style.css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Course', 'Participants'],
          ['C',     <?php echo $num1; ?>],
          ['C++',   <?php echo $num2; ?>],
          ['JAVA',  <?php echo $num3; ?>],
          ['RDBMS', <?php echo $num4; ?>]
        //   ['Sleep',    7]
        ]);

        var options = {
          title: ' COURSE DETAILS'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
</head>

<body>
    <div class="container">
        <div class="navigator">
            <ul>
                <li>
                    <a href="index.php">
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
                        <span class="title">Exam Deatils</span></a>
                </li>
                <li>
                    <a href="admin_query.php">
                        <span class="icon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                        <span class="title">Manage Queries</span></a>
                </li>
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
                        <div class="number"><?php echo $visit; ?></div>
                        <div class="cardName">Views</div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="number"><?php echo $sales; ?></div>
                        <div class="cardName">Sales</div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="number"><?php echo $cost; ?></div>
                        <div class="cardName">Earning</div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-rupee" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="details">
                <div class="recentOrder">
                    <div class="cardHeader">
                        <h2>Recent Orders</h2>
                        
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Payment</td>
                                <td>Course</td>
                                <td>Status</td>
                            </tr>
                        </thead>
                        <?php
                        $query_data = "SELECT * FROM billing ORDER BY id DESC";
                        $result_data = mysqli_query($con,$query_data);
                         if(mysqli_num_rows($result_data) > 0) {

                            while ($row = mysqli_fetch_array($result_data)) {
                        
                        ?>
                        
                        <tbody>
                            <tr>
                                <td><?php echo $row["fullname"]; ?></td>
                                <td><?php echo $row["price"]; ?></td>
                                <td><?php echo $row["payment"]; ?></td>
                                <td><?php echo $row["course"]; ?></td>
                                <?php
                                $s=$row["status"];
                                if($s=="Delivered")
                                {
                                ?>
                                <td><span class="status delivered">Delivered</span></td>
                                <?php }else{ ?>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                         <?php }}}
                         ?>

                        </tbody>
                    </table>
                </div>
                <div class="recentCustomer">
                    <div class="cardHeader">
                        
                            <div id="piechart"></div>
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
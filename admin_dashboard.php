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
          ['C',     11],
          ['C++',      21],
          ['JAVA',  19],
          ['RDBMS', 20]
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
                <!-- <li>
                    <a href="">
                        <span class="icon"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                        <span class="title">Password</span></a>
                </li> -->
                <li>
                    <a href="">
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
                        <tbody>
                            <tr>
                                <td>Rohan Raj</td>
                                <td>1200</td>
                                <td>Piad</td>
                                <td>C</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Supriyo Ghatak</td>
                                <td>250</td>
                                <td>Piad</td>
                                <td>C</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Aktar azam</td>
                                <td>350</td>
                                <td>Piad</td>
                                <td>C++</td>
                                <td><span class="status progress">In Progress</span></td>
                            </tr>

                            <tr>
                                <td>Raju</td>
                                <td>1200</td>
                                <td>Due</td>
                                <td>JAVA</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Roshan</td>
                                <td>1200</td>
                                <td>Piad</td>
                                <td>DBMS</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Nilay </td>
                                <td>1200</td>
                                <td>Due</td>
                                <td>JAVA</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>




                            <tr>
                                <td>Rohan Raj</td>
                                <td>1200</td>
                                <td>Piad</td>
                                <td>C</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Supriyo Ghatak</td>
                                <td>250</td>
                                <td>Piad</td>
                                <td>C</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Aktar azam</td>
                                <td>350</td>
                                <td>Piad</td>
                                <td>C++</td>
                                <td><span class="status progress">In Progress</span></td>
                            </tr>

                            <tr>
                                <td>Raju</td>
                                <td>1200</td>
                                <td>Due</td>
                                <td>JAVA</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>

                            <tr>
                                <td>Roshan</td>
                                <td>1200</td>
                                <td>Piad</td>
                                <td>DBMS</td>
                                <td><span class="status delivered">Delivered</span></td>
                            </tr>

                            <tr>
                                <td>Nilay </td>
                                <td>1200</td>
                                <td>Due</td>
                                <td>JAVA</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
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
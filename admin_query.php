<?php
            session_start();
            include 'Connection/common.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Notice Board</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/admin_style.css">
    <style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
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
                        <div class="number"><?php echo $_SESSION['visit'] ?></div>
                        <div class="cardName">Views</div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-eye" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="number"><?php echo $_SESSION['sales'] ?></div>
                        <div class="cardName">Sales</div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="number"><?php echo $_SESSION['cost'] ?></div>
                        <div class="cardName">Earning</div>
                    </div>
                    <div class="iconBox">
                        <i class="fa fa-rupee" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            <div class="details_notice">
                <div class="recentNotice">
                    <!--<div class="cardHeader">
                        <h2>Query Management</h2> -->
                        <div class="module">
				<div class="module-head">
				<h3>Complaints</h3>
				</div>
				<div class="module-body table">


							
				 <table>
            <thead>
  <tr>
    <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 200px;height: 30px;">Complaint no</th>
                    <th class="sorting_asc" tabindex="0" rowspan="1" colspan="1" style="width: 200px;height: 30px;">Complaint name</th>
                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 200px;height: 30px;">Reg date</th>
                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 200px;height: 30px;">Status</th>
                    <th class="sorting" tabindex="0" rowspan="1" colspan="1" style="width: 200px;height: 30px;">Action</th>
  </tr>
            </thead>
                                <tbody>
                    
                            <?php 
$complaint_query1="select complaints.*,user_details.user_name as name from complaints join user_details on user_details.user_id=complaints.user_id where complaints.status is null ";
$ress = mysqli_query($con, $complaint_query1) or die(mysqli_error($con));
while($row=mysqli_fetch_array($ress))
{
?>										
										<tr>
											<td><?php echo htmlentities($row['complaintNumber']);?></td>
											<td><?php echo htmlentities($row['name']);?></td>
											<td><?php echo htmlentities($row['regDate']);?></td>
										
											<td><button type="button" class="btn btn-danger">Not processed yet</button></td>
											
											<td>   <a href="admin_complaintdetails.php?cid=<?php echo htmlentities($row['complaintNumber']);?>"> View Details</a> 
											</td>
											</tr>

										<?php  } ?>
										</tbody>
								</table>
							</div>
						</div>	
            </div>
        </div>
    </div>
</div>
</body>
</html>
    
						
						
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
                    <div class="module">
							<div class="module-head">
								<h3>Complaint Details</h3>
							</div>
							<div class="module-body table">
								<table cellpadding="0" cellspacing="0" border="0" class="datatable-1 table table-bordered table-striped	 display" width="100%">
									
									<tbody>

<?php $st='closed';



$complaint_query2="select complaints.*,user_details.user_name as name from complaints join user_details on user_details.user_id=complaints.user_id where complaints.complaintNumber='".$_GET['cid']."'";

$ress = mysqli_query($con, $complaint_query2) or die(mysqli_error($con));
while($row=mysqli_fetch_array($ress))
{


?>						
                                                                  <div class="details_notice">
                
      <div style="margin-left:50px;">
                                                                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                                                <tr>
      <td  >&nbsp;</td>
      <td >&nbsp;</td>
    </tr>
    <tr height="50">
										
											<td><b>Complaint Number :</b></td>
											<td><?php echo htmlentities($row['complaintNumber']);?></td>
    
											<td colspan="3"><b>Complainant Name:</b></td>
											<td> <?php echo htmlentities($row['name']);?></td>
											<td><b>Reg Date :</b></td>
											<td colspan="3"><?php echo htmlentities($row['regDate']);?>
											</td>
										</tr>

<tr>
											
											
											<td ><b>Nature of Complaint :</b></td>
											<td colspan="3"> <?php echo htmlentities($row['noc']);?></td>
											
										</tr>
<tr>
											<td><b>Complaint Details :</b></td>
											
											<td colspan="3"> <?php echo htmlentities($row['complaintdetails']);?></td>
											
										</tr>

											</tr>
<tr>
											


<?php } ?></td>
</tr>
<?php  //$ret=mysqli_query($bd, "select complaintremark.remark as remark,complaintremark.status as sstatus,complaintremark.remarkDate as rdate from complaintremark join tblcomplaints on tblcomplaints.complaintNumber=complaintremark.complaintNumber where complaintremark.complaintNumber='".$_GET['cid']."'");
////while($rw=mysqli_fetch_array($ret))
{
?>
<!--
<tr>
<td><b>Remark</b></td>
<td colspan="5"><?php echo  htmlentities($rw['remark']); ?> <b>Remark Date <?php echo  htmlentities($rw['rdate']); ?></b></td>
</tr> 

<tr>
<td><b>Status</b></td>
<td colspan="5"><?php echo  htmlentities($rw['sstatus']); ?></td>
</tr> -->
<?php }?>

<tr>
<td><b>Final Status</b></td>
											
											<td colspan="5"><?php if($row['status']=="")
											{ echo "Not Processed Yet";
} else {
										 echo htmlentities($row['status']);
										 }?></td>
											
										</tr>



<tr>
											
											
											<td> 
											<?php if($row['status']=="closed"){

												} else {?>
                                                                                            <br>
                                                                                            <a href="admin_updatecomplaint.php?cid=<?php echo $_GET['cid']; ?>"> 

                                                                                                Take Action</a> </td>
											<?php } ?></td>
											
										<?php   ?>
										
								</table>
							</div>
						</div>	
                    

        </body>
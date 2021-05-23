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
    <title>Ilearn Education</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- main css -->
    <link rel="stylesheet" href="css/profile_style.css" />
    
    <link rel="stylesheet" href="css/style.css" />
    
  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
    <?php
        include 'header_index.php';
        include 'Connection/common.php';
        $id=$_SESSION['id'];
        $query = "SELECT * FROM user_details WHERE user_id = '" . $id . "'";
        $result1 = mysqli_query($con,$query);
        $row = mysqli_fetch_array($result1);
        $_SESSION['email'] = $row['user_email'];
        $_SESSION['username']=$row['user_name'];
        $_SESSION['phone'] = $row['user_phone'];
        $_SESSION['DOB']=$row['user_dob'];
        $_SESSION['Adress']=$row['user_address'];
         $_SESSION['user_img']=$row['user_image'];
    ?>
    
    <div class="container emp-profile section_gap_top">
            <form name="save"  method="POST" enctype="multipart/form-data" >
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <?php
                            $img=$_SESSION['user_img'];
                            //echo $img;
                            
                            if($img!=2){   ?>
                            <img src="<?php echo $_SESSION['user_img']; ?>" alt="profile pic" id="blah"/>
                            <?php }else{?>
                            <img src="img/demo_pic.png" alt="profile pic" id="blah"/>
                            <?php } ?>
                            <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="image" onchange="readURL(this);"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                        <p id="myP"><?php echo $_SESSION['username']; ?></p>
                                    </h5>
                                    <h6>
                                        
                                        
                                    </h6>
                                    <p class="proile-rating">RANKINGS : <span>8/10</span></p>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 example">
                        <input  value="Edit Profile" type="button" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>SOCIAL MEDIA LINKS</p>
                            <p>Heey</p>
                            
                            <p> ADD SKILLS</p>
                            
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row example">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p id="myP"><?php echo $_SESSION['id']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="ex1fld1">Name</label>
                                            </div>
                                            <div class="col-md-6 example">
                                                <p> <input type="text" name="name" readonly value="<?php echo $_SESSION['username'];  ?>" style="border: none; font-weight: 600;
    color: #0062cc;" /></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="ex1fld2">Email</label>
                                            </div>
                                            <div class="col-md-6 example">
                                                <p> <input type="text" name="email" readonly value="<?php echo $_SESSION['email']; ?>" size="50" style="border: none; font-weight: 600;
    color: #0062cc;"/></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="ex1fld3">Phone</label>
                                            </div>
                                            <div class="col-md-6 example">
                                                <p> <input type="text" name="phone" readonly value="<?php echo $_SESSION['phone']; ?>"  style="border: none;font-weight: 600;
    color: #0062cc;"/></p>
                                            </div>
                                        </div>
                                    <div class="row">
                                            <div class="col-md-6">
                                                <label for="ex1fld3">Date of birth</label>
                                            </div>
                                            <div class="col-md-6 example">
                                                <p> <input type="text" name="DOB" readonly value="<?php echo $_SESSION['DOB']; ?>"  style="border: none;font-weight: 600;
    color: #0062cc;"/></p>
                                            </div>
                                        </div>
                                <div class="row">
                                            <div class="col-md-6">
                                                <label for="ex1fld3">Address</label>
                                            </div>
                                            <div class="col-md-6 example">
                                                <p> <input type="text" name="Address" readonly value="<?php echo $_SESSION['Adress']; ?>" size="50" style="border: none;font-weight: 600;
    color: #0062cc;"/></p>
                                            </div>
                                        </div>
                                        
                            </div>
                          
                        </div>
                    </div>
                </div>
            </form>           
        </div>
    
    
    <?php 
        include 'footer.php'; 
     ?>
    
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
            
              
            
              
           var t=1;
           var readonly = true;
            $('.example input[type="button"]').on('click', function(){
               $('.example input[type="text"]').attr('readonly', !readonly);
               
               readonly=!readonly;
               t=!t;
               if(t==0){
               $('.example input[type="button"]').val(readonly ? 'Edit' : 'Save');
           }
           else
           {
               //$('.example input[type="button"]').val(readonly ? 'Edit' : 'Save');
               document.forms['save'].action="my_profile_script.php";
               document.forms['save'].submit();
           }
               
               return false;
            });
            
            
          </script>    
          <script>
              function readURL(input){
                /*if(input.files && input.files[0])
                {
                    var reader = new FileReader();
                    
                    reader.onload = function(e){
                        $('#blah')
                                .attr('src', e.target.result);
                                
                    };
                    reader.readAsDataURL(input.files[0]);*/
                    document.forms['save'].action="my_profile_image_script.php";
                    document.forms['save'].submit();
                //}
            }
          </script>
  </body>
</html>
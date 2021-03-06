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
    <link rel="stylesheet" href="css/san.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/tooltip.css" />
    
    
  </head>

  <body method="POST">
    <!--================ Start Header Menu Area =================-->
    <?php
        include 'header_index.php';
    ?>
    <!--================ End Header Menu Area =================-->

    
    
    
    <!----Content Part Main Page------------------>
    <div class="popular_courses section_gap_top">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-6 img-responsive"><img src="img/courses/c.jpg" width = "100%" alt="Image" style="height: 450px;"></div>
            <div class="col-sm-1 col-lg-1"></div>
            <div class="col-sm-5 col-lg-5"><br>
                
                <table id="Mytable" >
                    <tr>
                        <th style="color: black; font-size: 22px;">Title:</th>
                        <td style="color: black; font-size: 20px;"> Programming With C</td>
                    </tr>
                    <tr>
                        <th><br></th>
                    </tr>
                    <tr>
                        <th style="color: black; font-size: 22px;">Author:</th>
                        <td style="color: black; font-size: 20px;"> Tanmoy Das</td>
                    </tr>
                    <tr>
                        <th><br></th>
                    </tr>
                    <tr>
                        <th style="color: black; font-size: 22px;">Duration:</th>
                        <td style="color: black; font-size: 20px;"> 6 weeks</td>
                    </tr>
                    <tr>
                        <th><br></th>
                    </tr>
                    <tr>
                        <th style="color: black; font-size: 22px;" >Description: &nbsp;</th>
                        <td style="color: black; font-size: 18px;"> 
                           
                            This is the Most Elaborative and It gives the Basic Course
                            of Programming in C which will..<a href="course-details-c.php">Read More</a>
                        </td>
                    </tr>
                    <tr>
                        <th><br></th>
                    </tr>
                
                    <tr>
                        <th style="color: black; font-size: 22px;">Price:</th>
                        <td style="color: black; font-size: 20px;"> Rs:350 </td>
                    </tr>
                    <tr>
                            <td>
                                    <span class="help-tip">
                                        <p>courses price :Rs 287 <br>GST(18%) :Rs 63 <br>Total : Rs 350</p>
                                    </span>
                            </td>
                    </tr>
                       
                       <!--<th style="color: black; font-size: 22px;">Price:</th>     
                        <td style="color: black; font-size: 20px;"> Rs:350  <!--<span class="help-tip"> 
                                <p>Course Price : Rs 287 <br> GST(18%) : Rs 63 <br> --> 
                            
                            
                        </td>

                </tr> 
                    
                   
                </table>

                <!--<div class="form-group">
      <!--<label for="promo_code">Apply Promocode:</label> 
      <input type="text" class="form-control" id="coupon_code" placeholder="Apply Promocode" name="coupon_code">
	  <b><span id="message" style="color:green;"></span></b>
    </div>
    
    <button id="apply" class="btn btn-default">Apply</button>
	<button id="edit" class="btn btn-default" style="display:none;">Edit</button>
  
</div>   -->
                
                <a href="payment.php?action=c&price=350">  <button style="background-color: #4CAF50;
                        border: none;
                        color: white;
                        padding: 15px 32px;
                        text-align: center;
                        /*text-decoration: none;*/
                        display: inline-block;
                        font-size: 16px;
                        border-radius: 8px;
                        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
                        position: relative;
    left: 38%;">Buy Now
                  </button></a>
            </div>
    <!--<div style="display: flex; justify-content: right; height: 450px;">-->
       
    </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12"></div>
        </div>
    </div>
    
   
    
    
    
    
    
    <!----------Ending Part------------------------------>
    <?php 
        include 'footer.php';
       
     ?>
     

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
	$("#apply").click(function(){
		if($('#promo_code').val()!=''){
			$.ajax({
						type: "POST",
						url: "process.php",
						data:{
							coupon_code: $('#coupon_code').val()
						},
						success: function(dataResult){
							var dataResult = JSON.parse(dataResult);
							if(dataResult.statusCode==200){
								var after_apply=$('#total_price').val()-dataResult.value;
								$('#total_price').val(after_apply);
								$('#apply').hide();
								$('#edit').show();
								$('#message').html("Promocode applied successfully !");
								
							}
							else if(dataResult.statusCode==201){
								$('#message').html("Invalid promocode !");
							}
						}
			});
		}
		else{
			$('#message').html("Promocode can not be blank .Enter a Valid Promocode !");
		}
	});
	$("#edit").click(function(){
		$('#coupon_code').val("");
		$('#apply').show();
		$('#edit').hide();
		location.reload();
	});
</script>
  </body>
</html>
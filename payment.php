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
    
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/stylee.css"/>
    
  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
    <?php
        include 'header_index.php';
    ?>
    <!--================ End Header Menu Area =================-->
    <!-- <div class="popular_courses section_gap_top">  
    <form>
        <table class="table table-borderless">
            <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">First</th>
                      <th scope="col"></th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row"></th>
                      <td>Mark</td>
                      
                      <td>@mdo</td>
                    </tr>
                    <tr>
                      <th scope="row"></th>
                      <td>Jacob</td>
                      
                      <td>@fat</td>
                    </tr>
                    <tr>
                      <th scope="row"></th>
                      <td colspan="2">Larry the Bird</td>
                      
                    </tr>
                  </tbody>
           </table>
       
    </form>
    </div> -->
    
    
    <div class="popular_courses section_gap_top">  
    <form>
        
       <!-- <div class="row"> -->
        <!-- <div class="col-75"> -->
       <div class="container"> 
        <div class="row"> 
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="EnterName">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="abc@xyz.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="EnterAddress">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="EnterCity">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="EnterState">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="100001">
              </div>
            </div>
          </div>

           <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Enter Name">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div> 

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
          <input type="submit" value="Continue to checkout" class="btn">
         <!-- <a href="cardinfo.php" class="btn">Continue to checkout</a> -->
      </form>
      </div>
      </div>
      </div>
`     </div>
      
           
    
    


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
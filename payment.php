
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
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/tachyons@4.10.0/css/tachyons.min.css">
    <link rel="stylesheet" href="/vendors/formvalidation/dist/css/formValidation.min.css">

  <body>
    <!--================ Start Header Menu Area =================-->
    <?php
        include 'header_index.php';
    ?>
    <?php
           include 'Connection/common.php';
          
           $course=$_GET['action'];
           $_SESSION['course']=$course;
           
           $price=$_GET['price'];
           $_SESSION['price'] = $price;
           
           $fullname=$_SESSION['username'];
           $payment="Due";
           $status="Pending";
           $id1=$_SESSION['id'];
           
           //check it is alredy present or not
           $query = "SELECT  * FROM  billing WHERE user_id = '" . $id1 . "' AND course = '" . $course . "' ";
           $result = mysqli_query($con, $query) or die($mysqli_error($con));
           $num = mysqli_num_rows($result);
           if($num==0){
           $abc= "INSERT INTO billing(fullname,status,price,payment,course,user_id) VALUES('$fullname','$status','$price','$payment','$course','$id1')";
           $res = mysqli_query($con, $abc) or die(mysqli_error($con));
           //$_SESSION['id']= mysqli_insert_id($con);
           }
            
            ?>
    <!--================ End Header Menu Area =================-->
    
    
    <div class="popular_courses section_gap_top">  
    <form name = "form1" method = "post" action="payment_script.php">
        
       <!-- <div class="row"> -->
        <!-- <div class="col-75"> -->
       <div class="container"> 
        <div class="row"> 
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>

            <input type="text" id="fname" name="fullname" placeholder="EnterName" required="true"><!-- 
                 -->

            

            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="abc@xyz.com" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="EnterAddress" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="EnterCity" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="EnterState" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="100001" required>
              </div>
            </div>
          </div>
         
       
           <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <!--<i class="fa fa-cc-amex" style="color:blue;"></i>-->
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="ccname">Name on Card</label>
            <input type="text" id="ccname" name="cardname" placeholder="Enter Name" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" class ="input-reset ba b--black-20 pa2 mb2 db w-100" required>
            <label for="expmonth">Card Expiry Date</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="mm/yyyy" required>

           <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018" required>
              </div> 
              <div class="col-50"> 
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" required>
              </div>
           </div>
       <!--   </div> -->

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
          
          
    <script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script>
   <!-- <link rel="stylesheet" href="https://unpkg.com/tachyons@4.12.0/css/tachyons.min.css"/> -->
<script src="/vendors/formvalidation/dist/js/FormValidation.min.js"></script>
<script src="/vendors/formvalidation/dist/js/plugins/Tachyons.min.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function(e) {
    FormValidation.formValidation(
        document.getElementById('form1'),
        {
            fields: {
                ccnum: {
                    validators: {
                        notEmpty: {
                            message: 'The credit card number is required'
                        },
                        creditCard: {
                            message: 'The credit card number is not valid'
                        },
                    }
                }
            },
            plugins: {
                trigger: new FormValidation.plugins.Trigger(),
                tachyons: new FormValidation.plugins.Tachyons(),
                submitButton: new FormValidation.plugins.SubmitButton(),
                icon: new FormValidation.plugins.Icon({
                    valid: 'fa fa-check',
                    invalid: 'fa fa-times',
                    validating: 'fa fa-refresh'
                }),
            },
        }
    )
    .on('core.validator.validated', function(e) {
        if (e.field === 'ccnum' && e.validator === 'creditCard' && e.result.valid) {
            let icon = '';
            // e.result.meta.type can be one of
            // AMERICAN_EXPRESS, DINERS_CLUB, DINERS_CLUB_US, DISCOVER, JCB, LASER,
            // MAESTRO, MASTERCARD, SOLO, UNIONPAY, VISA
            switch (e.result.meta.type) {
                
                
                case 'DISCOVER':
                    icon = 'fa-cc-discover';
                    break;
                
                case 'MASTERCARD':
                
                    icon = 'fa-cc-mastercard';
                    break;
                
                case 'VISA':
                    icon = 'fa-cc-visa';
                    break;
                
                default:
                    icon = 'fa-credit-card';
                    break;
            }

            // Query the icon element
            const iconEle = e.element.nextSibling;
            iconEle.setAttribute('class', 'fv-plugins-icon ' + icon);
        }
    })
    .on('core.element.validated', function(e) {
        if (e.field === 'ccnum' && !e.valid) {
            const iconEle = e.element.nextSibling;
            iconEle.setAttribute('class', 'fv-plugins-icon fa fa-times');
        }
    });
});
</script>
  </body>
</html>
<?php
  session_start();
  include 'Connection/common.php';
  $type="c_2nd";
  $course="c";
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
    <title>courseexam</title>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
    
    <link rel="stylesheet" href="css/eboard.css" />
    <link rel="stylesheet" href="css/qtopic.css" />
    <link rel="stylesheet" href="css/qstn.css" />
    
    
  </head>

  <body name="save"  method="POST">
    
      
        <!--   <header class="header_areaa">
      

        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display 
            <a class="navbar-brand logo_h" href="#"
               ><img src="img/logo_1111.png" alt="" 
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling 
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                      
              </ul>
            </div>
          </div>
        </nav>
               
     
    </header>-->
            <header>
                <div class="ab" style="color: red;font-size: 20px;padding-left: 450px;position: -webkit-sticky; position:sticky; margin-top: 40px;"> </div>
     <div class="ab" style="color: red;font-size: 20px;padding-left: 450px;position: -webkit-sticky; position:sticky;">You have to score more than 70% to qualify for next assessment.</div>
               
            </header>
     <div class="maini">
         
        
         <div class="box" id="questionScreen1">
            <div class="hee">
            <div class="titlee" style="font-size: 30px;">
                  QUESTIONS:
            </div>
            <div class="timerBox"  id="countdown">Time Left:&nbsp;<span></span></div>
            </div>
              <form name="myForm" id="myForm" method="POST" action="final_exam_script.php?type=<?php echo $type; ?>&course=<?php echo $course; ?>">
                  
                  <?php
                  $i=1;
                  $sql1 = "SELECT * FROM `question` WHERE  type = '" . $type . "' AND course = '" . $course . "' ";
                  $result1 = mysqli_query($con, $sql1);
                   if (mysqli_num_rows($result1) > 0) {
                   while($row1 = mysqli_fetch_assoc($result1)) {
                 ?>
              
                  <div class="questionBox">
                       <?php echo $i ." : ". $row1['question']; ?>
                  </div>
                   <?php
                    $qid=$row1['qid'];
                    $sql = "SELECT * FROM `answer` WHERE `ans_id` = $qid  AND type = '" . $type . "' AND course = '" . $course . "'";
                    $result = mysqli_query($con, $sql);
                   ?>
                 <div class="optionBox">
                  <span>
                      <?php 
                       if (mysqli_num_rows($result) > 0) {
                       while($row = mysqli_fetch_assoc($result)) {
                      ?>
                  <input type="radio" id="<?php echo $row['ans_id']; ?>" name="quizcheck[<?php  echo $i; ?>]" value="<?php echo $row['aid']; ?>">
                  <label for="<?php echo $row['ans_id']; ?>"><?php echo $row['answers']; ?></label><br>
                <?php
                       }}
                ?>
               
                  </span>
                 </div>
                  
                  
                   <?php
        
        $i++;
         }}
        
        ?>
        
                    <div class="footer">
                        <button type="submit" style="background-color: #04AA6D;
                           border-radius: 5px;
                           padding: 7px 15px;
                           color: #fff;
                           border: 0;
                           outline: none;
                           font-size: 20px;width: 100px;" >
                          Submit 
                        </button>
                    </div>
              </form>
            
          </div>
  </div>

     
      </body>
      <script src="js/jquery-3.2.1.min.js"></script>
      <script type="text/javascript">
          $(function(){
    let totalTime =5000;
    let min = 0;
    let sec = 0;
    let counter = 0;
    let timer = setInterval(function () {
        counter++;
        min = Math.floor( (totalTime - counter) / 60);
        sec = totalTime - (min * 60) - counter;
        $(".timerBox span").text(min + ":" + sec);
      if(counter == totalTime) {
          clearInterval(timer);
          submitform();

         
      }
    }, 1000);
    showResult();
});

function submitform(){
          alert('test was ended');
          //document.forms['myForm'].action="final_exam_script.php";
          document.forms["myForm"].submit();
        }  


function showResult() {
    $("questionScreen").hide();
    $("resultScreen").show();
}

      </script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</html>

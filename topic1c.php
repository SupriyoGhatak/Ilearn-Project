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
    <title>c-courseexam</title>
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

  <body>
      
           <header class="header_areaa">
      

        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
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
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                  
                  
             
                
                
                
               
                  
                 
                  
                  
                
             
                
                 
              </ul>
            </div>
          </div>
        </nav>
               <div class="ab" style="color: red;font-size: 20px;padding-left: 450px;">You have to score more than 70% to qualify for next assessment.</div>
     
    </header>
     <div class="maini">
         
         
         <div class="box" id="questionScreen1">
              <div class="hee">
              <div class="titlee" style="font-size: 30px;">
                  QUESTIONS:
              </div>
              <div class="timerBox">Time Left:&nbsp; <span></span></div>
               </div>
              <div class="questionBox">
                  1)&nbsp;What is c?
              </div>
              <div class="optionBox">
                  
                  <span><form>
                  <input type="radio" id="html" name="fav_language" value="HTML">
                  <label for="html">HTML</label><br>
                  <input type="radio" id="css" name="fav_language" value="CSS">
                  <label for="css">CSS</label><br>
                  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                  <label for="javascript">JavaScript</label><br>
                &nbsp;&nbsp;<input type="radio" id="hello" name="fav_language" value="hello">
                  <label for="hello">JavaScript</label>
                      </form> </span>
              
              
              </div>
              <div class="questionBox">
                  1)&nbsp;What is c?
              </div>
                 <div class="optionBox">
                  
                  <span><form>
                  <input type="radio" id="html" name="fav_language" value="HTML">
                  <label for="html">HTML</label><br>
                  <input type="radio" id="css" name="fav_language" value="CSS">
                  <label for="css">CSS</label><br>
                  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                  <label for="javascript">JavaScript</label><br>
                  &nbsp;&nbsp;<input type="radio" id="hello" name="fav_language" value="hello">
                  <label for="hello">JavaScript</label>
                      </form> </span>
               
              </div>
                 
              <div class="footer">
                  <button onclick="showResult()" style="background-color: #04AA6D;
    border-radius: 5px;
    padding: 7px 15px;
    color: #fff;
    border: 0;
    outline: none;
    font-size: 20px;width: 100px;" >
                      Next 
                  </button>
                  
                  
                  
                 
              </div>
          </div>
        <!-- <div class="box" id="questionScreen2" style="display: none;">
              <div class="hee">
              <div class="titlee" style="font-size: 30px;">
                  QUESTIONS:
              </div>
              <div class="timerBox">Time Left:&nbsp; <span></span></div>
               </div>
              <div class="questionBox">
                  1)&nbsp;What is chdkwah?
              </div>
              <div class="optionBox">
                  
                  <span><form>
                  <input type="radio" id="html" name="fav_language" value="HTML">
                  <label for="html">HTML</label><br>
                  <input type="radio" id="css" name="fav_language" value="CSS">
                  <label for="css">CSS</label><br>
                  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                  <label for="javascript">JavaScript</label><br>
                 <input type="radio" id="hello" name="fav_language" value="hello">
                  <label for="hello">JavaScript</label>
                      </form> </span>
              
              
              </div>
              <div class="questionBox">
                  1)&nbsp;What is c?
              </div>
                 <div class="optionBox">
                  
                  <span><form>
                  <input type="radio" id="html" name="fav_language" value="HTML">
                  <label for="html">HTML</label><br>
                  <input type="radio" id="css" name="fav_language" value="CSS">
                  <label for="css">CSS</label><br>
                  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
                  <label for="javascript">JavaScript</label><br>
                 <input type="radio" id="hello" name="fav_language" value="hello">
                  <label for="hello">JavaScript</label>
                      </form> </span>
               
              </div>
                 
              <div class="footer">
                  <button onclick="showNext()" style="background-color: #04AA6D;
    border-radius: 5px;
    padding: 7px 15px;
    color: #fff;
    border: 0;
    outline: none;
    font-size: 20px;width: 100px;" >
                     submit
                  </button>
                  
                  
                  
                 
              </div>
          </div>-->
         
        <div class="box" id="resultScreen" style="display: none;">
             <div class="titlee" style="border-bottom: 1px solid #000; font-size: 50px;  margin-bottom: 30px; padding-bottom: 20px; ">
                  Your Result:
              </div>
             <div class="resultBox">
                 <label>Questions : </label>
                 <span id="totalQuestions">10</span>
                 <label>Attempt : </label>
                 <span id="attemptQuestions">10</span>
                 <label>Correct : </label>
                 <span id="CorrectQuestions">10</span>
                 <label>Wrong : </label>
                 <span id="WrongQuestions">10</span>
             </div>
         </div>
         
      
  </div>
      
      </body>
      <script src="js/jquery-3.2.1.min.js"></script>
      <script src="js/topictimer.js"></script>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  
</html>

<?php
session_start();
include 'Connection/common.php';
$type=$_GET['type'];
 $course=$_GET['course'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/quiz_style.css">
    <title>Document</title>
</head>
<body>
    <!-- <div class="home-box custom-box hide">
        <h2>Quiz</h2>
        <p>Total Number Of Question:<span class="total-question">5</span></p>
        <button class="btn" type="button">Start Quiz</button>
    </div> -->

    <!-- <div class="quiz-box custom-box">
        <div class="question-number">
            Question 1 of 5
        </div>
        <div class="option-container">
            <div class="option"></div>
            <div class="option"></div>
            <div class="option"></div>
            <div class="option"></div>

        </div>
    </div> -->
    <form action="Quiz_script.php?type=<?php echo $type; ?>&course=<?php echo $course; ?>" method="POST">
    <h1 style="color: white; margin-top: 30px;"><center>Quiz</center></h1>
    <h3 style="margin-top:50px;"><center>You need to make 70% to unlock the next module</center></h3>
    <div class="quiz-box custom-box">
        <div class="question-number">
            Questions
        </div>
        <?php
        
        $i=1;
        $sql1 = "SELECT * FROM `question` WHERE  type = '" . $type . "' AND course = '" . $course . "' ";
        $result1 = mysqli_query($con, $sql1);
        if (mysqli_num_rows($result1) > 0) {
        while($row1 = mysqli_fetch_assoc($result1)) {
        ?>
        <div class="question-text">
            <?php echo $i ." : ". $row1['question']; ?>
        </div>
         <?php
         $qid=$row1['qid'];
         $sql = "SELECT * FROM `answer` WHERE `ans_id` = $qid  AND type = '" . $type . "' AND course = '" . $course . "'";
         $result = mysqli_query($con, $sql);
         if (mysqli_num_rows($result) > 0) {
         while($row = mysqli_fetch_assoc($result)) {
          ?>
        
        <input style="padding:5px; font-size: 18px;" type="radio" name="quizcheck[<?php  echo $row['ans_id']; ?>]" id="<?php echo $row['ans_id']; ?>" value="<?php echo $row['aid']; ?>" required="true">
        <label for="<?php echo $row['ans_id']; ?>" style="padding:5px; font-size: 18px;"><?php echo $row['answers']; ?></label><br><br>
        
    <!--<input type="radio" id="1" name="1" value="1">
        <input type="radio" id="1" name="1" value="1">
        <label for="1" style="padding:5px; font-size: 18px;">Tiger</label><br><br>
        <label for="1" style="padding:5px;font-size: 18px;">Tiger</label><br><br>
        <input type="radio" id="1" name="1" value="1">
        <label for="1" style="padding:5px; font-size: 18px;">Tiger</label><br><br>
        <input type="radio" id="1" name="1" value="1">
        <label for="1" style="padding:5px; font-size: 18px;">Tiger</label><br><br>

      

         <div class="option-container">
           
            
        </div> -->
        <?php
        }}
        $i++;
         }}
        
        ?>
        <div class="submit-button">
            <input type="submit" name="submit" Value="Submit" class="btn btn-success m-auto d-block" /> <br>
        </div>
    </div>
</form>
   
</body>
</html>
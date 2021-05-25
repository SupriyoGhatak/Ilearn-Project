<?php
session_start();
include 'Connection/common.php';
$id=$_SESSION['id'];
if(isset($_FILES['image'])){
       
       
      //echo 'hello';
     // $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp_loc =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_extension = explode('.', $file_name);
      $file_ext_check = strtolower(end($file_extension));
      //echo $file_ext_check;
      //echo $file_name;
      $allowed_extensions = array('jpg', 'jpeg', 'png');
      if(!in_array($file_ext_check, $allowed_extensions)){

         echo "<script type='text/javascript'>alert('Only  .JPG, .JPEG, .PNG  Are allowed');</script>";
         echo '<script>window.location="my_profile.php"</script>';
      }
      else{
          $file_store = "profile_img/".$file_name;
        
          move_uploaded_file($file_tmp_loc, $file_store);
          $update_password_query = "UPDATE user_details SET user_image = '$file_store'  WHERE user_id = '" . $id . "' ";
          $update_password_result = mysqli_query($con, $update_password_query) or die($mysqli_error($con));
          echo '<script>alert("Your Profile Image  update successfully...!")</script>';
          echo '<script>window.location="my_profile.php"</script>';
          
      }
}

?>

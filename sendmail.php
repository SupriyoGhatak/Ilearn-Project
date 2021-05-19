<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer-master/src/Exception.php';
require 'PHPMailer-master/src/PHPMailer.php';
require 'PHPMailer-master/src/SMTP.php';

$name=$_POST['Name'];
$email=$_POST['Email'];
$massage="Hi welcome to the platform of Ilearn...";//$_POST['PhoneNumber'];

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = "smtp";

$mail->SMTPDebug  = 1;  
$mail->SMTPAuth   = TRUE;
$mail->SMTPSecure = "tsl";
$mail->Port       = 587;
$mail->Host       = "smtp.gmail.com";
$mail->Username   = "td632149@gmail.com";
$mail->Password   = "tanmoy@123";



$mail->IsHTML(true);
$mail->AddAddress($email, $name);

$mail->SetFrom("td632149@gmail.com", "Ilearn Team");
//$mail->AddReplyTo("reply-to-email@domain", "reply-to-name");
//$mail->AddCC("cc-recipient-email@domain", "cc-recipient-name");
$mail->Subject = "Welcome Message from Ilearn team.";
$content = "<b>$massage</b>";


$mail->MsgHTML($content); 
if(!$mail->Send()) {
  //echo "Error while sending Email.";
     echo '<script>alert("Error while sending Email")</script>';

  var_dump($mail);
} else {
  echo "Email sent successfully";
  echo '<script>alert("Email sent successfully")</script>';
}
echo '<script>window.location="index.php"</script>';
?>
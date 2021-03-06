<?php
session_start();
require('./fpdf.php');
// Create a 300x100 image
$im = imagecreatetruecolor(300, 100);
$red = imagecolorallocate($im, 0xFF, 0x00, 0x00);
$black = imagecolorallocate($im, 0x00, 0x00, 0x00);

// Make the background red
imagefilledrectangle($im, 0, 0, 299, 99, $red);
$image=imagecreatefromjpeg("ilearn.jpg");
$color=imagecolorallocate($image,19,21,22);

$name=$_SESSION['username'];;//variable done
$split=$_SESSION['username'];
$name1= strtok($split, ' ');
//$name1="Soumyadip";
$count=strlen($name1);
//echo $count;
if($count>5 && $count<9)
{
    $size=1273;
    $size1=2283;
}
else if($count>8)
{
   $size1=2360;
   $size=1310; 
}
// Path to our ttf font file
//$font_file = 'C:\wamp64\www\dynamicPHPCertificate\Roboto-Black.ttf';
$font1 = dirname(__FILE__) . "/Roboto-Black.ttf";
$font2 = dirname(__FILE__) . "/Oswald-ExtraLight.ttf";
$font3 = dirname(__FILE__) . "/Oswald-Medium.ttf";

// Draw the text 'PHP Manual' using font size 13
imagefttext($image,90,0,1400,850,$color, $font1,$name);

date_default_timezone_set("Asia/kolkata");
$date=date("Y-m-d ");//variable done 
imagefttext($image,35,0,720,2100,$color, $font1,$date);
// Output image to the browser
 
$c_n=$_GET["c_n"];
$duration=$_GET["duration"];
$marks=$_GET["marks"];
//$marks="89.32";

//echo $marks,$c_n,$duration;

$c_duration=$duration;//variable
if($c_n=="c_plus"){
$course="C++ Programing Language.";//variable
}
 else {
    $course=$c_n;
}
$result=$marks;//variable done


$static="has successfully completed a";
$static1="weeks online training on ";
$static2="The training consisted of 5 modules 2 quizes along with coding assessment and a final assessment test.";
$static4="In the final assessment,";
$static5="scored";
$static6="% marks. We wish";
$static7="all the best for the future.";
$static8="Date of certification:";
imagefttext($image,50,0,650,1020,$color, $font2,$static);
imagefttext($image,50,0,1300,1020,$color, $font2,$c_duration);
imagefttext($image,50,0,1375,1020,$color, $font2,$static1);
imagefttext($image,50,0,1915,1020,$color, $font3,$course);
imagefttext($image,50,0,530,1150,$color, $font2,$static2);
imagefttext($image,50,0,530,1280,$color, $font2,$static4);
imagefttext($image,50,0,1055,1280,$color, $font2,$name1);
imagefttext($image,50,0,$size,1280,$color, $font2,$static5);
imagefttext($image,50,0,1480,1280,$color, $font3,$result);
imagefttext($image,50,0,1665,1280,$color, $font2,$static6);
imagefttext($image,50,0,2080,1280,$color, $font2,$name1);
imagefttext($image,50,0,$size1,1280,$color, $font2,$static7);
imagefttext($image,30,0,420,2100,$color, $font2,$static8);

//header('Content-Type: image/jpeg');
$file=time();
	$file_path="certificate_pdf/".$file.".jpg";
	$file_path_pdf="certificate/".$file.".pdf";
	imagejpeg($image,$file_path);
	imagedestroy($image);

	
	$pdf=new FPDF();
	$pdf->AddPage();
	$pdf->Image($file_path,0,0,210,170);
	$pdf->Output();

?>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>NOTIFY</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

<style>


 .box {
      width: 100%;
      max-width: 800px; /* Adjust the width as needed */
      margin: 0 auto; /* Center the box horizontally */
      border: 5px solid #000000;
      padding: 20px;

      display: flex;
      flex-wrap: wrap;
font-family:Sans-Serif;
background-color:#6F7E9B;
    }
</style>

</head>
<body>
<?php

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

require 'PHPMailer/src/PHPMailer.php'; 
require 'PHPMailer/src/SMTP.php'; 

session_start();


if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
   
date_default_timezone_set('America/Toronto');

 
// Create an instance of PHPMailer class 
$mail = new PHPMailer;
$mail             = new PHPMailer();

$body             = "Your Booking has been Approved by HOD";
//$body             = eregi_replace("[\]",'',$body);

$mail->IsSMTP(); // telling the class to use SMTP
//$mail->Host       = "ssl://smtp.gmail.com"; // SMTP server
$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "snehasusan0008@gmail.com";  // GMAIL username
$mail->Password   = "myoxpkxmkvnekgth";    // GMAIL password

$mail->SetFrom('snehasusan0008@gmail.com', 'GITS CALENDER');

//$mail->AddReplyTo($email, 'First Last");

$mail->Subject    = "Booking Confirmed.";

//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);


$mail->AddAddress($email, $email);

//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  header("Location: historyhod.php");
}
}



?>
  

</body>
</html>

<br>
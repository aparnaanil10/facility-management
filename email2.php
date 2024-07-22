<?php

$servername = "localhost";
$username = "root";
$password = "tpwkroot";
$dbname = "booking";

$conn = new mysqli($servername, $username, $password, $dbname);
if (isset($_POST['email'])) {
$email = urldecode($_POST['email']);

$sql = "SELECT email FROM rb201";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the data and store it in a variable
    $row = $result->fetch_assoc();
    $email = $row["email"];
} else {
    echo "No results found.";
}

$conn->close();

date_default_timezone_set('America/Toronto');

// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
 
// Include PHPMailer library files 
//require 'PHPMailer/Exception.php'; 
require 'PHPMailer/src/PHPMailer.php'; 
require 'PHPMailer/src/SMTP.php'; 
 
// Create an instance of PHPMailer class 
$mail = new PHPMailer;
$mail             = new PHPMailer();

$body             = "Mail Testing";
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
$mail->Username   = "gitscalender@gmail.com";  // GMAIL username
$mail->Password   = "uvzhjuyhdmulfkhm";    // GMAIL password

$mail->SetFrom('gitscalender@gmail.com', 'ADMIN');

//$mail->AddReplyTo($email, 'First Last");

$mail->Subject    = "MAil Sub";

//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);


$mail->AddAddress($email, $email);

//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment

if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}

?>

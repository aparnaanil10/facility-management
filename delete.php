<?php
session_start();
if (isset($_POST['name'], $_POST['halls'])) {
    $name = urldecode($_POST['name']);
    $halls = urldecode($_POST['halls']);
$email = urldecode($_POST['email']);
    $_SESSION['email'] = $email;
    $servername = "localhost";
    $username = "root";
    $password = "aparna";
    $dbname = "booking";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

   
    $sql = "DELETE FROM " . mysqli_real_escape_string($conn, $halls) . " WHERE name = '" . mysqli_real_escape_string($conn, $name) . "'";

    if ($conn->query($sql) === TRUE) {
header("Location: admindelete.php");
		
    } else {
        echo "Error deleting row: " . $conn->error;
    }

    
    $conn->close();
} 
else 
{
    echo "Invalid name or halls.";
}
exit();


?>
<?php
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
$mail= new PHPMailer();

$body= "Your booking has been confirmed.";
//$body= eregi_replace("[\]",'',$body);

$mail->IsSMTP(); // telling the class to use SMTP
//$mail->Host= "ssl://smtp.gmail.com"; // SMTP server
$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "snehasusan0008@gmail.com";  // GMAIL username
$mail->Password   = "myoxpkxmkvnekgth";    // GMAIL password

$mail->SetFrom('snehasusan0008@gmail.com', 'FMS ADMIN');

//$mail->AddReplyTo($email, 'First Last');

$mail->Subject    = "Booking Confirmation";

//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$mail->AddAddress($email,"user2");

//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
if (isset($_POST["submit"]))
{
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}
}
?>


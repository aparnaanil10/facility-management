<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
// Assuming you have established a connection to the database using MySQLi
$mysqli = new mysqli("localhost", "root", "aparna", "booking");

// Check for connection errors
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['departement']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $departement= $_POST['departement'];
    $password = $_POST['password'];
   

}
 $allowedDomain = 'saintgits.org';
var_dump($allowedDomain);


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

$body             = "You have successfully created an account with <i>GITS CALENDER</I>. <br>Welcome";
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

$mail->Subject    = "REGISTERED SUCCESSFULLY";

$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);


$mail->AddAddress($email, $email);

//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment


    if (!preg_match("/@$allowedDomain$/", $email)) {
        // Invalid email domain, display an error message or redirect the user
        
        // or
        header("Location: hodlogin.php?invalid-domain");

        // exit;
    } else {
        // Domain is valid, proceed with registration

        // Prepare the SQL statement
        $stmt = $mysqli->prepare("INSERT INTO hod (username, email,departement, password) VALUES (?, ?, ?, ?)");
		if (!$stmt) {
            echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
            exit();
         }

        // Bind the parameters and execute the statement
        $stmt->bind_param("ssss", $username, $email, $departement, $password);
        $stmt->execute();

        // Check for any errors during execution
        if ($stmt->error) {
            echo "Registration failed: " . $stmt->error;
        } else {
            // Registration successful, display a success message or redirect the user                
		  $mail->Send();
		   header("Location: hodlogin.php");
            // exit;
        }

        // Close the statement
        $stmt->close();
    }

// Close the connection
$mysqli->close();
?>



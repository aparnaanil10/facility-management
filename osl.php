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

  <title>OPEN SOURCE LAB</title>

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

input[type="text"],
input[type="email"],

input[type="number"],
input[type="date"],
input[type="time"] {
    width: 90%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 5px solid #ccc;
    border-radius: 4px;
    font-family: Arial, sans-serif;
}
form {
    margin: 0 auto;
    max-width: 1000px;
    background-color: #f8f8f8;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
position: relative; /* required for absolute positioning of image */
  overflow: hidden;
}


input[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-family: Arial, sans-serif;
}

input[type="submit"]:hover {
    background-color: #45a049;
}

input[type="submit"]:active {a
    background-color: #3e8e41;
}

input[type="text"]:focus,
input[type="email"]:focus,
input[type="tel"]:focus,
input[type="number"]:focus,
input[type="date"]:focus,
input[type="time"]:focus,
input[type="password"]:focus,
input[type="month"]:focus {
    border: 2px solid #4CAF50;
}

.form-image {
  position: absolute;
  top: 10%;
  left: 0;
  height: 75%; /* or specify a fixed height if desired */
padding:50px;
}
</style>

</head>

<body>



<?php
// Connect to MySQL database
$servername = "localhost";
$username = "root";
$password = "tpwkroot";
$dbname = "booking";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = $_POST["name"];
    $email = $_POST["email"];
  $phone_no = $_POST["phone_no"];
    $start_time = $_POST["start_time"];
    $end_time = $_POST["end_time"];
    $purpose=$_POST["purpose"];
$department=$_POST['department'];
$date=$_POST['date'];

   


   
   $sql = "SELECT * FROM osl WHERE date = '$date' AND ((start_time <= '$start_time' AND end_time >= '$start_time') OR (start_time <= '$end_time' AND end_time >= '$end_time'))";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
         header("Location: bookingfailure.html");
    } else {
       
        $sql1 = "INSERT INTO osl (name, email, phone_no,start_time, end_time,purpose,department,date) VALUES ('$name','$email', '$phone_no', '$start_time', '$end_time','$purpose','$department','$date')";
		
		$sql2 = "INSERT INTO bookings (facility, date, start_time, end_time, department, purpose, name, email) 
         VALUES ('Open Source Lab', '$date', '$start_time', '$end_time', '$department', '$purpose', '$name', '{$_SESSION['user_email']}')";

echo "First Query: $sql1<br>";
if ($conn->query($sql1) === TRUE) {
    header("Location: bookingsuccess.php");
    if ($conn->query($sql2) === TRUE) {
         header("Location: bookingsuccess.php");
       
    } else {
        header("Location: bookingfailure.html");
        
    }
} else {
    header("Location: bookingfailure.html");
   
}


    }
}
?>



  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              GITS CALENDER
            </span>
          </a>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="s-1"> </span>
            <span class="s-2"> </span>
            <span class="s-3"> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="service.html"> Booking </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#contactLink">Contact Us</a>
                </li>
              </ul>
            </div>
           
          </div>
        </nav>
      </div>
    </header>



<br>


<br>
<form action="" method="post">
<div class="form">
<img src="ab201.png" alt="Image" class="form-image">

<div>
<b><center><h3>BOOK YOUR SLOT <br>OPEN SOURCE LAB</b><BR></h3>

<table align="center">

<tr>
<td width="500px"> </td>
<td> <input type="text" placeholder="Name" name="name">
<td> <input type="text" placeholder="Department" name="department">
</tr>
<tr height="30px">

</tr>
<tr>
<td width="500px"> </td>
<td> <input type="text" placeholder="Email Id" name="email">
<td> <input type="text" placeholder="Mobile No" name="phone_no">
</tr>

<tr height="30px">

</tr>
<tr>
<td width="500px"> </td>

<td> <input type="text" placeholder="Purpose" name="purpose">
<td> <input type="date" placeholder="Date" name="date">
</tr>

<tr height="30px">

</tr>
<tr>
<td width="500px"> </td>

<td> <input type="time" placeholder="Start time" name="start_time">
<td> <input type="time" placeholder="End Time" name="end_time">

</tr>

<tr height="30px">

</tr>

</table>
&nbsp&nbsp<input class="submit" name="submit" type="submit" value="Submit">

</div>
</form>
</div>
</div>
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
$body= "You are booked for ".$date."<br>Your booking has been confirmed for OPEN SOURCE LAB.";

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

$mail->SetFrom('snehasusan0008@gmail.com', 'GITS CALENDER');

//$mail->AddReplyTo($email, 'First Last');

$mail->Subject    = "Booking Confirmation";

$mail->AltBody    = "Your booking has been confirmed for OPEN SOURCE LAB.<br> For further queries or clarifications visit our site.<br> If you want to cancel the booking please conatct admins atleast 3 days prior to the event.";

$mail->MsgHTML($body);

$mail->AddAddress($email,$email);

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
</body>
</html>


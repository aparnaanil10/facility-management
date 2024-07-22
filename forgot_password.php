<html>
<head>
<style>
body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);
}
.main{
	width: 300px;
	height: 400px;
	background: red;
	overflow: hidden;
	background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}
.signup input {
  width: 80% !important;;
  height: 50px !important;;
  background: #e0dede;
  justify-content: center;
  display: flex;
  margin: 20px auto;
  padding: 10px;
  border: none;
  outline: none;
  border-radius: 5px;
}

button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: #fff;
	background: #573b8a;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
button:hover{
	background: #6d44b8;
}



</style>
</head>
<body>
<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "aparna";
$dbname = "booking";

$conn = new mysqli($servername, $username, $password, $dbname);


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//require 'PHPMailer/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    echo $email;

    $token = bin2hex(random_bytes(2));
    $_SESSION['token'] = $token;

    date_default_timezone_set('America/Toronto');

    // Create an instance of PHPMailer class
    $mail = new PHPMailer();

    $body = "";

    $mail->IsSMTP(); // telling the class to use SMTP
    $mail->SMTPDebug = 1; // enables SMTP debug information (for testing)
    $mail->SMTPAuth = true; // enable SMTP authentication
    $mail->SMTPSecure = "ssl"; // sets the prefix to the servier
    $mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
    $mail->Port = 465; // set the SMTP port for the GMAIL server
    $mail->Username = "gitscalender@gmail.com"; // GMAIL username
    $mail->Password = "uvzhjuyhdmulfkhm"; // GMAIL password

    $mail->SetFrom('gitscalender@gmail.com', 'GITS CALENDER');

    $mail->Subject = "CODE FOR PASSWORD RESET";

    $mail->IsHTML(true);
    $mail->MsgHTML("<b>PLEASE ENTER THIS CODE IN YOUR PAGE:<br>". $token."</B>");

    $mail->AddAddress($email, "user");

    if (!$mail->Send()) {
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
        $url = 'fp.php?randomBytes=' . ($token);
        header('Location: ' . $url);
    }
}
?>
<div class="hero_area">
<br>
	<br>
	<br>
	<br><br><CENTER>
<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">
<br>
			<div class="signup">
			<br>
			<br>
			<h3 style="color:white;text-align:center"><center>Forgot your Password?</CENTER></h3>
			<h3 style="color:white;text-align:center"><center>ENTER YOUR EMAIL</CENTER></h3>
			
<!-- Forgot Password Form -->
<form method="POST" action="">

    <input type="email" name="email" placeholder="Email" required>
	
	
    <button type="submit">Reset Password</button>
	<h5 style="color:white;text-align:center" ><i>You will get a code sent to your email, please enter the code in the next page!</h5>
	</div>
	</div>
</form>
</body>
</html>

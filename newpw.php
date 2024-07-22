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

  <title>GITS LOGIN</title>

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
.main{
	width: 350px;
	height: 500px;
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

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the entered password
    $new_password = $_POST["new_password"];
	$email=$_POST['email'];

    // Validate and sanitize the new password
    // You can add additional validation and error handling here

    // Retrieve the user's email from the session
  

    // Update the user's password in the database (assuming plain text storage)
    $query = "UPDATE users SET password = '$new_password' WHERE email = '$email'";
    // Execute the query
 $result = mysqli_query($conn, $query); 

    // Password updated successfully
   header("Location: toogle.html"); 
    // Redirect the user to the login page or any other appropriate page
}
else
{
	echo " ";
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

        </nav>
      </div>
    </header>


<center>
<br>
<br>
<!-- Reset Password Form -->
<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
			<br>
			<h2 style="color:white;text-align:center"><center>RESET YOUR <br>PASSWORD</CENTER></h2>
				<form method="POST" action="">
					<br>
				
				<input type="email" name="email" placeholder="Email" required>
					<br>
			
				
				<input type="password" name="new_password" placeholder="New Password" required>
				<br>
				
				
				<button type="submit">Reset Password</button>
				</form>
			</div>
			</div>
</body>
</html>
<?php
session_start();


// Rest of the PHP code follows...
?>
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
table {
  border-collapse: collapse;
  margin-left: 190px;
  margin-right: 20px;
  margin-top: 10px;
  margin-bottom: 10px;
  background-color: #9AACD0;
}

th{
text-align: center;
}
td{
text-align: left;
}
th,
td {
  border: 1px solid #ddd;
  padding: 8px;
 

}

th {
  background-color: #6F7E9B;
}

input[type=submit]{
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

.button{
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

.select {
  background-color: white;
  border: solid 3px;
  color: black;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>



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
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about.html"> About</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="adminlogin.php"> Admin </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="mailto:snehasusan0008@gmail.com">Contact Us</a>
                </li>
              </ul>
            </div>
            <div class="quote_btn-container ">
              
              
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
<br>
<br>
<br>

<form action="" method="post">
<center>

<label for="halls"><bChoose a facility:</label>

<select name="halls" id="halls" class="select">
<option value="AB201">AB 201</option>
<option value="CLC401">CLC 401</option>
<option value="CLC404">CLC 404</option>
<option value="NB101">NB 101</option>
  <option value="NB201">NB 201</option>
  <option value="RB201">RB 201</option>
 <option value="VB303">VB 303</option>
  <option value="miniaudit">MINI AUDITORIUM</option>
  <option value="innova">TRANSPORTATION</option>
</select>

<input type="submit" value="CHECK" name="submit">
<a href="adminfeed.php" class="button">FEEDBACKS</a>
</form>
<br>
<br>

</center>
<?php

// Establish a connection to the MySQL database
$servername = "localhost";
$username = "root";
$password = "aparna";
$dbname = "booking";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


if (isset($_POST["submit"]))
{
$halls = $_POST['halls'];
$sql = "SELECT * FROM $halls";
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
	
  echo "<table class='darkTable' border='0' cellspacing='2' cellpadding='2'><tr><th>NAME</th><th>DEPARTMENT</th><th>DATE</th><th>PHONE NUMBER</th><th>START TIME</th><th>END TIME</th><th>PURPOSE</TH><th>CONTACT </th><th>DELETE</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
$email = $row['email'];
$name = $row['name'];
$date= $row['date'];
$start_time= $row['start_time'];
$end_time= $row['end_time'];
$purpose= $row['purpose'];
$phone_no=$row['phone_no'];
$department = $row['department'];
$_SESSION['email'] = $email;
    echo "<tr><td>" . $row["name"]. "</td><td>" . $row["department"]. "</td><td>" . $row["date"]."</td><td>".$row["phone_no"]."</td><td>" . $row["start_time"]. "</td><td>" . $row["end_time"]. "</td><td>" . $row["purpose"]. "</td><td>"."<a href='mailto:$email'>$email</a>"."</td><td>"."<form action='C:\xampp\htdocs\miniaparna\delete.php' method='post'>".
    "<input type='hidden' name='halls' value='".urlencode($halls)."'>".
    "<input type='hidden' name='name' value='".urlencode($name)."'>".
"<input type='hidden' name='email' value='".urlencode($email)."'>".
    "<button type='submit' formaction='delete.php'>Delete</button>".
    "</td></tr>";

  }
  echo "</table>";
} else {
  echo "0 results";
}
}
mysqli_close($conn);
?>

</body>
</html>
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
  margin-left: 4 90px;
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

<h1 style="color:white;text-align:center">FEEDBACK FROM CUSTOMERS</h1>
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

$sql = "SELECT * FROM messages";
$result = mysqli_query($conn, $sql);



if (mysqli_num_rows($result) > 0) {
	session_start();
  echo "<center><table class='darkTable' border='0' cellspacing='2' cellpadding='2'><tr><th>NAME</th><th>MESSAGE</th><th>EMAIL</th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
$email = $row['email'];
$name = $row['name'];
$subject= $row['subject'];
$message= $row['message'];

    echo "<tr><td>" . $row["name"]. "</td><td>" . $row["message"]. "</td><td>"."<a href='mailto:$email'>$email</a>"."</td></tr>";

  }
  echo "</table>";
} else {
  echo "0 results";
}

mysqli_close($conn);
?>

</body>
</html>
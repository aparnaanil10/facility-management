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

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="number"],
input[type="date"],
input[type="time"],
input[type="password"],
input[type="month"] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-family: Arial, sans-serif;
}
form {
    margin: 0 auto;
    max-width: 600px;
    background-color: #f8f8f8;
    padding: 20px;
    border-radius: 5px;
    box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
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

input[type="submit"]:active {
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

.big-button {
  display: inline-block;
  margin: 10px;
  padding: 10px 30px;
  font-size: 20px;
  font-weight: bold;
  text-align: center;
  text-decoration: none;
  background-color: #0099ff;
  color: #fff;
  border-radius: 10px;
  
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
<br>
<br>
<form method="post" action="seminaraudit.php">

<input type="text" name="capacity" value="" placeholder="Enter your desired seating capacity:">

<br>
<br>

<input type="submit" name="submit">


</form>
<?php
// Connect to the database
$servername = "localhost";
$username = "root";
$password = "tpwkroot";
$dbname = "booking";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get the seating capacity from the form
if(isset($_POST['capacity'])) 
{
$capacity = $_POST["capacity"];

echo "<center><br><br>";
 if ($capacity <= 60) {
    echo "<a href='nb101.php' class='big-button' >NB 101</a>&nbsp &nbsp";
  }
  if ($capacity >= 60 && $capacity <=70) {
    echo "<a href='nb201.php' class='big-button'>NB 201</a>&nbsp &nbsp";
  }
  if ($capacity <= 100) {
    echo "<a href='RB201.PHP' class='big-button'>RB 201</a>&nbsp &nbsp";
echo "<a href='ab201.php' class='big-button'>AB 201</a>&nbsp &nbsp";
echo "<a href='vb303.php' class='big-button'>VB 303</a>&nbsp &nbsp";
echo "<a href='clc401.php' class='big-button'>CLC 401</a>&nbsp &nbsp";
  }
 if ($capacity <= 200) {
    echo "<a href='clc404.php' class='big-button'>CLC 404</a>";
  }
 if ($capacity<=400){
echo "<a href='miniaudit.php' class='big-button'>Mini Auditorium</a>&nbsp &nbsp";
}

}

// Close the connection
mysqli_close($conn);
?>

  <!-- about section -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
  <section class="about_section ">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img2.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p>
              Saintgits College of Engineering, Kottayam provides a range of infrastructural facilities to the students, staff and faculty members.
			  Facilities like seminar halls ,mini auditoriums etc will be used more efficiently with our system. Our project booking monitoring system includes login of users and storing their details into the system. 
 
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->
      <div class="footer_bg">

    <!-- contact section -->
    <section class="contact_section layout_padding" id="contactLink">
      <div class="container">
        <div class="heading_container">
          <h2>
            Get In touch
          </h2>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-8 mx-auto">
            <form>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <input type="text" class="form-control" id="inputName4" placeholder="Name ">
                </div>
                <div class="form-group col-md-6">
                  <input type="email" class="form-control" id="inputEmail4" placeholder="Email id">
                </div>

              </div>
              <div class="form-row">
                <div class="form-group col">
                  <input type="text" class="form-control" id="inputSubject4" placeholder="Subject">
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" id="inputMessage" placeholder="Message">
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>


    <!-- end contact section -->



    <!-- info section -->
    <section class="info_section layout_padding2">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            
          </div>
          <div class="col-md-3">
            <div class="info_links">
              <h4>
                BASIC LINKS
              </h4>
              <ul class="  ">
                <li class=" ">
                  <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="active">
                  <a class="" href="about.html"> About</a>
                </li>
                
                <li class="">
                  <a class="" href="#contactLink">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info_contact">
              <h4>
                CONTACT DETAILS
              </h4>
              <a href="">
                <div class="img-box">
                  <img src="images/telephone-white.png" width="12px" alt="">
                </div>
                <p>
                 00 997 564 2453
                </p>
              </a>
              <a href="">
                <div class="img-box">
                  <img src="images/envelope-white.png" width="18px" alt="">
                </div>
                <p>
                  mail@saintgits.org
                </p>
              </a>
            </div>
          </div>
          
              <div class="social_box">
                <a href="https://www.facebook.com/saintgitsgroup/">
                  <img src="images/info-fb.png" alt="">
                </a>
                <a href="https://twitter.com/SaintgitsGroup/status/1532724522897395712">
                  <img src="images/info-twitter.png" alt="">
                </a>
                <a href="https://www.linkedin.com/school/saintgits-college-of-engineering/?">
                  <img src="images/info-linkedin.png" alt="">
                </a>
                <a href="">
                  <img src="images/info-youtube.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- end info_section -->

</div>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/custom.js"></script>


</body>
</html>
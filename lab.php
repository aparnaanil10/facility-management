<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>LABS</title>

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
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .box {
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 10px;
            display: flex;
            justify-content: space-around;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            transition: all 0.3s ease-in-out;
            
            
        }

        .box:hover {
          transform: translateY(-5px);
         box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.2);
        }

        .column {
            flex: 1;
            margin: 0 10px;
        }

        h1, h2 {
            color: black;
        }

        button {
            background-color: #051958;
            color: white;
            border: none;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background-color: #051958;
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
                        <div class="quote_btn-container ">
                            <!-- Empty for now -->
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <!-- header section ends -->

        <br><br><br><br>

        <!-- Labs Available section -->
        <h1 style="text-align:center; color:white; margin-bottom:30px;">LABS AVAILABLE</h1>
        <div class="box">
            <div class="column">
                <h2>PROGRAMMING LAB</h2>
                <p>This is the lab in the North Block (NB). The lab in charge is Mr. Jijo Varghese.<br>Check out more details.</p>
                <center><button style="text-align:center; color:white;"><a href="example1.html">HERE</a></button></center>
            </div>
            <div class="column">
                <h2>OPEN SOURCE LAB</h2>
                <p>This is the lab in the Ramanujan Block (RB). The lab in charge is Ms. Anoopa Ravindran.<br>Check out more details.</p>
                <center><button style="text-align:center; color:white;"> <a href="example2.html">HERE</a></button></center>
            </div>
        </div>
    </div>
</body>
</html>
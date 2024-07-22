<html>
<head>
<style>
    table {
        border-collapse: collapse;
        width: 80%;
        margin: 20px auto;
    }

    th, td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    th {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
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

	input[type=date]{
  background-color: white;
  border: solid 3px;
  color: black;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;

}
  body {
        border: 2px solid #000;
        margin: 50; 
        padding: 10px; 
    }
</style>
</head>
<body>
<br>

<center>
<H1>BOOKING DETAILS</H1>
<?php
session_start();

$conn = mysqli_connect("localhost", "root", "aparna", "booking");
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_SESSION['hod_department'])) {
	echo "<center>";
	    echo "<form method='POST'>";
	echo "Department: <input type='text' name='dept'><br><br>";
    echo "<input type='submit' value='Search'>";
    echo "</form>";
    $hod_department = $_SESSION['hod_department'];

    if (isset($_POST['dept'])) {
        // Get the start and end dates from user input
		$department=$_POST['dept'];
		$department = mysqli_real_escape_string($conn, $department);
      // Quote the $departement variable as it seems to be a string
      $department = "'" . $department . "'";

        $sql = "SELECT * FROM bookings WHERE department ='$hod_department'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<table>";
            echo "<tr><th>Facility</th><th>Name</th><th>Department</th><th>Date</th><th>Start Time</th><th>End Time</th><th>Approve/Delete</th></tr>";

            while ($row = mysqli_fetch_assoc($result)) {
              $facility = $row['facility'];
              $name = $row['name'];
              $department= $row['department'];
              $date=$row['date'];
              $start_time= $row['start_time'];
              $end_time= $row['end_time'];
              //$_SESSION['email'] = $email;
              echo "<tr><td>" . $row["facility"]. "</td><td>" . $row["name"]. "</td><td>" . $row["department"]."</td><td>".$row["date"]."</td><td>" . $row["start_time"]. "</td><td>" . $row["end_time"]. "</td><td>"."<form action='C:\xampp\htdocs\miniproject\approve.php' method='post'>"."<form action='C:\xampp\htdocs\miniproject\delete.php' method='post'>".
          
              //"<input type='hidden' name='halls' value='".urlencode($halls)."'>".
              "<input type='hidden' name='name' value='".urlencode($name)."'>".
              //"<input type='hidden' name='email' value='".urlencode($email)."'>".
              "<button type='submit' formaction='approve.php'>Approve</button>".
              "<button type='submit' formaction='delete.php'>Delete</button>".
              
              "</td></tr>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Error executing query: " . mysqli_error($conn);
        }
    }

    // Display the date input form

}
 else {
    echo "User email not found in session.";
}

$conn->close();
?>

</body>
</html>

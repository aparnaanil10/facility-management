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
<H1>HISTORY</H1>
<?php
session_start();

$conn = mysqli_connect("localhost", "root", "aparna", "booking");
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_SESSION['user_email'])) {
	echo "<center>";
	    echo "<form method='POST'>";
    echo "Start Date: <input type='date' name='start_date'>";
    echo "End Date: <input type='date' name='end_date'><br><br>";
    echo "<input type='submit' value='Search'>";
    echo "</form>";
    $user_email = $_SESSION['user_email'];

    if (isset($_POST['start_date']) && isset($_POST['end_date'])) {
        // Get the start and end dates from user input
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];

        $sql = "SELECT * FROM bookings WHERE email = '$user_email' AND date BETWEEN '$start_date' AND '$end_date'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<table>";
            echo "<tr><th>Facility</th><th>Date</th><th>Start Time</th><th>End Time</th></tr>";

            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['facility'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
				 echo "<td>" . $row['start_time'] . "</td>";
				  echo "<td>" . $row['end_time'] . "</td>";
                // Add other columns as needed
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

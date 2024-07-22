<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <title>Yearly Calendar</title>
    <style>
/* CSS for the calendar header */
h1 {
    color: #333;
    font-size: 24px;
    margin-bottom: 20px;
}

/* CSS for the navigation buttons */
.icon-button {
    background-color: #333;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 10px 20px;
    font-size: 18px;
    cursor: pointer;
    margin: 0 5px;
}

.icon-button:hover {
    background-color: #555;
}

/* CSS for the calendar table */
table {
    width: 100%;
    border-collapse: collapse;
}

th, td {
    border: 1px solid #ccc;
    padding: 10px;
    text-align: center;
}

/* Style the heading for days of the week */
th {
    background-color: #333;
    color: #fff;
    font-weight: bold;
}

/* Style the individual dates */
td {
    position: relative;
}

/* Style booked dates */
.booked {
    background-color: #A2759A;
}

/* Style the tooltip */
.tooltip {
    display: none;
    position: absolute;
    background-color: #333;
    color: #fff;
    padding: 5px;
    border-radius: 3px;
    top: -30px;
    left: 50%;
    transform: translateX(-50%);
    z-index: 1;
}

.booked:hover .tooltip {
    display: block;
    width: 260%;
}

/* Style the background image in column2 */
.column2 img {
    max-width: 100%;
    height: auto;
}

/* Additional CSS for the background */
body {
   padding:100px;
}

/* CSS for the row and columns */
.row {
    display: flex;
    justify-content: center;
}

.column1, .column2 {
    padding: 20px;
    border: 2px solid black;
}

.column1 {
    padding-left: 50px;
    padding-right: 50px;
    padding-top: 20px;
    padding-bottom: 20px;
}

.column2 {
    padding-left: 20px;
    padding-right: 20px;
    padding-top: 20px;
    padding-bottom: 20px;
}
input[type="date"],
input[type="time"],
input[type="text"] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 5px solid #ccc;
    border-radius: 4px;
    font-family: Arial, sans-serif;
}
label{
	 font-family: Arial, sans-serif;
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
    </style>
</head>
<body>
<div class="row">

    <div class="column1">
        <h1><?php echo date("Y"); ?> Calendar</h1>
        <?php
        // Connect to your database
        $host = 'localhost';
        $username = 'root';
        $password = 'aparna';
        $database = 'booking';

        $mysqli = new mysqli($host, $username, $password, $database);

        if ($mysqli->connect_error) {
            die("Connection failed: " . $mysqli->connect_error);
        }

        // Query the database for booked dates, start times, and end times
        $query = "SELECT date, start_time, end_time,facility FROM bookings";
        $result = $mysqli->query($query);

        $bookedDates = array();
        while ($row = $result->fetch_assoc()) {
            $date = $row['date'];
            $bookingData = array('start_time' => $row['start_time'],'end_time' => $row['end_time'] );

            if (!isset($bookedDates[$date])) {
                $bookedDates[$date] = array();
            }

            $bookedDates[$date][] = $bookingData;
        }

        $currentMonth = isset($_POST['currentMonth']) ? $_POST['currentMonth'] : date('n'); // Get the current month from the form or default to the current month

        // Handle navigation form submissions
        if (isset($_POST['prevMonth'])) {
            $currentMonth--;
            if ($currentMonth < 1) {
                $currentMonth = 12;
            }
        } elseif (isset($_POST['nextMonth'])) {
            $currentMonth++;
            if ($currentMonth > 12) {
                $currentMonth = 1;
            }
        }

        // Display the calendar for the selected month
        echo '<form method="post">';
        echo '<button type="submit" name="prevMonth" class="icon-button"><i class="fas fa-chevron-left"></i></button>';
        echo '<input type="hidden" name="currentMonth" value="' . $currentMonth . '">';
        echo '<button type="submit" name="nextMonth" class="icon-button"><i class="fas fa-chevron-right"></i></button>';
        echo '</form>';

        echo '<h2>' . date("F", mktime(0, 0, 0, $currentMonth, 1)) . '</h2>';
        echo '<table>';
        echo '<tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thu</th><th>Fri</th><th>Sat</th></tr>';

        $firstDay = date("w", mktime(0, 0, 0, $currentMonth, 1));
        $lastDay = date("t", mktime(0, 0, 0, $currentMonth, 1));
        echo '<tr>';

        for ($i = 0; $i < $firstDay; $i++) {
            echo '<td></td>';
        }

        for ($day = 1; $day <= $lastDay; $day++) {
            $date = date("Y-m-d", mktime(0, 0, 0, $currentMonth, $day));
            $cssClass = isset($bookedDates[$date]) ? 'booked' : '';
            $bookingData = isset($bookedDates[$date]) ? $bookedDates[$date] : array();

            echo '<td class="' . $cssClass . '">';

            if (!empty($bookingData)) {
                echo '<div class="tooltip">';
                foreach ($bookingData as $booking) {
					echo "----------";
                    echo "Start at: " . $booking['start_time'] . "<br>";
                    echo "End at: " . $booking['end_time'] . "<br>";
                }
                echo '</div>';
            }

            echo $day . '</td>';

            if (($firstDay + $day) % 7 == 0) {
                echo '</tr>';
                if ($day < $lastDay) {
                    echo '<tr>';
                }
            }
        }

        echo '</table>';
        ?>
		</div>
		<div class="column2">

<h1>CHECK IF YOUR DATE AND TIME AVAILABLE</h1>
<br>
<form action="" method="post">
<label>Enter the date: &nbsp &nbsp &nbsp &nbsp &nbsp  </label>
<input type="date" name="checkdate" placeholder="Enter the date:"><br>
<label>Enter the start time:&nbsp </label>
<input type="time" name="start_time"><br>
<label>Enter the end time: &nbsp </label>
<input type="time" name="end_time"><br>
<label>Enter Facility: &nbsp &nbsp &nbsp &nbsp &nbsp </label>
<input type="text" name="facility"><br>
<br>
<br>

<br>
<center>
<input class="submit" name="submit" type="submit" value="Submit">
</center>
		</div>
		</div>
    </div>
	<?php
if (isset($_POST['submit'])) {
   
    $checkDate = $_POST['checkdate'];
    $startTime = $_POST['start_time'];
    $endTime = $_POST['end_time'];
    $facility = $_POST['facility'];
    // Check if the entered date is in the correct format (YYYY-MM-DD)
    if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $checkDate)) {
        echo '<script>alert("Invalid date format. Please enter a date in YYYY-MM-DD format.");</script>';
    } else {
        // Query the database to check if the date and time are available
        $query = "SELECT * FROM bookings WHERE date = '$checkDate' AND facility = '$facility' AND ((start_time <= '$startTime' AND end_time >= '$startTime') OR (start_time <= '$endTime' AND end_time >= '$endTime'))";
        $result = $mysqli->query($query);

        if ($result->num_rows > 0) {
            // The date and time are already booked
            echo '<script>alert("The selected date and time are not available. Please choose a different date or time.");</script>';
        } else {
            // The date and time are available
            echo '<script>alert("The selected date and time are available.");
            </script>';
        }
    }
}
?>

	
</body>
</html>

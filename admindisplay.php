<html>
<head>
<title>ADMIN'S PORTAL
</title>
<style>

table.darkTable {
  font-family: "Times New Roman", Gadget, sans-serif;
  border: 5px solid #000000;
  background-color: #4A4A4A;
  width: 100%;
  height: 200px;
  text-align: center;
  border-collapse: collapse;
}
table.darkTable td, table.darkTable th {
  border: 10px solid #4A4A4A;
  padding: 3px 2px;
}
table.darkTable tbody td {
  font-size: 15px;
  color: #E6E6E6;
}
table.darkTable tr:nth-child(even) {
  background: #888888;
}
table.darkTable thead {
  background: #000000;
  border-bottom: 3px solid #000000;
}
table.darkTable thead th {
  font-size: 25px;
  font-weight: bold;
  color: #E6E6E6;
  text-align: center;
  border-left: 2px solid #4A4A4A;
}
table.darkTable thead th:first-child {
  border-left: none;
}

table.darkTable tfoot {
  font-size: 12px;
  font-weight: bold;
  color: #E6E6E6;
  background: #000000;
  background: -moz-linear-gradient(top, #404040 0%, #191919 66%, #000000 100%);
  background: -webkit-linear-gradient(top, #404040 0%, #191919 66%, #000000 100%);
  background: linear-gradient(to bottom, #404040 0%, #191919 66%, #000000 100%);
  border-top: 1px solid #4A4A4A;
}
table.darkTable tfoot td {
  font-size: 12px;
}
header {
        display: flex;
       justify-content: center;
        align-items: center;
        background-color:#000000;
        color: white;
        padding: 0px;
      }
a:link {
         color: blue;
         background-color: transparent;
         text-decoration: none;
      }
      a:visited {
         color: white;
         background-color: transparent;
         text-decoration: none;
      }
      a:active {
         color: black;
         background-color: transparent;
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
input[type=submit]{
  background-color: #04AA6D;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
</head>
<body>

<header>
<div>
<center>
<h1>
<p style="font-family:'Courier New'"><b>ADMIN'S PORTAL</b></p>
</h1>
<p align="right">
<a href="index.php">
       Home &nbsp &nbsp</a>

<a href = "mailto: ashwinjosephilip@gmail.com"> &nbsp &nbspContact Us</a>
      </div>

</center>
    </header>
<br>
<br>

<form action="" method="post">
<center>

<label for="halls">Choose a facility:</label>

<select name="halls" id="halls" class="select">
<option value="AB201">AB 201</option>
<option value="CLC401">CLC 401</option>
<option value="CLC404">CLC 404</option>
  <option value="NB201">NB 201</option>
  <option value="RB201">RB 201</option>
 <option value="VB303">VB 303</option>
  <option value="miniaudit">MINI AUDITORIUM</option>
  <option value="innova">TRANSPORTATION</option>
</select>

<input type="submit" value="CHECK" name="submit">

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
  echo "<table class='darkTable' border='0' cellspacing='2' cellpadding='2'><tr><th>NAME</th><th>DEPARTMENT</th><th>DATE</th><th>PHONE NUMBER</th><th>START TIME</th><th>END TIME</th><th>PURPOSE</TH><th>CONTACT </th></tr>";
  while($row = mysqli_fetch_assoc($result)) {
$email = $row['email'];
$name = $row['name'];
$date= $row['date'];
$start_time= $row['start_time'];
$end_time= $row['end_time'];
$purpose= $row['purpose'];
$phone_no=$row['phone_no'];
$department = $row['department'];
    echo "<tr><td>" . $row["name"]. "</td><td>" . $row["department"]. "</td><td>" . $row["date"]."</td><td>".$row["phone_no"]."</td><td>" . $row["start_time"]. "</td><td>" . $row["end_time"]. "</td><td>" . $row["purpose"]. "</td><td>"."<a href='mailto:$email'>$email</a>"."</td></tr>";

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
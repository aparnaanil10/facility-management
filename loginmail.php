<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

$conn = mysqli_connect("localhost", "root", "aparna", "booking");
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the user's email address and password from the form submission
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";  
    $result = mysqli_query($conn, $sql);  
     
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        // Set the user's email as a session variable
        $_SESSION['user_email'] = $email;
		
        var_dump($_SESSION); // This is for debugging purposes
        
        header("Location: index.php");
        exit(); // Ensure the script terminates after the redirection
    } else {
        header('Location: login.php');
        exit(); // Ensure the script terminates after the redirection
    }
}

$conn->close();
?>

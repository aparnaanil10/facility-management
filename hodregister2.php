
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<style>
	 body {
      margin: 0;
      padding: 0;
      font-family: 'Arial', sans-serif;
      background-color: #f0f0f0;
    }

    .main {
      display: flex;
      height: 100vh;
    }

    .left-side {
      flex: 2.5;
      background-color: #ffff; /* Add background color to left side */
      background-image: url('homelhs.png');
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
    }

    .right-side {
      background-color: #051958;
      flex: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      background-image: url('homerhs.png');
      background-size: cover;
      background-position: center;
    }

    .form-container {
      width: 300px;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    label {
      display: block;
      margin-bottom: 10px;
      font-weight: bold;
    }

    input {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #012641;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    button:hover {
      background-color: #d8be37;
    }

    .form-container form {
      display: flex;
      flex-direction: column;
    }

    .form-container input[type="text"],
    .form-container input[type="email"],
    .form-container input[type="password"] {
      margin-bottom: 10px;
    }

    .form-container button {
      margin-top: 10px;
    }

    .form-container p {
      margin-top: 20px;
      text-align: center;
    }

    .form-container a {
      color: #3498db;
      text-decoration: none;
    }

    .form-container a:hover {
      text-decoration: underline;
    }

    .signup {
      display: flex;
      flex-direction: column;
    }

    .signup form {
      margin-bottom: 20px;
    }

    .signup hr {
      margin: 20px 0;
      border: none;
      border-top: 1px solid #ccc;
    }
	</style>
</head>
<body>
<?php      
    $con = mysqli_connect("localhost", "root", "aparna", "booking"); 


if (isset($_POST["username"]))
{
    $username = $_POST['username'];  
    $password = $_POST['password'];  
     
        $sql = "select *from admin where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("Location: displayadmin.php"); 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        } 
}    
?>  
	<div class="main">
    <div class="left-side">
    
    </div>

    <div class="right-side">
      
      <div class="form-container" id="formContainer">
        <div id="loginForm">
         <form action="" method="post">
					<center><label for="chk" aria-hidden="true">Login</label></center>
					<div class="form-input">
							<span><i class="fa fa-envelope-o"></i></span>
							<input type="text" name="username" id="username" placeholder="Email Address" tabindex="10"required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-envelope-o"></i></span>
							<input type="password" name="password" id="password" placeholder="Password" tabindex="10"required>
						</div>
					
					
					<button>Login</button>
				</form>
			   
						
					
						
					
					</form>
				</div>					
			</div>
			<!-- FORM CONTAINER END -->
		</div>
	</div>	
</body>
</html>

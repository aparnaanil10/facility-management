
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
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
	 <div class="main">
    <div class="left-side">
    
    </div>

    <div class="right-side">
      
      <div class="form-container" id="formContainer">
        <div id="loginForm">
         <form action="hodregmail.php" method="post">
		 <center><label for="chk" aria-hidden="true">Register</label></center>
						<!-- Input Box -->
						<div class="form-input">
							<span><i class="fa fa-user-o"></i></span>
							<input type="text" name="username" placeholder="User Name" tabindex="10" required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-envelope-o"></i></span>
							<input type="email" name="email" placeholder="Email Address" tabindex="10"required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-user-o"></i></span>
							<input type="text" name="departement" placeholder="Department" tabindex="10" required>
						</div>
						<div class="form-input">
							<span><i class="fa fa-lock"></i></span>
							<input type="password" name="password" placeholder="Password" required>
						</div>
					<button>Register</button>
				</form>
						<br>
						<div class="text-center mb-5 text-black">Already have an account?
							<a class="login-link" href="hodlogin.php">Login here</a>
		       	</div>					<div class="social">
          
					</form>
				</div>
			</div>
			<!-- FORM CONTAINER END -->
		</div>
	</div>	
</body>
</html>
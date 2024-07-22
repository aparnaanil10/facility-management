<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login and Registration</title>
  <link rel="stylesheet" href="styles.css">
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
         <form action="loginmail.php" method="post">
					<center><label for="chk" aria-hidden="true">Login</label></center>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button>Login</button>
				</form>

          <p>Don't have an account? <a href="#" onclick="toggleForm()" style="color: #012641;">Register</a></p>
        </div>

        <div id="registerForm" class="form-container" style="display: none;">
          <div class="signup">
            <form action="regismail.php" method="post">
            <center> <label for="chk" aria-hidden="true">Sign up</label><center>
              <input type="text" name="username" placeholder="User name" required="">
              <input type="email" name="email" placeholder="Email" required="">
              <input type="password" name="password" placeholder="Password" required="">
              <button>Sign up</button>
            </form>
          </div>

          <hr>

          <p>Already have an account? <a href="#" onclick="toggleForm()">Login</a></p>
        </div>
      </div>
    </div>
  </div>

  <script>
    function toggleForm() {
      const loginForm = $('#loginForm');
      const registerForm = $('#registerForm');

      if (loginForm.is(':visible')) {
        loginForm.hide();
        registerForm.show().animate({ left: '0' });
      } else {
        registerForm.hide();
        loginForm.show().animate({ left: '0' });
      }
    }
  </script>
</body>
</html>
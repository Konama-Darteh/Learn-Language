<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EDUCA | Login</title>
  <link rel="stylesheet" href="../LearnLanguage/assets/css/login.css">
  <!--<script src="../assets/js/login_val.js"></script>-->
  
</head>
<body>
  <div class="login" id="login">
    <form action="../LearnLanguage/action/login_action.php" method="post" id="form" onsubmit="return checkUserData()"> 
      <div class="form">
        <h1 class="log">Login</h1>
        <div class="place">
          <input type="email" placeholder="Email" name="email" class="info" id="info-1"required>
          <br>
          <input type="password" name="password" placeholder="Enter your password" class="info" id="info-2" required>
        </div>
        <br>
        <a href="index.php"><button type="submit" id="login-b" name="login_b" class="button">Log In</button></a>
        <p>Don't have an account?</p>
        <p>Create a new account! <i><a href='register.php' style="text-decoration:none;">Sign Up</a></i></p>
      </div>
    </form>
  </div>
</body>
</html>
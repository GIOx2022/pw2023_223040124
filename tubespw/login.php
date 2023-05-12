<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" type="text/css" href="login-style.css">

</head>
<body>
      <div class="login-box">
        <h1>Login</h1>
        <form action="php_login.php" method="post">
          <label>Email</label>
          <input type="email" placeholder="">
          <label>Password</label>
          <input type="password" placeholder="">
          <input type="submit" value="submit">
        </form>
      </div>
      <p class="para-2">
        Not have an account? <a href="registrasi.php" id="signup.html">Sign Up Here</a>
      </p>
  
  
</body>
</html>
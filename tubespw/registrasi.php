<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Daftar</title>
    <link rel="stylesheet" type="text/css" href="registrasi.css">
  </head>
  <body>
    <div class="signup-box">
      <h1>Sign Up</h1>
      <h4>It's free and only takes a minute</h4>
      <form action="php_registrasi.php" method="post">
        <label>First Name</label>
        <input type="text" placeholder="" />
        <label>Last Name</label>
        <input type="text" placeholder="" />
        <label>Email</label>
        <input type="email" placeholder="" />
        <label>Password</label>
        <input type="password" placeholder="" />
        <label>Confirm Password</label>
        <input type="password" placeholder="" />
        <input type="submit" value="Submit" />
      <closeform></closeform></form>
      <p>
        By clicking the Sign Up button,you agree to our <br />
        <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
      </p>
    </div>
    <p class="para-2">
        Already have an account? <a href="login.php" id="login.php">Login here</a>

    </p>
  </body>
</html>
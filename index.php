<?php 
   if(isset($_COOKIE["user"])) {
     header("location:profile.php");
   }
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>PHP Assignment</title>
  
  
  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:600'>
      <link rel="stylesheet" href="./assets/css/style.css">
  
</head>
<body>
  <div class="login-wrap">
  <div class="login-html">
    <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
    <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
    <div class="login-form">
      <form class="sign-in-htm" action="login.php" method="post">
        <div class="group">
          <label for="user" class="label">Email Id</label>
          <input id="username" name="email" type="text" class="input" required>
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="password" type="password" class="input" data-type="password" required>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign In">
        </div>
        <div>
          <?php 
            if(isset($_GET["invalid"])) {
              ?> Invalid Email or Password.<?php
            }
          ?>
          
        </div>
      </form>
      <form class="sign-up-htm" action="signup.php" method="POST">
        <div class="group">
          <label for="user" class="label">Email Id</label>
          <input id="email" name="email" type="email" class="input" required>
        </div>
        <div class="group">
          <label for="pass" class="label">Password</label>
          <input id="password" name="pass" type="password" class="input" data-type="password" required>
        </div>
        <div class="group">
          <label for="pass" class="label">Confirm Password</label>
          <input id="pass" type="password" name="cpass" class="input" data-type="password" required>
        </div>
        <div class="group">
          <label for="pass" class="label">About</label>
          <textarea cols="10", rows="5" class="input" required name="about"></textarea>
        </div>
        <div class="group">
          <input type="submit" class="button" value="Sign Up">
        </div>
      </form>
      
    </div>
  </div>
      <div>
        <?php 
          if(isset($_GET["id"])) {
            $id = $_GET["id"];
            if($id == "invalid") {
              ?> <script>
                alert("invalid email or password");
              </script> <?php
            }
            if($id == "fill_all") {
              ?> <script>
                alert("fill all details");
              </script> <?php
            }
            if($id == "mismatch") {
              ?> <script>
                alert("Mismatch password and conform password");
              </script> <?php
            }
            if($id == "valid_mail") {
              ?> <script>
                alert("This mail is already present");
              </script> <?php
            }
          }
        ?>
      </div>
</div>
  
  
</body>
</html>
<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="fontawesome/css/all.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <link rel="icon" href="favicon.ico">
  <title>Uganda Airlines SignIn</title>

</head>

<body>

  <form method="post" action="register.php">
   
    <?php include('errors.php'); ?>

    <div class="input-group">
      <small><label>Username</label></small>
      <input type="text" name="username" value="<?php echo $username; ?>">
    </div>
    <div class="input-group">
      <small><label>Email</label></small>
      <input type="email" name="email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <small><label>Password</label></small>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <small><label>Confirm password</label></small>
      <input type="password" name="password_2">
    </div>
    <div class="radi">
      <label>Gender:</label>
      <input type="radio" name="gender" value="female"><small>Female</small>
      <input type="radio" name="gender" value="male"><small>Male</small> <br>
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
      <small>Already a member?</small> <a href="login.php">Sign in</a>
    </p>
  </form>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
  <script src="js/popper.min.js"></script>
</body>

</html>
<?php include('../config/server.php') ?>

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
    <title>Uganda Airlines logIn</title>

</head>

<body class="bg-light">
    <div id="stripes" class="fixed">
        <span><img src="images/undraw_businesswoman_pc12.svg" alt="HTML5 Icon" style="width:240px;height:250px;background-color:rgb(177, 255, 51);"></span>
        <span><img src="images/undraw_travelers_qlt1.svg" alt="HTML5 Icon" style="width:300px;height:170px;background-color:#e42929;border-top-left-radius: 20%;"></span>
        <span></span>
        <span><img src="images/undraw_around_the_world_v9nu.svg" alt="HTML5 Icon" style="padding-top:20px;padding-left:20px;width:200px;height:160px;background-color:#52ff0d;border-bottom-left-radius: 20px;"></span>
        <span></span>

    </div>
  
<div class="form-container">
  <center>
    <form class="form-signin" method="post" action="logIn.php">
    <?php include('errors.php'); ?>
        <div class="text-center mb-4">
            <img class="mb-4" src="images/logo.png" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">
                <span class="first-letter">U</span><span class="other-letter">ganda</span><span
                    class="first-letter">A</span><span class="other-letter">irlines</span> <button
                    class="pulse-button"></button>
            </h1>
            <p class="remember">Fly the Crane to the Pearl of Africa <br><br>
            </p>
        </div>

        <div class="form-label-group">
            <input type="text" name="username" id="inputName" class="form-control" placeholder="Username" required autofocus>
            <label for="inputName" style="text-align: left; float: left;">Username</label>
        </div>

        <div class="form-label-group">
            <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <label for="inputPassword" style="text-align: left; float: left;">Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> <span class="remember">Remember me</span>
            </label>
        </div>
        <button class="btn btn-lg btn-warning btn-block" type="submit" name="login_user">Sign in</button>
        <br>
        <p>
			<small>Not yet a member?</small> <a href="register.php" style="color:yellow;">Sign up</a>
		</p>

        <p class="mt-5 mb-3 text-muted text-center">&copy; 2017-2020</p>
    </form>
    </center>
 </div>
 
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    <script src="js/popper.min.js"></script>
</body>

</html>

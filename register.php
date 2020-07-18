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
<div id="stripes" class="fixed">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>

<div class="form-container">
  <center>
  <form method="post" action="register.php" class="needs-validation form-register" novalidate>
   
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

   <div class="row">
        <div class="col-md-6 mb-3">
          <label class="white" for="firstName">First name</label>
          <input type="text" name="fname" class="form-control" id="firstName" value="" required>
          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>
        <div class="col-md-6 mb-3">
          <label class="white" for="lastName">Last name</label>
          <input type="text" name="lname" class="form-control" id="lastName" value="" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
    </div>

   <div class="form-group">
     <label class="white">Username</label>
     <input type="text" name="username" value="<?php echo $username; ?>" class="form-control" required>
     <div class="invalid-feedback">
            Valid user name is required.
    </div>
   </div>
   <div class="form-group">
     <label class="white">Email</label>
     <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" required>
     <div class="invalid-feedback">
            Valid last Email is required.
    </div>
   </div>

   <div class="form-row">
   <div class="form-group col-md-6">
     <label class="white">Password</label>
     <input type="password" name="password_1" class="form-control" required>
     <div class="invalid-feedback">
         Please enter valid Password.
      </div>
   </div>
   <div class="form-group col-md-6">
     <label class="white">Confirm password</label>
     <input type="password" name="password_2" class="form-control" required>
     <div class="invalid-feedback">
         Please enter valid Password.
      </div>
   </div>
   </div>
   <div class="mb-3">
       <label for="address" class="white">Address</label>
       <input type="text" name="address" class="form-control" id="address" placeholder="12 Main St" required>
       <div class="invalid-feedback">
         Please enter your Home address.
       </div>
    </div>
   <div class="row">
      <div class="col-md-5 mb-3">
        <label for="country" class="white">Country</label>
        <select class="custom-select d-block w-100" name="country" id="country" required>
          <option value="">Choose..</option>
          <option>Uganda</option>
          <option>Kenya</option>
          <option>Tanzania</option>
          <option>Rwanda</option>
        </select>
        <div class="invalid-feedback">
          Please select a valid country.
        </div>
      </div>
      <div class="col-md-4 mb-3">
        <label for="state" class="white">District | State</label>
        <select class="custom-select d-block w-100" name="district" id="state" required>
          <option value="">Choose..</option>
          <option>Entebbe</option>
          <option>Kampala</option>
          <option>Nairobi</option>
          <option>Dar-el-salaam</option>
        </select>
        <div class="invalid-feedback">
          Please provide a valid District.
        </div>
      </div>
      <div class="col-md-3 mb-3">
        <label for="zip" class="white">Zip</label>
        <input type="text" class="form-control" id="zip" name="zip" placeholder="" required>
        <div class="invalid-feedback">
          Zip code required.
        </div>
      </div>
    </div>
    <div class="form-group">
    <label for="exampleFormControlFile1" class="white">Choose Profile Image</label>
    <input type="file" class="form-control-file white" id="exampleFormControlFile1">
  </div>
<br>
   <div class="form-check">
      <input class="form-check-input" type="checkbox" name="agree" value="" id="invalidCheck" required>
      <label class="form-check-label white" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div><br>

   <div class="input-group">
     <button type="submit" class="btn btn-warning" name="register_user">Register</button>
   </div>
   <br>
   <p>
     <small>Already a member?</small> <a href="logIn.php">Sign in</a>
   </p>
 </form>
</center>
 </div>

  <script>
(function() {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
  <script src="js/popper.min.js"></script>
</body>

</html>
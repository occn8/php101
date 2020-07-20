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
  <title>Uganda Airlines Booking</title>

</head>

<body>

  <div id="stripes" class="fixed">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
  <main class="about">
    <div class="container pad">
      <center>
        <h1><b>Book Your flight Here</b></h1><br>
      </center>
      <form class="needs-validation" method="post" action="bookFlight.php" novalidate>
        <div class="white"><?php include('errors.php'); ?></div>
        <div class="form-row">
          <div class="custom-control custom-radio col-md-4 mb-3">
            <input id="one" name="trip" type="radio" value="oneway" class="custom-control-input" checked required>
            <label class="custom-control-label white" for="one">One Way</label>
          </div>
          <div class="custom-control custom-radio col-md-4 mb-3">
            <input id="round" name="trip" type="radio" value="roundtrip" class="custom-control-input" required>
            <label class="custom-control-label white" for="round">Round Trip</label>
          </div>
          <div class="custom-control custom-radio col-md-4 mb-3">
            <input id="multi" name="trip" type="radio" value="Multi" class="custom-control-input" required>
            <label class="custom-control-label white" for="multi">Multi Directional</label>
          </div>
        </div><br>

        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="departure" class="white">Departure Port</label>
            <select class="custom-select d-block w-100" name="dport" id="departure" required>
              <option>Entebbe</option>
              <option>Dubai</option>
              <option>Nairobi</option>
              <option>JFK</option>
              <option>Detrioit</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid Port.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="arrival" class="white">Arrival Port</label>
            <select class="custom-select d-block w-100" name="aport" id="arrival" required>
              <option>Nairobi</option>
              <option>Dubai</option>
              <option>JFK</option>
              <option>Entebbe</option>
              <option>Detrioit</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid Port.
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="" class="white">Departure Date</label>
            <input class="form-control" type="date" required>
            <div class="invalid-feedback">
              Please provide a valid Date.
            </div>
          </div>
        </div>

        <h2>Number of Travelers</h2>
        <div class="form-row">
          <div class="col-md-4 mb-3">
            <label for="adults" class="white">Adults <span class="text-muted">(12+ Years)</span></label>
            <select class="custom-select d-block w-100" name="adults" id="adults" required>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid Number.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="children" class="white">Children <span class="text-muted">(3-11 Years)</span></label>
            <select class="custom-select d-block w-100" name="children" id="children" required>
              <option>0</option>
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid Number.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="infants" class="white">Infants <span class="text-muted">(0-2 Years)</span></label>
            <select class="custom-select d-block w-100" name="infants" id="infants" required>
              <option>0</option>
              <option>1</option>
              <option>2</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid Number.
            </div>
          </div>
        </div>

        <h2>Class of travel</h2>
        <div class="form-row">
          <div class="custom-control custom-checkbox col-md-4 mb-3">
            <input id="economy" name="class" type="radio" value="Econ" class="custom-control-input" checked required>
            <label class="custom-control-label white" for="economy">Economy</label>
          </div>
          <div class="custom-control custom-checkbox col-md-4 mb-3">
            <input id="business" name="class" type="radio" value="Buss" class="custom-control-input" required>
            <label class="custom-control-label white" for="business">Business</label>
          </div>
          <div class="custom-control custom-checkbox col-md-4 mb-3">
            <input id="first" name="class" type="radio" value="First" class="custom-control-input" required>
            <label class="custom-control-label white" for="first">First Class</label>
          </div>
        </div>

        <div class="input-group serh">
        <button type="button" class="btn btn-warning">Search Flight</button>
        </div>
        <br><br>
        <hr class="mb-4">

        <h2 class="mb-3"><b>Payment</b></h2>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" value="Credit" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label white" for="credit">Credit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" value="Debit" type="radio" class="custom-control-input" required>
            <label class="custom-control-label white" for="debit">Debit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="master" name="paymentMethod" value="Master" type="radio" class="custom-control-input" required>
            <label class="custom-control-label white" for="master">Master card</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name" class="white">Name on card</label>
            <input type="text" class="form-control" id="cc-name" name="ccname" placeholder="" required>
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number" class="white">Credit card number</label>
            <input type="text" class="form-control" id="cc-number" name="ccnum" placeholder="" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration" class="white">Expiration</label>
            <input type="text" class="form-control" id="cc-expiration" name="ccexp" placeholder="" required>
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv" class="white">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" name="cvv" placeholder="" required>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div><br>

        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
            <label class="form-check-label white" for="invalidCheck">
              Agree to terms and conditions
            </label>
            <div class="invalid-feedback">
              You must agree before submitting.
            </div>
          </div>
        </div>
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" name="book_flight" type="submit">
        Continue to checkout</button><br>
      </form>
    </div>

    <footer id="o-footer" class="abst" role="contentinfo">
      <div class="o-container">
        <div class="row row-p b-md">
          <div class="col-md-3 wow fadeInUp delay-05s">
            <div class="o-widget">
              <h3>About Us</h3>
              <p class="o-footer-into">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                porta gravida at
                eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
              <p class="o-footer-into"> Located a few(Yes few) kilometres from Kampala along Kampala-Entebbe
                Highway</p>
              <p class="o-footer-into">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi
                porta gravida at
                eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            </div>
          </div>

          <div class="col-md-3 wow fadeInUp delay-05s">
            <div class="o-widget">
              <h3>Quick Access</h3>
              <ul class="o-footer-links">
                <li><a href="">Phone: +25F 788 793471</a></li>
                <li><a href="">Email: ugair@air.co.ug</a></li>
                <li><a href="">Live Chat</a></li>
                <li><a href="">Terms of services</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Developer</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-3 wow fadeInUp delay-05s">
            <div class="o-widget">
              <h3>Fly with Us</h3>
              <ul class="o-footer-links">
                <li><a href="">Business class</a></li>
                <li><a href="">Economy Class</a></li>
                <li><a href="">Check-In</a></li>
                <li><a href="">Baggage guidelines</a></li>
                <li><a href="">Preferred Seating</a></li>
                <li><a href="">Special Assistance</a></li>
                <li><a href="">Traveling with Children</a></li>
              </ul>
            </div>
          </div>

          <div class="col-md-3 wow fadeInUp delay-05s">
            <div class="o-widget">
              <h3>Read</h3>
              <ul class="o-footer-links">
                <li><a href="">Connect with Us</a></li>
                <li><a href="">Careers</a></li>
                <li><a href="">Booking Policy</a></li>
                <li><a href="">Conditions of Carriage</a></li>
                <li><a href="">Privacy Policy</a></li>
                <li><a href="">Terms & Conditions</a></li>
                <li><a href="">Website security Policy</a></li>
                <li><a href="">Acceptable Use Policy</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="row copyright">
          <div class="col-md-12">
            <p class="pull-left">
              <small class="block">&copy; 2020 UgandaAirlines. | All Rights Reserved.</small>
              <small class="block">• Designed by occn8 <a href="http://occn8.com/" target="_blank">occn8.com</a>
              </small>
            </p>
            <p class="pull-right">
            <ul class="o-social-icons pull-right">
              <a class="btn btn0" href="#"><i class="fab fa-facebook-f"></i></a>
              <a class="btn btn0" href="#"><i class="fab fa-google"></i></a>
              <a class="btn btn0" href="#"><i class="fab fa-twitter"></i></a>
              <a class="btn btn0" href="#"><i class="fab fa-github"></i></a>
              <a class="btn btn0" href="#"><i class="fab fa-youtube"></i></a>
            </ul>
            </p>
          </div>
        </div>

      </div>
    </footer>

    <a href="index.php">
      <div class="back-but"><i class="fas fa-arrow-alt-circle-left"></i> Back</div>
    </a>

  </main>

  <script>
    (function () {
      'use strict';
      window.addEventListener('load', function () {
        var forms = document.getElementsByClassName('needs-validation');
        var validation = Array.prototype.filter.call(forms, function (form) {
          form.addEventListener('submit', function (event) {
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
  <script src="js/popper.min.js"></script>
</body>

</html>
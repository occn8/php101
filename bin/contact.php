<?php
require('../config/server.php');

	if (isset($_POST['place_comment'])) {
		$comment = mysqli_real_escape_string($db, $_POST['comment']);

	
		if (empty($comment)) {
			array_push($errors, "comment is required");
		}

		if (count($errors) == 0) {
			$query = "INSERT INTO comments (username, comment) 
					  VALUES('$_SESSION[username]', '$comment')";
			mysqli_query($db, $query);

			header('location: contact.php');
		}
	}
?>

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
  <title>Uganda Airlines Contact</title>

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
    <div class="container">
      <center>
        <h1><b>Our Contacts</b></h1>

        <hr style="color: white;">
        <div class="row">
          <div class="col-md-6">
            <h1>Head Offices</h1>
            <ul class="white">
              <li>
                Uganda National Airlines Company Limited dba Uganda Airlines</li>
              <li>EagleAir Hangar Complex,</li>
              <li>Entebbe International Airport - Old Airport</li>
              <li>P.O. Box 431, Entebbe, Uganda</li>
              <li>Tel: +(256)200 406 400</li>
              <li>Email: info@ugandairlines.com</li>
            </ul>

            <h1>Call Center</h1>
            <ul class="white">
              Tel: +256 (0) 200 406 400
              Online Payment Queries
              Tel: +254 706358022/+254 708480275
              Email: onlinepayments@ugandairlines.com
            </ul>

            <h1>Cargo, Parcels and Mail</h1>
            <ul class="white">
              <li>
              <li>Entebbe International Airport</li>
              <li>Cargo Terminal Room 29 </li>
              <li>Cel: +256 77 2 761 700</li>
              <li>Tel: +256 414 323 246/8</li>
              <li>Mail: marthan@bidaircargo.com</li>
            </ul>
          </div>
          <!-- [.................] -->
          <div class="col-md-6">
            <h1>Sales & Ticketing Offices</h1>
            <h2>Kampala City</h2>
            <ul class="white">
              Victoria Tower,
              Office No: G.01 Plot No. 1-13,
              Esso Corner, Jinja Road, Kampala - Uganda.
              Tel: 0200 406 400
              Email: reservations@ugandairlines.com
            </ul>

            <h2>Entebbe Town</h2>
            <ul class="white">
              Victoria Mall, Shop G.09, Ground Floor, Berkeley Road Entebbe
              Email: ebb.sales@ugandairlines.com
            </ul>

            <h2>Entebbe International Airport</h2>
            <ul class="white">
              Departures, 1st Floor, Passenger Terminal Building
              Tel: +256 (0) 200406420
              Email: reservations@ugandairlines.com
            </ul>

            <h2>Dar es Salaam</h2>
            <ul class="white">
              Viva Towers, G09/10, Ali Hassan Mwinyi Road, Dar es Salaam, Tanzania.
              Tel: +255 (0)764111983 | +255 (0)765426554
              Email: dar.sales@ugandairlines.com
            </ul>

            <h2>Mogadishu (General Sales Agent)</h2>
            <ul class="white">
              Light Travel Agency,
              Aden Adde International Airport
              Tel: +252 (0)615550020 | +252 (0)615141315
            </ul>

            <h2> Nairobi Airport Office</h2>
            <ul class="white">
              Terminal 1C, Jomo Kenyatta International Airport
              Tel: +254 707 900777
              Email: nbo.sales@ugandairlines.com
            </ul>

            <h2>Juba</h2>
            <ul class="white">
              SADECO Center, Airport Road (Opp. UNMISS Road)
              Airport Road; Tel: +211 (0)928900500, +211 (0)917747159
              Email: juba.sales@ugandairlines.com
            </ul>
          </div>
        </div>


        <br>
      </center>
    </div>
    
   <section id="comments" class="home-comments">
      <div class="container">
        <div class="row">
        <form method="post" action="contact.php" class="needs-validation">
        
          <div class="col-sm-12">
            <div class="single"><br>
            <?php include('errors.php'); ?>
              <div class="form-group">
              <label for="commentTextarea"><h2><b>Leave a Comment</b></h2></label>
              <textarea class="form-control mb-4" id="commentTextarea"  name="comment" placeholder="Enter your comment" width="600px" rows="3"></textarea>
              <span class="input-group-btn">
             
                  <button class="btn btn-warning" type="submit" name="place_comment">Comment</button>
                </span>
            </div><br>
            </div>
          </div>

        </div>
      </div>
    </section><br>

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

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/popper.min.js"></script>
</body>

</html>
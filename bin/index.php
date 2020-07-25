<?php 
  // session_start(); 
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

			header('location: index.php');
		}
	}

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: logIn.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: logIn.php");
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
  <link rel="stylesheet" type="text/css" href="css/slick.css">
  <link rel="stylesheet" type="text/css" href="css/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">

  <link rel="icon" href="favicon.ico">
  <title>Uganda Airlines</title>

</head>

<body class="bg-dark">
  <div id="stripes" class="fixed">
    <span></span>
    <span></span>
    <span></span>
    <span></span>
    <span></span>
  </div>
  <div id="glare"></div>
  <header class="main-header" id="header"
    style="background: url(images/pi1.jpg) no-repeat; background-size: cover;height: 95vh;">
    <div class="bg-color">
      <nav class="navbar navbar-expand-md navbar-dark" id="site-header">
        <div class="navbar-header">
          <a href="" class="navbar-brand">
          <img src="favicon.ico" class="navimg" alt="">
            <span class="first-letter">U</span>ganda<span class="first-letter">A</span>irlines <button
              class="pulse-button"></button>
          </a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a class="nav-link" href="">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="bookFlight.php">Book flight</a></li>
            <li class="nav-item"><a class="nav-link" href="destinations.html">Destinations</a></li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown">Details</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="bookings.php">Details</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="myprofile.php">My Profile</a>
              </div>
            </li>
            <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
            <li class="nav-item"><a class="nav-link" href="about.html">About Us</a></li>
          
            <li class="nav-item">
              <?php  if (isset($_SESSION['username'])) : ?>
              <a class="nav-link" href="index.php?logout='1'" style="color: yellow !important;">Logout</a>
              <?php endif ?>
            </li>

          </ul>
        </div>
      </nav>

      <div class="container text-center">
        <div class="wrapper wow fadeInUp delay-05s">
          <h1 class="top-title">Be the <a href="" class="typewrite" data-period="2000"
              data-type='[ "Explorer", "Traveler", "Dreamer" ]'>
              <span class="wrap"></span>
            </a> You are
          </h1>
          <h3 class="title"> Fly the Crane to the Pearl of Africa
          </h3>
          <h4 class="sub-title"> Travel further.</h4>
          <a id="sub" href="bookFlight.php"><button type="submit" class="btn btn-submit">Book Flight</button></a>
        </div>
      </div>

  </header>
<section class="carous">
    <div class="container" style="position: relative;top: -40px;">
      <div id="myCarousel" class="carousel slide carousel-fade shad" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/ugair1.jpg" class="d-block w-100 rounded" alt="...">
            <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
              <rect width="100%" height="100%" fill="#777" /></svg>
            <div class="container">
              <div class="carousel-cont">
                <div class="carousel-caption text-left">
                  <h1>Uganda Airlines.</h1>
                  <p>Uganda Airlines is Uganda’s flagship national passenger and cargo carrier. 
                  We provide scheduled air transportation services in East Africa and near-international markets.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Fly today</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img src="images/ugair1.jpg" class="d-block w-100 rounded" alt="...">
            <svg class="bd-placeholder-img rounded" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
              <rect width="100%" height="100%" fill="#666" /></svg>
            <div class="container">
              <div class="carousel-cont">
                <div class="carousel-caption">
                  <h1>We ar pearl of Africa Flight.</h1>
                  <p>Uganda Airlines is Uganda’s flagship national passenger and cargo carrier. 
                    We provide scheduled air transportation services in East Africa and near-international markets.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
              </div>

            </div>
          </div>
          <div class="carousel-item">
            <img src="images/airp.jpg" class="d-block w-100 rounded" alt="...">
            <svg class="bd-placeholder-img rounded" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
              preserveAspectRatio="xMidYMid slice" focusable="false" role="img">
              <rect width="100%" height="100%" fill="#444" /></svg>
            <div class="container">
              <div class="carousel-cont">
                <div class="carousel-caption text-right">
                  <h1>Views of destinations we go.</h1>
                  <p>Uganda Airlines is Uganda’s flagship national passenger and cargo carrier. 
                    We provide scheduled air transportation services in East Africa and near-international markets.</p>
                  <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
 </section>
 <section id="crew" class="section-padding ">
    <div class="container">
      <div>
        <h3><b>Our crew</b></h3>
        <p>A world-class airline exceeding customer expectations, through high-quality service, global connectivity,
         and commitment to excellence Uganda Airlines is Uganda’s flagship national passenger and cargo carrier. 
         We provide scheduled air transportation services in East Africa and near-international markets.</p>
      </div>
      <div class="slider demo">
        <div class="wh"><img src="images/hos.jpg" class="d-block w-100 rounded cad" alt=""></div>
        <div class="wh"><img src="images/pi.jpeg" class="d-block w-100 rounded cad" alt=""></div>
        <div class="wh"><img src="images/hos2.jpg" class="d-block w-100 rounded cad" alt=""></div>
        <div class="wh"><img src="images/pi.jpeg" class="d-block w-100 rounded cad" alt=""> </div>
        <div class="wh"><img src="images/hos.jpg" class="d-block w-100 rounded cad" alt=""></div>
        <div class="wh"><img src="images/pi.jpeg" class="d-block w-100 rounded cad" alt=""></div>
      </div>
    </div>
 </section>

<section id="airport" class="section-padding">
    <div class="container">
      <div>
        <h3><b>Our Airport</b></h3>
      <p>Uganda Airlines is Uganda’s flagship national passenger and cargo carrier. We provide scheduled 
      air transportation services in East Africa and near-international markets.</p>
      </div>
      <div class="slider demo">
        <div class="wh"><img src="images/ugair3.jpg" class="d-block w-100 rounded " alt=""> </div>
        <div class="wh"><img src="images/airp.jpg" class="d-block w-100 rounded" alt=""></div>
        <div class="wh"><img src="images/pi.jpeg" class="d-block w-100 rounded" alt=""></div>
        <div class="wh"><img src="images/hos.jpg" class="d-block w-100 rounded" alt=""></div>
        <div class="wh"><img src="images/pi.jpeg" class="d-block w-100 rounded" alt=""></div>
        <div class="wh"><img src="images/hos2.jpg" class="d-block w-100 rounded" alt=""></div>
      </div>
      <p>With the upcoming arrival and addition of new planes to our fleet, we will expand our route map
       and fly to DRC, Zanzibar, Asmara, Hargeisa, Lusaka, Harare, Johannesburg, Djibouti, 
       and Addis Ababa, and plan to make international flights connecting Uganda to Europe,
        the Middle East, West Africa and Asia.</p>
      <br>
    </div>
</section>

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

    <section class="home-newsletter">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="single"><br>
              <h2>Subscribe to our Newsletter</h2>
              <div class="input-group">
                <input type="email" class="form-control" placeholder="Enter your email">
                <span class="input-group-btn">
                  <button class="btn btn-warning" type="submit">Subscribe</button>
                </span>
              </div><br>
            </div>
          </div>
        </div>
      </div>
    </section>
    <footer id="o-footer" role="contentinfo">
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

      <div class="alert alert-warning alert-dismissible fade show" style="position:fixed;bottom:0px;width:100%;" role="alert">
        <strong>
        <?php
          if(!isset($_SESSION['username'])) {
              echo "Cookie named '" . 'user' . "' is not set!";
          } else {
              echo "Hey " . $_SESSION['username'] . "!";
          }
          ?></strong> Welcome To Uganda Airlines Official Website
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

  <script src="js/hide.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="js/slick.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/custom.js"></script>
  <script src="js/popper.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function () {
      $('.demo').slick(
        {
          prevArrow: "<img class='a-left control-c prev slick-prev' src='images/left-arrow.png'>",
          nextArrow: "<img class='a-right control-c next slick-next' src='images/right-arrow.png'>",

          dots: true,
          infinite: false,
          speed: 300,
          slidesToShow: 3,
          slidesToScroll: 4,
          // slidesToScroll: 1,
          // autoplay: true,
          // autoplaySpeed: 2000,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
          ]
        }
      );
    });
  </script>

</body>

</html>


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
    <title>Uganda Airlines</title>

</head>
<?php include('../config/server.php');
// [RETRIVE ALL USER INFO]
$querry_user = "SELECT * FROM users WHERE username='$_SESSION[username]'";
$userresult = $db->query($querry_user);
if ($userresult->num_rows > 0) {
} else {
    echo "'$_SESSION[username]' info";
}
?>
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
            
                <?php include('errors.php'); ?>
                <br>
                <h1><b>My profile</b></h1>
        <table id="t9">
           
            <?php foreach($userresult as $userdetail):?>
            <tr>
                <tr><th><h1>First-name</h1></th><td><?php echo $userdetail['fname']; ?></td></tr>
                <tr><th><h1>Last-name</h1></th><td><?php echo $userdetail['lname']; ?></td></tr>
                <tr><th><h1>Username</h1></th><td><?php echo $userdetail['username']; ?></td></tr>
                <tr><th><h1>Email</h1></th><td><?php echo $userdetail['email']; ?></td></tr>
                <tr><th><h1>Address</h1></th><td><?php echo $userdetail['address']; ?></td></tr>
                <tr><th><h1>Country</h1></th><td><?php echo $userdetail['country']; ?></td></tr>
                <tr><th><h1>District</h1></th><td><?php echo $userdetail['district']; ?></td></tr>
            </tr>
            <?php endforeach; ?>
        </table>
        <br>
        <div class="upd">
                <h1><b>Update Username</b></h1>
                <form action="myprofile.php" method="post">
                    <label for="oldUser" class="white">Enter Old Username:</label>
                    <input type="text" name="olduser" id="oldUser" class="mb-3"><br>
                    <label for="newUser" class="white">Enter New Username:</label>
                    <input type="text" name="newuser" id="newUser" class="mb-3"><br>
                    <button type="submit" class="btn btn-warning col-md-4" name="update_user">Update</button>
                </form><br>
            </div><br>

            <h1>Danger zone</h1>
            <p>Please proceed with <strong>caution</strong> in this section because any action may cause <strong>permanent loss of data</strong></p>
            <div class="del">
                <h1><b>Delete Account</b></h1>
                <form action="myprofile.php" method="post">
                    <label for="" class="white">Enter Username:</label>
                    <input type="text" name="pass" class="mb-3">
                    <button type="submit" class="btn btn-warning col-md-4" name="delete_user">Delete Account</button>
                </form><br>
            </div><br>

            </center>
        </div>

        <footer id="o-footer" class="abst" role="contentinfo">
            <div class="o-container">
                <div class="row row-p b-md">
                    <div class="col-md-3 wow fadeInUp delay-05s">
                        <div class="o-widget">
                            <h3>About Us</h3>
                            <p class="o-footer-into">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec
                                id elit non mi
                                porta gravida at
                                eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                            <p class="o-footer-into"> Located a few(Yes few) kilometres from Kampala along
                                Kampala-Entebbe
                                Highway</p>
                            <p class="o-footer-into">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec
                                id elit non mi
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
                            <small class="block">• Designed by occn8 <a href="http://occn8.com/"
                                    target="_blank">occn8.com</a>
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
    <script src="contactform/contactform.js"></script>
    <script src="js/popper.min.js"></script>
</body>

</html>
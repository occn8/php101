<?php 
	session_start();

	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	$servername = "localhost";
	$user = "root";
	$password = "";
	// $dbase = "airline";
	
	$db = mysqli_connect($servername, $user, $password);
	// if ($db->connect_error) {
	// 	die("Connection failed: " . $db->connect_error);
	// }

	$base = "CREATE DATABASE IF NOT EXISTS travelDB";
		if (mysqli_query($db, $base)) {
		    echo "Db check";
		} else {
		    echo "Error creating database: " . mysqli_error($db);
		}

	$use = "USE travelDB";
		mysqli_query($db, $use);

	$sql = "CREATE TABLE IF NOT EXISTS users (
		id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		fname VARCHAR(30) NOT NULL,
		lname VARCHAR(30) NOT NULL,
		username VARCHAR(30) NOT NULL,
		email VARCHAR(50),
		address VARCHAR(20) NOT NULL,
		country VARCHAR(20),
		district VARCHAR(20),
		zip VARCHAR(10),
		password VARCHAR(50)
		)";
		mysqli_query($db, $sql);

	 $sql2 = "CREATE TABLE IF NOT EXISTS bookings (
		travelId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		trip VARCHAR(20) NOT NULL,
		dport VARCHAR(30) NOT NULL,
		aport VARCHAR(30) NOT NULL,
		adults VARCHAR(5),
		children VARCHAR(5),
		infants VARCHAR(5),
		class VARCHAR(20) NOT NULL,
		paymentMethod VARCHAR(20),
		ccname VARCHAR(30),
		ccnum VARCHAR(30),
		ccexp VARCHAR(30),
		cvv VARCHAR(10)
		)";
		mysqli_query($db, $sql2);

	// [REGISTER USER]
	if (isset($_POST['register_user'])) {
		$fname = mysqli_real_escape_string($db, $_POST['fname']);
		$lname = mysqli_real_escape_string($db, $_POST['lname']);
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$address = mysqli_real_escape_string($db, $_POST['address']);
		$country = mysqli_real_escape_string($db, $_POST['country']);
		$district = mysqli_real_escape_string($db, $_POST['district']);
		$zip = mysqli_real_escape_string($db, $_POST['zip']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);


		if (empty($fname)) { array_push($errors, "First name is required"); }
		if (empty($lname)) { array_push($errors, "Last name is required"); }
		if (empty($username)) { array_push($errors, "Username is required"); }
		if (empty($email)) { array_push($errors, "Email is required"); }
		if (empty($password_1)) { array_push($errors, "Password is required"); }

		if ($password_1 != $password_2) {
			array_push($errors, "Passwords do not match");
		}

		// [register]
		if (count($errors) == 0) {
			$password = md5($password_1);
			$query = "INSERT INTO users (fname, lname, username, email, address, country, district, zip, password) 
					  VALUES('$fname','$lname', '$username', '$email', '$address', '$country', '$district', '$zip', '$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are logged in";
			setcookie('user', $username, time() + (86400 * 2), "/");
			header('location: index.php');
		}

	}

	// [LOGIN USER]
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are logged in";
				setcookie('user', $username, time() + (86400 * 2), "/");
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username, Password combination");
			}
		}
	}

	// [BOOKINGS]
	if (isset($_POST['book_flight'])) {
		$trip = mysqli_real_escape_string($db, $_POST['trip']);
		$dport = mysqli_real_escape_string($db, $_POST['dport']);
		$aport = mysqli_real_escape_string($db, $_POST['aport']);
		$adults = mysqli_real_escape_string($db, $_POST['adults']);
		$children = mysqli_real_escape_string($db, $_POST['children']);
		$infants = mysqli_real_escape_string($db, $_POST['infants']);
		$class = mysqli_real_escape_string($db, $_POST['class']);
		$paymentMethod = mysqli_real_escape_string($db, $_POST['paymentMethod']);
		$ccname = mysqli_real_escape_string($db, $_POST['ccname']);
		$ccnum = mysqli_real_escape_string($db, $_POST['ccnum']);
		$ccexp = mysqli_real_escape_string($db, $_POST['ccexp']);
		$cvv = mysqli_real_escape_string($db, $_POST['cvv']);


		if (empty($trip)) { array_push($errors, "Trip is required"); }
		if (empty($dport)) { array_push($errors, "Departure port is required"); }
		if (empty($aport)) { array_push($errors, "Arrival port is required"); }
		if (empty($adults)) { array_push($errors, "Adult number is required"); }
		// if (empty($children)) { array_push($errors, "children number is required"); }
		// if (empty($infants)) { array_push($errors, "Infant number is required"); }
		if (empty($class)) { array_push($errors, "Travel class is required"); }
		if (empty($paymentMethod)) { array_push($errors, "PaymentMethod is required"); }
		if (empty($ccname)) { array_push($errors, "CC name is required"); }
		if (empty($ccnum)) { array_push($errors, "CC number is required"); }
		if (empty($ccexp)) { array_push($errors, "Expiration date is required"); }
		if (empty($cvv)) { array_push($errors, "CCV is required"); }
		if ($dport == $aport) {
			array_push($errors, "Departure matches Arrival Port");
		}

		if (count($errors) == 0) {
			$query = "INSERT INTO bookings (trip, dport, aport, adults, children, infants, class, paymentMethod, ccname, ccnum, ccexp, cvv) 
					  VALUES('$trip','$dport', '$aport', '$adults', '$children', '$infants', '$class', '$paymentMethod', '$ccname', '$ccnum', '$ccexp', '$cvv')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Booked successfuly";
			header('location: index.php');
		}

	}

?>

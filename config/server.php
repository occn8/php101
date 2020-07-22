<?php 
	session_start();
	// if (session_status() == PHP_SESSION_NONE) {
	// 	session_start();
	//   }
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	require('create.php');		

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
		$sql_u = "SELECT * FROM users WHERE username='$username'";
		$res_u = mysqli_query($db, $sql_u);
		
		if (empty($fname)) { array_push($errors, "First name is required!"); }
		else{if(!preg_match("/[a-zA-Z]{3,30}$/", $fname)){ array_push($errors, "Invalid First name!"); }}
		if (empty($lname)) { array_push($errors, "Last name is required!"); }
		if (empty($username)) { array_push($errors, "Username is required!"); }
		if (mysqli_num_rows($res_u) > 0) { array_push($errors, "Sorry.. Username already taken!"); }
		if (empty($email)) { array_push($errors, "Email is required!"); }
		if (empty($password_1)) { array_push($errors, "Password is required!"); }
		if(!preg_match("/[0-9]{4,5}$/", $zip)){ array_push($errors, "Invalid Zip code!"); }
		if ($password_1 != $password_2) {
			array_push($errors, "Passwords do not match!");
		}

		// [register]
		if (count($errors) == 0) {
			$password = md5($password_1);
			$query = "INSERT INTO users (fname, lname, username, email, address, country, district, zip, password) 
					  VALUES('$fname','$lname', '$username', '$email', '$address', '$country', '$district', '$zip', '$password')";
			mysqli_query($db, $query);
			$user_id = mysqli_insert_id($db);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are logged in";
			setcookie('id', $user_id, time() + (86400 * 2), "/");
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
				$user_id = mysqli_insert_id($db);

				setcookie('id', $user_id, time() + (86400 * 2), "/");
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

		if (empty($trip)) { array_push($errors, "Trip is required!"); }
		if (empty($dport)) { array_push($errors, "Departure port is required!"); }
		if (empty($aport)) { array_push($errors, "Arrival port is required!"); }
		if (empty($adults)) { array_push($errors, "Adult number is required!"); }
		// if (empty($children)) { array_push($errors, "children number is required"); }
		// if (empty($infants)) { array_push($errors, "Infant number is required"); }
		if (empty($class)) { array_push($errors, "Travel class is required!"); }
		if (empty($paymentMethod)) { array_push($errors, "PaymentMethod is required!"); }
		if (empty($ccname)) { array_push($errors, "CC name is required!"); }
		if (empty($ccnum)) { array_push($errors, "CC number is required!"); }
		if (empty($ccexp)) { array_push($errors, "Expiration date is required!"); }
		if (empty($cvv)) { array_push($errors, "CCV is required!"); }
		if ($dport == $aport) {
			array_push($errors, "Departure matches Arrival Port!");
		}

		if (count($errors) == 0) {
			$query = "INSERT INTO bookings (username, trip, dport, aport, adults, children, infants, class, paymentMethod, ccname, ccnum, ccexp, cvv) 
					  VALUES('$_SESSION[username]','$trip','$dport', '$aport', '$adults', '$children', '$infants', '$class', '$paymentMethod', '$ccname', '$ccnum', '$ccexp', '$cvv')";
			mysqli_query($db, $query);

			$_SESSION['booked'] = "Booked successfuly";
			header('location: bookings.php');
		}

	}

	// $sq = "UPDATE users SET lname='angie' WHERE id=2";
	// // mysqli_query($db, $sq);
	// if ($db->query($sq) === TRUE) {
	//     // echo "Record updated successfully";
	// } else {
	//     echo "Error updating record: " . $db->error;
	// }

	if (isset($_POST['delete_user'])) {
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($password)) { array_push($errors, "Password is required!"); }
		// if ($password != $password) {
		// 	array_push($errors, "Password does not match!");
		// }

		if (count($errors) == 0) {
			$query = "DELETE FROM users WHERE id='$_COOKIE[id]'";
			mysqli_query($db, $query);

			session_destroy();
			unset($_SESSION['username']);
			header('location: logIn.php');
		}
	
	}

	// $sq2 = "DELETE FROM users WHERE id='$_COOKIE[id]'";
	// if ($db->query($sq2) === TRUE) {
	//     // echo "Record deleted successfully";
	// } else {
	//     echo "Error deleting record: " . $db->error;
	// }

	$querry_s = "SELECT * FROM bookings";
	$result = $db->query($querry_s);
	if ($result->num_rows > 0) {
	    // while($row = $result->fetch_assoc()) {
	    //     echo "travelId: " . $row["travelId"]. " - Travel class: " . $row["class"]. " " . $row["trip"]. "<br>";
	    // }
	} else {
	    echo "0 results";
	}

	$querry_user = "SELECT * FROM users WHERE id='$_COOKIE[id]'";
	$userresult = $db->query($querry_user);
	if ($userresult->num_rows > 0) {
	} else {
	    echo "0 results";
    }

?>
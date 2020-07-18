<?php 
	session_start();

	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	$servername = "localhost";
	$user = "root";
	$password = "";
	$dbase = "airline";
	
	$db = mysqli_connect($servername, $user, $password, $dbase);
	// if ($db->connect_error) {
	// 	die("Connection failed: " . $db->connect_error);
	// }

	$sql = "CREATE TABLE users (
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
				setcookie('user', $username, time() + (86400 * 30), "/");
				header('location: index.php');
			}else {
				array_push($errors, "Wrong username, Password combination");
			}
		}
	}

?>

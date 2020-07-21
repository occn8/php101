<?php
require_once('connect.php');
	
$base = "CREATE DATABASE IF NOT EXISTS travelDB";
    if (mysqli_query($db, $base)) {
        // echo "Db check";
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

$sql3 = "CREATE TABLE IF NOT EXISTS comments (
    commentId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    comment VARCHAR(100) NOT NULL
    )";
    mysqli_query($db, $sql3);

// $sql4 = "CREATE TABLE IF NOT EXISTS prices (
//     priceId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     from VARCHAR(30) NOT NULL,
//     to VARCHAR(30) NOT NULL,
//     price INT(20) NOT NULL
//     )";
//     mysqli_query($db, $sql4);    

// $sp = "INSERT INTO prices (from, to, price) VALUES ('JFK', 'Enttebe', '260')";
// $sp = "INSERT INTO prices (from, to, price) VALUES ('Dubai', 'Nairobi', '400')";
// $sp = "INSERT INTO prices (from, to, price) VALUES ('Nairobi', 'JFK', '300')";

// if ($db->multi_query($sp) === TRUE) {
//     // echo "New records created successfully";
// } else {
//     echo "Error: " . $sp . "<br>" . $db->error;
// }

?>
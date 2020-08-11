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
    regdate DATE,
    address VARCHAR(20) NOT NULL,
    country VARCHAR(20),
    district VARCHAR(20),
    zip VARCHAR(10),
    password VARCHAR(50)
    )";
    mysqli_query($db, $sql);

$sql2 = "CREATE TABLE IF NOT EXISTS bookings (
    travelId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    trip VARCHAR(20) NOT NULL,
    dport VARCHAR(30) NOT NULL,
    aport VARCHAR(30) NOT NULL,
    bookdate DATE,
    ddate DATE NOT NULL,
    adults VARCHAR(5),
    children VARCHAR(5),
    infants VARCHAR(5),
    class VARCHAR(20) NOT NULL,
    paymentMethod VARCHAR(20),
    ccname VARCHAR(30),
    ccnum VARCHAR(30),
    ccexp DATE,
    cvv VARCHAR(10)
    )";
    mysqli_query($db, $sql2);

$sql3 = "CREATE TABLE IF NOT EXISTS comments (
    commentId INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    comment VARCHAR(100) NOT NULL
    )";
    mysqli_query($db, $sql3);


$bokins = "INSERT INTO `bookings` (`travelId`, `username`, `trip`, `dport`, `aport`, `bookdate`, `ddate`, `adults`, `children`, `infants`, `class`, `paymentMethod`, `ccname`, `ccnum`, `ccexp`, `cvv`) VALUES
    (1, 'lary', 'Round-trip', 'Dubai', 'Detrioit', '2020-07-25', '2020-08-07', '2', '0', '0', 'First-class', 'Credit', 'warrior', '737425633754', '2020-04-06', '777'),
    (2, 'tasha', 'One-way', 'Detrioit', 'JFK', '2020-07-25', '2020-08-08', '2', '0', '0', 'Business', 'Debit', 'warman', '371457824698978', '2022-04-07', '787'),
    (3, 'tom', 'Multi-Directional', 'Entebbe', 'Nairobi', '2020-07-25', '2020-07-31', '1', '2', '1', 'Economy', 'Master', 'famo', '52416869661046', '2021-04-06', '454'),
    (4, 'man', 'One-way', 'Detrioit', 'Nairobi', '2020-07-25', '2020-07-31', '2', '1', '2', 'Business', 'Debit', 'yumm', '231599y71482621', '2022-04-02', '455')";
    mysqli_query($db, $bokins);
    
$commt = "INSERT INTO `comments` (`commentId`, `username`, `comment`) VALUES
    (1, 'lary', 'flight time was short and sweet'),
    (2, 'tasha', 'i would luv to fly again with ug air'),
    (3, 'tom', 'family friendly'),
    (4, 'tasha', 'amazing staff'),
    (5, 'lary', 'wooow good'),
    (6, 'tom', 'black flight rules....yeah'),
    (7, 'tom', 'God  luv commenting'),
    (8, 'tom', 'speechless'),
    (9, 'man', 'good flight crew')";
    mysqli_query($db, $commt);

$usr = "INSERT INTO `users` (`id`, `fname`, `lname`, `username`, `email`, `regdate`, `address`, `country`, `district`, `zip`, `password`) VALUES
    (1, 'ochen', 'hillary', 'lary', 'lary@oc.com', '2020-07-25', '1st st', 'Uganda', 'Kampala', '9090', '202cb962ac59075b964b07152d234b70'),
    (2, 'natasha', 'angella', 'tasha', 'tasha@ta.com', '2020-07-25', '1st st', 'Uganda', 'Kampala', '9090', '202cb962ac59075b964b07152d234b70'),
    (3, 'tommy', 'jerry', 'tom', 'tomus@to.com', '2020-07-25', '18 th', 'Uganda', 'Entebbe', '8764', '202cb962ac59075b964b07152d234b70'),
    (4, 'mandem', 'seh', 'man', 'man@men.com', '2020-07-25', '12wt', 'Uganda', 'Entebbe', '7843', '202cb962ac59075b964b07152d234b70')";
    mysqli_query($db, $usr);

    
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
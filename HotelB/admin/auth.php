<?php
$username = "unleashe_hotel";
$password = "unleashe_hotel";
$hostname = "localhost";
$db = "hotel";
//connection to the database
$dbhandle = mysqli_connect($hostname, $username, $password,$db)
 or die("Unable to connect to MySQL");

//select a database to work

//$selected = mysqli_select_db($db,$dbhandle)
//  or die("Could not select database");
//  if (!$selected) {
  //        die("Database selection failed: " . mysqli_connect_error());
  //    }

?>

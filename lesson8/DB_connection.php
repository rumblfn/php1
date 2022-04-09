<?php
mysqli_report(MYSQLI_REPORT_ERROR |   MYSQLI_REPORT_STRICT);
// $db = @mysqli_connect("localhost:8889", "egor", "1432", "shop") or die('Error!' . mysqli_connect_error());
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "Gallery";

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$db) {
  die("Connection failed: " . mysqli_connect_error());
}
?>

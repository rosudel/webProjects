<?php $servername = "localhost";
$uname = "root";
$password1 = "";
$dbname = "online_art_gallery_database_final";

// Create connection
 $conn = mysqli_connect($servername, $uname, $password1, $dbname);
$mysqli = new mysqli($servername, $uname, $password1, $dbname);
$mysqli->set_charset("utf8");
 // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
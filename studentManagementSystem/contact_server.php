<?php
session_start();

// initializing variables
$name = "";
$email = "";
$message = "";

// connect to the database
$db = mysqli_connect('localhost', 'root','', 'studentmanagementsystem');

if (isset($_POST['mes_user'])) {
  // receive all input values from the form
$name = mysqli_real_escape_string($db, $_POST['name']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$message= mysqli_real_escape_string($db, $_POST['message']);

$query_c ="INSERT INTO contact(`name`,`email`,`message`) VALUES('$name','$email','$message')";

$res1=mysqli_query($db, $query_c);
 if($res1){
      	header('location: home.php');
    }
    else {
      echo "here is problem";
    }

 }



?>
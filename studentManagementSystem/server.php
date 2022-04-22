<?php
session_start();

// initializing variables
$student_id = "";
$email    = "";
$msg = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root','', 'studentmanagementsystem');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $student_id = mysqli_real_escape_string($db, $_POST['student_id']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $contact_no = mysqli_real_escape_string($db, $_POST['contact_no']);
  $bday = mysqli_real_escape_string($db, $_POST['bday']);




  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  $target = "images/".basename($_FILES['photo']['name']);
  $photo = $_FILES['photo']['name'];

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  // data2 start
  if (empty($student_id)) { array_push($errors, "student_id is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) { array_push($errors, "The two passwords do not match");}
// data2 end
  // first check the database to make sure
  // a user does not already exist with the same username and/or email
// data1 start
$user_check_query = "SELECT Student_ID,Email FROM student ";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if ($user) { // if user exists
  if ($user['Student_ID'] === $student_id) {
    array_push($errors, "Student_ID already exists");
  }

  if ($user['Email'] === $email) {
    array_push($errors, "email already exists");
  }
}
echo count($errors);
// data1 end
  // Finally, register user if there are no errors in the form
//encrypt the password before saving in the database
if (count($errors) == 0) {
  	$password = md5($password_1);
    echo md5($password_1);
  	$query ="INSERT INTO student(`Student_ID`,`First_Name`,`Last_Name`,`Address`,`Email`,`Contact_NO`,`Date_of_birth`,`photo`,`password`) VALUES
                                  ('$student_id','$first_name','$last_name','$address','$email','$contact_no','$bday','$photo','$password')";
  	$res=mysqli_query($db, $query);
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
      echo " upload image<br>";
    }else{
      echo "Failed to upload image";
    }

    if($res){
      	header('location: home.php');
    }
    else {
      echo "here is problem";
    }

}
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $student_id = mysqli_real_escape_string($db, $_POST['student_id']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($student_id)) {
    array_push($errors, "Student_ID is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM student WHERE Student_ID=$student_id AND password=$password";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['Student_ID'] = $student_id;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>

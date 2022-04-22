<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system </title>
  <link rel="stylesheet" type="text/css" href="css/styleRes.css">
</head>
<body>
  <div style="background-image: url('images/bg-01.jpg');">
  <div class="header">
    <h2>Register</h2>
  </div>

  <form method="post" action="server.php" enctype="multipart/form-data">
    <?php include('errors.php'); ?>
    <div class="input-group">
      <label>Student ID</label>
      <input type="text" name="student_id" placeholder="Student ID" value="<?php echo $student_id; ?>">
    </div>
    <div class="input-group">
      <label>First Name</label>
      <input type="text" name="first_name" placeholder="First Name" value="">
    </div>
    <div class="input-group">
      <label>Last Name</label>
      <input type="text" name="last_name" placeholder="Last Name" value="">
    </div>
    <div class="input-group">
      <label>ADDRESS</label>
      <input type="text" name="address" placeholder="address" value="">
    </div>
    <div class="input-group">
      <label>Email</label>
      <input type="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
    </div>
    <div class="input-group">
      <label>Contact No</label>
      <input type="number" name="contact_no" placeholder="Contact No" value="<?php echo $contact_no; ?>">
    </div>
      <div class="input-group">
      <label>Date of Birth</label>
      <input type="date" name="bday" placeholder="Birthday" value="<?php echo $bday; ?>">
    </div>
     <div class="input-group">
      <label>Your Adorable Photo</label>
      <input type="file" name="photo" accept="image/*" value="<?php echo $photo; ?>">

    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1">
    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input type="password" name="password_2">
    </div>
    <div class="input-group">
      <button type="submit" class="btn" name="reg_user">Register</button>
    </div>
    <p>
      Already a member? <a href="login.php">Sign in</a>
    </p>
  </form>
</div>
</body>
</html>

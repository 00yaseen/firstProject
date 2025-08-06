<?php
session_start();
include("includes/database.php");

$success = "";
$error = "";

if($_SERVER["REQUEST_METHOD"]== "POST"){
  $name = mysqli_real_escape_string($conn, $_POST['fullname']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  $check = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
  if(mysqli_num_rows($check) > 0 ){
    $error = "Email alredy exist";
  } else{
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $insert = "INSERT INTO users(name,email,password)VALUES('$name','$email','$hashed_password')";
    if(mysqli_query($conn,$insert)){
      header("location: login.php");
    }else{
      $error = "Something went wrong...!";
    }
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register | CS Portal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="assets\CSS\login_register.css" rel="stylesheet">
</head>
<body>

  <div class="glass-card">
    <h1 class="title is-4 has-text-centered">Create Your CS Portal Account</h1>
    <p class="has-text-centered mb-4">Start your journey in coding, projects & career paths!</p><hr>

    <form action="" method="POST">

      <div class="field">
        <label class="label has-text-white">Full Name</label>
        <div class="control has-icons-left">
          <input class="input" type="text" name="fullname" placeholder="Ada Lovelace" required>
          <span class="icon is-small is-left">
            <i class="fas fa-user"></i>
          </span>
        </div>
      </div>

      <div class="field">
        <label class="label has-text-white">Email</label>
        <div class="control has-icons-left">
          <input class="input" type="email" name="email" placeholder="you@cs.com" required>
          <span class="icon is-small is-left">
            <i class="fas fa-envelope"></i>
          </span>
        </div>
      </div>

      <div class="field">
        <label class="label has-text-white">Password</label>
        <div class="control has-icons-left">
          <input class="input" type="password" name="password" placeholder="••••••••" required>
          <span class="icon is-small is-left">
            <i class="fas fa-lock"></i>
          </span>
        </div>
      </div>

      <div class="field">
        <label class="label has-text-white">Confirm Password</label>
        <div class="control has-icons-left">
          <input class="input" type="password" name="confirm_password" placeholder="••••••••" required>
          <span class="icon is-small is-left">
            <i class="fas fa-check-circle"></i>
          </span>
        </div>
      </div>

      <div class="field mt-4">
        <button class="button is-primary is-fullwidth">Register Now</button>
      </div>

      <div class="footer-text">
        Already registered? <a href="login.php">Login here</a>
      </div>
    </form>
  </div>

</body>
</html>

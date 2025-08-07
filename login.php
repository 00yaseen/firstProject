<?php
session_start();
include("database.php");

$error = "";

if($_SERVER["REQUEST_METHOD"]== "POST"){
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  $result = mysqli_query($conn, "SELECT * FROM users WHERE email ='$email'");

  if(mysqli_num_rows($result)== 1){
    $row = mysqli_fetch_assoc($result);

    if(password_verify($password, $row['password'])){
      $_SESSION['user_id'] = $row['id'];
      $_SESSION['user_name'] = $row['name'];
      $_SESSION['user_email'] = $row['email'];
      header("Location: index.php");
      exit;
    }else{
      $error = "incorrect password";
    }
  }else{
    $error = "Email Not Found...!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login | CS Portal</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="assets\CSS\login_register.css" rel="stylesheet">
</head>
<body>

  <div class="glass-card">
    <h1 class="title is-4 has-text-centered">Welcome Back to CS Portal</h1>
    <p class="has-text-centered mb-4">Login to explore projects, coding, and your dashboard!</p><hr>

    <form action="" method="POST">

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

      <div class="field mt-4">
        <button class="button is-primary is-fullwidth">Login</button>
      </div>

      <div class="footer-text">
        Not registered yet? <a href="register.php">Create account</a>
      </div>
    </form>
  </div>

</body>
</html>


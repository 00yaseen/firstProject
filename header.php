<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IT Study Hub</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<!-- Header -->
<header class="has-text-centered">
  <h1 class="title is-2 has-text-weight-bold is-uppercase has-text-warning">Welcome to IT Study Hub</h1>
  <p class="subtitle is-5 has-text-white">Learn, Code, Grow — Your Future Starts Here</p>
  <?php if(isset($_SESSION['user_name'])):?>
  <a href="logout.php" title="Logout" class="button is-warning is-outlined is-small login-btn">Logout</a>

  <div class="navbar-item has-text-white has-text-centered">👋 Welcome, <?= htmlspecialchars($_SESSION['user_name']) ?></div>
  <?php else:?>
    <a href="login.php" class="button is-light is-small login-btn">LogIn</a>
    <?php endif;?>
</header>
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <!-- Burger menu -->
    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="mainNavbar">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div id="mainNavbar" class="navbar-menu">
    <div class="navbar-start is-flex is-justify-content-center is-flex-grow-1">
      <a class="navbar-item has-text-weight-bold" href="index.php">Home</a>
      <a class="navbar-item has-text-weight-bold" href="about.php">About</a>
      <a class="navbar-item has-text-weight-bold" href="courses.php">Courses</a>
      <a class="navbar-item has-text-weight-bold" href="contact.php">Contact</a>
      
    </div>
</div>
</nav>








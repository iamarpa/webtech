<?php

session_start();
 
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../Styles/home.css">
  <title>Play Ground Reservation</title>
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>P</span>lay<span>G</span>round<span>R</span>eservation</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="#hero" data-after="Home">Home</a></li>
            <li><a href="viewprofile.php" data-after="Profile">Profile</a></li>
            <li><a href="../Controller/logout.php" data-after="Logout">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->

  <!-- Hero Section  -->
  <section id="hero">
    <div class="hero container">
      <div>
        <h1>Welcome, <span></span></h1>
        <h1>to <span></span></h1>
        <h1>Play Ground Reservation System <span></span></h1>
        <a href="#footer" type="button" class="cta">About US</a>
      </div>
    </div>
  </section>
  <!-- End Hero Section  -->

  

  <!-- Footer -->
  <section id="footer">
    <div class="footer container">
      <div class="brand">
      <h1><span>P</span>lay<span>G</span>round<span>R</span>eservation</h1>
      </div>
      <h2>Reserve Your Ground</h2>
      <p>Copyright © 2020 . All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
  <script src="./app.js"></script>
</body>

</html>
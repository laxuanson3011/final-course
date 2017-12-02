<?php session_start(); ?>
<?php require_once "../db/mysql.php"; ?>
<?php
  define("URL_IMAGE", "http://localhost:8080/final-course/public/uploads/");
?>
<!DOCTYPE html>
<html>
<head>
    <?php include "lib.php"; ?> 
</head>
<body style="background-color: #C8D7DE;">

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <img class="navbar-brand" src="http://localhost:8080/final-course/public/uploads/7.jpg" width="100" height="50"></img>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Home
              </a> 
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="services.php">Services</a>
              <span class="sr-only">(current)</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

  <div class="container">

      <div class="row">
        <?php include "slide-left.php" ?>
      <div class="col-lg-9">
      <div class="my-4">
        <div class="row" style="border-color: rgb(0,0,0);border-style: double; border-width: 5px;">
            <?php include "product.php" ?>
        </div>
        
      </div>
      </div>
      </div>
  </div>
<div class="footer" style=" width: auto; height: auto;">
<div><?php include "footer.php" ?></div></div>
</body>
</html>
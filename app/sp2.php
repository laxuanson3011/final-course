<?php session_start(); ?>
<?php require_once "../db/mysql.php"; ?>
<?php
  define("URL_IMAGE", "http://localhost:8080/final-course/public/uploads/");
?>
<!DOCTYPE html>
<html lang="en">
  <head>    
    <?php include "lib.php"; ?>    
  </head>
  <body style="background-color: #C8D7DE;">
    <!-- Navigation -->
    <?php include "menu.php" ?>
    <!-- Page Content -->
    <div class="container">
      <div class="row">
        <?php include "slide-left.php" ?>
        <!-- /.col-lg-3 -->
        <div class="col-lg-9"> 
        <?php include "slide.php" ?>   
          <div class="row">
                <div class="card mt-4">
                    <img class="card-img-top img-fluid" src="http://localhost:8080/final-course/public/uploads/product/sp2.jpg" alt="">
                    <div class="card-body">
                      <h3 class="card-title">SAMSUNG GALAXY J7</h3>
                      <h4>2000000000</h4>
                      <p class="card-text">
                      The improvements on the iPhone 8 are not many, but all are worth the price changes, such as the powerful Bionic A11 chip, wireless charging feature. iPhone 8 still uses a 12 MP camera but uses a larger sensor, supporting optical anti-shake.<br>
                      The iPhone 8 has a 4.7 inch screen, keeping the display technology in comparison to the previous generation.<br>
                      Apple said it uses a TrueTone screen, which has a mechanism to adjust the light on the screen based on the light sensor, but according to the initial evaluation of the foreign press, this mechanism works ineffective.
                      </p>
                      <span class="text-warning"></span>
                      <div class="card-footer" style="width: 100%">
                        <small class="text-muted" >&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                  </div>
                </div>
                <!-- /.card -->    
           
                   
          </div>
          <!-- /.row -->
        </div>
        <!-- /.col-lg-9 -->  
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container -->
  <div>
    <!-- Footer -->
    <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <script src="../public/js/jquery.min.js"></script>
    <script src="../public/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
 
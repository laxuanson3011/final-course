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
                    <img class="card-img-top img-fluid" src="http://localhost:8080/final-course/public/uploads/product/sp1.jpeg" alt="">
                    <div class="card-body">
                      <h3 class="card-title">SAMSUNG GALAXY J7</h3>
                      <h4>2000000000</h4>
                      <p class="card-text">The perfect monolithic metal case combined with an exquisite flat-panel camera and 2.5D classy curved glass showcase class. Many color options help you express your personality.<br>
                      The perfect monolithic metal case combined with an exquisite flat-panel camera and 2.5D classy curved glass showcase class. Many color options help you express your personality.<br>
                      Galaxy J7 brings the perfect picture, beautiful natural, bright glowing detail, challenging every light condition.<br>
                      Bring individuality to each photo with background blur effect like a professional camera.<br>
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

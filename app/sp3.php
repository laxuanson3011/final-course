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
  <body style="background-color: #C8D7DE;)">
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
                    <img class="card-img-top img-fluid" src="http://localhost:8080/final-course/public/uploads/product/sp3.jpg" alt="">
                    <div class="card-body">
                      <h3 class="card-title">SONY XPERIA X ULTRA</h3>
                      <h4>520000000</h4>
                      <p class="card-text">
                      With the smartphone screen trend is not border or ultra-thin, Sony will of course be able to "watch". The Xperia X Ultra 2018 with Full Screen is available on China's Weibo.<BR>

					   And today there are still demo images based on rumors about the product. This is an ideal concept for Sony fans.<BR>
						The Xperia X will be slimmer, but it will be slimmer because of its new 18: 9 aspect ratio display, which is slim on the A-series, and will now appear. on the X line. And yet, the upper and lower borders will also be smaller. Overall with this design, users will not be discouraged.<BR>

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

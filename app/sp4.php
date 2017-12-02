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
                    <img class="card-img-top img-fluid" src="http://localhost:8080/final-course/public/uploads/product/sp4.png" alt=""> 
                    <div class="card-body">
                      <h3 class="card-title">NOKIA 6</h3>
                      <h4>25600000000000</h4>
                      <p class="card-text">
                      Nokia 6 promotes the essence of our design: minimalist design with metal body, just to the detail. There are five different colors to choose from, including Black Arte for limited edition.<br>
Nokia 6 body is cut precisely from monolithic aluminum. It took us 55 minutes to process from an intact piece of metal. Protected by the Corning® Gorilla® tempered glass, this phone is ready for any living circumstance.<br>
For decades, Nokia phones have been known for their beautifully crafted designs and excellent quality. This phone is full of things: it is designed to serve your daily life - durable, great use, ideal balance between performance and good battery life.<br>
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

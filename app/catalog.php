<?php session_start(); ?>
 <?php require_once "../db/mysql.php"; ?>
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
           <div class="row" style="border-color: rgb(0,0,0);border-style: double; border-width: 5px; text-align: center;">
             <?php
               if(isset($_GET["id"])){
               $id = $_GET["id"];
                 $sql = "select * from catalogs where id=$id";
                 $result = $conn->query($sql);
                 if($result->num_rows > 0)
                 {
                  while($row = $result->fetch_assoc()) {?>
                     <div class="card h-100">
                       <div class="card-body">
                         <h4 class="card-title">
                           <a href="#" style="color: black;"><?php echo $row["name"];?></a>
                         </h4>
                         <p class="card-text"><?php echo $row["description"];?>.</p>
                       </div>
                     </div>
                   
                  <?php  }
                 }
               }else{
                 echo "<h1>Emty</h1>";
               }
               ?>           
           </div>
           <!-- /.row -->
         </div>
         <!-- /.col-lg-9 -->  
       </div>
       <!-- /.row -->
     </div>
<!-- /.container -->
 
     <!-- Footer -->
     <?php include "footer.php" ?>
 
     <!-- Bootstrap core JavaScript -->
    <script src="../public/js/jquery.min.js"></script>
     <script src="../public/js/bootstrap.bundle.min.js"></script>
  </body>
 </html>
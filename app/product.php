
<?php
                $sql = "select * from products";
                $result = $conn->query($sql);
                if($result->num_rows > 0)
                {
                  while($row = $result->fetch_assoc()) {?>
                  <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                      <a href="single.php?id=<?php echo $row["id"];?>"><img class="card-img-top" src="<?php echo URL_IMAGE.$row['image'];?>" alt=""></a>
                      <div class="card-body">
                        <h4 class="card-title">
                          <a href="single.php?id=<?php echo $row["id"];?>"><?php echo $row["name"];?></a>
                        </h4>
                        
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                    </div>
                  </div>
                  <?php  }
                }

              ?>
<div class="col-lg-4 col-md-6 mb-4">
	<div class="card h-100">
         <a href="#"><img class="card-img-top" src="http://localhost:8080/final-course/public/uploads/product/sp1.jpeg" alt=" " style="width: 650; height: 550"></a>
                      <div class="card-body">
                        <h4 class="card-title">
                          <a href="sp1.php">SAMSUNG GALAXY J7</a>
                        </h4>
                        
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                    </div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
	<div class="card h-100">
         <a href="#"><img class="card-img-top" src="http://localhost:8080/final-course/public/uploads/product/sp2.jpg" alt=" " style="width: 650; height: 550"></a>
                      <div class="card-body">
                        <h4 class="card-title">
                          <a href="sp2.php">IPHONE 8</a>
                        </h4>
                        
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                    </div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
	<div class="card h-100">
         <a href="#"><img class="card-img-top" src="http://localhost:8080/final-course/public/uploads/product/sp3.jpg" alt=" " style="width: 650; height: 550"></a>
                      <div class="card-body">
                        <h4 class="card-title">
                          <a href="sp3.php">SONY XPERIA X</a>
                        </h4>
                        
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                    </div>
</div>
<div class="col-lg-4 col-md-6 mb-4">
	<div class="card h-100">
         <a href="#"><img class="card-img-top" src="http://localhost:8080/final-course/public/uploads/product/sp4.png" alt=" " style="width: 650; height: 550"></a>
                      <div class="card-body">
                        <h4 class="card-title">
                          <a href="sp4.php">NOKIA 6</a>
                        </h4>
                        
                      </div>
                      <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                      </div>
                    </div>
</div>



<div class="col-lg-3">
  
  <div class="list-group">
  <div class="my-4">
  <h5 class="list-group-item" style="width: 255xpx; height: 100px; text-align-last: auto;border-color: #ff0000;
border-color: black;
border-color: rgb(0,0,0);border-style: double; border-width: 5px; font-family: Arial, Helvetica, sans-serif;font-size: 120%;font-size: 120%;font-weight: bold; text-align: center;">PHONE COMPANY</h5>
  	<?php
        $sql = "select * from catalogs where id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) { ?>            
    		<a href="catalog.php?id=<?php echo $row["id"];?>" class="list-group-item" style="border-color: rgb(0,0,0);border-style: double; border-width: 5px;text-align: center; color: black"><?php echo $row["name"]; ?></a>
          <?php   }
        }
      ?>
  </div>
</div>
</div>
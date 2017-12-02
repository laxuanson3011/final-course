<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php
  define("URL_IMAGE", "http://localhost:8080/final-course/public/uploads/");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Danh sach product </title>
  <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
</head>
<body>
<?php include "../../menuadmin.php";?>
  <div class="container">

  <h2>Danh sách san pham</h2>
  <div class="row">
    <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th>Anh</th>
        <th>Ten san pham</th>
        <th>Mô ta</th>
        <th>So luong</th>
        <th>Gia</th>
        <th>edit</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $sql = "select * from products";
      $result = $conn->query($sql);
      if($result->num_rows > 0)
      {
        while($row = $result->fetch_assoc()) {?>
        <tr>
          <td><img src="<?php echo URL_IMAGE.$row['image'];?>" width="32" height="32"></td>
          <td><?php echo $row["name"];?></td>
          <td><?php echo $row["description"];?></td>
          <td><?php echo $row["qty"];?></td>
          <td><?php echo $row["price"];?></td>
          <td><a href="edit.php?id=<?php echo $row["id"];?>">Edit</a></td>
          <td><a href="delete.php?id=<?php echo $row["id"];?>">Delete</a></td>
          </tr>
        <?php  }
      }

    ?>
    </tbody>
  </table>
</div>
<script src="../../../public/js/jquery.min.js"></script>
<script src="../../../public/js/bootstrap.min.js"></script>
<script src="../../../public/js/bootstrap.bundle.min.js"></script>
</body>
</html>

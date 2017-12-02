<?php require_once "../../../db/mysql.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Danh sach payments</title>
   <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
</head>
<body>
  <div class="container">
  <h2>Danh sach thanh toán</h2>
  <table class="table">
    <thead>
      <tr>
        <th>thông tin</th>
        <th>Name</th>
        <th>edit</th>
        <th>delete</th>
      </tr>
    </thead>
    <tbody>
    <?php
      $sql = "select * from payments";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) { ?>
        <tr>
          <td><?php echo $row['info']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><a href="edit.php?id=<?php echo $row["id"];?>">Edit</a></td>
          <td><a href="delete.php?id=<?php echo $row["id"];?>">Delete</a></td>
        </tr>
    <?php  }
    }
     ?>       
    </tbody>
  </table>
</div>
</body>
</html>

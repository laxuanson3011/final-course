<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php
  if(!isset($_GET["id"])){
    $_SESSION["flash"] = "Wrong id";
    header("location: index.php");
  }

  $id = $_GET["id"];
  $sql = "select * from payments where id='$id'";
  $result = $conn->query($sql);
  if ($result->num_rows == 0) {
    $_SESSION["flash"] = "payment not found with id";
    header("location:  index.php");
  }
  $row = $result->fetch_assoc();
  $name = $row["info"];
  $description = $row["name"];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CHINH SUA catalog</title>
    <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
  </head>
  <body>
  <div class="wrapper">
    <form method="post" action="update.php">
      <input type="hidden" value="<?php echo $id; ?>" name="id">
      <div class="row">
        <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
      </div>
      <div>
        <h1>CHINH SUA thanh toan</h1>
      </div>
      <div class="row">
        <label>thông tin:</label>
        <input class="form-control" type="text" name="info" value="<?php echo $info; ?>">
      </div>
      <div class="row">
        <label>name : </label>
      </div>
      <div class="row">
        <textarea class="form-control" type="text" name="name" style="border: 1px solid black"></textarea>
      </div>
      <div class="row">
        <button class="btn btn-primary">submit</button>
      </div>
    </form>
  </div>
  </body>
</html>
<?php unset($_SESSION["flash"]); ?>
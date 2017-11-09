<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php
  if(!isset($_GET["id"])){
    $_SESSION["flash"] = "Wrong id";
    header("location: index.php");
  }

  $id = $_GET["id"];
  $sql = "select * from catalogs where id='$id'";
  $result = $conn->query($sql);
  if ($result->num_rows == 0) {
    $_SESSION["flash"] = "catalog not found with id";
    header("location:  index.php");
  }
  $row = $result->fetch_assoc();
  $name = $row["name"];
  $description = $row["description"];
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
        <h1>CHINH SUA DANH MUC</h1>
      </div>
      <div class="row">
        <label>Ten danh muc:</label>
        <input class="form-control" type="text" name="name" value="<?php echo $name; ?>">
      </div>
      <div class="row">
        <label>Description : </label>
      </div>
      <div class="row">
        <textarea class="form-control" type="text" name="description" style="border: 1px solid black"></textarea>
      </div>
      <div class="row">
        <button class="btn btn-primary">submit</button>
      </div>
    </form>
  </div>
  </body>
</html>
<?php unset($_SESSION["flash"]); ?>
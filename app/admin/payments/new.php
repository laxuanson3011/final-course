<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tao moi payments</title>
    <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
  </head>
  <body>
  <div class="wrapper">
    <form method="post" action="create.php">
      <div class="row">
        <i class="flash">
            <?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?>
        </i>
      </div>
      <div>
        <h1>TAO MOI THANH TOAN</h1>
      </div>
      <div class="row">
        <label>thông tin :</label>
        <input class="form-control" type="text" name="info">
      </div>
      <div class="row">
        <label>name : </label>
        <textarea class="form-control" name="name"></textarea> 
      </div>
      <br>
      <div class="row">
        <button class="btn btn-primary">submit</button>
      </div>
    </form>
  </div>
  </body>
</html>
<?php unset($_SESSION["flash"]); ?>
<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/payment-helper.php"; ?>
<?php
  if(isset($_POST["info"]) && isset($_POST["name"])){
    $id = $_POST["id"];
    $info = $_POST["info"];
    $name = $_POST["name"];
    $sql = "update users set info='$info',name ='$name' where id=$id";
    $result = $conn->query($sql);
    if($result){
      $_SESSION["flash"] = "Updated success";
    }else{
      $_SESSION["flash"] = "Error: ".$sql."<br>".$conn->error;
    }

    header("location: index.php");
  }
?>
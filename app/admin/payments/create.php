<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/payment-helper.php"; ?>
<?php
  if(isset($_POST["info"]) && isset($_POST["name"])){
    $info = $_POST["info"];
    $name = $_POST["name"];
    $sql = "insert into payments(info,name) values('$info','$name')";
    $result = $conn->query($sql);
    if($result){
        $_SESSION["flash"] = "New record added success";
      }else{
        $_SESSION["flash"] = "Error: ".$sql."<br>".$conn->error;
      }
  }
  header("location: new.php");

?>
<?php
  function validate($info,$name){
    if(trim($info) == "" || trim($name) == ""){
      $_SESSION["flash"] = "info or name can not empty";
      return false;
    }
    $sql = "select * from payments where info='$info'";
    GLOBAL $conn;
    $result = $conn->query($sql);
    if($result->num_rows > 0){
      $_SESSION["flash"] = "info was existed.";
      return false;
    }
    return true;
  }
?>
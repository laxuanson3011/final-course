<?php
  function validate($name,$description){
    if(trim($name) == "" || trim($description) == ""){
      $_SESSION["flash"] = "name or description can not empty";
      return false;
    }
    $sql = "select * from catalogs where name='$name'";
    GLOBAL $conn;
    $result = $conn->query($sql);
    if($result->num_rows > 0){
      $_SESSION["flash"] = "name was existed.";
      return false;
    }
    return true;
  }
?>
<?php
  function validate($phone,$email){
    if(trim($phone) == "" || trim($email) == ""){
      $_SESSION["flash"] = "phone or status can not empty";
      return false;
    }
    $sql = "select * from orders where phone='$phone'";
    GLOBAL $conn;
    $result = $conn->query($sql);
    if($result->num_rows > 0){
      $_SESSION["flash"] = "phone was existed.";
      return false;
    }
    return true;
  }
?>

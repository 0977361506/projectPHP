<?php

  include_once("../Controller/xuly.php");
  $id = json_decode($_POST["data"]);
  $service = new Service();
  $conn=$service->connect();
  $query = "delete from sanpham where id='$id'";
  $result = mysqli_query($conn,$query);
?>
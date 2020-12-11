<?php
  include_once("../Controller/xuly.php");
  if($_GET['id']){
    $id=$_GET['id'];
    $yt=$_GET['yt']+1;
    $service = new Service();
    $conn=$service->connect();
    $query = "update sanpham  set yeuthich='$yt' where id='$id'";
    $result = mysqli_query($conn,$query);
  }
 

?>
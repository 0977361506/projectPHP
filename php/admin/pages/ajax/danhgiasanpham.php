<?php
  include_once("../Controller/xuly.php");
  if($_GET['idsp']){
    $idsp=$_GET['idsp'];
    $vote=$_GET['vote'];
    $date = date('Y-m-d');
    echo $date;
    $service = new Service();
    $conn=$service->connect();
    $query = " INSERT INTO danhgia (ngaygio,idsanpham,diemso) 
    VALUES ('$date', '$idsp', '$vote')";
    $result = mysqli_query($conn,$query);
  }
 

?>
<?php

  include_once("../Controller/xuly.php");
  $keyword = json_decode($_POST["data"]);
  $service = new Service();
  $conn=$service->connect();
  $query = "select * from danhmucsanpham where tendm like '%$keyword%' and status=1";
  $result = mysqli_query($conn,$query);
 
  // gửi dữ liệu lên server 
  $result_array = array();
  while($row=mysqli_fetch_assoc($result)) {
    array_push($result_array, $row);
     }  
     
  header('Content-type: application/json'); 
  echo json_encode($result_array);


?>
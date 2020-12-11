<?php
  include_once("../Controller/xuly.php");
  if($_GET['pagecurent']){
    $pagecurent=$_GET['pagecurent']*5;
    $service = new Service();
    $conn=$service->connect();
    $query = "select * from thanhvien limit $pagecurent,5";
    $result = mysqli_query($conn,$query);
      // gửi dữ liệu lên server 
  $result_array = array();
  while($row=mysqli_fetch_assoc($result)) {
    array_push($result_array, $row);
     }  
     
  header('Content-type: application/json'); 
  echo json_encode($result_array);

  }
 

?>
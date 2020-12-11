<?php

  include_once("../Controller/xuly.php");

  $service = new Service();
  $conn=$service->connect();
  $repass= $_POST['repass'];
  $pass= $_POST['pass'];
  $id= $_POST['id'];
 
  if(isset($pass)&&isset($repass)){
     
        $query = "
        update thanhvien set password='$pass' where id='$id'
        ";
        $result = mysqli_query($conn,$query);
      
  }
  
 
//   header('Content-type: application/json'); 
//   echo json_encode("oke");


?>
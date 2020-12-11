<?php

  include_once("../Controller/xuly.php");

  $service = new Service();
  $conn=$service->connect();

  $ten= $_POST['ten'];
  $username= $_POST['username'];
  $pass= $_POST['pass'];
  $email= $_POST['email'];
  $role= $_POST['role'];
  $anh = $_FILES['file']['name'];
  $tmp_name = $_FILES['file']['tmp_name'];
  if(isset($ten)&&isset($username)&&isset($pass)&&isset($email)&&isset($role)&&isset($anh)){
      if($anh=="") $anh= "hieu.jpg";
      else{
        $query = "
        INSERT INTO thanhvien (ten,username,password,role,image,email) 
        VALUES ('$ten', '$username', '$pass','$role','$anh','$email' )
        ";
        $result = mysqli_query($conn,$query);
      }
  }else{
    $query = "
    INSERT INTO thanhvien (ten,username,password,role,image,email) 
    VALUES ('$ten', '$username', '$pass','$role','profile.png','$email' )
    ";
    $result = mysqli_query($conn,$query);
  }
  
 
//   header('Content-type: application/json'); 
//   echo json_encode("oke");


?>
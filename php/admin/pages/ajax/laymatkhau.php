<?php

  include_once("../Controller/xuly.php");
  $tenemail =$_GET["email"];
  $service = new Service();
  $conn=$service->connect();
  $query = "select * from thanhvien where email='$tenemail'";
  $result = mysqli_query($conn,$query);
  $row = mysqli_num_rows ( $result );
  $dl= mysqli_fetch_array($result);
  if($row == 0){
     header('Content-type: application/json'); 
     echo json_encode("404");
  }else{
    $email = $dl['email'];
    $id= $dl['id'];
    $sql = "update thanhvien set password=12345 where id='$id'";
    mysqli_query($conn,$sql);
    $to      = $email;

    $subject = "Doi mat khau";
    $message = "Mật khẩu mới của bạn là : 12345";
    $header  =  "From: lethehieu151098@gmail.com";
    

    $success = mail ($to,$subject,$message,$header);
    if( $success == true )
    {
        header('Content-type: application/json'); 
        echo json_encode("200");
    }
    else
    {
        header('Content-type: application/json'); 
        echo json_encode("500");
    }
  }
 


?>
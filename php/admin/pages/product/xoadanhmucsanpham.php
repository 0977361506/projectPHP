<?php 
include_once("../../ketnoi.php");
  if(isset($_GET['id'])){

      $id = $_GET['id'];
      echo $id;
      $sql= "update danhmucsanpham set status='0' where id=".$id;
      $kq = mysqli_query($conn,$sql);
      if($kq) header("Location: danhmucsanpham.php");
  }
?>
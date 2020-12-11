<?php
 
  class Service {

    function Service() {
      
    }

    function connect(){
        $dbhost= "localhost";
        $dbUser = "root" ;
        $dbPass ="";
        $dbName ="qlsp";
        $conn = mysqli_connect($dbhost,$dbUser,$dbPass,$dbName);
        if($conn){
          mysqli_query($conn,"SET NAMES 'utf-8'");
          return $conn ;
        }else{
          die("kết nối thất bại".mysqli_connect_error());
        }
        return null;
    }

    function save($id){
        $conn = $this->connect();
        $sql = "update sanpham set trangthai=0 where id='$id'";
        mysqli_query($conn,$sql);
      }

     function saveAll($arrayID){
      
         foreach ($arrayID as $value){
            $this->save($value);
           
        }
     }

     function saveStatus($id){
        $conn = $this->connect();
        $sql = "update sanpham set trangthai=1 where id='$id'";
        mysqli_query($conn,$sql);
      }

     function saveAllStatus($arrayID){
      
         foreach ($arrayID as $value){
            $this->saveStatus($value);
           
        }
     }

     function findSanPhamById($name){
      $conn = $this->connect();
      $sql = "select * from sanpham where tensp='$name'";
      $result=mysqli_query($conn,$sql);

      if (!$result) {
        printf("Error: %s\n", mysqli_error($conn ));
        return null;
      }else{
        while($row=mysqli_fetch_array($result)) {
          $kq=$row['sltrongkho'];
          return $kq;
        }
      }
      return null;
     
      }
       
      function getAllSanPhamNew(){
        $conn = $this->connect();
        $sqldm ="select * from sanpham where new=1 limit 4";
        $result = mysqli_query($conn,$sqldm);
        if($result){
          $result_array = array();
          while($row=mysqli_fetch_assoc($result)) {
          array_push($result_array, $row);
          }  
          return $result_array ;
        }

        return null;

      }

      function getAllSanPhamHot(){
        $conn = $this->connect();
        $sqldm ="select * from sanpham where hot=1 limit 9";
        $result = mysqli_query($conn,$sqldm);
        if($result){
          $result_array = array();
          while($row=mysqli_fetch_assoc($result)) {
          array_push($result_array, $row);
          }  
          return $result_array ;
        }

        return null;

      }

      function getAllSanPhamDisCount(){
        $conn = $this->connect();
        $sqldm ="select * from sanpham where discount>0.0 limit 12";
        $result = mysqli_query($conn,$sqldm);
        if($result){
          $result_array = array();
          while($row=mysqli_fetch_assoc($result)) {
          array_push($result_array, $row);
          }  
          return $result_array ;
        }

        return null;

      }

      function getAllSanPhamBanChay(){
        $conn = $this->connect();
        $timecurrent = date("Y/m/d");
        $time = mktime(0, 0, 0, date("m"),date("d")-date("t"), date("Y"));
        $lastMonth = date("Y/m/d", $time);
        $sqldm = "SELECT * FROM sanpham where ngaymua BETWEEN '$lastMonth' AND '$timecurrent' ORDER BY sldaban desc LIMIT 6;";
        $result = mysqli_query($conn,$sqldm);
        if($result){
          $result_array = array();
          while($row=mysqli_fetch_assoc($result)) {
          array_push($result_array, $row);
          }  
          return $result_array ;
        }

        return null;
      }

      function findSPByID($id){
        $conn = $this->connect();
        $sql = "select * from sanpham where id='$id'";
        $result=mysqli_query($conn,$sql);
        if($result){
          $result_array = array();
          while($row=mysqli_fetch_assoc($result)) {
          array_push($result_array, $row);
          }  
          return $result_array[0] ;
        }
        return null;
      }

      function getAllSanPhamByIDDanhMuc($idc,$id){
        $conn = $this->connect();
        $sql = "select * from sanpham where iddanhmuc='$idc' and id <>'$id'";
        $result=mysqli_query($conn,$sql);
        if($result){
          $result_array = array();
          while($row=mysqli_fetch_assoc($result)) {
          array_push($result_array, $row);
          }  
          return $result_array ;
        }
        return null;
      }

  }

?>
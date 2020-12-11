
 <?php
 

    include_once("../../ketnoi.php");
    require('../../../../PhpExcel/PHPExcel/Classes/PHPExcel.php');
    include_once('../../pages/Class/sanpham.php');
    include_once('../Controller/xuly.php');
    // nếu importFile
    if(isset($_POST["import"])){
        $file = $_FILES['tenfile']['tmp_name'];
          $objReader = new \PHPExcel_Reader_Excel2007($file);
          $objReader ->setLoadSheetsOnly('Sheet1');
          $objExcel = $objReader->load($file);
          $shetData = $objExcel->getActiveSheet()->toArray('null',true,true,true);
          $data = array();
          $service = new Service(); // khai báo lớp xử lsi

          $highestRow= $objExcel->setActiveSheetIndex()->getHighestRow();
          for($row=2 ;$row<=$highestRow;$row++){
             $ten = $shetData[$row]['A'];
             $sl = $shetData[$row]['B'];
             $gia = $shetData[$row]['C'];
             $giamgia = $shetData[$row]['D'];
             $trangthai = $shetData[$row]['E'];
             $hot = $shetData[$row]['F'];
             $image = $shetData[$row]['G'];
             $mota = $shetData[$row]['H'];
             $danhmuc = $shetData[$row]['I'];
             $sanpham = new Sanpham($ten,$sl,$gia,$giamgia,$trangthai,$hot,$image,$mota,$danhmuc);
             if($service->findSanPhamById($ten)==null){
              $sql ="INSERT INTO sanpham (tensp,gia,discount,image,sltrongkho,sldaban,mota,yeuthich,trangthai,hot,iddanhmuc) 
              VALUES ('$ten', '$gia', '$giamgia','$image','$sl','0','$mota','0','$trangthai','$hot','$danhmuc' ) ";
              $query = mysqli_query($conn,$sql);
             }else{

              $sltrongkho = $service->findSanPhamById($ten);
              $slmoi = $sltrongkho+$sl;
             
              $sql ="update sanpham  set sltrongkho='$slmoi' where tensp='$ten' ";
              $query = mysqli_query($conn,$sql);
             }
       
          }
          header("Location: danhsachsanpham.php");
         
         
    }

 ?>


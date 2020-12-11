
 <?php
 include_once("thongkesanphambanchay.php");
 include_once("../../ketnoi.php");
 require('../../../../PhpExcel/PHPExcel/Classes/PHPExcel.php');
 include_once('../../pages/Class/sanpham.php');
 include_once('../Controller/xuly.php');
 // nếu importFile
 if(isset($_POST["Export"])){
      $objExcel = new PHPExcel();
      $objExcel->setActiveSheetIndex(0);
      $sheet = $objExcel->getActiveSheet()->setTitle('Sheet1');
      $rowCount = 1 ;
      $sheet->setCellValue('A'.$rowCount,"Mã sản phẩm");
      $sheet->setCellValue('B'.$rowCount,"Tên sản phẩm");
      $sheet->setCellValue('C'.$rowCount,"Số lượng còn trong kho");
      $sheet->setCellValue('D'.$rowCount,"Giá");
      $sheet->setCellValue('E'.$rowCount,"Giảm giá");
      $sheet->setCellValue('F'.$rowCount,"Ngày mua");
      $sheet->setCellValue('G'.$rowCount,"Số lượng đã bán");
      
      foreach ($result_array as $key => $value) {
        $rowCount++ ;
        $sheet->setCellValue('A'.$rowCount,$value['id']);
        $sheet->setCellValue('B'.$rowCount,$value['tensp']);
        $sheet->setCellValue('C'.$rowCount,$value['sltrongkho']);
        $sheet->setCellValue('D'.$rowCount,$value['gia']);
        $sheet->setCellValue('E'.$rowCount,$value['discount']);
        $sheet->setCellValue('F'.$rowCount,date('d/m/Y', strtotime($value['ngaymua'])));
        $sheet->setCellValue('G'.$rowCount,$value['sldaban']);
      }
       
      $objWriter = new \PHPExcel_Writer_Excel2007($objExcel);
      $filename= 'tksanphambanchay.xlsx';
          
      header('Content-Disposition: attachment; filename="'.$filename.'"');  
      header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
      header('Content-Length: '.filesize($filename));
      header('Content-Transfer-Encoding: binary');
      header('Content-Control: must-revalidate');
      header("Pragma: no-cache"); 
     
      readfile($filename);
      return;
  }
     

?>


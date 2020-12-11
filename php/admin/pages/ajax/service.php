<?php 

  include_once("../Controller/xuly.php");
  $arrayID = json_decode($_POST["data"]);
  $service = new Service();
  $service->saveAll($arrayID);
  
?>
<?php

session_start();

 include_once("../../ketnoi.php");
 if(isset($_SESSION['username'])) {
  if($_SESSION['role']==0) header("Location:../../login.php ");
}else if(!isset($_SESSION['username'])) header("Location:../../login.php ");
?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from slidesigma.com/themes/html/costic/pages/product/productcata.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:09:10 GMT -->
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Le Hieu Shop</title>
  <!-- Iconic Fonts -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="../../vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../../vendors/iconic-fonts/flat-icons/flaticon.css">
  <link rel="stylesheet" href="../../vendors/iconic-fonts/cryptocoins/cryptocoins.css">
  <link rel="stylesheet" href="../../vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css">
  <!-- Bootstrap core CSS -->
  <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="../../assets/css/jquery-ui.min.css" rel="stylesheet">
  <!-- Page Specific CSS (Slick Slider.css) -->
  <link href="../../assets/css/slick.css" rel="stylesheet">
  <!-- Costic styles -->
  <link href="../../assets/css/style.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="../../favicon.ico">
<style>
  .showimage{
    bottom: 41px;
    position: relative;
    /* top: -38px; */
    float: right;
    margin-right: 139px;
  }
</style>
</head>

<body class="ms-body ms-aside-left-open ms-primary-theme ms-has-quickbar">


  <!-- Preloader -->
  <div id="preloader-wrap">
    <div class="spinner spinner-8">
      <div class="ms-circle1 ms-child"></div>
      <div class="ms-circle2 ms-child"></div>
      <div class="ms-circle3 ms-child"></div>
      <div class="ms-circle4 ms-child"></div>
      <div class="ms-circle5 ms-child"></div>
      <div class="ms-circle6 ms-child"></div>
      <div class="ms-circle7 ms-child"></div>
      <div class="ms-circle8 ms-child"></div>
      <div class="ms-circle9 ms-child"></div>
      <div class="ms-circle10 ms-child"></div>
      <div class="ms-circle11 ms-child"></div>
      <div class="ms-circle12 ms-child"></div>
    </div>
  </div>

  <!-- Overlays -->
  <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>

  <!-- Sidebar Navigation Left -->
  <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">

    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="../../index.html"> <img src="../../assets/img/costic/costic-logo-216x62.png" alt="logo"> </a>
    </div>
    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard"><span><i class="fas fa-user-friends fs-16"></i>Quán lý thành viên</span>
        </a>
        <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
          <li> <a href="../customer/danhsachthanhvien.php">Danh sách thành viên</a>
          </li>
        </ul>
      </li>
      <!-- /Dashboard -->
      <!-- product -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#product" aria-expanded="false" aria-controls="product"> <span><i class="fa fa-archive fs-16"></i>Quản lý thông tin món ăn</span>
        </a>
        <ul id="product" class="collapse" aria-labelledby="product" data-parent="#side-nav-accordion">
        <li> <a href="danhmucsanpham.php">Danh mục sản phẩm</a>
          </li>
        <li> <a href="danhsachsanpham.php">Danh sách món ăn</a>
          </li>
          
          <li> <a href="themthongtinsanpham.php">Thêm thông tin món ăn</a>
          </li>
          
          
        </ul>
      </li>
    
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#thongke" aria-expanded="false" aria-controls="product"> <span><i class="fas fa-clipboard-list fs-16"></i>Thống kê báo cáo</span>
        </a>
        <ul id="thongke" class="collapse" aria-labelledby="product" data-parent="#side-nav-accordion">
        <li> <a href="../dashboard/thongkesanphambanchay.php">Sản phẩm bán chạy nhất</a>
          </li>
          <li> <a href="../dashboard/thongkesanphamtindung.php">Sản phẩm tin dùng</a>
          </li>
          <li> <a href="../dashboard/thongketheodanhmuc.php">Thống kê theo danh mục</a>
          </li>
        
        
        </ul>
      </li>
  
  
    </ul>


  </aside>


  <!-- Sidebar Right -->
  <aside id="ms-recent-activity" class="side-nav fixed ms-aside-right ms-scrollable">

    <div class="ms-aside-header">
      <ul class="nav nav-tabs tabs-bordered d-flex nav-justified mb-3" role="tablist">
        <li role="presentation" class="fs-12"><a href="#activityLog" aria-controls="activityLog" class="active" role="tab" data-toggle="tab"> Activity Log</a></li>

        <li><button type="button" class="close ms-toggler text-center" data-target="#ms-recent-activity" data-toggle="slideRight"><span aria-hidden="true">&times;</span></button></li>
      </ul>
    </div>

    <div class="ms-aside-body">

      <div class="tab-content">

        <div role="tabpanel" class="tab-pane active fade show" id="activityLog">
          
        </div>


      </div>

    </div>

  </aside>

  <!-- Main Content -->
  <main class="body-content">

<!-- Navigation Bar -->
<nav class="navbar ms-navbar">

<div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
  <span class="ms-toggler-bar bg-primary"></span>
  <span class="ms-toggler-bar bg-primary"></span>
  <span class="ms-toggler-bar bg-primary"></span>
</div>

<div class="logo-sn logo-sm ms-d-block-sm">
<a class="pl-0 ml-0 text-center" href="../../index.php">    <img src="http://mauweb.monamedia.net/vuonrau/wp-content/uploads/2019/05/mona-2.png" alt="logo" style="max-width: 95px;">
       </a>
</div>

<ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">

<li class="ms-nav-item dropdown"> <a href="#" class="text-disabled ms-has-notification" id="mailDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-mail"></i></a>

</li>
<li class="ms-nav-item dropdown"> <a href="#" class="text-disabled ms-has-notification" id="notificationDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="flaticon-bell"></i></a>

</li>

<li class="ms-nav-item ms-nav-user dropdown">
<a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<img class="ms-user-img ms-img-round float-right" src="../../../../images/<?php echo $_SESSION['image'] ?>" alt="people">
</a>
<ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
<li class="dropdown-menu-header">
<?php if(isset($_SESSION['username'])){  ?>
  <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Xin chào ,  <?php echo $_SESSION['username']  ?></span></h6>
 <?php } ?>

</li>
<li class="dropdown-menu-footer">
       <a class="media fs-14 p-2" href="../../../indexUser.php"> <span><i class="fas fa-arrow-alt-circle-right mr-2" style="font-size: 19px;"></i> Đi đến trang User</span>
       </a>
     </li>
<li class="dropdown-menu-footer">
<a class="media fs-14 p-2" href="../../logout.php"> <span><i class="flaticon-shut-down mr-2"></i>Đăng xuất</span>
 </a>
</li>
</ul>
</li>
</ul>

<div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
  <span class="ms-toggler-bar bg-primary"></span>
  <span class="ms-toggler-bar bg-primary"></span>
  <span class="ms-toggler-bar bg-primary"></span>
</div>

</nav>
<!-- Body Content Wrapper -->
<div class="ms-content-wrapper">
  <div class="row">
<form class="needs-validation clearfix"  method="post"  enctype="multipart/form-data">
    <div class="col-md-12">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb pl-0">
          <li class="breadcrumb-item"><a href="#"><i class="material-icons"></i></a>Admin</li>
          <li class="breadcrumb-item"><a href="#">Quản lý</a></li>
          <li class="breadcrumb-item active" aria-current="page">Thêm thông tin món ăn</li>
        </ol>
      </nav>

      <?php

   if(isset($_POST["capnhat"])){
     $mota =  $_POST["motas"] ;
     $ten =  $_POST["ten"] ;
     $gia =  $_POST["gia"] ;
     $giamgia =  $_POST["giam"] ;
     $hot =  $_POST["hot"] ;
     $moi =  $_POST["moi"] ;
     $status =  $_POST["status"] ;
    
     $danhmuc =  $_POST["danhmuc"] ;
   //  $mota =  $_POST["motas"] ;
     $sl =  $_POST["sl"] ;
     $idsp = $_GET['id'];
     //$anh= $_POST['hinhanhs'];
   //  echo $anh;
     $tmp_name = $_FILES['hinhanhs']['tmp_name']; 
     if($_FILES['hinhanhs']['name']=="") {
      if(isset($mota)&& isset($ten)&&isset($gia)&& isset($giamgia)&&isset($hot)&& isset($status)
      &&isset($danhmuc)
      ){
      
       $sql ="update sanpham  set tensp='$ten',gia='$gia',discount='$giamgia',
       sltrongkho='$sl',mota='$mota',trangthai='$status',hot='$hot',iddanhmuc='$danhmuc',new='$moi' where id='$idsp' ";
       $query = mysqli_query($conn,$sql);
     
       if($query){
         echo "
         <center class='alert alert-success text-center'>
         <strong>Cập nhật  thành công!</strong> 
         </center>
              ";
       }else{
     
         echo "
         <center class='alert alert-warning text-center'>
         <strong>Cập nhật thất bại!</strong> 
         </center>
              ";
       }
      }
     }
      else{
      $anh = $_FILES['hinhanhs']['name'];
      if(isset($mota)&& isset($ten)&&isset($gia)&& isset($giamgia)&&isset($hot)&& isset($status)
      &&isset($danhmuc)
      ){
        move_uploaded_file($tmp_name,"../../../../images/".$anh); // upload vào folder ảnh
       $sql ="update sanpham  set tensp='$ten',gia='$gia',discount='$giamgia',image='$anh',
       sltrongkho='$sl',mota='$mota',trangthai='$status',hot='$hot',iddanhmuc='$danhmuc',new='$moi' where id='$idsp' ";
       $query = mysqli_query($conn,$sql);
     
       if($query){
         echo "
         <center class='alert alert-success text-center'>
         <strong>Cập nhật  thành công!</strong> 
         </center>
              ";
       }else{
     
         echo "
         <center class='alert alert-warning text-center'>
         <strong>Cập nhật thất bại!</strong> 
         </center>
              ";
       }
      }
      }
    
   }

 ?>
</div>


<?php
    
    // sql select tất cả danh mục món ăn <div class=""</div>
    $sqldm = "select * from danhmucsanpham";
    $result = mysqli_query($conn,$sqldm);
    $idsp = $_GET['id'];
    if(isset($idsp)){
      $sql="SELECT * FROM sanpham WHERE id=".$idsp;
      //Chạy câu SQL
      $results=mysqli_query($conn,$sql);
      //Gắn dữ liệu lấy được vào mảng $data
      while ($row=mysqli_fetch_assoc($results)) {
          $info = $row;
      }
    }
?>



<div class="row">
    <div class="col-xl-12 col-md-12">
      <div class="ms-panel ms-panel-fh">
        <div class="ms-panel-header">
          <h6>Sửa thông tin món ăn</h6>
        </div>
        <div class="ms-panel-body">
        
            <div class="form-row">
              <div class="col-md-6 mb-3">
                <label for="validationCustom18">Tên sản phẩm</label>
                <div class="input-group">
                  <input type="text" class="form-control" value="<?php echo $info['tensp'] ?>" id="validationCustom18" name="ten" placeholder="tên món ăn" required>
                  <div class="valid-feedback">
                   Vui lòng nhập tên sản phẩm !
                  </div>
                </div>
              </div>

              <div class="col-md-6 mb-3">
                <label for="validationCustom22">Danh mục sản phẩm</label>
                <div class="input-group">
                  <select class="form-control" id="validationCustom22" name="danhmuc" required>

                  <?php
                       while($row = mysqli_fetch_array($result)){
                         if($row['id']==$info['iddanhmuc']){
                    ?>
                      <option value="<?php echo $row['id']; ?>" selected><?php echo $row['tendm']; ?></option>
                     <?php
                       }else{ 
                     ?>
                     <option value="<?php echo $row['id']; ?>" ><?php echo $row['tendm']; ?></option>
                      <?php
                       }
                     ?>
                     <?php
                       }
                     ?>

                  </select>
                  <div class="invalid-feedback">
                  Vui lòng chọn loại món 
                  </div>
                </div>
              </div>
                <div class="col-md-6 mb-3">
                <label for="validationCustom22">Giảm giá</label>
                 <div class="input-group">
                  <input type="number" class="form-control" value="<?php echo $info['discount'] ?>" id="giảm giá" placeholder="giảm giá" name="giam" required>
                  <div class="invalid-feedback">
                    Nhập số lượng
                  </div>
                </div>
              </div>
         
              <div class="col-md-6 mb-3">
                <label for="validationCustom24">Số lượng :</label>
                <div class="input-group">
                  <input type="number" class="form-control" id="validationCustom24" value="<?php echo $info['sltrongkho'] ?>" placeholder="01" name="sl" required>
                  <div class="invalid-feedback">
                    Nhập số lượng
                  </div>
                </div>
              </div>
   
       
            <div class="col-md-6 mb-3">
                <label for="validationCustom25">Giá</label>
                <div class="input-group">
                  <input type="number" class="form-control" value="<?php echo $info['gia'] ?>" id="validationCustom25" placeholder="giá sản phẩm" name="gia"  required >
                  <div class="invalid-feedback">
                   Nhập giá món ăn .
                  </div>
                </div>
              </div>
                  <div class="col-md-6 mb-3">
                <label for="validationCustom12">Ảnh</label>
                <div class="custom-file">
                 <div class="showimage">
                       <img src="/PHP_BAI3/images/<?php echo $info['image']  ?>" style=" max-width: 90px;">
                  </div>
                  <input type="file"  value="<?php echo $info['image'] ?>"  name="hinhanhs" >
               
                   
                 
                </div>
              </div>
              <div class="ms-panel-header new col-md-4 mb-3">
              <p class="medium">Sản phẩm hot :  </p>
              <div class="form-control" style="width: 75%;">
                <input id="status1" <?php if($info['hot']==1) echo 'checked'; ?> name="hot" type="radio" value="1"><label for="status1">Yes</label>
                <input id="status2"<?php if($info['hot']==0) echo 'checked'; ?>   name="hot" type="radio" value="0"><label for="status2">No</label>
               </div>
            </div>
              <div class="ms-panel-header new col-md-4 mb-3" >
              <p class="medium">Trạng thái :  </p>
              <div class="form-control" style="width: 75%;">
                <input id="status1" <?php if($info['trangthai']==1) echo 'checked'; ?>  name="status" type="radio" value="1"><label for="status1">Hiển thị</label>
                <input id="status2" <?php if($info['trangthai']==0) echo 'checked'; ?>  name="status" type="radio" value="0"><label for="status2">Ẩn</label>
               </div>
            </div>
            <div class="ms-panel-header new col-md-4 mb-3" >
              <p class="medium">Sản phẩm mới :  </p>
              <div class="form-control" style="width: 75%;">
                <input id="status1" <?php if($info['new']==1) echo 'checked'; ?>  name="moi" type="radio" value="1"><label for="status1">Có</label>
                <input id="status2" <?php if($info['new']==0) echo 'checked'; ?>  name="moi" type="radio" value="0"><label for="status2">Không</label>
               </div>
            </div>
              <div class="col-md-12 mb-3">
                <label for="validationCustom12">Mô tả </label>
                <div class="input-group">
                  <textarea rows="5" id="validationCustom12"  class="form-control" placeholder="mô tả" name="motas"><?php echo $info['mota'];?></textarea>
                  <div class="invalid-feedback">
                    Vui lòng nhập mô tả món ăn . 
                  </div>
                </div>
              </div>
              <div class="ms-panel-header new text-center col-md-12 mb-3">
              <input class="btn btn-primary d-block" type="submit" name="capnhat" value="Cập nhật"/>
            </div>
            </div>
        </div>
      </div>

    </div>

  
</div>

</form>
  </div>
</div>




</main>





  <!-- MODALS -->
  <!-- Quick bar -->
  <!-- Quick bar -->
  <aside id="ms-quick-bar" class="ms-quick-bar fixed ms-d-block-lg">

    <ul class="nav nav-tabs ms-quick-bar-list" role="tablist">

      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch To-do-list" data-title="To-do-list">
        <a href="#qa-toDo" aria-controls="qa-toDo" role="tab" data-toggle="tab">
          <i class="flaticon-list"></i>

        </a>
      </li>
      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch Reminders" data-title="Reminders">
        <a href="#qa-reminder" aria-controls="qa-reminder" role="tab" data-toggle="tab">
          <i class="flaticon-bell"></i>

        </a>
      </li>
      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch Notes" data-title="Notes">
        <a href="#qa-notes" aria-controls="qa-notes" role="tab" data-toggle="tab">
          <i class="flaticon-pencil"></i>

        </a>
      </li>
      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Invite Members" data-title="Invite Members">
        <a href="#qa-invite" aria-controls="qa-invite" role="tab" data-toggle="tab">
          <i class="flaticon-share-1"></i>

        </a>
      </li>
      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Settings" data-title="Settings">
        <a href="#qa-settings" aria-controls="qa-settings" role="tab" data-toggle="tab">
          <i class="flaticon-gear"></i>

        </a>
      </li>
    </ul>
    <div class="ms-configure-qa" data-toggle="tooltip" data-placement="left" title="Configure Quick Access">

      <a href="#">
        <i class="flaticon-hammer"></i>

      </a>

    </div>


    <!-- Quick bar Content -->
    <div class="ms-quick-bar-content">

      <div class="ms-quick-bar-header clearfix">
        <h5 class="ms-quick-bar-title float-left">Title</h5>
        <button type="button" class="close ms-toggler" data-target="#ms-quick-bar" data-toggle="hideQuickBar" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="ms-quick-bar-body tab-content">



        <div role="tabpanel" class="tab-pane" id="qa-toDo">
          <div class="ms-quickbar-container ms-todo-list-container ms-scrollable">

            <form class="ms-add-task-block">
              <div class="form-group mx-3 mt-0  fs-14 clearfix">
                <input type="text" class="form-control fs-14 float-left" id="task-block" name="todo-block" placeholder="Add Task Block" value="">
                <button type="submit" class="ms-btn-icon bg-primary float-right"><i class="material-icons text-disabled">add</i></button>
              </div>
            </form>

            <ul class="ms-todo-list">
              <li class="ms-card ms-qa-card ms-deletable">

                <div class="ms-card-header clearfix">
                  <h6 class="ms-card-title">Task Block Title</h6>
                  <button data-toggle="tooltip" data-placement="left" title="Add a Task to this block" class="ms-add-task-to-block ms-btn-icon float-right"> <i class="material-icons text-disabled">add</i> </button>
                </div>

                <div class="ms-card-body">
                  <ul class="ms-list ms-task-block">
                    <li class="ms-list-item ms-to-do-task ms-deletable">
                      <label class="ms-checkbox-wrap ms-todo-complete">
                        <input type="checkbox" value="">
                        <i class="ms-checkbox-check"></i>
                      </label>
                      <span> Task to do </span>
                      <button type="submit" class="close"><i class="flaticon-trash ms-delete-trigger"> </i></button>
                    </li>
                    <li class="ms-list-item ms-to-do-task ms-deletable">
                      <label class="ms-checkbox-wrap ms-todo-complete">
                        <input type="checkbox" value="">
                        <i class="ms-checkbox-check"></i>
                      </label>
                      <span>Task to do</span>
                      <button type="submit" class="close"><i class="flaticon-trash ms-delete-trigger"> </i></button>
                    </li>
                  </ul>
                </div>

                <div class="ms-card-footer clearfix">
                  <a href="#" class="text-disabled mr-2"> <i class="flaticon-archive"> </i> Archive </a>
                  <a href="#" class="text-disabled  ms-delete-trigger float-right"> <i class="flaticon-trash"> </i> Delete </a>
                </div>

              </li>
            </ul>

          </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="qa-reminder">
          <div class="ms-quickbar-container ms-reminders">

            <ul class="ms-qa-options">
              <li> <a href="#" data-toggle="modal" data-target="#reminder-modal"> <i class="flaticon-bell"></i> New Reminder </a> </li>
            </ul>

           

          </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="qa-notes">

          <ul class="ms-qa-options">
            <li> <a href="#" data-toggle="modal" data-target="#notes-modal"> <i class="flaticon-sticky-note"></i> New Note </a> </li>
            <li> <a href="#"> <i class="flaticon-excel"></i> Export to Excel </a> </li>
          </ul>

         

        </div>

     

      </div>

    </div>
  </aside>

  <!-- Reminder Modal -->
 

  <!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
  <script src="../../assets/js/jquery-3.3.1.min.js"></script>
  <script src="../../assets/js/popper.min.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
  <script src="../../assets/js/perfect-scrollbar.js"> </script>
  <script src="../../assets/js/jquery-ui.min.js"> </script>
  <!-- Global Required Scripts End -->

  <!-- Page Specific Scripts Start -->
  <script src="../../assets/js/slick.min.js"> </script>
  <script src="../../assets/js/moment.js"> </script>
  <script src="../../assets/js/jquery.webticker.min.js"> </script>
  <script src="../../assets/js/Chart.bundle.min.js"> </script>
  <script src="../../assets/js/Chart.Financial.js"> </script>

  <!-- Page Specific Scripts Finish -->

  <!-- Costic core JavaScript -->
  <script src="../../assets/js/framework.js"></script>

  <!-- Settings -->
  <script src="../../assets/js/settings.js"></script>
  <script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
//<![CDATA[
        bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
  //]]>
  </script>
</body>


<!-- Mirrored from slidesigma.com/themes/html/costic/pages/product/productcata.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:09:40 GMT -->
</html>

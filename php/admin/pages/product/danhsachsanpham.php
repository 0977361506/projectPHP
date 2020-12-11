
<?php 
  session_start();
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
    form.example input[type=text] {
      border-radius: 29px;
    padding: 10px;
    font-size: 17px;
    border: 1px solid #80808036;
    float: left;
    width: 80%;
    background: white;
}

/* Style the submit button */
form.example button {
  border-radius: 29px;
    float: left;
    width: 20%;
    padding: 10px;
    background: #2196F3;
    color: white;
    font-size: 17px;
    border: 1px solid grey;
    border-left: none;
    cursor: pointer;
    right: 53px;
    position: relative;
}
.setform{
  position: relative;
    float: right;
    padding: 0px !important;
    left: 55px;
}
form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
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
    <a class="pl-0 ml-0 text-center" href="../../index.php">    <img src="http://mauweb.monamedia.net/vuonrau/wp-content/uploads/2019/05/mona-2.png" alt="logo" style="max-width: 95px;">
       </a>
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
          <ul class="ms-activity-log">
            <li>
              <div class="ms-btn-icon btn-pill icon btn-light">
                <i class="flaticon-gear"></i>
              </div>
              <h6>Update 1.0.0 Pushed</h6>
              <span> <i class="material-icons">event</i>1 January, 2019</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-success">
                <i class="flaticon-tick-inside-circle"></i>
              </div>
              <h6>Profile Updated</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-warning">
                <i class="flaticon-alert-1"></i>
              </div>
              <h6>Your payment is due</h6>
              <span> <i class="material-icons">event</i>1 January, 2019</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-danger">
                <i class="flaticon-alert"></i>
              </div>
              <h6>Database Error</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-info">
                <i class="flaticon-information"></i>
              </div>
              <h6>Checkout what's Trending</h6>
              <span> <i class="material-icons">event</i>1 January, 2019</span>
              <p class="fs-14">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, ula in sodales vehicula....</p>
            </li>
            <li>
              <div class="ms-btn-icon btn-pill icon btn-secondary">
                <i class="flaticon-diamond"></i>
              </div>
              <h6>Your Dashboard is ready</h6>
              <span> <i class="material-icons">event</i>4 March, 2018</span>
              <p class="fs-14">Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
            </li>
          </ul>
          <a href="#" class="btn btn-primary d-block"> View All </a>
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
  <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="../../index.html"><img src="../../assets/img/costic/costic-logo-84x41.png" alt="logo"> </a>
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
    <div class="ms-content-wrapper box">

      <div class="row">
        <div class="col-md-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb pl-0">
              <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
              <li class="breadcrumb-item"><a href="#">Admin</a></li>
              <li class="breadcrumb-item active" aria-current="page">Danh sách sản phẩm</li>
            </ol>
          </nav>
        </div>
      
        <div class="container" style="margin-bottom: 10px;">
        
          <div class="col-md-12 text-right tool-datagrid">
             <div class="setform" style="margin-top:10px">
              <form class="example">
                  <input type="text" id="timkiemsp" placeholder="Tìm kiếm ..." name="timkiemtv">
                  <button class="timkiemsp" type="button"><i class="fa fa-search"></i></button>
              </form>
             </div>
              <p class="text-center thongbao" style="float: left; margin-top: 20px;"></p>
          
              <a class="btn btn-circle btn-danger btn-grid btn-grid-deactive-status noactivated " href="#" title="Hủy hoạt động" style="border-radius: 22px;"><i class="fas fa-unlock-alt"></i> Hủy</a>
              <a style="background-color: #00a3ff;    border-radius: 22px;
                        border-color: #00a3ff;" class="btn btn-circle btn-primary btn-grid btn-grid-active-status activated" href="#" title="Kích hoạt" style="border-radius: 22px;"><i class="fas fa-lock"></i> Kích hoạt</a>
              <a id="`+pro[10]+`" class="btn  btn-circle btn-grid  btn-success " href="themthongtinsanpham.php" style="border-radius: 22px;background-color: #007bff;
              border: #007bff;"><i class="fas fa-plus-circle"></i>Thêm mới</a>
               <a id="`+pro[10]+`" class="btn  btn-circle btn-grid  btn-success " href="#" data-toggle="modal" data-target="#myModal3"
              style="    background-color: #00ff08;
               border: #007bff;    border-radius: 22px;
              border: #007bff;"><i class="fas fa-file-import"></i> Import File</a>
            
          </div>
      
      </div>
       
      
 <div class="modal" id="myModal3">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h6>Chọn File cần Import</h6>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         <form method="post" action="importFile.php" enctype="multipart/form-data">
           <input class="form-control" type="file" name="tenfile" />
          <div style="text-align: right;">
          <input class="btn btn-success import" name="import" value="Import" type="submit" />
           <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
          </div>
         </form>
      </div>

    
    </div>
  </div>
</div>
   
        <div class="col-md-12">

     <?php

       include_once("../../ketnoi.php");
        $sql = "select * from sanpham limit 0,6";
        $query = mysqli_query($conn,$sql);

        $sql2 = "select * from sanpham ";
        $query2 = mysqli_query($conn,$sql2);
        $tongslbanghi = mysqli_num_rows($query2);
        
        $sopage = ceil($tongslbanghi/6);

     ?>


        <div class="ms-panel">
          <div class="ms-panel-header">
            <h6>Danh sách món ăn</h6>
          </div>
          <div class="ms-panel-body">
            <div class="table-responsive">
              <table class="table table-hover thead-primary">
                <thead>
                  <tr>
                  <th><input type="checkbox" name="all" id="checkall" /></th>
                    <th scope="col">ID </th>
                   
                    <th scope="col">Tên </th>
                    <th scope="col">Số lượng</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Giảm Giá</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Ảnh </th>
                    <th scope="col">Chức năng</th>

                  </tr>
                </thead>
                <tbody class="bangchon">
                  <?php
                     while($row= mysqli_fetch_array($query)) {
                  ?>
                  <tr>
                  <th><input type="checkbox" class="cb-element" value="<?php echo $row['id'];?>" /></th>
                    <th scope="row"> <?php echo $row['id']; ?></th>
                   
                    <th scope="row"> <?php echo $row['tensp']; ?></th>
                    <th scope="row"> <?php echo $row['sltrongkho']; ?></th>
                    <th scope="row"> <?php echo $row['gia']; ?></th>
                    <th scope="row"> <?php echo $row['discount']; ?></th>
                    <?php 
                      if($row['trangthai'] ==1) {
                       echo '<td><i class="text-success fa fa-circle"></i></td>';
                      }else {
                        echo '<td><i class="text-danger fa fa-circle"></i></td>';
                      }
                    ?>
                   
                    <th scope="row"><img src="/PHP_BAI3/images/<?php echo $row['image'] ?>" style="    max-width: 50px;"></th>
                    <td> <a href="suathongtinsanpham.php?id=<?php echo $row['id'];?>"><i class="fas fa-pencil-alt text-secondary"></i></a>
                    <a href="#" class="xoasanpham"><i class="fas fa-trash-alt" id=<?php echo $row['id'];?> onclick="xoasanpham(this)"></i></a>
                  </td>
  
                  </tr>
                  <?php
                     }
                  ?>
               

                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-xl-12 col-md-12">
          <div class="load">
            <i class="fas fa-redo alt  space text-muted " aria-hidden="true" ></i><span class="more xemthem" sopage = <?php echo $sopage ?> onclick="xemthem(this)"> Xem thêm</span>
          </div>
        </div>
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
   <script>
      $('#checkall').change(function () {
    $('.cb-element').prop('checked',this.checked);
    });

   $('.cb-element').change(function () {
    if ($('.cb-element:checked').length == $('.cb-element').length){
        $('#checkall').prop('checked',true);
        }
   else {
        $('#checkall').prop('checked',false);
       }
    });



    // xử lí sự kiên ẩn sản phẩm 
    $(".noactivated").click(function(){
     
      var dataArray =$('.bangchon input[type=checkbox]:checked').map(function () {
            return $(this).val();
        }).get();
      if(dataArray.length==0) alert("Bạn chưa chọn sản phẩm nào ?") ;
      else{
        var dataids = JSON.stringify(dataArray);
        $.ajax({
        type: 'POST',
        url: '../ajax/service.php',
        data: {data: dataids},
        datatype: 'json',
        success: function (data) {
           window.location.href="danhsachsanpham.php";
        },error: function () {
         alert("lỗi");
        
          }
       });
      }
    })

    $(".activated").click(function(){
     
     var dataArray =$('.bangchon input[type=checkbox]:checked').map(function () {
           return $(this).val();
       }).get();
     if(dataArray.length==0) alert("Bạn chưa chọn sản phẩm nào ?") ;
     else{
       var dataids = JSON.stringify(dataArray);
       $.ajax({
       type: 'POST',
       url: '../ajax/savestaus.php',
       data: {data: dataids},
       datatype: 'json',
       success: function (data) {
          window.location.href="danhsachsanpham.php";
       },error: function () {
        alert("lỗi");
       
         }
      });
     }
   })

  //  xử lí tìm kiếm sản phảm

  $(".timkiemsp").click(function(){
     var tensp = $("input#timkiemsp").val();
     if(tensp=="") alert("Nhập tên tài khoản bạn muốn tìm !");
         else{ 
          var dl = JSON.stringify(tensp);
           $.ajax({
           type: 'POST',
           url: '../ajax/xulitimkiemsanpham.php',
           data: {data: dl},
           datatype: 'json',
           success: function (data) {
            if(Object.keys(data).length==0) alert("Không tìm thấy bản ghi nào phù hợp !");
            else{
              var s =``;
              $(data).each(function (index, tv) {
                s+=`<tr>
                  <th><input type="checkbox" class="cb-element" value="`+tv.id+`" /></th>
                    <th scope="row">`+tv.id+`</th>
                   
                    <th scope="row"> `+tv.tensp+`</th>
                    <th scope="row"> `+tv.sltrongkho+`</th>
                    <th scope="row"> `+tv.gia+`</th>
                    <th scope="row"> `+tv.discount+`</th> `;
                    if(tv.trangthai==1){
                      s+=`<td><i class="text-success fa fa-circle"></i></td>`;
                    }else  s+=`<td><i class="text-danger fa fa-circle"></i></td>`;
                 
                  s+= `<th scope="row"><img src="/PHP_BAI3/images/`+tv.image+`" style="    max-width: 50px;"></th>
                   <td> <a href="suathongtinsanpham.php?id=`+tv.id+`"><i class="fas fa-pencil-alt text-secondary"></i></a>
                    <a href="#" class="xoasanpham"><i class="fas fa-trash-alt" id=`+tv.id+` onclick="xoasanpham(this)"></i></a>
                    </td>
                    </tr>`;
              });
              $(".bangchon").html("");
              $(".bangchon").html(s);    
           }
           },error: function () {
           alert("lỗi");
        
             }
          });
      
         }
  })
 


// xóa sản phẩm 
 function xoasanpham(e){
   if(confirm("Bạn chắc chắn muốn xóa sản phẩm này ?")){
     var id = $(e).attr("id");
     var dl = JSON.stringify(id);
     $.ajax({
           type: 'POST',
           url: '../ajax/xoasanpham.php',
           data: {data: dl},
           datatype: 'json',
           success: function (data) {
             location.reload();
           },error: function () {
                alert("lỗi");
        
              }
          });
   }
 }

//




 // phan trang 
 var pagecurrent = 0;
  function xemthem(e){
   
    var pagesize = 6 ;
    var sopage = $(e).attr("sopage");
    pagecurrent++;
    if(pagecurrent<sopage){
    
      $.ajax({
       type: 'GET',
       url: '../ajax/phantrangsanpham.php?pagecurent='+pagecurrent,
       success: function (data) {
        var s =``;
              $(data).each(function (index, tv) {
                s+=`<tr>
                  <th><input type="checkbox" class="cb-element" value="`+tv.id+`" /></th>
                    <th scope="row">`+tv.id+`</th>
                   
                    <th scope="row"> `+tv.tensp+`</th>
                    <th scope="row"> `+tv.sltrongkho+`</th>
                    <th scope="row"> `+tv.gia+`</th>
                    <th scope="row"> `+tv.discount+`</th> `;
                    if(tv.trangthai==1){
                      s+=`<td><i class="text-success fa fa-circle"></i></td>`;
                    }else  s+=`<td><i class="text-danger fa fa-circle"></i></td>`;
                 
                  s+= `<th scope="row"><img src="/PHP_BAI3/images/`+tv.image+`" style="    max-width: 50px;"></th>
                    <td> <a href="suathongtinsanpham.php?id=`+tv.id+`"><i class="fas fa-pencil-alt text-secondary"></i></a>
                    <a href="#" class="xoasanpham"><i class="fas fa-trash-alt" id=`+tv.id+` onclick="xoasanpham(this)"></i></a>
                    </td> 
               
                    </tr>`;
              });
             
              $(".bangchon").append(s);    
       },error: function () {
        alert("lỗi");
       
         }
      });
    }else {
      alert("không còn bản ghi nào !");
    }
 
  }
  
   </script>
</body>


<!-- Mirrored from slidesigma.com/themes/html/costic/pages/product/productcata.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 01 Feb 2020 13:09:40 GMT -->
</html>

<?php 
  session_start();
  include_once("./admin/pages/Controller/xuly.php");
  $service =  new Service();
  if(!isset($_SESSION['username'])) header("Location:../php/admin/login.php ");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="./../css/style.css">
    <link rel="stylesheet" href="./../css/monngon.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
		integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

   
    </head>
<body>
  <header style="box-shadow: 1px 1px 10px rgba(0,0,0,0.15); ">
    <div class="container" >
        <nav class="navbar navbar-expand-lg navbar-light navbar-fixed-top bg-light" style="background: white !important;
        padding: 30px; ">
            <a class="navbar-brand" href="indexUser.php">
                <img src="http://mauweb.monamedia.net/vuonrau/wp-content/uploads/2019/05/mona-2.png" alt="" style="max-width: 160px; max-height:130px;">
            </a>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent mr-auto">
              <ul class="navbar-nav ml-auto mr-auto">
                <li class="nav-item">
                  <a class="nav-link item " href="/html/index.html " onclick="checkactive(this)">Trang chủ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link item active" href="/html/gioithieu.html" onclick="checkactive(this)">Giới thiệu</a>
                </li>
                <li class="nav-item ">
                   
                  <div class="dropdown">
                 
                    <a class="nav-link item dropdown-toggle" href="#" onclick="checkactive(this)" id="dropdownMenuButton" data-toggle="dropdown" >Cửa hàng</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                      <a class="dropdown-item" href="#">Đồ tươi</a>
                      <a class="dropdown-item" href="#">Đồ khô</a>
                      <a class="dropdown-item" href="#">Hoa quả</a>
                    </div>
                  </div>
              </li>
                <li class="nav-item">
                    <a class="nav-link item" href="#" onclick="checkactive(this)">Món ngon mỗi ngày</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link item" href="#" onclick="checkactive(this)">Liên hệ</a>
                  </li>
                  <li class="nav-item">
                  <div class="dropdown">
                  <a class="nav-link item dropdown-toggle" data-toggle="dropdown"><?php echo $_SESSION['username']  ?>
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu" style="margin-left: 5px;    padding: 10px;">
                  <?php 
                    if(isset($_SESSION['role'])){
                       if($_SESSION['role']==1) {
                      
                  ?>
                    <li><a href="./admin/index.php"  style="color:black;"><i class="flaticon-shut-down mr-2"></i>Vào trang quản trị</a></li>
                  <?php 
                        }
                      }
                  ?>
                   <li><a href="#"  style="color:black;" data-toggle="modal" data-target="#myModal2"><i class="flaticon-shut-down mr-2"></i>Đổi mật khẩu</a></li>
                  <li><a href="./admin/logout.php"  style="color:black;"><i class="flaticon-shut-down mr-2"></i>Đăng xuất</a></li>
                  
                  </ul>
                  </div>
                </li>
              </ul>
              <div class="nav-item" style="position: relative; ">
                <form class="form-inline my-2 my-lg-0">
                <div class="flex-row relative">
                    <div >
                       <input type="search" class="timkiem" placeholder="Tìm kiếm…" >
                        
                        </div>
             
                    
                        <i class="fas fa-search search" ></i></button>
                  </form>
              </div>
            </div>
          </nav>
    </div>
  </header>
         <!-- Modal thêm mới-->
         <div id="myModal2" class="modal" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h3 class="modal-title" style="color: #7a00ff;">Đổi mật khẩu</h3>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col col-sm-12">
          <form >
 
  
  <div class="form-group">
    <label for="pass">Mật khẩu mới (<span style="color: red;">*</span>)</label>
    <input type="password" class="form-control" id="pass" name="pass" require>
  </div>
  <div class="form-group">
    <label for="pass">Nhập lại mật khẩu (<span style="color: red;">*</span>)</label>
    <input type="password" class="form-control" id="repass" name="repass" require>
  </div>
   <input type="hidden" id="idnvs" value="<?php if(isset($_SESSION['idnv'])) echo $_SESSION['idnv'] ;?>">

</form>
          </div>
        </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary doimatkhau">Đổi mật khẩu</button>
        <button type="button" class="btn btn-default dong" data-dismiss="modal">Đóng</button>
      </div>
    </div>

  </div>
</div>
  <div class="container nav-tag">
      <p>Trang chủ / Chi tiết sản phẩm</p>
  </div>
  <main>
<?php 
 if(isset($_GET['id'])){
  $id = $_GET['id'];
  $idc = $_GET['idc'];
  $chitiet = $service->findSPByID($id);
 ?>
      <div class="container" style="margin-bottom: 50px;">
          <div class="row">
             <div class="col col-sm-6 ">
                <img src="../images/<?php echo $chitiet['image'] ?>" alt="" class="image-chitiet">
             </div>
             <div class="col col-sm-6" style=" padding-left: 105px;">
               
                <div class="content">
                   <div>
                       <h2><?php echo $chitiet['tensp'] ?></h2>
                       <div class="is-divider"></div>
                       <p style="white-space: nowrap;
                       color: #8cc63f;
                       font-weight: bold;">Giá  : <?php echo $chitiet['gia'] ?> vnđ</p>
                   </div>
                </div>
                 <div class="">
                       
                    <div class="div-item">
                        <i class="far fa-check-square"></i>
                        <span class="icons">Gọi mua hàng 1900 636 648</span>
                    </div>
                    <div class="div-item">
                        <i class="far fa-check-square"></i>
                        <span  class="icons">Đảm bảo tươi ngon</span>
                    </div>
                    <div class="div-item">
                        <i class="far fa-check-square"></i>
                        <span  class="icons">Giao hàng trực tiếp từ vườn</span>
                    </div>
                    <div class="div-item">
                        <i class="far fa-check-square"></i>
                        <span  class="icons"> Đổi trả trong vòng 24h</span>
                    </div>

                 </div> 
              
                 <div style="margin-top: 6px;">
                   <a href="#mathangcungloai">Xem các sản phẩm liên quan <i class="fas fa-arrow-right"></i></a>
                 </div>
              
            </div>
          </div>
         
          
      </div>
      <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fas fa-chevron-up"></i></a>
     
<div class="container" style="margin-bottom: 40px;">
  <h2 style="    border-top: 1px solid #ececec;"></h2>
  <br>
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li class="nav-item">
      <a class="nav-link active " data-toggle="tab" href="#mieuta"  >Mô tả sản phẩm</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#danhgia"  >Đánh giá - Phản hồi</a>
    </li>
   
  </ul>

  <!-- Tab panes -->
  <div class="tab-content"  style="margin-bottom: 40px;">
    <div id="mieuta" class="container tab-pane active"><br>
     
      <p>
      <?php echo $chitiet['mota'] ?>
      </p>
    </div>
    <div id="danhgia" class="container tab-pane fade" style="margin-top: 25px;">
      <div class="row">
        <div class="col col-sm-4">
          <h2>Đánh giá sản phẩm</h2>
          <ul class="ratings">
            <li class="star" vote="5" idsp=<?php echo $chitiet['id'] ?> onclick="danhgia(this)"></li>
            <li class="star" vote="4" idsp=<?php echo $chitiet['id'] ?> onclick="danhgia(this)"></li>
            <li class="star" vote="3" idsp=<?php echo $chitiet['id'] ?> onclick="danhgia(this)"></li>
            <li class="star" vote="2" idsp=<?php echo $chitiet['id'] ?> onclick="danhgia(this)"></li>
            <li class="star" vote="1" idsp=<?php echo $chitiet['id'] ?> onclick="danhgia(this)"></li>
          </ul>
        </div>
        <div class="col col-sm-6" style="margin-left: 100px;">
        
            <h2>Bình luận sản phẩm !</h2>
            <div class="row">
            <div class="fb-comments" data-href="http://study.vnpost.vn/" data-numposts="5" data-width=""></div>
            </div>
    

        </div>
      </div>
  

    
    </div>

  </div>
</div>

<?php 
 }
 ?>
<div style="text-align: center;">
  <h2>Sản phẩm tương tự</h2>
</div>
<div class="container" id="mathangcungloai"> 
  <div class="row">
  <?php 
  if(isset($_GET['id'])){
  $id = $_GET['id'];
  $idc = $_GET['idc'];
  $danhsach = $service->getAllSanPhamByIDDanhMuc($idc,$id);
 
  foreach ($danhsach as $key => $value) {
   $dt='<div class=" col-sm-3" style=" padding-right: 5px !important;     max-width: 32.333333%;">
      <div class="card">
          <div class="card-body">
            <div class="card-title">
                <a href="chitietmathang.php?id='.$value['id'].'&idc='.$value['iddanhmuc'].'"><img class="img-products" src="../images/'.$value['image'].'" alt="" style="max-width: 100%; height: auto;"></a>
                <div class="date" >
                  <span>6</span>
                  <br>
                 <span>Th 5</span>
              </div>
              </div>
              <div class="text-body">
                  <p class="card-text namepro">'.$value['tensp'].'</p>
                  <div class="is-divider"></div>
                  <p class="card-text">'.$value['gia'].' vnd</p>
              </div>
          </div>
        
        </div>
    </div>
    ';
    echo $dt;
  }
  
  }
    ?>




</div>
</div>
      <div class="newsletter">
        <div class="container row-full-width"  >
          <div class="row ">
              <div class="col col-sm-6" style="top: 9px;" >
                 <h1 style="font-size: 19px;">Đăng kí mail để nhận được những thông tin khuyến mãi nhanh nhất ! </h1>
              </div>
              <div class="col col-sm-6">
                 
                
                <form action="" method="POST" class="form-inline" role="form" style="float: right;">
                
                  <div class="form-group">
                    
                    <input type="email" class="form-control" id="" placeholder="Đăng kí email ngay !">
                  </div>
                
                  
                
                  <button type="submit" class="btn btn-success">Đăng kí</button>
                </form>
                
                 
              </div>
          </div>
        </div>
      </div>
  </main>
  <!-- Footer -->
   

<footer class="page-footer font-small blue pt-4" >

  <!-- Footer Links -->
  <div class="container text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-3 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">
          <img src="http://mauweb.monamedia.net/vuonrau/wp-content/uploads/2019/05/mona-2.png" alt="" style="max-width: 160px; max-height:130px;">
        </h5>
        <a href="#!" class="linksanpham">Chuyên cung cấp sản phẩm tiêu dùng đảm bảo</a>

      </div>
      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Liên hệ</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="linksanpham">Số 5 phạm hùng mĩ đình hà nội</a>
          </li>
          <li>
          <div>
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3913.1713136538424!2d106.127356714627!3d11.248804992002015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x310b15373c726343%3A0x7023b918184bf1a6!2zxJDGsOG7nW5nIHPhu5EgNSBQaOG6oW0gSMO5bmcsIExvbmcgVGjDoG5oIE5hbSwgSG_DoCBUaMOgbmgsIFTDonkgTmluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1607272595181!5m2!1svi!2s" width="200" height="180" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
           </div>
          </li>
          
        </ul>

      </div>
      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">Sản phẩm</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!" class="linksanpham">Đồ tươi</a>
          </li>
          <li>
            <a href="#!"  class="linksanpham">Đồ khô</a>
          </li>
          <li>
            <a href="#!"  class="linksanpham">Trái cây</a>
          </li>
          <li>
            <a href="#!"  class="linksanpham">Thịt trứng</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase" >Dịch vụ</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#!"  class="linksanpham">Hỏi đáp</a>
          </li>
          <li>
            <a href="#!"  class="linksanpham">Tìm kiếm thông tin</a>
          </li>
          <li>
            <a href="#!"  class="linksanpham">Địa chỉ</a>
          </li>
          <li>
            <a href="#!"  class="linksanpham">Hỗ trợ</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" style="color: whitesmoke;">© 2020 thiết kế bởi :
    <h5 href="#"> Lê Hiếu</h5>
  </div>
  <!-- Copyright -->
<style>
.fb-livechat,
.fb-widget {
    display: none
}

.ctrlq.fb-button,
.ctrlq.fb-close {
    position: fixed;
    right: 24px;
    cursor: pointer
}

.ctrlq.fb-button {
    z-index: 999;
    background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDEyOCAxMjgiIGhlaWdodD0iMTI4cHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAxMjggMTI4IiB3aWR0aD0iMTI4cHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnPjxyZWN0IGZpbGw9IiMwMDg0RkYiIGhlaWdodD0iMTI4IiB3aWR0aD0iMTI4Ii8+PC9nPjxwYXRoIGQ9Ik02NCwxNy41MzFjLTI1LjQwNSwwLTQ2LDE5LjI1OS00Niw0My4wMTVjMCwxMy41MTUsNi42NjUsMjUuNTc0LDE3LjA4OSwzMy40NnYxNi40NjIgIGwxNS42OTgtOC43MDdjNC4xODYsMS4xNzEsOC42MjEsMS44LDEzLjIxMywxLjhjMjUuNDA1LDAsNDYtMTkuMjU4LDQ2LTQzLjAxNUMxMTAsMzYuNzksODkuNDA1LDE3LjUzMSw2NCwxNy41MzF6IE02OC44NDUsNzUuMjE0ICBMNTYuOTQ3LDYyLjg1NUwzNC4wMzUsNzUuNTI0bDI1LjEyLTI2LjY1N2wxMS44OTgsMTIuMzU5bDIyLjkxLTEyLjY3TDY4Ljg0NSw3NS4yMTR6IiBmaWxsPSIjRkZGRkZGIiBpZD0iQnViYmxlX1NoYXBlIi8+PC9zdmc+) center no-repeat #0084ff;
    width: 60px;
    height: 60px;
    text-align: center;
    bottom: 150px;
    border: 0;
    outline: 0;
    border-radius: 60px;
    -webkit-border-radius: 60px;
    -moz-border-radius: 60px;
    -ms-border-radius: 60px;
    -o-border-radius: 60px;
    box-shadow: 0 1px 6px rgba(0, 0, 0, .06), 0 2px 32px rgba(0, 0, 0, .16);
    -webkit-transition: box-shadow .2s ease;
    background-size: 80%;
    transition: all .2s ease-in-out
}

.ctrlq.fb-button:focus,
.ctrlq.fb-button:hover {
    transform: scale(1.1);
    box-shadow: 0 2px 8px rgba(0, 0, 0, .09), 0 4px 40px rgba(0, 0, 0, .24)
}

.fb-widget {
    background: #fff;
    z-index: 1000;
    position: fixed;
    width: 360px;
    height: 435px;
    overflow: hidden;
    opacity: 0;
    bottom: 0;
    right: 24px;
    border-radius: 6px;
    -o-border-radius: 6px;
    -webkit-border-radius: 6px;
    box-shadow: 0 5px 40px rgba(0, 0, 0, .16);
    -webkit-box-shadow: 0 5px 40px rgba(0, 0, 0, .16);
    -moz-box-shadow: 0 5px 40px rgba(0, 0, 0, .16);
    -o-box-shadow: 0 5px 40px rgba(0, 0, 0, .16)
}

.fb-credit {
    text-align: center;
    margin-top: 8px
}

.fb-credit a {
    transition: none;
    color: #bec2c9;
    font-family: Helvetica, Arial, sans-serif;
    font-size: 12px;
    text-decoration: none;
    border: 0;
    font-weight: 400
}

.ctrlq.fb-overlay {
    z-index: 0;
    position: fixed;
    height: 100vh;
    width: 100vw;
    -webkit-transition: opacity .4s, visibility .4s;
    transition: opacity .4s, visibility .4s;
    top: 0;
    left: 0;
    background: rgba(0, 0, 0, .05);
    display: none
}

.ctrlq.fb-close {
    z-index: 4;
    padding: 0 6px;
    background: #365899;
    font-weight: 700;
    font-size: 11px;
    color: #fff;
    margin: 8px;
    border-radius: 3px
}

.ctrlq.fb-close::after {
    content: "X";
    font-family: sans-serif
}

.bubble {
    width: 20px;
    height: 20px;
    background: #c00;
    color: #fff;
    position: absolute;
    z-index: 999999999;
    text-align: center;
    vertical-align: middle;
    top: -2px;
    left: -5px;
    border-radius: 50%;
}

.bubble-msg {
    width: 120px;
    left: -140px;
    top: 5px;
    position: relative;
    background: rgba(59, 89, 152, .8);
    color: #fff;
    padding: 5px 8px;
    border-radius: 8px;
    text-align: center;
    font-size: 13px;
}

</style><div class="fb-livechat"><div class="ctrlq fb-overlay"></div><div class="fb-widget"><div class="ctrlq fb-close"></div><div class="fb-page"data-href="https://www.facebook.com/chanhtuoicom"data-tabs="messages"data-width="360"data-height="400"data-small-header="true"data-hide-cover="true"data-show-facepile="false"></div><div class="fb-credit"><a href="https://thanhtrungmobile.vn"target="_blank">Powered by TT</a></div><div id="fb-root"></div></div><a href="https://m.me/chanhtuoicom"title="Gửi tin nhắn cho chúng tôi qua Facebook"class="ctrlq fb-button"><div class="bubble">1</div><div class="bubble-msg">Bạn cần hỗ trợ?</div></a></div><script src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script><script>jQuery(document).ready(function($) {
        function detectmob() {
            if(navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/webOS/i) || navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/BlackBerry/i) || navigator.userAgent.match(/Windows Phone/i)) {
                return true;
            }

            else {
                return false;
            }
        }

        var t= {
            delay: 125, overlay: $(".fb-overlay"), widget: $(".fb-widget"), button: $(".fb-button")
        }

        ; setTimeout(function() {
                $("div.fb-livechat").fadeIn()
            }

            , 8 * t.delay); if( !detectmob()) {
            $(".ctrlq").on("click", function(e) {
                    e.preventDefault(), t.overlay.is(":visible") ? (t.overlay.fadeOut(t.delay), t.widget.stop().animate( {
                                bottom: 0, opacity: 0
                            }

                            , 2 * t.delay, function() {
                                $(this).hide("slow"), t.button.show()
                            }

                        )) : t.button.fadeOut("medium", function() {
                            t.widget.stop().show().animate( {
                                    bottom: "30px", opacity: 1
                                }

                                , 2 * t.delay), t.overlay.fadeIn(t.delay)
                        }

                    )
                }

            )
        }
    }

);
</script>

<script>
  function danhgia(e){
    var idsp = $(e).attr("idsp");
    var vote = $(e).attr("vote");
    $.ajax({
           type: 'GET',
           url: './admin/pages/ajax/danhgiasanpham.php?idsp='+idsp+'&vote='+vote,
           success: function (data) {
            alert("Cám ơn bạn đã đánh giá sản phẩm này !");
           },error: function () {
                alert("lỗi");
        
              }
          });
  }
</script>
</footer>
<!-- Footer -->
<script>
     // vadidate form

    function vadiate(pass,repass){
      if(pass==""||repass=="") {
       
       if(pass =="") $("input#pass").css("border","1px solid red");
       else $("input#pass").css("border","1px solid rgba(0,0,0,0.1)");
     
       if(repass =="") $("input#repass").css("border","1px solid red");
       else $("input#repass").css("border","1px solid rgba(0,0,0,0.1)");
      
       return false ;
      }else {
      
        $("input#pass").css("border","1px solid rgba(0,0,0,0.1)");
     
        $("input#repass").css("border","1px solid rgba(0,0,0,0.1)");
       
        if(repass!=pass) {
          alert("Hai mật khẩu không giống nhau !");
          return false;
        }
        else  return true;
      }
    }


    //  xử lí sự kiện thêm mới 
    $(".doimatkhau").click(function(){
  
       var pass = $("input#pass").val();
       var repass = $("input#repass").val();
       var idnv =  $("input#idnvs").val();
       if(vadiate(pass,repass)){
        var form_data = new FormData();                  
     
       form_data.append('pass',pass); 
       form_data.append('repass', repass);
       form_data.append('id', idnv);
     
    
       $.ajax({
        url: "./admin/pages/ajax/doimatkhau.php",
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(){
            alert("Đổi mật khẩu thành công thành công !"); 
            var pass = $("input#pass").val("");
            var repass = $("input#repass").val("");
            $(".dong").click();
        }
      });

       }

    });

    
 
   </script>
    <script src="./../js/index.js"></script>
</body>
</html>




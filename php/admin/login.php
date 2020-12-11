<?php
 
ob_start();
session_start();
include_once("./ketnoi.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/style.css"> 
    
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form .button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form .button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
    </style>
</head>
<body>
  <?php
   
    if(isset($_POST["dangnhap"])){
      $username =  $_POST["username"] ;
      $password = $_POST["password"];
      if(isset($username) && isset($password)){
        if(isset($_POST['remem'])){
          setcookie('username',$username,time() + 3600);
          setcookie('pass',$password,time() + 3600);
       
      }
         $sql ="select * from thanhvien where username= '$username' and password ='$password' ";
          $query = mysqli_query($conn,$sql);
          $numberRows = mysqli_num_rows($query);
          $row= mysqli_fetch_array($query) ;
          
          if($numberRows>0){
            $_SESSION['idnv']=$row['id'];
            $_SESSION['username']=$username;
            $_SESSION['pass']=$password;
             $_SESSION['role']=$row['role'];
            $_SESSION['image']=$row['image'];
           
            if($row['role']==1)  header('Location: index.php');
            else{
              header('Location: ../indexUser.php');
            }
           
          }else{
            echo "
            <center class='alert alert-warning text-center'>
            <strong>Thông tin tài khoản không tồn tại hoặc không có quyền truy cập !</strong> 
            </center>
                 ";
          }
      }
    }

  ?>


    <div class="login-page">
        <div class="form">
          <div>
          <form class="login-form" action="login.php" method="POST">
            <input type="text" value="<?php if(isset($_COOKIE['username'])) echo $_COOKIE['username']; ?>"  placeholder="tên tài khoản" name="username" required/>
            <input type="password" value="<?php if(isset($_COOKIE['pass'])) echo $_COOKIE['pass']; ?>" placeholder="mật khẩu" name="password" required/>
           <div>
           <label for="remember-me" class="text-info" style="float: left;color:black;">Nhớ tài khoản</label>
            <input  id="remember-me" name="remem" type="checkbox" style="width: 9%;    margin-right: 139px;">
           </div >
            <input type="submit" name="dangnhap" class="button" value="đăng nhập" /> 
          </form>
          </div>
        <div>
          <a href="#" style="margin-right: 55px;color: black;" data-toggle="modal" data-target="#myModal" ><b>Đăng ký tài khoản</b></a>
          <a href="#"  style="color:black;" data-toggle="modal" data-target="#myModal2"><b>Quên mật khẩu ?</b></a>
        
        </div>
        </div>
       
      </div>

    <!-- Quên mật khẩu -->
 <div class="modal" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header  pt-reduced pb-reduced">
        <h3 class="modal-title" style="color:black;"><b>Nhập Email của bạn !</b></h3>
       
      </div>

      <!-- Modal body -->
      <div class="modal-body">
       <input class="form-control" type="text" id="tenemail"/>
      </div>

      <div class="modal-footer">
      <button class="btn btn-success getpass">Lấy lại mật khẩu</button>
      <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
      </div>

    </div>
  </div>
</div>



       <!-- Modal thêm mới-->
   <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <h1 class="modal-title" style="color: #7a00ff;">Thêm thành viên</h1>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col col-sm-12">
          <form >
  <div class="form-group">
    <label for="ten">Tên đăng nhập (<span style="color: red;">*</span>)</label>
    <input type="text" class="form-control" name="ten" id="ten" require>
  </div>
  <div class="form-group">
    <label for="username">Username (<span style="color: red;">*</span>)</label>
    <input type="text" class="form-control" id="usernames" name="usernames" require>
  </div>
  <div class="form-group">
    <label for="pass">Password (<span style="color: red;">*</span>)</label>
    <input type="password" class="form-control" id="pass" name="pass" require>
  </div>
  <div class="form-group">
    <label for="pass">Repassword (<span style="color: red;">*</span>)</label>
    <input type="password" class="form-control" id="repass" name="repass" require>
  </div>

  <div class="form-group">
    <label for="email">Email (<span style="color: red;">*</span>)</label>
    <input type="text" class="form-control" id="email" name="email" require>
  </div>
  
     <div class="form-group">
     <label for="image">Avatar :</label>
     <input type="file" class="form-control" id="image" name="image">
     </div>
</form>
          </div>
        </div> 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary themmoi">Thêm mới</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
      </div>
    </div>

  </div>
</div>


<script>
     // vadidate form

    function vadiate(ten,username,pass,email,repass){
      if(ten==""||username ==""||pass==""||email==""||repass=="") {
       if(ten=="") $("input#ten").css("border","1px solid red");
       else $("input#ten").css("border","1px solid rgba(0,0,0,0.1)");
       if(username =="") $("input#usernames").css("border","1px solid red");
       else $("input#usernames").css("border","1px solid rgba(0,0,0,0.1)");
       if(pass =="") $("input#pass").css("border","1px solid red");
       else $("input#pass").css("border","1px solid rgba(0,0,0,0.1)");
       if(email =="") $("input#email").css("border","1px solid red");
       else $("input#email").css("border","1px solid rgba(0,0,0,0.1)");
       if(repass =="") $("input#repass").css("border","1px solid red");
       else $("input#repass").css("border","1px solid rgba(0,0,0,0.1)");
      
       return false ;
      }else {
        $("input#ten").css("border","1px solid rgba(0,0,0,0.1)");
        $("input#usernames").css("border","1px solid rgba(0,0,0,0.1)");
        $("input#pass").css("border","1px solid rgba(0,0,0,0.1)");
        $("input#email").css("border","1px solid rgba(0,0,0,0.1)");
        $("input#repass").css("border","1px solid rgba(0,0,0,0.1)");
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        if(!filter.test(email)) {
          alert("Nhập địa chỉ email hợp lệ ! \n ví dụ : lehieu@gmail.com");
          return false;
        }
        if(repass!=pass) {
          alert("Hai mật khẩu không giống nhau !");
          return false;
        }
        else  return true;
      }
    }


    //  xử lí sự kiện thêm mới 
    $(".themmoi").click(function(){
       var ten = $("input#ten").val();
       var username = $("input#usernames").val();
       var pass = $("input#pass").val();
       var repass = $("input#repass").val();
       var email = $("input#email").val();
      
       var image = $('input[name="image"]').val();
       var file_data =  $('input[name="image"]').prop('files')[0];  
       if(vadiate(ten,username,pass,email,repass)){
        var form_data = new FormData();                  
       form_data.append('file', file_data);
       form_data.append('ten', ten);
       form_data.append('username', username);
       form_data.append('pass',pass); 
       form_data.append('email', email);
     
    
       $.ajax({
        url: "../admin/pages/ajax/themmoithanhvienuser.php",
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(){
            alert("Thêm mới thành công !"); 
            location.reload();
        }
      });

       }

    });

      //  xử lí quên mật khẩu 

      $(".getpass").click(function(){
          var email = $("input#tenemail").val();
          var dl = JSON.stringify(email);
          if(email=="") alert("Nhập tên email của bạn !") ;
          else {
            $.ajax({
           type: 'GET',
           url: '../admin/pages/ajax/laymatkhau.php?email='+email,
           success: function (data) {
            if(data==200)alert("Mật khẩu mới của bạn đã được cập nhật lại , xin vui lòng kiểm tra mail !");
            else if(data==404)alert("Vui lòng kiểm tra lại thông tin email");
            else if(data==500) alert("Đã xảy ra lỗi trong quá trình gửi mail !");
           },error: function (data) {
            alert("looxi")
        
              }
          });
          }
      })

   </script>

</html>




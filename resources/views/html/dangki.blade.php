<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>ĐĂNG KÝ</title>
 <!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- //custom-theme  -->
<link rel="stylesheet" href="{{asset('asset/style.css')}}">
   <!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

  <style type="text/css">
    body{
      background:url(img/bann.jpg) no-repeat 0px 0px;
    }


  </style>
  </head>
  <body>
<div class="login-form w3_form">
  <!--  Title-->
      <div class="login-title w3_title">
           <h1>ĐĂNG KÝ TÀI KHOẢN</h1>
      </div>
           <div class="login w3_login">
                <h2 class="login-header w3_header">Đăng Ký</h2>
              <div class="w3l_grid">
                          <form class="login-container" action="addaccount.php" method="post" onsubmit="validateForm()">
                            <p>Tên đăng nhập<sup>*</sup>:</p>
                              <input type="text" class="form-control" id="uname" name="KH_ID" placeholder="Nhập tên đăng nhập....." required>
                            <p>Mật khẩu<sup>*</sup>:</p>  
                              <input type="password" placeholder="Nhập mật khẩu....." id="KH_PASSWORD" name="KH_PASSWORD" required="">
                              <p>Nhập lại mật khẩu<sup>*</sup>:</p>  
                              <input type="password" class="form-control" id="confirmpassword" placeholder="Nhập lại mật khẩu....." required>
                              <p>Họ tên<sup>*</sup>:</p>  
                              <input type="text" class="form-control" id="name" placeholder="Nhập họ tên." name="KH_TEN" required>
                              <p>Địa chỉ<sup>*</sup>:</p>  
                              <input type="text" class="form-control" id="address" placeholder="Địa chỉ của bạn." name="KH_DIACHI" required>
                                Giới tính<sup>*</sup>:
                              <div class="form-check" style="margin-top : 15px">
                               
                                <label class="form-check-label" for="radio2" style="margin-left: 30px">
                                  <input type="radio" class="form-check-input" id="radio2" name="KH_GIOITINH" value="Nam"> Nam
                                </label>
                                <label class="form-check-label" for="radio2" style="margin-left: 100px">
                                    <input type="radio" class="form-check-input" id="radio2" name="KH_GIOITINH" value="Nữ"> Nữ
                                </label>
                                
                              </div>
                              <br><br>
                              Ngày sinh<sup>*</sup>:
                              <input type="date" class="form-control" id="date" name="KH_NGAYSINH" required>
                              Số điện thoại<sup>*</sup>:
                              <input type="text" class="form-control" id="phone" name="KH_SDT" placeholder="Số điện thoại của bạn" required>

                              <input type="submit" value="Submit">
                          </form>

                   
                <div class="bottom-text w3_bottom_text">
                  <br>
                      <a href="index.php">Trang chủ.</a>
                </div>
              </div>
            </div>
        </div>


</body>
</html>
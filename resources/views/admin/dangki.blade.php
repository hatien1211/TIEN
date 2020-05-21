<!DOCTYPE html>
<html>
<head>
  <title>ĐĂNG KÝ</title>
 <!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base href="{{asset('')}}">
<!-- //custom-theme  -->
<link rel="stylesheet" href="asset/styleform.css">
   <!-- font-awesome icons -->
<link href="asset/css/font-awesome.css" rel="stylesheet">
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<style type="text/css">
    body{
      background:url({{asset('IMG/bann.jpg')}});
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
                @extends('admin.layout.partials.error-message')

                @extends('admin.layout.partials.complete-message')
                          <form class="login-container" action="{{route('xl_dangki')}}" method="post" onsubmit="validateForm()">
                            @csrf
                            <p>Tên đăng nhập<sup>*</sup>:</p>
                              <input type="text" class="form-control" id="uname" name="username" placeholder="Nhập tên đăng nhập....." required>

                            <p>Mật khẩu<sup>*</sup>:</p>  
                              <input type="password" placeholder="Nhập mật khẩu....." id="KH_PASSWORD" name="password" required="">

                              <p>Nhập lại mật khẩu<sup>*</sup>:</p>  
                              <input type="password" class="form-control" id="passwordAgain" placeholder="Nhập lại mật khẩu....." name='passwordAgain' required>
                              
                              <p>Họ tên<sup>*</sup>:</p>  
                              <input type="text" class="form-control" id="name" placeholder="Nhập họ tên." name="hoten" required>
                              
                              Ngày sinh<sup>*</sup>:
                              <input type="date" class="form-control" id="date" name="ngaysinh" required>
                               
                              Giới tính<sup>*</sup>:
                              <div class="form-check" style="margin-top : 15px">
                               
                                <label class="form-check-label" for="radio2" style="margin-left: 30px">
                                  <input type="radio" class="form-check-input" id="radio2" name="gioitinh" value="1"> Nam
                                </label>
                                <label class="form-check-label" for="radio2" style="margin-left: 100px">
                                    <input type="radio" class="form-check-input" id="radio2" name="gioitinh" value="0"> Nữ
                                </label>
                                
                              </div>
                              <br><br>
                              
                              Số điện thoại<sup>*</sup>:
                              <input type="text" class="form-control" id="phone" name="sdt" placeholder="Số điện thoại của bạn" required>
                              
                              CMND<sup>*</sup>:
                              <input type="text" class="form-control" id="phone" name="cmnd" placeholder="Số điện thoại của bạn" required>

                              <input type="submit" value="Đăng kí">
                          </form>

                   
                <div class="bottom-text w3_bottom_text">
                  <br>
                      <a href="{{route('index')}}">Trang chủ.</a>
                </div>
              </div>
            </div>
        </div>


</body>
</html>
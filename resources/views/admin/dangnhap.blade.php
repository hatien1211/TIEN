<!DOCTYPE html>
<html>
<head>
  <title>ĐĂNG NHẬP</title>
 <!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!-- //custom-theme  -->
<link rel="stylesheet" href="{{asset('asset/styleform.css')}}">
   <!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
  <style type="text/css">
    body{
      background:url({{asset('IMG/bann.jpg')}}) no-repeat 0px 0px;
    }
  </style>

  </head>
  <body>
<div class="login-form w3_form">
  <!--  Title-->
      <div class="login-title w3_title">
           <h1>ĐĂNG NHẬP TÀI KHOẢN</h1>
      </div>
           <div class="login w3_login">
                <h2 class="login-header w3_header">Đăng Nhập</h2>
				    <div class="w3l_grid">
              
                        <form class="login-container" action="{{route('xl_dangnhap')}}" method="post">
                          @csrf
                          @extends('admin.layout.partials.error-message')
                          @extends('admin.layout.partials.complete-message')
                            <input type="text" class="form-control"   name="username"  placeholder="Enter username" required>
                            <p style="margin-bottom: 3px ; font-size: 10px"></p>
                             <input type="password" placeholder="Password"  name="password" required="">
                             <p style="margin-bottom: 3px ; font-size: 10px"></p><br>
                             <input type="submit"  value="Đăng nhập ngay" name="dangnhap">
                        </form>

                 
<div class="bottom-text w3_bottom_text">
  <br>
      <p>No account yet?<a href="dangki">Đăng ký</a></p>
</div>

                  </div>
       </div>
  
</div>

</body>
</html>
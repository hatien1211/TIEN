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
                        <form class="login-container" action="dangnhap.php" method="post">
                            <input type="text" class="form-control" onblur="ktraid()" id="ID" name="idname"  placeholder="Enter username" required>
                            <p id="notice" style="margin-bottom: 3px ; font-size: 10px"></p>
                             <input type="password" placeholder="Password" onblur="ktrapass()" id="passwd" name="password" required="">
                             <p id="notice1" style="margin-bottom: 3px ; font-size: 10px"></p><br>
                             <input type="submit"  value="Đăng nhập ngay" name="dangnhap">
                        </form>

                 
<div class="bottom-text w3_bottom_text">
  <br>
      <p>No account yet?<a href="formrig.php">Đăng ký</a></p>
</div>

                  </div>
       </div>
  
</div>


<script type="text/javascript">
  function ktraid() {
    var x=document.getElementById("ID").value;
   
    if(x==""){
      document.getElementById("notice").innerHTML="Tên đăng nhập không được để trống";
      document.getElementById("notice").style.color="red";

    }else{
      document.getElementById("notice").innerHTML="";
    }
  }
</script>


<script type="text/javascript">
  function ktrapass(){
    var y=document.getElementById("passwd").value;

    if(y==""){
      document.getElementById("notice1").innerHTML="Mật khẩu không được để trống";
      document.getElementById("notice1").style.color="red";
    }else{
      document.getElementById("notice1").innerHTML="";
    }
  }

</script>
</body>
</html>
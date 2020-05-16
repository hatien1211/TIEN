<!DOCTYPE html>
<html>
<head>
	<title>Trang chủ</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
		<style type="text/css">
		#my_slide{
			position:relative;	
		}

		#nav_ss{
			position: absolute;
			width: 100%
		}

		.d-block{
			height: 400px;
		}

		body{
			font-family: inherit;
		}

		.form-control{
	    width: 280px;
	    }
	    .nar-item{
	    	color: black;
	    }

	</style>
</head>
<body>
<!-- MENU -->
	<div>
		<nav class="navbar navbar-expand-lg navbar-light bg-light mt-1 " >
		<div class="container">
					<a class="navbar-brand" href="#"><img src="img/logo.png" style="width: 150px; height: 50px"></a>
				    <form class="form-inline my-2 my-lg-0 ml-auto">
					    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
					    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				    </form>
				    <div style="margin-left: 5px ">
                        <a href="dangnhap.php">
                        <button type='button' class='btn btn-outline-info btn-sm' >Đăng nhập</button></a>
                        <a href='dangki.php'>
                        <button type='button' class='btn btn-outline-info btn-sm'>Đăng kí</button></a>
                    </div>
		</div>  
		</nav>
	</div>
	
<!-- END MENU -->
	
	<div id="my_slide" style="margin-top: 0.5rem">
<!-- SLIDE -->
	<nav id="nav_ss" class="navbar navbar-expand-sm navbar-dark justify-content-center sticky-top" style="background-color:rgba(255,192,192,0.3);">
		  <!-- Brand -->
		  

		  <!-- Links -->
		  <div style="display: flex; justify-content: center; ">
		<ul class="navbar-nav">
		    <li class="nav-item">
		      <a class="nav-link" href="#">Giới thiệu</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="#">Dịch vụ</a>
		    </li>

		    <!-- Dropdown -->
		    <li class="nav-item dropdown">
		      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
		       	Loại Phòng
		      </a>
		      <div class="dropdown-content">
		        <a class="dropdown-item" href="#">Standar(STD)</a>
		        <a class="dropdown-item" href="#">Superior(SUP)</a>
		        <a class="dropdown-item" href="#">Dulex(DLX)</a>
		        <a class="dropdown-item" href="#">Suite(SUT)</a>
		      </div>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="#">Đánh giá</a>
		    </li>
		 </ul>		  
		</div>
		  
		</nav>


	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	  <ol class="carousel-indicators">
	    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	  </ol>
	  <div class="carousel-inner">
	    <div class="carousel-item active">
	      <img src="img/1.jpg" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="img/2.jpg" class="d-block w-100" alt="...">
	    </div>
	    <div class="carousel-item">
	      <img src="img/3.jpg" class="d-block w-100" alt="...">
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>	
<!-- SLIDE -->
	</div>

<!-- info -->
	<div class="container" style="text-align: center; padding: 30px;">
		<div class="nameroom">
			<h4 style="color: #cf8d6b"><i>CHÀO MỪNG BẠN ĐÃ ĐẾN VỚI KHÁCH SẠN</i></h4>
		</div>
	</div>

	<div class="container mt-1" style="text-align: center">
		<div class="row">
			<div style=" margin-left: 12em">
				<img src="img/4.jpg" style="width: 50rem; height: 20rem;">
				<div style="margin-top: 1rem">
					<a href='' >
                    <button type='button' class='btn btn-outline-info btn-sm' style="width: 180px; height: 50px;">ĐẶT PHÒNG</button></a>
				</div>
			</div>
		</div>
	<div>
	<div class="container" style="text-align: center; padding: 30px;">
		<div class="nameroom">
			<h4 style="color: #cf8d6b"><i>DỊCH VỤ</i></h4>
		</div>
		<div class="row" style="margin-left: 8rem">
			<div class="col-md-3">
				<img src="img/DINING.jpg" style="width: 16rem; height: 20rem;">
				<div class="nameroom">
					ĂN TỐI
				</div>
			</div>
			<div class="col-md-3">
				<img src="img/SPA.jpg" style="width: 16rem; height: 20rem;margin-left: 3rem">
				<div class="name_sv">
					ăn tối
				</div>
			</div>
			<div class="col-md-3">
				<img src="img/EVENT.jpg" style="width: 16rem; height: 20rem;margin-left: 6rem">
				<div class="nameroom">
					SỰ KIỆN
				</div>
			</div>
		</div>




	</div>

<!-- info -->

 <!-- infostore -->
    
    <div class="container-fluid mt-3">
        <h4 align="center" style="background-color: rgba(255,192,192,0.8); padding: 10px">Thông tin</h4>
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4 mb-5">
                <i><h6  style="color: ">Niên luận Cơ sở Công Nghệ Thông Tin</h6>
                <h6  style="color: ">Họ Tên: Hồng Anh Tiến</h6>
                <h6  style="color: ">MSSV: B1607034</h6>
                <h6  style="color: ">EMAIL: tienb1607034@student.ctu.edu.vn</h6>
                <br><br>
               </i>
            </div> 
            <div class="col-4 mt-5"></div>
        </div>
    </div>
    <!-- infostore -->




	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="popper.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
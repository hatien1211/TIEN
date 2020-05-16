<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">

</head>
<body>
<!-- header -->
	<div class="container-fluid" style="width: 100%; background-color: #F5F5DC; position: relative; ">
		<nav class="navbar navbar-expand-sm ">
		  <!-- Brand/logo -->
		  <a class="navbar-brand" href="#"><img src="img/logo.png" style="width: 150px; height: 50px"></a>
		  
		  <!-- Links -->
		  <div style="position: absolute; right:3px;">
		  	Tên ADmins
		  </div>
		  
		</nav>
		
	</div>
<!-- header -->

	<div class="row" style="margin: 15px 5px"> 
<!-- category -->
		<div class="col-3"> 

			<div class="accordion" id="accordionExample" style="width: 100%">
			  	<div class="card">
			  		<div class="card-header">
			  			<h5 align="center" style="color: green">
                        DANH MỤC QUẢN LÝ
                        </h5></div>
				    <div class="card-header" id="headingOne">
				      <h2 class="mb-0">
				        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				          PHÒNG
				        </button>
				      </h2>
				    </div>

				    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
				      <div class="card-body">
				        <ul class="list-group list-group-flush" style="width: 100%">
						  <li class="list-group-item">First item</li>
						  <li class="list-group-item">Second item</li>
						</ul>
				      </div>
				    </div>
			 	</div>


				<div class="card">
				    <div class="card-header" id="headingTwo">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				          USERS
				        </button>
				      </h2>
				    </div>

				    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
					    <div class="card-body">
					        <ul class="list-group list-group-flush" style="width: 100%">
							  <li class="list-group-item">First item</li>
							  <li class="list-group-item">Second item</li>
							</ul> 
					    </div>
				 	</div>
				</div>


			 	<div class="card">
				    <div class="card-header" id="headingThree">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				          DỊCH VỤ
				        </button>
				      </h2>
				    </div>
				    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
				      <div class="card-body">
				        <ul class="list-group list-group-flush" style="width: 100%">
						  <li class="list-group-item">First item</li>
						  <li class="list-group-item">Second item</li>
						</ul>
				      </div>
				    </div>		
				</div>



				<div class="card">
				    <div class="card-header" id="headingFive">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
				          SLIDE
				        </button>
				      </h2>
				    </div>

				    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
					    <div class="card-body">
					        <ul class="list-group list-group-flush" style="width: 100%">
							  <li class="list-group-item">First item</li>
							  <li class="list-group-item">Second item</li>
							</ul> 
					    </div>
				 	</div>
				</div>


			 	<div class="card">
				    <div class="card-header" id="headingSix">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
				          COMMENT
				        </button>
				      </h2>
				    </div>
				    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
				      <div class="card-body">
				        <ul class="list-group list-group-flush" style="width: 100%">
						  <li class="list-group-item">First item</li>
						  <li class="list-group-item">Second item</li>
						</ul>
				      </div>
				    </div>		
				</div>


				<div class="card">
				    <div class="card-header" id="headingSix">
				      <h2 class="mb-0">
				        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
				          ĐƠN ĐẶT
				        </button>
				      </h2>
				    </div>
				    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
				      <div class="card-body">
				        <ul class="list-group list-group-flush" style="width: 100%">
						  <li class="list-group-item">First item</li>
						  <li class="list-group-item">Second item</li>
						  <li class="list-group-item">Third item</li>
						</ul>
				      </div>
				    </div>		
				</div>


			</div>
		</div>	
<!-- category -->	

<!-- Content -->
		<div class="col-9">
			<div>
				<table class="table table-hover">
				    <thead>
				      <tr>
				        <th>Firstname</th>
				        <th>Lastname</th>
				        <th>Email</th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>John</td>
				        <td>Doe</td>
				        <td>john@example.com</td>
				      </tr>
				      <tr>
				        <td>Mary</td>
				        <td>Moe</td>
				        <td>mary@example.com</td>
				      </tr>
				      <tr>
				        <td>July</td>
				        <td>Dooley</td>
				        <td>july@example.com</td>
				      </tr>
				    </tbody>
				  </table>
			</div>
		</div>


		<!-- <div class="col-9">
			<div style="width: 100%">
				<center><TABLE>
                <form enctype='multipart/form-data' action='#' method='post'>
                <tr><td align='middle' colspan='2'><h4><b>Nhập vào để thêm vào bảng khách hàng</b></h4><hr></td></tr><tr>
                    
                    <tr><td><h5>Tên đăng nhập:</h5></td></tr>
                    <tr><td><input type='text' class='form-control' name='KH_ID' style='width:500px'></td></tr>

                    <tr><td><h5>Mật khẩu:</h5></td></tr>
                    <tr><td><input type='password' class='form-control' name='KH_PASSWORD' style='width:500px'></td></tr>

                    <tr><td><h5>Tên hách hàng:</h5></td></tr>
                    <tr><td><input type='text' class='form-control' name='KH_TEN' style='width:500px'></td></tr>


                    <tr><td><h5>Giới tính:</h5></tr></td>
                    <tr><td>
                        
                              <label class='form-check-label' style='margin-left: 30px'>
                                <input type='radio' style='size:50px' class='form-check-input' value='Nam' name='KH_GIOITINH'>Nam
                              </label>
                            
                              <label class='form-check-label' style='margin-left: 250px'>
                                <input type='radio' style='size:50px' class='form-check-input' value='Nữ' name='KH_GIOITINH'>Nữ
                              </label>
                            
                    </td></tr>

                    <tr><td><h5>Ngày sinh:</h5></td></tr>
                    <tr><td><input type='date' class='form-control' name='KH_NGAYSINH' style='width:500px'></td></tr>

                    <tr><td><h5>Địa chỉ:</h5></td></tr>
                    <tr><td><input type='text' class='form-control' name='KH_DIACHI' style='width:500px'></td></tr>

                    <tr><td><h5>SĐT:</h5></td></tr>
                    <tr><td><input type='text' class='form-control' name='KH_SDT' style='width:500px'></td></tr>

                    <tr><td><button type='button' class='btn btn-primary' >Thêm</button></td></tr>
 					 </form> 
                </TABLE></center>

			</div>
		</div>	 -->
<!-- COntent -->
	</div>








	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="popper.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
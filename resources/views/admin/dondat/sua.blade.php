@extends('admin.layout.master')
@section('content')
<div class="col-9">
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
		</div>
@endsection
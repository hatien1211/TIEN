@extends('admin.layout.master')

@section('content')
<div class="col-9">
            <div style="width: 100%">
                <center><TABLE>
                <form enctype='multipart/form-data' action="{{route('add_users')}}" method='post'>
                @csrf
                <tr><td align='middle' colspan='2'><h4><b>Nhập vào để thêm Users</b></h4><hr></td></tr>

                <tr><td align='middle' colspan='2'>@extends('admin.layout.partials.error-message')

                @extends('admin.layout.partials.complete-message')</td></tr>
                    <tr><td><h5>Username:</h5></td></tr>
                    <tr><td><input type='text' class='form-control' name='username' style='width:500px'></td></tr>

                    <tr><td><h5>Mật khẩu:</h5></td></tr>
                    <tr><td><input type='password' class='form-control' name='password' style='width:500px'></td></tr>
                    <tr><td><h5>Nhập lại mật khẩu:</h5></td></tr>
                    <tr><td><input type='password' class='form-control' name='passwordAgain' style='width:500px'></td></tr>

                    <tr><td><h5>Tên hách hàng:</h5></td></tr>
                    <tr><td><input type='text' class='form-control' name='hoten' style='width:500px'></td></tr>
                    <tr><td><h5>Ngày sinh:</h5></td></tr>
                    <tr><td><input type='date' class='form-control' name='ngaysinh' style='width:500px'></td></tr>

                    <tr><td><h5>Giới tính:</h5></tr></td>
                    <tr><td>
                        
                              <label class='form-check-label' style='margin-left: 30px'>
                                <input type='radio' style='size:50px' class='form-check-input' value='1' name='gioitinh'>Nam
                              </label>
                            
                              <label class='form-check-label' style='margin-left: 250px'>
                                <input type='radio' style='size:50px' class='form-check-input' value='0' name='gioitinh'>Nữ
                              </label>
                            
                    </td></tr>

                    <tr><td><h5>SĐT:</h5></td></tr>
                    <tr><td><input type='number' class='form-control' name='sdt' style='width:500px'></td></tr>

                    <tr><td><h5>CMND:</h5></td></tr>
                    <tr><td><input type='number' class='form-control' name='cmnd' style='width:500px'></td></tr>

                    <tr><td><h5>Quyền:</h5></tr></td>
                    <tr><td>
                        
                              <label class='form-check-label' style='margin-left: 30px'>
                                <input type='radio' style='size:50px' class='form-check-input' value='1' name='quyen'>Admin
                              </label>
                            
                              <label class='form-check-label' style='margin-left: 250px'>
                                <input type='radio' style='size:50px' class='form-check-input' value='0' name='quyen'>Thường
                              </label>
                            
                    </td></tr>

                    <tr><td><br></td></tr>

                    <tr><td>
                        <button type='submit' class='btn btn-primary' >Thêm</button>

                        <button type='reset' class='btn btn-danger' >Làm mới</button>

                    </td></tr>
                </form> 
                </TABLE></center>

            </div>
        </div>
@endsection
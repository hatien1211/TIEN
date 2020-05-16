@extends('admin.layout.master')



@section('content')
<div class="col-9">
            <div style="width: 100%">
                <center><TABLE>
                <form method="post" action="{{ route('fix_users',['id' => $users->users_id]) }}" enctype="multipart/form-data">
                @csrf
                <tr><td align='middle' colspan='2'><h4><b>Sửa User {{$users->username}}</b></h4><hr></td></tr>
                <tr><td align='middle' colspan='2'></td>@extends('admin.layout.partials.error-message')

                @extends('admin.layout.partials.complete-message')</tr>
                    <tr><td><h5>Username:</h5></td></tr>
                    <tr><td><input type='text' class='form-control' name='username' value="{{$users->username}}" readonly="" placeholder="Nhập username" style='width:500px'></td></tr>

                    <tr><td><h5><input type="checkbox" id="changepassword" name="changepassword"> Đổi mật khẩu:</h5></td></tr>
                    <tr><td><input type='password' class='form-control password' name='password' placeholder="Nhập mật khẩu" style='width:500px' disabled="" ></td></tr>
                    <tr><td><h5>Nhập lại mật khẩu:</h5></td></tr>
                    <tr><td><input type='password' class='form-control password' name='passwordAgain' placeholder="Nhập lại mật khẩu" style='width:500px' disabled=""></td></tr>

                    <tr><td><h5>Tên hách hàng:</h5></td></tr>
                    <tr><td><input type='text' class='form-control' name='hoten' value="{{$users->hoten}}" style='width:500px'></td></tr>
                    <tr><td><h5>Ngày sinh:</h5></td></tr>
                    <tr><td><input type='date' class='form-control' name='ngaysinh' value="{{$users->ngaysinh}}" style='width:500px'></td></tr>

                    <tr><td><h5>Giới tính:</h5></tr></td>
                    <tr><td>
                              <label class='form-check-label' style='margin-left: 30px'>
                                <input type='radio' style='size:50px' class='form-check-input' value='1' name='gioitinh' 
                                @if($users->gioitinh == '1')
                                checked @endif>
                                Nam
                              </label>
                            
                              <label class='form-check-label' style='margin-left: 250px'>
                                <input type='radio' style='size:50px' class='form-check-input' value='0' name='giotinh'
                                @if($users->gioitinh == '0') 
                                checked @endif>
                                Nữ
                              </label>
                            
                    </td></tr>

                    <tr><td><h5>SĐT:</h5></td></tr>
                    <tr><td><input type='number' class='form-control' name='sdt' value="{{$users->sdt}}" style='width:500px'></td></tr>

                    <tr><td><h5>CMND:</h5></td></tr>
                    <tr><td><input type='number' class='form-control' name='cmnd' value="{{$users->cmnd}}" style='width:500px'></td></tr>

                    <tr><td><h5>Quyền:</h5></tr></td>
                    <tr><td>
                        
                              <label class='form-check-label' style='margin-left: 30px'>
                                <input type='radio' style='size:50px' class='form-check-input' value='1' name='quyen' 
                                @if($users->quyen == 1)
                                checked
                               @endif >Admin
                              </label>
                            
                              <label class='form-check-label' style='margin-left: 250px'>
                                <input type='radio' style='size:50px' class='form-check-input' value='0' name='quyen'
                                @if($users->quyen == 0)
                                checked
                               @endif >Thường
                              </label>
                            
                    </td></tr>

                    <tr><td><br> </td></tr>

                    <tr><td>
                        <button type='submit' class='btn btn-primary' >Sửa</button>

                        <button type='reset' class='btn btn-danger' >Làm mới</button>

                    </td></tr>
                </form> 
                </TABLE></center>

            </div>
        </div>
@endsection


@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $("#changepassword").change(function(){
            if($(this).is(":checked")){
                $(".password").removeAttr('disabled');
            }else{
                $(".password").attr('disabled','');
            }
        });
    });

</script>
@endsection
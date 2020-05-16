@extends('admin.layout.master')
@section('content')
<div class="col-9">
            <div style="width: 100%">
                <center><TABLE>
                <form enctype='multipart/form-data' action="{{route('add_phong')}}" method='post'>
                    @csrf
                <tr><td align='middle' colspan='2'><h4><b>Nhập vào để thêm phòng</b></h4><hr></td></tr><tr>
                    <tr><td align='middle' colspan='2'>
                        @extends('admin.layout.partials.error-message')

                        @extends('admin.layout.partials.complete-message')
                    </td></tr>
                    <tr><td><h5>Tên phòng:</h5></td></tr>
                    <tr><td><input type='text' class='form-control' name='p_ten' style='width:500px'></td></tr>
                    <tr><td><h5>Thông tin phòng:</h5></td></tr>
                    <tr><td><textarea class='form-control ckeditor' style='width:500px; height: 120px'  name='p_thongtin'></textarea></td></tr>
                    <tr><td><h5>Thông tin tóm tắt:</h5></td></tr>
                    <tr><td><textarea class='form-control ckeditor' style='width:500px; height: 120px'  name='p_tomtat'></textarea></td></tr>

                    <tr><td><h5>Số lượng người:</h5></td></tr>
                    <tr><td><input type='number' class='form-control' name='p_slmax' style='width:500px'></td></tr>

                    <tr><td><h5>Số lượng phòng:</h5></td></tr>
                    <tr><td><input type='number' class='form-control' name='p_slp' style='width:500px'></td></tr>
                    <tr><td><h5>Giá:</h5></td></tr>
                    <tr><td><input type='number' class='form-control' name='p_gia' style='width:500px'></td></tr>
                    <tr><td><h5>Chèn ảnh:</h5></td></tr>
                    <tr><td><input type='file' style='width:500px' name='p_img' size='30'></td></tr>
                    
                    <tr><td><br></td></tr>
                    <tr><td>
                        <button type='submit' class='btn btn-primary' >Thêm</button>

                        <button type='reset' class='btn btn-danger' >Làm mới</button></td></tr>
                     </form> 
                </TABLE></center>

            </div>
        </div>
@endsection
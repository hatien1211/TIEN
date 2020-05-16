@extends('admin.layout.master')

@section('content')
<div class="col-9">
            <div style="width: 100%">
                <center><TABLE>
                <form enctype='multipart/form-data' action="{{route('add_dichvu')}}" method='post'>
                @csrf
                <tr><td align='middle' colspan='2'><h4><b>Nhập vào để thêm dịch vụ</b></h4><hr></td></tr>

                <tr><td align='middle' colspan='2'>@extends('admin.layout.partials.error-message')

                @extends('admin.layout.partials.complete-message')</td></tr>
                    <tr><td><h5>Tên dịch vụ:</h5></td></tr>
                    <tr><td><input type='text' class='form-control' name='dv_ten' style='width:500px'></td></tr>
                     <tr><td><h5>Chèn ảnh:</h5></td></tr>
                    <tr><td><input type='file' style='width:500px' name='dv_img' size='30'></td></tr>
                     <tr><td><h5>Mô tả phòng:</h5></td></tr>
                    <tr><td><textarea class='form-control ckeditor' style='width:500px; height: 120px' id='mota' name='dv_thongtin'></textarea></td></tr>
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
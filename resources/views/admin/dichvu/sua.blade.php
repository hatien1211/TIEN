@extends('admin.layout.master')

@section('content')
<div class="col-9">
            <div style="width: 100%">
                <center><TABLE>
                <form enctype='multipart/form-data' action="{{route('fix_dichvu',['id' => $dichvu->dv_id])}}" method='post'>
                @csrf
                <tr><td align='middle' colspan='2'><h4><b>Nhập vào để sửa dịch vụ</b></h4><hr></td></tr>

                <tr><td align='middle' colspan='2'>@extends('admin.layout.partials.error-message')

                @extends('admin.layout.partials.complete-message')</td></tr>
                    <tr><td><h5>Tên slide:</h5></td></tr>
                    <tr><td><input type='text' class='form-control' value="{{$dichvu->dv_ten}}" name='dv_ten' style='width:500px'></td></tr>
                    <tr><td><h5>Hình ảnh:</h5></td></tr>
                    <tr><td><img src="IMG/dichvu/{{$dichvu->dv_img}}" width="100px"></td></tr>
                     <tr><td><h5>Sửa ảnh:</h5></td></tr>
                    <tr><td><input type='file' style='width:500px' value="{{$dichvu->dv_img}}"" name='dv_img' size='30'></td></tr>
                     <tr><td><h5>Mô tả dịch vụ:</h5></td></tr>
                    <tr><td><textarea class='form-control ckeditor' style='width:500px; height: 120px' id='mota' name='dv_thongtin'>{{$dichvu->dv_thongtin}}</textarea></td></tr>
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
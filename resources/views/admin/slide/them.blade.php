@extends('admin.layout.master')

@section('content')
<div class="col-9">
            <div style="width: 100%">
                <center><TABLE>
                <form enctype='multipart/form-data' action="{{route('add_slide')}}" method='post'>
                @csrf
                <tr><td align='middle' colspan='2'><h4><b>Nhập vào để thêm Slide</b></h4><hr></td></tr>

                <tr><td align='middle' colspan='2'>@extends('admin.layout.partials.error-message')

                @extends('admin.layout.partials.complete-message')</td></tr>
                    <tr><td><h5>Tên slide:</h5></td></tr>
                    <tr><td><input type='text' class='form-control' name='slide_ten' style='width:500px'></td></tr>
                     <tr><td><h5>Chèn ảnh:</h5></td></tr>
                    <tr><td><input type='file' style='width:500px' name='slide_img' size='30'></td></tr>

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
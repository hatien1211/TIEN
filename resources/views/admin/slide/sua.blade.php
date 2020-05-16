@extends('admin.layout.master')



@section('content')
<div class="col-9">
            <div style="width: 100%">
                <center><TABLE>
                <form method="post" action="{{ route('fix_slide',['id' => $slide->slide_id]) }}" enctype="multipart/form-data">
                @csrf
                <tr><td align='middle' colspan='2'><h4><b>Sửa Slide</b></h4><hr></td></tr>
                <tr><td align='middle' colspan='2'></td>@extends('admin.layout.partials.error-message')

                @extends('admin.layout.partials.complete-message')</tr>
                    <tr><td><h5>Tên Slide:</h5></td></tr>
                    <tr><td><input type='text' class='form-control' name='slide_ten' value="{{$slide->slide_ten}}" style='width:500px'></td></tr>
                    <tr><td><h5>Hình ảnh:</h5></td></tr>
                    <tr><td><img src="IMG/slide/{{$slide->slide_img}}" width="100px"></td></tr>
                    <tr><td><h5>IMG:</h5></td></tr>
                    <tr><td><input type='file' class='form-control' name='slide_img' style='width:500px'></td></tr>

                    <tr><td><br></td></tr>

                    <tr><td>
                        <button type='submit' class='btn btn-primary' >Sửa</button>

                        <button type='reset' class='btn btn-danger' >Làm mới</button>

                    </td></tr>
                </form> 
                </TABLE></center>

            </div>
        </div>
@endsection

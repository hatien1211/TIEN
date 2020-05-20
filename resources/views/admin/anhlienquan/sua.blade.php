@extends('admin.layout.master')

@section('content')
<div class="col-9">
            <div style="width: 100%">
                <center><TABLE>
                <form enctype='multipart/form-data' action="{{ route('fix_anhlq',['id' => $anhlienquan1->imglq_id]) }}" method='post'>
                @csrf
                <tr><td align='middle' colspan='2'><h4><b>Nhập vào để sữa thông tin</b></h4><hr></td></tr>

                <tr><td align='middle' colspan='2'>@extends('admin.layout.partials.error-message')

                @extends('admin.layout.partials.complete-message')</td></tr>
                    <tr><td><h5>Tên Phòng:</h5></td></tr>
                    <tr><td><select name='p_id' class='custom-select' style='width:500px'>
                         @foreach($phong as $p)
                        <option value='{{$p->p_id}}'>{{$p->p_ten}}</option>";
                        }
                        @endforeach
                    </select></td></tr>
                    <tr><td><h5>Hình ảnh:</h5></td></tr>
                    <tr><td><img src="IMG/phong/{{$anhlienquan1->imglq_img}}" width="100px"></td></tr>
                     <tr><td><h5>Chèn ảnh:</h5></td></tr>
                    <tr><td><input type='file' style='width:500px' name='imglq_img' size='30'></td></tr>

                    <tr><td><br></td></tr>

                    <tr><td>
                        <button type='submit' class='btn btn-primary' >SỬA</button>

                        <button type='reset' class='btn btn-danger' >Làm mới</button>

                    </td></tr>
                </form> 
                </TABLE></center>

            </div>
        </div>
@endsection
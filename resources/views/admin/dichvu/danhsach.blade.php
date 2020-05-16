@extends('admin.layout.master')
@section('content')
<table class="table table-hover" >
    <thead>
      <tr align="center">
        @extends('admin.layout.partials.complete-message')
        <th>id</th>
        <th>Tên Dịch Vụ</th>
        <th>Hình ảnh</th>
        <th style="width: 100px;">Thông tin</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody> 
    @foreach($dichvu as $u) 
      <tr align="center">
        <td> {{$u->dv_id}} </td>
        <td> {{$u->dv_ten}} </td>
        <td> <img width="80px" src="IMG/dichvu/{{$u->dv_img}}" > <p>{{$u->dv_img}}</p></td>
        <td><div style="height: 100px;width: 80px; overflow: scroll;">{{$u->dv_thongtin}}</div></td>
        <td><i class='fas fa-pencil-alt'></i>
          <a href="admin/dichvu/sua/{{$u->dv_id}}">Edit</a></td>
        <td><i class='fas fa-trash-alt'></i>
          <a href="admin/dichvu/xoa/{{$u->dv_id}}">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>   
@endsection

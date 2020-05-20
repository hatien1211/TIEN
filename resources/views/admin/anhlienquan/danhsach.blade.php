@extends('admin.layout.master')
@section('content')
<table class="table table-hover" >
    <thead>
      
      
      <tr align="center">
        @extends('admin.layout.partials.complete-message')
        
        <th>id</th>
        <th>Tên phòng</th>
        <th>Hình ảnh</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody> 
    @foreach($anhlienquan as $u) 
      <tr align="center">
        <td> {{$u->imglq_id}} </td>
        <td> {{$u->phong->p_ten}} </td>
        <td> <img width="80px" src="IMG/phong/{{$u->imglq_img}}" > <p>{{$u->imglq_img}}</p></td>
        <td><i class='fas fa-pencil-alt'></i>
          <a href="admin/AnhLQ/sua/{{$u->imglq_id}}">Edit</a></td>
        <td><i class='fas fa-trash-alt'></i>
          <a href="admin/AnhLQ/xoa/{{$u->imglq_id}}">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>      
@endsection

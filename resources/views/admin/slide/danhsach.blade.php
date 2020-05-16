@extends('admin.layout.master')
@section('content')
<table class="table table-hover" >
    <thead>
      
      
      <tr align="center">
        @extends('admin.layout.partials.complete-message')
        
        <th>id</th>
        <th>Tên Slide</th>
        <th>Hình ảnh</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody> 
    @foreach($slide as $u) 
      <tr align="center">
        <td> {{$u->slide_id}} </td>
        <td> {{$u->slide_ten}} </td>
        <td> <img width="80px" src="IMG/slide/{{$u->slide_img}}" > <p>{{$u->slide_img}}</p></td>
        <td><i class='fas fa-pencil-alt'></i>
          <a href="admin/slide/sua/{{$u->slide_id}}">Edit</a></td>
        <td><i class='fas fa-trash-alt'></i>
          <a href="admin/slide/xoa/{{$u->slide_id}}">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>      
@endsection

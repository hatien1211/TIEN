@extends('admin.layout.master')
@section('content')
<table class="table table-hover" >
    <thead>
      <tr align="center">
        @extends('admin.layout.partials.complete-message')
        <th>id</th>
        <th>Tên Phòng</th>
        <th>Hình ảnh</th>
        <th>Số lượng người</th>
        <th>Số lượng phòng</th>
        <th>Giá</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody> 
    @foreach($phong as $u) 
      <tr align="center">
        <td> {{$u->p_id}} </td>
        <td> {{$u->p_ten}} </td>
        <td> <img width="80px" src="IMG/phong/{{$u->p_img}}" > <p>{{$u->p_img}}</p></td>
        <!-- <td style='width: 150px; height: 70px; overflow: hidden;'> {{$u->p_thongtin}} </td>
        <td style='width: 150px; height: 70px; overflow: hidden;'> {{$u->p_tomtat}} </td> -->
        <td> {{$u->p_slmax}} </td>
        <td>  
          @if($u->p_slp == 0)
            Hết phòng
            @else
            {{$u->p_slp}}
          @endif
        </td>
        <td> {{$u->p_gia}} </td>
        <td><i class='fas fa-pencil-alt'></i>
          <a href="admin/phong/sua/{{$u->p_id}}">Edit</a></td>
        <td><i class='fas fa-trash-alt'></i>
          <a href="admin/phong/xoa/{{$u->p_id}}">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>      
@endsection

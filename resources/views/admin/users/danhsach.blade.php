@extends('admin.layout.master')
@section('content')
<table class="table table-hover" >
    <thead>
      
      
      <tr align="center">
        @extends('admin.layout.partials.complete-message')
        <th>id</th>
        <th>Username</th>
        <th>Họ tên</th>
        <th>Ngày sinh</th>
        <th>Giới tính</th>
        <th>SĐT</th>
        <th>CMND</th>
        <th>Quyền</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      @foreach($user as $u)
      <tr align="center">
        <td> {{$u->users_id}} </td>
        <td> {{$u->username}} </td>
        <td> {{$u->hoten}}</td>
        <td> {{$u->ngaysinh}} </td>
        <td> 
          @if($u->gioitinh == 1)
          Nam
          @else
          Nữ
          @endif 
        </td>
        <td> {{$u->sdt}} </td>
        <td> {{$u->cmnd}} </td>
        <td> 
          @if($u->quyen == 1)
          Admin
          @else
          Thường
          @endif
        </td>
        <td><i class='fas fa-pencil-alt'></i>
          <a href="admin/users/sua/{{$u->users_id}}">Edit</a></td>
        <td><i class='fas fa-trash-alt'></i>
          <a href="admin/users/xoa/{{$u->users_id}}">Delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>			
@endsection

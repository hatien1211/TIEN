@extends('frontend.layout.master')
@section('content')
<div class="site-section site-section-sm">
  <div class="container">
    <div class="row">
      
      <div class="col-md-12 col-lg-8 mb-5" style="width: 100%">
        <center>
          <h3 class="h5 text-black mb-3">Thông tin đặt phòng</h3>
          <table class="table table-hover" >

          <thead>
            <tr align="center">
              @extends('admin.layout.partials.complete-message')
              <th>id</th>
              <th>Tên người dùng</th>
              <th>Ngày lập</th>
              <th>Tổng tiền</th>
              <th>Chi tiết</th>
            </tr>
          </thead>
          <tbody>
            @foreach($dondat as $u)
            <tr align="center">
              <td> {{$u->dd_id}} </td>
              <td> {{$u->users->username}} </td>
              <td> {{$u->ngaylap}}</td>
              <td> {{number_format($u->tongtien)}}</td>
              <td><i class='fas fa-trash-alt'></i>
                <!-- <a href="{{route('chitietdondat',['id'=>$u->dd_id])}}"><button type="button" class="btn btn-info">Chi tiết</button></a></td> -->
                <button type="button" class="btn btn-info" onclick="showchitietdondat({{$u->dd_id}})">Chi tiết</button>
              </tr>
              @endforeach
            </tbody>
          </table>
          </center>
        </div>
        <!-- FORM ĐẶT PHÒNG -->
          
        <div class="col-lg-4" id="get">
          
        </div>
<!-- FORM ĐẶT PHÒNG -->
      </div>
    </div>
  </div>
  
  @endsection

  @section('script')
  <script type="text/javascript">
 function showchitietdondat(str) {
  if (str.length == 0) {
    document.getElementById("get").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("get").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "./admin/chitietdondat/" + str, true);
    xmlhttp.send();
  }
}
</script>
  @endsection
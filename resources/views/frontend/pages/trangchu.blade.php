@extends('frontend.layout.master')

@section('content')

<!-- ROOM -->
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">PHÒNG</h2>
          </div>
        </div>
        <div class="row">
          @foreach($phong as $p)
          <div class="col-md-6 col-lg-4 mb-5">
            <div class="hotel-room text-center">
              <a href="{{route('chitietphong',['id' => $p->p_id])}}" class="d-block mb-0 thumbnail"><img src="IMG/phong/{{$p->p_img}}" alt="Image" class="img-fluid"></a>
              <div class="hotel-room-body">
                <h3 class="heading mb-0"><a href="#">{{$p->p_ten}}</a></h3>
                <strong class="price">{{number_format($p->p_gia)}}Đ / ĐÊM</strong>
                @if($p->p_slp == 0)
                  <h5 style="color: red">Hết phòng</h5>
                @else
                  <h6 style="color: blue">Còn phòng</h6>
                @endif
              </div>
            </div>
          </div>
          @endforeach
          
        </div>
      </div>
    </div>

<!-- ABOUT HOTEL -->
    <div class="site-section">
      <div class="container">
        <div class="row align-items-center">
	        <div class="col-md-6 mb-5 mb-md-0">
            
	             <div class="img-border">
	                  <span class="icon-wrap">
	                    <span class="icon icon-play"></span>
	                  </span>
	                  <img src="asset/frontend/images/img_2.jpg" alt="" class="img-fluid">
	             </div>
              <img src="asset/frontend/images/img_1.jpg" alt="Image" class="img-fluid image-absolute">
            
	        </div>
          <div class="col-md-5 ml-auto">
            <div class="section-heading text-left">
              <h2 class="mb-5">Thông tin khách sạn</h2>
            </div>
            <p class="mb-4">My Hotel là một điểm đến tuyệt vời và mang đến cho bạn trải nghiệm thú vị nhất khi đến với chúng tôi. Đến với chúng tối, bạn sẽ được hòa mình vào thiên nhiên thuần khiết, tham gia các hoạt động giải trí, thư giãn để lấy đi nỗi buồn và sự hỗn loạn của cuộc sống.
            Chúng tôi có đội ngũ nhân viên được đào tạo tốt, chuyên nghiệp và chuyên nghiệp, dịch vụ tận tâm.
            My Hotel cung cấp đầy đủ các tiện nghi, thủ tục nhận phòng nhanh, phủ sóng wi-fi công cộng miễn phí trong toàn khu nghỉ mát. Điểm nổi bật của là nhà hàng phục vụ cả ẩm thực phương Tây và phương Đông được xây dựng và phục vụ trên tầng cao nhất.
            </p>

          </div>
        </div>
      </div>
    </div>


<!-- FEATURE OF HOTEL -->
<!--     <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Hotel Features</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-pool display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Swimming Pool</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-desk display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Hotel Teller</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-exit display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Fire Exit</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-parking display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Car Parking</h2>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-hair-dryer display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Hair Dryer</h2>
            </div>
          </div>

          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-minibar display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Minibar</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-drink display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Drinks</h2>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="text-center p-4 item">
              <span class="flaticon-cab display-3 mb-3 d-block text-primary"></span>
              <h2 class="h5">Car Airport</h2>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    

<!-- IMG OF HOTEL -->
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 mx-auto text-center mb-5 section-heading">
            <h2 class="mb-5">Our Gallery</h2>
          </div>
        </div>
        <div class="row no-gutters">
          @foreach($anhlienquan as $u)
          <div class="col-md-6 col-lg-3">
            <a href="IMG/phong/{{$u->imglq_img}}" class="image-popup img-opacity"><img src="IMG/phong/{{$u->imglq_img}}" alt="Image" class="img-fluid"></a>

          </div>
          @endforeach
        </div>
      </div>
    </div>

@endsection
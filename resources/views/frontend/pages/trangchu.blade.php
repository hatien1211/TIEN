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
              <p class="mb-4">My hotel sẽ là một địa điểm tuyệt vời và mang đến cho bạn thật nhiều trải nghiệm. Khi đến với chúng tôi, bạn sẽ được hòa mình vào không khí thiên nhiên thuần khiết, cùng tham gia các hoạt động giải trí, thư giãn để quên đi những nỗi buồn và điều hòa lại sự hỗn loạn trong cuộc sống.
                Với trang thiết bị hiện đại cùng đội ngũ nhân viên tận tâm, chuyên nghiệp chúng tôi cam kết sẽ làm hài lòng các quý khách hàng.<br>
                
                My hotel tọa lạc tại Ninh kiều, Thành phố Cần Thơ.Với lợi thế về vị trí My hotel sẽ là điểm dừng chân nghĩ ngơi thư giản đáng được quan tâm của mọi người khi bước chân đến miền sông nước Cần Thơ.
                
              </p>
             

          </div>
        </div>
      </div>
    </div>


    

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
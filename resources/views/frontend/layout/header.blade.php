<div class="site-wrap">
  <div class="site-mobile-menu">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    <!-- MENU NAVBAR -->
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="py-1">
            <div class="row align-items-center">
              <div class="col-2">
                <h2 class="mb-0 site-logo"><a href="{{route('index')}}">My Hotel</a></h2>
              </div>
              <div class="col-10">
                <nav class="site-navigation text-right" role="navigation">
                  <div class="container">
                    
                    <div class="d-inline-block d-lg-none  ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>
                    <ul class="site-menu js-clone-nav d-none d-lg-block">
                      <li class="active">
                        <a href="{{route('index')}}">Trang chủ</a>
                      </li>
                      <li class="has-children">
                        <a href="#">PHÒNG</a>
                        <ul class="dropdown arrow-top">
                          @foreach($phong as $p)
                          
                          <li><a href="{{route('chitietphong',['id' => $p->p_id])}}">{{$p->p_ten}}</a></li>
                          
                          @endforeach
                        </ul>
                      </li>
                      <li><a href="{{route('dichvu')}}">DỊCH VỤ</a></li>
                      <li><a href="{{route('dangnhap')}}">Đăng nhập</a></li>
                      <li><a href="#">Đăng kí</a></li>
                    </ul>
                  </div>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- SLIDE -->
    <div class="slide-one-item home-slider owl-carousel">
      
      <div class="site-blocks-cover overlay" style="background-image: url(IMG/slide/hero_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              
              <h1 class="mb-2">Xin Chào Quý Khách</h1>
            </div>
          </div>
        </div>
      </div>
      <div class="site-blocks-cover overlay" style="background-image: url(IMG/slide/hero_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="mb-2">Unique Experience</h1>
              <h2 class="caption">Enjoy With Us</h2>
            </div>
          </div>
        </div>
      </div>
      <div class="site-blocks-cover overlay" style="background-image: url(IMG/slide/hero_3.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="mb-2">Relaxing Room</h1>
              <h2 class="caption">Your Room, Your Stay</h2>
            </div>
          </div>
        </div>
      </div>
    </div>
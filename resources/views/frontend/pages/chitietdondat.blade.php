@extends('frontend.layout.master')
@section('content')
<!-- FORM ĐẶT PHÒNG -->
          <div class="col-lg-4">
            <form action="#" class="p-5 bg-white">
              <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Chi tiết đặt phòng</h3>
              </div>
              @foreach($chitiet as $u)
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Phòng</label>
                  <input type="text" id="fullname" value="{{$u->p_id}}" class="form-control" placeholder="Full Name">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Check in</label>
                  <input type="text" id="fullname" value="{{$u->checkin}}" class="form-control" placeholder="Full Name">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Check out</label>
                  <input type="text" id="fullname" value="{{$u->checkout}}" class="form-control" placeholder="Full Name">
                </div>
              </div>

          @endforeach
            </form>
          </div>
<!-- FORM ĐẶT PHÒNG -->
@endsection
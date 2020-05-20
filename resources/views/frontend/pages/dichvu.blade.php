@extends('frontend.layout.master')
@section('content')
 <div class="site-section">
 	@foreach($dichvu as $dv)
      <div class="container">
      	
        <div class="row align-items-center">
          <div class="col-md-6 mb-5 mb-md-0">
            
	          <div class="img-border">
	                
	                  
	            <img src="IMG/dichvu/{{$dv->dv_img}}" alt="" class="img-fluid">
	          </div>
          </div>
          <div class="col-md-5 ml-auto">
            

            <div class="section-heading text-left">
              <h2 class="mb-5">{{$dv->dv_ten}}</h2>
            </div>
            <p class="mb-4">{!! $dv->dv_thongtin !!}</p>
            
          </div>
        </div>
       
      </div>
       @endforeach
        <br>
    </div>
  @endsection
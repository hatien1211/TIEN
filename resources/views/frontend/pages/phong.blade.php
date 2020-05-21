@extends('frontend.layout.master')
@section('content')
<!-- CONTENT   -->
<div class="site-section site-section-sm">
	<div class="container">
		
		<div class="row">
			<!-- THÔNG TIN PHÒNG        -->
			<div class="col-md-8 col-lg-8 mb-5">
				@extends('admin.layout.partials.error-message')

        		@extends('admin.layout.partials.complete-message')
				<div class="section-heading text-left">
              <h2 class="mb-5">{{$p1->p_ten}}</h2>
            </div>
					<div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<img src="IMG/phong/{{$p1->p_img}}" style="width: 80%">
						</div>
					</div>
					
					<div class="row form-group">
						<div class="col-md-12">
							<label class="font-weight-bold" for="message">Thông tin</label>
							<div>{!! $p1->p_thongtin !!}</div>
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							
						</div>
					</div>
					
				
			</div>
			<!-- THÔNG TIN PHÒNG        -->
			<!-- FORM ĐẶT PHÒNG -->
			<div class="col-lg-4">
				<form action="{{route('datphong',['id'=>$p1->p_id])}}" class="p-5 bg-white">
					<div class="p-4 mb-3 bg-white">
						<h3 class="h5 text-black mb-3">Đặt phòng</h3>
					</div>
					<div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<label class="font-weight-bold" for="fullname">Check in</label>
							<input type="date" id="fullname" name="checkin" class="form-control" placeholder="Ngày nhận phòng">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<label class="font-weight-bold" for="email">Check out</label>
							<input type="date" id="fullname" name="checkout" class="form-control" placeholder="Ngày trả phòng">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12">
							<label class="font-weight-bold" for="email">Người lớn</label>
							<input type="number" id="fullname" min='1' max='4' name="p_slmax" class="form-control">
						</div>
					</div>
					<div class="row form-group">
						<div class="col-md-12 mb-3 mb-md-0">
							<label class="font-weight-bold" for="phone">Trẻ em</label>
							<input type="number" id="phone" min="0" max="2" class="form-control">
						</div>
					</div>
					<!-- <div class="row form-group">
						<div class="col-md-12">
							<br><br>
						</div>
					</div> -->
					<div class="row form-group">
						<div class="col-md-12">
							<input type="submit" value="Book now" class="btn btn-primary pill px-4 py-2">
						</div>
					</div>
					
				</form>
			</div>
			<!-- FORM ĐẶT PHÒNG -->
		</div>

		<!-- IMG OF HOTEL -->
		<div class="site-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 mx-auto text-center mb-5 section-heading">
						<h2 class="mb-5">Ảnh Phòng</h2>
					</div>
				</div>
				<div class="row no-gutters">
				@foreach($anh as $p)
					<div class="col-md-6 col-lg-3">
						<a href="IMG/phong/{{$p->imglq_img}}" class="image-popup img-opacity"><img src="IMG/phong/{{$p->imglq_img}}" alt="Image" class="img-fluid"></a>
					</div>
				@endforeach
				</div>
			</div>
		</div>
	</div>
</div>
<!-- CONTENT   -->


@endsection
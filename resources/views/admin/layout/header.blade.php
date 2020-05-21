
<!-- header -->
	<div class="container-fluid" style="width: 100%; background-color: #F5F5DC; position: relative; ">
		<nav class="navbar navbar-expand-sm ">
		  <!-- Brand/logo -->
		  <a class="navbar-brand" href="#"><img src="{{asset('IMG/logo/logo.png')}}" style="width: 150px; height: 50px"></a>
		  
		  <!-- Links -->
			<div style="position: absolute; right:3px;">
				<div class='nav-item dropdown' style='width: 180px'>
					

					@if(!isset($auth))
						<a class='nav-link dropdown-toggle' id='navbarDropdown'><i class='fas fa-user'></i><b style='color: gray;'> Ten dang nhap </b></a>
					@else
						<a class='nav-link dropdown-toggle' id='navbarDropdown'><i class='fas fa-user'></i><b style='color: gray;'> {{$auth->username}}  </b></a>
					@endif
					<div class='dropdown-content' style='width: 100%'>
						
						<div class='dropdown-divider'></div>
						<a class='dropdown-item' href="{{route('index')}}">Trở về trang chủ</a>
						<div class='dropdown-divider'></div>
						<a class='dropdown-item' href="{{route('dangxuat')}}">Đăng xuất</a>
						<div class='dropdown-divider'></div>
					</div>
				</div>
					
			</div>
		</nav>	
	</div>

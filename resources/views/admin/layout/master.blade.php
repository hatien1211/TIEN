<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<base href="{{asset('')}}">
	<link rel="stylesheet" type="text/css" href="asset/style.css">
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<script type="text/javascript" src="{{asset('asset/ckeditor/ckeditor.js')}}"></script>
</head>
<body>

@include('admin.layout.header') 		
<div class="row" style="margin: 15px 2px"> 		
<!-- menu -->
@include('admin.layout.menu') 
<!-- menu-->	

<!-- Content -->
		<div class="col-9">
		<div>
		@yield('content')
		</div>
<!-- COntent -->
</div>
	<script type="text/javascript" src="{{asset('asset/jquery-3.4.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/popper.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('asset/js/bootstrap.js')}}"></script>
</body>
</html>

@yield('script')
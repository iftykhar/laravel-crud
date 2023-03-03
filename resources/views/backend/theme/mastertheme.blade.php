<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- head tag links  -->
	@include('includes.backend.head')
	<title>Rukada - Responsive Bootstrap 5 Admin Template</title>
</head>

<body>
	<!--wrapper-->
	<div class="wrapper">
		<!--sidebar wrapper -->
		@include('includes.backend.sidebar')
		<!--end sidebar wrapper -->

		<!--start header -->
		@include('includes.backend.header')
		<!--end header -->
		<!--start page wrapper -->
		<div class="page-wrapper">
			@yield('main-content')		
		</div>
		<!--end page wrapper -->
		
		
		<!-- footer  -->
		@include('includes.backend.footer')
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	@include('includes.backend.switcher')
	<!--end switcher-->
	<!-- all js links  -->
	@include('includes.backend.js')
</body>

</html>
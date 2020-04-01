<!DOCTYPE html>
<html>
<head>
	@include('partials.adminTo.head')
</head>
<body class="fixed-left">
	<div id="wrapper">
		<div class="topbar">
			@include('partials.adminTo.header')
		</div>
		<div class="left side-menu">
			@include('partials.adminTo.sidebar')
		</div>
		<div class="content-page">
			@yield('content')
			@include('partials.adminTo.footer')			
		</div>
	</div>
	@include('partials.adminTo.javascripts')
	@yield('javascript')
</body>
</html>
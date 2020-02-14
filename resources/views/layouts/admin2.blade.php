<!DOCTYPE html>
<html>
<head>
	@include('partials.head')
</head>
<body class="fixed-left">
	<div id="wrapper">
		<div class="topbar">
			@include('partials.header')
		</div>
		<div class="left side-menu">
			@include('partials.sidebar')
		</div>
		<div class="content-page">
			@yield('content')
			@include('partials.footer')			
		</div>
	</div>
	@include('partials.javascripts')
	@yield('javascript')
</body>
</html>
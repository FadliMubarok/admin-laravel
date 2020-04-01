<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
	@include('partials.admin-modern.head')
</head>
<body class="vertical-layout vertical-content-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-content-menu" data-col="2-columns">

	{{-- Begin : Header --}}
	<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-light navbar-hide-on-scroll navbar-border navbar-shadow navbar-brand-center">
		@include('partials.admin-modern.header')
	</nav>
	{{-- Begin : Header --}}

	<div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row mb-1">
            </div>

            {{-- Begin : Main Menu --}}
			<div class="main-menu menu-static menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
                <div class="main-menu-content">
                	@include('partials.admin-modern.sidebar')
                </div>
            </div>
            <!-- END: Main Menu-->

			<!-- BEGIN: CONTENT -->
			<div class="content-body">
			 	@yield('content')
			</div>
			<!-- END: CONTENT -->
        </div>
    </div>

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div

    <!-- BEGIN: FOOTER -->
	<footer class="footer footer-static footer-light navbar-border">
		@include('partials.admin-modern.footer')
	</footer>

	@include('partials.admin-modern.javascript')
    <!-- END: FOOTER -->
</body>
</html>
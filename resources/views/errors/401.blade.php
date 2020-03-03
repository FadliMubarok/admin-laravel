<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App Favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App title -->
        <title>Adminto - Responsive Admin Dashboard Template</title>

        <!-- App CSS -->
        <link href="{{ asset('assets/adminto/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/adminto/css/core.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/adminto/css/components.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/adminto/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/adminto/css/pages.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/adminto/css/menu.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/adminto/css/responsive.css') }}" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>

    </head>
    <body>

        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class="ex-page-content text-center">
                <div class="text-error">401</div>
                <h3 class="text-uppercase font-600">Unauthorized</h3>
                <p class="text-muted">
                    It's looking like you may have taken a wrong turn.
                </p>
                <br>
                <a class="btn btn-success waves-effect waves-light" href="{{ url()->previous() }}"> Return</a>

            </div>
        </div>
        <!-- End wrapper page -->


    	<script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ asset('assets/adminto/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/adminto/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/adminto/js/detect.js') }}"></script>
        <script src="{{ asset('assets/adminto/js/fastclick.js') }}"></script>
        <script src="{{ asset('assets/adminto/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/adminto/js/jquery.blockUI.js') }}"></script>
        <script src="{{ asset('assets/adminto/js/waves.js') }}"></script>
        <script src="{{ asset('assets/adminto/js/wow.min.js') }}"></script>
        <script src="{{ asset('assets/adminto/js/jquery.nicescroll.js') }}"></script>
        <script src="{{ asset('assets/adminto/js/jquery.scrollTo.min.js') }}"></script>


        <script src="{{ asset('assets/adminto/js/jquery.core.js') }}"></script>
        <script src="{{ asset('assets/adminto/js/jquery.app.js') }}"></script>
	
	</body>
</html>
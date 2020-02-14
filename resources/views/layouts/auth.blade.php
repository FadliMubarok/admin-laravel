<!DOCTYPE html>
<html>
    <head>
        @include('partials.head')
    </head>
    <body>
        <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper">
            @yield('content')
        </div>
        
    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="{{ asset('assets/adminto/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/adminto/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/adminto/js/detect.js') }}"></script>
    <script src="{{ asset('assets/adminto/js/fastclick.js') }}"></script>
    <script src="{{ asset('assets/adminto/js/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('assets/adminto/js/waves.js') }}"></script>
    <script src="{{ asset('assets/adminto/js/jquery.nicescroll.js') }}"></script>
    <script src="{{ asset('assets/adminto/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/adminto/js/jquery.scrollTo.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/adminto/js/jquery.core.js') }}"></script>
    <script src="{{ asset('assets/adminto/js/jquery.app.js') }}"></script>
    </body>
</html>
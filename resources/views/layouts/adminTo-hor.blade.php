<!DOCTYPE html>
<html>
<head>
    @include('partials.adminTo-hor.head')
</head>
<body>
    <header id="topnav">
        <div class="topbar-main">
            @include('partials.adminTo-hor.top-main')
        </div>

        <div class="navbar-custom">            
            @include('partials.adminTo-hor.top-menu')
        </div>        
    </header>

    <div class="wrapper">
        <div class="container">
            @yield('content')
            @include('partials.adminTo-hor.footer-top')                                           
        </div>                    
    </div>
    @include('partials.adminTo-hor.javascripts')
    @include('partials.notification')
    @yield('javascript')
</body>
</html>
<div class="container">

    <!-- LOGO -->
    <div class="topbar-left">
        <a href="#" class="logo"><span>My<span>Laravel Admin</span></span></a>
    </div>
    <!-- End Logo container-->


    <div class="menu-extras">

        @php($count = auth()->user()->unreadNotifications()->count()) 
        <ul class="nav navbar-nav navbar-right pull-right">
            <li>
                <form role="search" class="navbar-left app-search pull-left hidden-xs">
                     <input type="text" placeholder="Search..." class="form-control">
                     <a href=""><i class="fa fa-search"></i></a>
                </form>
            </li>            
            <li class="m-r-10">                
                <div class="notification-box">
                    <ul class="list-inline m-b-0">
                        <li>
                            <a href="#" id="tour-guide" data-hover="tooltip" data-placement="bottom" title="Tour Guide">
                                <i class="fa fa-pause-circle"></i>
                            </a> 
                        </li>
                    </ul>
                </div>
            </li>
            <li>
                <!-- Notification -->
                <div class="notification-box">
                    <ul class="list-inline m-b-0">
                        <li>
                            <a href="javascript:void(0);" class="right-bar-toggle" data-hover="tooltip" data-placement="bottom" title="Notification">
                                <i class="zmdi zmdi-notifications-none"></i>
                            </a>
                            @if($count > 0)                            
                            <div class="noti-dot">
                                <span class="dot"></span>
                                <span class="pulse"></span>
                            </div>
                            @endif
                        </li>
                    </ul>
                </div>
                <!-- End Notification bar -->
            </li>

            <li class="dropdown user-box">
                <a href="" class="dropdown-toggle waves-effect waves-light profile " data-toggle="dropdown" aria-expanded="true">
                    <img src="{{ asset('profile/image.jpeg') }}" class="img-circle user-img">
                    <div class="user-status away"><i class="zmdi zmdi-dot-circle"></i></div>
                </a>

                <ul class="dropdown-menu">                    
                    <li><a href="{{ route('auth.change_password') }}"><i class="ti-lock m-r-5"></i> Change Password</a></li>
                    <li>
                        <a href="#" data-hover="tooltip" title="Logout" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <i class="fa fa-sign-out m-r-5"></i> Logout
                    </a>
                    </li>                    
                </ul>
            </li>
        </ul>

        <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>

        <div class="menu-item">
            <!-- Mobile menu toggle-->
            <a class="navbar-toggle">
                <div class="lines">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </a>
            <!-- End mobile menu toggle-->
        </div>         
    </div>    
</div>

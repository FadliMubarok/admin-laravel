<!-- User -->
<div class="user-box">
    <div class="user-img">
        <img src="{{ asset('profile/image.jpeg') }}" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
        <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
    </div>
    <h5><a href="#">{{ auth()->user()->name }}</a> </h5>
    <ul class="list-inline">
        <li>
            <a href="#" data-hover="tooltip" title="User Setting">
                <i class="zmdi zmdi-settings"></i>
            </a>
        </li>

        <li>
            <a href="#" class="text-custom" data-hover="tooltip" title="Logout" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="fa fa-sign-out"></i>
            </a>
        </li>
    </ul>
</div>
<!-- End User -->


<form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>



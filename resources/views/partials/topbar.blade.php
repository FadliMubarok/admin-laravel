<!-- User -->
<div class="user-box">
    <div class="user-img">
        <img src="assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="img-circle img-thumbnail img-responsive">
        <div class="user-status offline"><i class="zmdi zmdi-dot-circle"></i></div>
    </div>
    <h5><a href="#">Mat Helme</a> </h5>
    <ul class="list-inline">
        <li>
            <a href="#" >
                <i class="zmdi zmdi-settings"></i>
            </a>
        </li>

        <li>
            <a href="#" class="text-custom" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="zmdi zmdi-power"></i>
            </a>
        </li>
    </ul>
</div>
<!-- End User -->


<form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>



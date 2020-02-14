{{-- @inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">@lang('global.app_dashboard')</span>
                </a>
            </li>
            
            @can('users_manage')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span class="title">@lang('global.user-management.title')</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                    <li class="{{ $request->segment(2) == 'abilities' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.abilities.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.abilities.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                @lang('global.roles.title')
                            </span>
                        </a>
                    </li>
                    <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                @lang('global.users.title')
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            @endcan

            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="{{ route('auth.change_password') }}">
                    <i class="fa fa-key"></i>
                    <span class="title">Change password</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">@lang('global.app_logout')</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
{!! Form::open(['route' => 'logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('global.logout')</button>
{!! Form::close() !!} --}}

<div class="sidebar-inner slimscrollleft">

@include('partials.topbar')

<!--- Sidemenu -->
<div id="sidebar-menu">
    <ul>
        <li class="text-muted menu-title">Navigation</li>

        @foreach(App\Models\Menu::sidebar() as $data)     
            @if($data->parent_id == null && $data->children->count() == 0)       
                <li>
                    <a href="{{ $data->children->isEmpty() || $data->url != '#' ? route($data->url) : '#' }}" class="waves-effect {{ request()->is('admin/strtolower($data->label)') || request()->is('admin/strtolower($data->label)/*') ? 'active' : '' }}">
                        <i class="fa fa-{{ $data->ikon }}"></i> 
                        <span> {{ $data->label }} </span> 
                    </a>
                </li>  
            @endif
            @if($data->children->count() > 0)          
                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="fa fa-{{ $data->ikon }}"></i> 
                        <span>{{ $data->label }}</span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="list-unstyled"> 
                        @foreach($data->children as $dataSubMenu)
                            <li>
                                <a href="{{ $dataSubMenu->children->isEmpty() || $dataSubMenu->url != '#' ? route($dataSubMenu->url) : '#' }}" class="waves-effect {{ request()->is('admin/strtolower($dataSubMenu->label)') || request()->is('admin/strtolower($dataSubMenu->label)/*') ? 'active' : '' }}">
                                    <i class="fa fa-{{ $dataSubMenu->ikon }}"></i> 
                                    <span> 
                                        {{ $dataSubMenu->label }}                             
                                    </span>                                 
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li> 
            @endif
        @endforeach        
    </ul>
    <div class="clearfix"></div>
</div>
<!-- Sidebar -->
<div class="clearfix"></div>

</div>
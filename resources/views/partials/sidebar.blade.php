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
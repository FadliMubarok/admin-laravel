 <div class="container">
    <div id="navigation">
        <!-- Navigation Menu-->
        <ul class="navigation-menu">
            @foreach(App\Models\Menu::sidebar() as $data)     
	            @if($data->parent_id == null && $data->children->count() == 0)       
	                <li class="m-l-0">
	                    <a href="{{ $data->children->isEmpty() || $data->url != '#' ? route($data->url) : '#' }}" class="waves-effect {{ request()->is('admin/strtolower($data->label)') || request()->is('admin/strtolower($data->label)/*') ? 'active' : '' }}">
	                        <i class="fa fa-{{ $data->ikon }}"></i> 
	                        <span> {{ $data->label }} </span> 
	                    </a>
	                </li>  
	            @endif
	            @if($data->children->count() > 0)          
	                <li class="has-submenu">
	                    <a href="javascript:void(0);" class="waves-effect">
	                        <i class="fa fa-{{ $data->ikon }}"></i> 
	                        <span>{{ $data->label }}</span> 
	                        <span class="menu-arrow"></span>
	                    </a>
	                    <ul class="submenu"> 
	                        @foreach($data->children as $dataSubMenu)
	                            <li>
	                                <a href="{{ $dataSubMenu->children->isEmpty() || $dataSubMenu->url != '#' ? route($dataSubMenu->url) : '#' }}" >
	                                    {{ $dataSubMenu->label }}
	                                </a>
	                            </li>
	                        @endforeach
	                    </ul>
	                </li> 
	            @endif
	        @endforeach
        </ul>
        <!-- End navigation menu  -->
    </div>
</div>
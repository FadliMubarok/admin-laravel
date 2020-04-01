<ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
    <li class=" navigation-header"><span data-i18n="nav.category.admin-panels">Navigation</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Admin Panels"></i>
    </li>
    @foreach(App\Models\Menu::sidebar() as $data)     
        @if($data->parent_id == null && $data->children->count() == 0)                   
            <li class="nav-item">
                <a href="{{ $data->children->isEmpty() || $data->url != '#' ? route($data->url) : '#' }}">
                    <i class="la la-{{ $data->ikon }}"></i>
                    <span class="menu-title" data-i18n="">
                        {{ $data->label }}
                    </span>
                </a>
            </li>
        @endif
        @if($data->children->count() > 0)                      
            <li class="nav-item">
                <a href="javascript:void(0);">
                    <i class="la la-{{ $data->ikon }}"></i>
                    <span class="menu-title" data-i18n="nav.dash.main">{{ $data->label }}</span>                    
                </a>
                <ul class="menu-content">
                    @foreach($data->children as $dataSubMenu)
                        <li class="{{ request()->is('admin/strtolower($dataSubMenu->label)') || request()->is('admin/strtolower($dataSubMenu->label)/*') ? 'active' : '' }}">
                            <a href="{{ $dataSubMenu->children->isEmpty() || $dataSubMenu->url != '#' ? route($dataSubMenu->url) : '#' }}">
                                <i class="la la-{{ $dataSubMenu->ikon }}"></i>
                                <span class="menu-title" data-i18n="">
                                    {{ $dataSubMenu->label }}
                                </span>
                            </a>
                        </li>
                    @endforeach           
                </ul>
            </li> 
        @endif
    @endforeach    
        
    <li class=" navigation-header"><span data-i18n="nav.category.support">Support</span><i class="la la-ellipsis-h" data-toggle="tooltip" data-placement="right" data-original-title="Support"></i>
    </li>
    <li class=" nav-item"><a href="http://support.pixinvent.com/"><i class="la la-support"></i><span class="menu-title" data-i18n="nav.support_raise_support.main">Raise Support</span></a>
    </li>
    <li class=" nav-item"><a href="https://pixinvent.com/modern-admin-clean-bootstrap-4-dashboard-html-template/documentation"><i class="la la-text-height"></i><span class="menu-title" data-i18n="nav.support_documentation.main">Documentation</span></a>
    </li>
</ul>
<div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true">
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

            <li class="nav-item"><a href="{{route('admin.dashboard')}}"><i class="la la-mouse-pointer"></i><span
                        class="menu-title" data-i18n="nav.add_on_drag_drop.main">Search</span></a>
            </li>
@if (Auth::user()->id == 1)
            <li class="nav-item"><a href="{{route('admin.create')}}"><i class="la la-mouse-pointer"></i><span
                class="menu-title" data-i18n="nav.add_on_drag_drop.main">Create </span></a>
            </li>
@endif
            {{-- @if(\App\Models\Role::havePremission(['customer_view','customer_cr','customer_idt']))
                <li class="nav-item">
                    <a href=""><i class="la la-undo"></i>
                        <span class="menu-title" data-i18n="nav.dash.main"> {{ __('Customer') }} </span>
                    </a>
                    <ul class="menu-content">
                        @if(\App\Models\Role::havePremission(['customer_view','customer_idt']))
                        <li
                        @if(View::hasSection('customer_view')) class="active" @endif
                        ><a class="menu-item" href="{{route('admin.customer')}}"
                            data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                        </li>
                        @endif
                        @if(\App\Models\Role::havePremission(['customer_cr']))
                            <li
                            @if(View::hasSection('customer_cr')) class="active" @endif
                            ><a class="menu-item" href="{{route('admin.customer.create')}}" data-i18n="nav.dash.crypto">
                                    أضافه جديد </a>
                            </li>
                        @endif
                    </ul>
                </li>
            @endif  --}}
           
            {{-- @if(\App\Models\Role::havePremission(['admin_view','admin_cr','admin_idt']))
            <li class="nav-item">
                <a href=""><i class="la la-user-secret"></i>
                    <span class="menu-title" data-i18n="nav.dash.main"> {{ __('Admin') }} </span>
                </a>
                <ul class="menu-content">
                    
                    @if(\App\Models\Role::havePremission(['admin_view','admin_idt']))
                    <li @if(View::hasSection('admin_view')) class="active" @endif
                    ><a class="menu-item" href="{{route('admin.admin')}}"
                           data-i18n="nav.dash.ecommerce"> عرض الكل </a>
                    </li>
                    @endif
                    @if(\App\Models\Role::havePremission(['admin_cr']))
                    <li @if(View::hasSection('admin_cr')) class="active" @endif
                    ><a class="menu-item" href="{{route('admin.admin.create')}}" data-i18n="nav.dash.crypto">
                            أضافه جديد </a>
                    </li>
                    @endif
                   
                    
                    
                </ul>
            </li>
            @endif --}}
            {{-- @if(\App\Models\Role::havePremission(['setting_view']))
                <li class="nav-item">
                    <a href=""><i class="ft-settings"></i>
                        <span class="menu-title" data-i18n="nav.dash.main"> {{ __('Setting') }} </span>
                    </a>
                    <ul class="menu-content">
                        <li @if(View::hasSection('setting_view')) class="active" @endif
                        ><a class="menu-item" href="{{route('admin.setting')}}"
                               data-i18n="nav.dash.ecommerce"> {{ __('Setting') }} </a>
                        </li>
                    </ul>
                </li>
            @endif --}}


        </ul>
    </div>
</div>

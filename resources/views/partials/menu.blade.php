<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan

        
        @can('order_access')
        <li class="c-sidebar-nav-title">Orders</li>
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.orders.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/orders") || request()->is("admin/orders/*") ? "c-active" : "" }}">
                    <i class="fa-fw fab fa-first-order c-sidebar-nav-icon">

                    </i>
                    {{ trans('All') }} {{ trans('cruds.order.title') }}
                </a>
            </li>
        @endcan

        @can('new_order_access')
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.new-orders.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/new-orders") || request()->is("admin/new-orders/*") ? "c-active" : "" }}">
                <i class="fa-fw fab fa-first-order c-sidebar-nav-icon">

                </i>
                {{ trans('cruds.newOrder.title') }}
            </a>
        </li>
        @endcan

        @can('active_order_access')
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.active-orders.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/active-orders") || request()->is("admin/active-orders/*") ? "c-active" : "" }}">
                <i class="fa-fw fab fa-first-order-alt c-sidebar-nav-icon">

                </i>
                {{ trans('cruds.activeOrder.title') }}
            </a>
        </li>
        @endcan
        
        @can('services_dropdown_access')
            <li class="c-sidebar-nav-title">Services</li>
        @endcan
        
        @can('services_dropdown_access')
            <li class="c-sidebar-nav-item c-sidebar-nav-dropdown">
                <a href="#" class="c-sidebar-nav-link c-sidebar-nav-dropdown-toggle {{ request()->is("admin/services-dropdowns") || request()->is("admin/services-dropdowns/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-server c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.servicesDropdown.title') }}
                </a>
                 <ul class="c-sidebar-nav-dropdown-items">
                    @foreach(App\Models\Service::SERVICE_SELECT as $key => $label)
                        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="/{{$key}}"><span class="c-sidebar-nav-icon"></span>{{ $label}}</a></li>
                    @endforeach
                </ul>
            </li>
        @endcan
        
        @can('add_new_order_access')
            <li class="c-sidebar-nav-title">Orders</li>
        @endcan

        @can('add_new_order_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.add-new-orders.create") }}" class="c-sidebar-nav-link {{ request()->is("admin/add-new-orders") || request()->is("admin/add-new-orders/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-file-alt c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.addNewOrder.title') }}
                </a>
            </li>
        @endcan

        @can('my_order_access')
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.my-orders.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/my-orders") || request()->is("admin/my-orders/*") ? "c-active" : "" }}">
                <i class="fa-fw fas fa-list c-sidebar-nav-icon">

                </i>
                {{ trans('cruds.myOrder.title') }}
            </a>
        </li>
        @endcan

        @can('client_active_order_access')

            <li class="c-sidebar-nav-title">Active Orders</li>

            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.client-active-orders.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/client-active-orders") || request()->is("admin/client-active-orders/*") ? "c-active" : "" }}">
                    <i class="fa-fw fab fa-angular c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.clientActiveOrder.title') }}
                </a>
            </li>
        @endcan

        
        @can('add_new_service_access')
            
            <li class="c-sidebar-nav-title">Services</li>
            
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.add-new-services.create") }}" class="c-sidebar-nav-link {{ request()->is("admin/add-new-services") || request()->is("admin/add-new-services/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-file c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.addNewService.title') }}
                </a>
            </li>
        @endcan

        @can('my_service_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.my-services.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/my-services") || request()->is("admin/my-services/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-server c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.myService.title') }}
                </a>
            </li>
        @endcan
        

        <li class="c-sidebar-nav-title">Users</li>

        @can('service_provider_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.service-providers.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/service-providers") || request()->is("admin/service-providers/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-user-cog c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.serviceProvider.title') }}
                </a>
            </li>
        @endcan
        @can('client_access')
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.clients.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/clients") || request()->is("admin/clients/*") ? "c-active" : "" }}">
                <i class="fa-fw fas fa-user-friends c-sidebar-nav-icon">

                </i>
                {{ trans('cruds.client.title') }}
            </a>
        </li>
        @endcan

        <li class="c-sidebar-nav-title">Messages</li>

        @php($unread = \App\Models\QaTopic::unreadCount())
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.messenger.index") }}" class="{{ request()->is("admin/messenger") || request()->is("admin/messenger/*") ? "c-active" : "" }} c-sidebar-nav-link">
                    <i class="c-sidebar-nav-icon fa-fw fa fa-envelope">

                    </i>
                    <span>{{ trans('global.messages') }}</span>
                    @if($unread > 0)
                        <strong>( {{ $unread }} )</strong>
                    @endif
                </a>
            </li>
       


        <li class="c-sidebar-nav-title">Settings</li>

        @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
                <li class="c-sidebar-nav-item">
                    <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                        <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                        </i>
                        {{ trans('global.change_password') }}
                    </a>
                </li>
            @endcan
        @endif
        <li class="c-sidebar-nav-item">
            <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                </i>
                {{ trans('global.logout') }}
            </a>
        </li>
    </ul>
</div>
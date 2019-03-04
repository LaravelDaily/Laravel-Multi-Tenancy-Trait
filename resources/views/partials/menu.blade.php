<aside class="main-sidebar">
    <section class="sidebar" style="height: auto;">
        <ul class="sidebar-menu tree" data-widget="tree">
            @can('user_management_access')
                <li class="treeview">
                    <a>
                        <i class="fas fa-users">

                        </i>
                        <span>{{ trans('global.userManagement.title') }}</span>
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        @can('permission_access')
                            <li class="{{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.permissions.index") }}">
                                    <i class="fas fa-unlock-alt">

                                    </i>
                                    <span>{{ trans('global.permission.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('role_access')
                            <li class="{{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.roles.index") }}">
                                    <i class="fas fa-briefcase">

                                    </i>
                                    <span>{{ trans('global.role.title') }}</span>
                                </a>
                            </li>
                        @endcan
                        @can('user_access')
                            <li class="{{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                                <a href="{{ route("admin.users.index") }}">
                                    <i class="fas fa-user">

                                    </i>
                                    <span>{{ trans('global.user.title') }}</span>
                                </a>
                            </li>
                        @endcan
                    </ul>
                </li>
            @endcan
            @can('country_access')
                <li class="{{ request()->is('admin/countries') || request()->is('admin/countries/*') ? 'active' : '' }}">
                    <a href="{{ route("admin.countries.index") }}">
                        <i class="fas fa-flag">

                        </i>
                        <span>{{ trans('global.country.title') }}</span>
                    </a>
                </li>
            @endcan
            @can('hotel_access')
                <li class="{{ request()->is('admin/hotels') || request()->is('admin/hotels/*') ? 'active' : '' }}">
                    <a href="{{ route("admin.hotels.index") }}">
                        <i class="fas fa-cogs">

                        </i>
                        <span>{{ trans('global.hotel.title') }}</span>
                    </a>
                </li>
            @endcan
            @can('booking_access')
                <li class="{{ request()->is('admin/bookings') || request()->is('admin/bookings/*') ? 'active' : '' }}">
                    <a href="{{ route("admin.bookings.index") }}">
                        <i class="fas fa-cogs">

                        </i>
                        <span>{{ trans('global.booking.title') }}</span>
                    </a>
                </li>
            @endcan
            <li>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="fas fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
        </ul>
    </section>
</aside>
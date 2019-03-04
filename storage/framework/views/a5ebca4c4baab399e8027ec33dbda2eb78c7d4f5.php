<aside class="main-sidebar">
    <section class="sidebar" style="height: auto;">
        <ul class="sidebar-menu tree" data-widget="tree">
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_management_access')): ?>
                <li class="treeview">
                    <a>
                        <i class="fas fa-users">

                        </i>
                        <span><?php echo e(trans('global.userManagement.title')); ?></span>
                        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
                    </a>
                    <ul class="treeview-menu">
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission_access')): ?>
                            <li class="<?php echo e(request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : ''); ?>">
                                <a href="<?php echo e(route("admin.permissions.index")); ?>">
                                    <i class="fas fa-unlock-alt">

                                    </i>
                                    <span><?php echo e(trans('global.permission.title')); ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_access')): ?>
                            <li class="<?php echo e(request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : ''); ?>">
                                <a href="<?php echo e(route("admin.roles.index")); ?>">
                                    <i class="fas fa-briefcase">

                                    </i>
                                    <span><?php echo e(trans('global.role.title')); ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_access')): ?>
                            <li class="<?php echo e(request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : ''); ?>">
                                <a href="<?php echo e(route("admin.users.index")); ?>">
                                    <i class="fas fa-user">

                                    </i>
                                    <span><?php echo e(trans('global.user.title')); ?></span>
                                </a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('country_access')): ?>
                <li class="<?php echo e(request()->is('admin/countries') || request()->is('admin/countries/*') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route("admin.countries.index")); ?>">
                        <i class="fas fa-flag">

                        </i>
                        <span><?php echo e(trans('global.country.title')); ?></span>
                    </a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('hotel_access')): ?>
                <li class="<?php echo e(request()->is('admin/hotels') || request()->is('admin/hotels/*') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route("admin.hotels.index")); ?>">
                        <i class="fas fa-cogs">

                        </i>
                        <span><?php echo e(trans('global.hotel.title')); ?></span>
                    </a>
                </li>
            <?php endif; ?>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('booking_access')): ?>
                <li class="<?php echo e(request()->is('admin/bookings') || request()->is('admin/bookings/*') ? 'active' : ''); ?>">
                    <a href="<?php echo e(route("admin.bookings.index")); ?>">
                        <i class="fas fa-cogs">

                        </i>
                        <span><?php echo e(trans('global.booking.title')); ?></span>
                    </a>
                </li>
            <?php endif; ?>
            <li>
                <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="fas fa-sign-out-alt">

                    </i>
                    <?php echo e(trans('global.logout')); ?>

                </a>
            </li>
        </ul>
    </section>
</aside>
<?php $__env->startSection('content'); ?>
<div class="content">
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_create')): ?>
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="<?php echo e(route("admin.users.create")); ?>">
                    <?php echo e(trans('global.add')); ?> <?php echo e(trans('global.user.title_singular')); ?>

                </a>
            </div>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo e(trans('global.user.title_singular')); ?> <?php echo e(trans('global.list')); ?>

                </div>
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped datatable">
                            <thead>
                                <tr>
                                    <th>
                                        <?php echo e(trans('global.user.fields.name')); ?>

                                    </th>
                                    <th>
                                        <?php echo e(trans('global.user.fields.email')); ?>

                                    </th>
                                    <th>
                                        <?php echo e(trans('global.user.fields.email_verified_at')); ?>

                                    </th>
                                    <th>
                                        <?php echo e(trans('global.user.fields.roles')); ?>

                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <?php echo e($user->name ?? ''); ?>

                                        </td>
                                        <td>
                                            <?php echo e($user->email ?? ''); ?>

                                        </td>
                                        <td>
                                            <?php echo e($user->email_verified_at ?? ''); ?>

                                        </td>
                                        <td>
                                            <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <span class="label label-info label-many"><?php echo e($item->title); ?></span>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_show')): ?>
                                                <a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.users.show', $user->id)); ?>">
                                                    <?php echo e(trans('global.view')); ?>

                                                </a>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_edit')): ?>
                                                <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.users.edit', $user->id)); ?>">
                                                    <?php echo e(trans('global.edit')); ?>

                                                </a>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('user_delete')): ?>
                                                <form action="<?php echo e(route('admin.users.destroy', $user->id)); ?>" method="POST" onsubmit="return confirm('<?php echo e(trans('global.areYouSure')); ?>');" style="display: inline-block;">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                                    <input type="submit" class="btn btn-xs btn-danger" value="<?php echo e(trans('global.delete')); ?>">
                                                </form>
                                            <?php endif; ?>
                                        </td>

                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
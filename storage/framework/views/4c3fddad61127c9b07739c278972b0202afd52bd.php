<?php $__env->startSection('content'); ?>
<div class="content">
    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_create')): ?>
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="<?php echo e(route("admin.roles.create")); ?>">
                    <?php echo e(trans('global.add')); ?> <?php echo e(trans('global.role.title_singular')); ?>

                </a>
            </div>
        </div>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo e(trans('global.role.title_singular')); ?> <?php echo e(trans('global.list')); ?>

                </div>
                <div class="panel-body">

                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped datatable">
                            <thead>
                                <tr>
                                    <th>
                                        <?php echo e(trans('global.role.fields.title')); ?>

                                    </th>
                                    <th>
                                        <?php echo e(trans('global.role.fields.permissions')); ?>

                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td>
                                            <?php echo e($role->title ?? ''); ?>

                                        </td>
                                        <td>
                                            <?php $__currentLoopData = $role->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <span class="label label-info label-many"><?php echo e($item->title); ?></span>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </td>
                                        <td>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_show')): ?>
                                                <a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.roles.show', $role->id)); ?>">
                                                    <?php echo e(trans('global.view')); ?>

                                                </a>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_edit')): ?>
                                                <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.roles.edit', $role->id)); ?>">
                                                    <?php echo e(trans('global.edit')); ?>

                                                </a>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role_delete')): ?>
                                                <form action="<?php echo e(route('admin.roles.destroy', $role->id)); ?>" method="POST" onsubmit="return confirm('<?php echo e(trans('global.areYouSure')); ?>');" style="display: inline-block;">
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
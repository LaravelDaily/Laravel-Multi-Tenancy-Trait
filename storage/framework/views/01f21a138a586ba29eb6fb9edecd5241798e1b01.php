<?php $__env->startSection('content'); ?>
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo e(trans('global.edit')); ?> <?php echo e(trans('global.role.title_singular')); ?>

                </div>
                <div class="panel-body">

                    <form action="<?php echo e(route("admin.roles.update", [$role->id])); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="form-group <?php echo e($errors->has('title') ? 'has-error' : ''); ?>">
                            <label for="title"><?php echo e(trans('global.role.fields.title')); ?>*</label>
                            <input type="text" id="title" name="title" class="form-control" value="<?php echo e(old('title', isset($role) ? $role->title : '')); ?>">
                            <?php if($errors->has('title')): ?>
                                <p class="help-block">
                                    <?php echo e($errors->first('title')); ?>

                                </p>
                            <?php endif; ?>
                            <p class="helper-block">
                                <?php echo e(trans('global.role.fields.title_helper')); ?>

                            </p>
                        </div>
                        <div class="form-group <?php echo e($errors->has('permissions') ? 'has-error' : ''); ?>">
                            <label for="permissions"><?php echo e(trans('global.role.fields.permissions')); ?>*
                                <span class="btn btn-info btn-xs select-all">Select all</span>
                                <span class="btn btn-info btn-xs deselect-all">Deselect all</span></label>
                            <select name="permissions[]" id="permissions" class="form-control select2" multiple="multiple">
                                <?php $__currentLoopData = $permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $permissions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id); ?>" <?php echo e((in_array($id, old('permissions', [])) || isset($role) && $role->permissions->contains($id)) ? 'selected' : ''); ?>>
                                        <?php echo e($permissions); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('permissions')): ?>
                                <p class="help-block">
                                    <?php echo e($errors->first('permissions')); ?>

                                </p>
                            <?php endif; ?>
                            <p class="helper-block">
                                <?php echo e(trans('global.role.fields.permissions_helper')); ?>

                            </p>
                        </div>
                        <div>
                            <input class=" btn btn-danger" type="submit">
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->startSection('content'); ?>
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo e(trans('global.create')); ?> <?php echo e(trans('global.user.title_singular')); ?>

                </div>
                <div class="panel-body">

                    <form action="<?php echo e(route("admin.users.store")); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                            <label for="name"><?php echo e(trans('global.user.fields.name')); ?>*</label>
                            <input type="text" id="name" name="name" class="form-control" value="<?php echo e(old('name', isset($user) ? $user->name : '')); ?>">
                            <?php if($errors->has('name')): ?>
                                <p class="help-block">
                                    <?php echo e($errors->first('name')); ?>

                                </p>
                            <?php endif; ?>
                            <p class="helper-block">
                                <?php echo e(trans('global.user.fields.name_helper')); ?>

                            </p>
                        </div>
                        <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                            <label for="email"><?php echo e(trans('global.user.fields.email')); ?>*</label>
                            <input type="email" id="email" name="email" class="form-control" value="<?php echo e(old('email', isset($user) ? $user->email : '')); ?>">
                            <?php if($errors->has('email')): ?>
                                <p class="help-block">
                                    <?php echo e($errors->first('email')); ?>

                                </p>
                            <?php endif; ?>
                            <p class="helper-block">
                                <?php echo e(trans('global.user.fields.email_helper')); ?>

                            </p>
                        </div>
                        <div class="form-group <?php echo e($errors->has('password') ? 'has-error' : ''); ?>">
                            <label for="password"><?php echo e(trans('global.user.fields.password')); ?></label>
                            <input type="password" id="password" name="password" class="form-control">
                            <?php if($errors->has('password')): ?>
                                <p class="help-block">
                                    <?php echo e($errors->first('password')); ?>

                                </p>
                            <?php endif; ?>
                            <p class="helper-block">
                                <?php echo e(trans('global.user.fields.password_helper')); ?>

                            </p>
                        </div>
                        <div class="form-group <?php echo e($errors->has('roles') ? 'has-error' : ''); ?>">
                            <label for="roles"><?php echo e(trans('global.user.fields.roles')); ?>*
                                <span class="btn btn-info btn-xs select-all">Select all</span>
                                <span class="btn btn-info btn-xs deselect-all">Deselect all</span></label>
                            <select name="roles[]" id="roles" class="form-control select2" multiple="multiple">
                                <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $roles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id); ?>" <?php echo e((in_array($id, old('roles', [])) || isset($user) && $user->roles->contains($id)) ? 'selected' : ''); ?>>
                                        <?php echo e($roles); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('roles')): ?>
                                <p class="help-block">
                                    <?php echo e($errors->first('roles')); ?>

                                </p>
                            <?php endif; ?>
                            <p class="helper-block">
                                <?php echo e(trans('global.user.fields.roles_helper')); ?>

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
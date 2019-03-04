<?php $__env->startSection('content'); ?>
<div class="login-box">
    <div class="login-logo">
        <a href="#">
            <?php echo e(trans('global.site_title')); ?>

        </a>
    </div>
    <div class="login-box-body">
        <p class="login-box-msg">
            <?php echo e(trans('global.login')); ?>

        </p>
        <?php if(\Session::has('message')): ?>
            <p class="alert alert-info">
                <?php echo e(\Session::get('message')); ?>

            </p>
        <?php endif; ?>
        <form method="POST" action="<?php echo e(route('login')); ?>">
            <?php echo e(csrf_field()); ?>

            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control" required="required" placeholder="<?php echo e(trans('global.login_email')); ?>">
                <?php if($errors->has('email')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('email')); ?>

                    </p>
                <?php endif; ?>
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" required="required"="autofocus"="" placeholder="<?php echo e(trans('global.login_password')); ?>">
                <?php if($errors->has('password')): ?>
                    <p class="help-block">
                        <?php echo e($errors->first('password')); ?>

                    </p>
                <?php endif; ?>
            </div>
            <div class="row">
                <div class="col-xs-8">
                    <div class="checkbox">
                        <label><input type="checkbox" name="remember"><?php echo e(trans('global.remember_me')); ?></label>
                    </div>
                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">
                        <?php echo e(trans('global.login')); ?>

                    </button>
                </div>
            </div>
        </form>
        <a href="<?php echo e(route('password.request')); ?>">
            <?php echo e(trans('global.forgot_password')); ?>

        </a>


    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
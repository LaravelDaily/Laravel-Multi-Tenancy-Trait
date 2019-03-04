<?php $__env->startSection('content'); ?>
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo e(trans('global.edit')); ?> <?php echo e(trans('global.hotel.title_singular')); ?>

                </div>
                <div class="panel-body">

                    <form action="<?php echo e(route("admin.hotels.update", [$hotel->id])); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="form-group <?php echo e($errors->has('name') ? 'has-error' : ''); ?>">
                            <label for="name"><?php echo e(trans('global.hotel.fields.name')); ?></label>
                            <input type="text" id="name" name="name" class="form-control" value="<?php echo e(old('name', isset($hotel) ? $hotel->name : '')); ?>">
                            <?php if($errors->has('name')): ?>
                                <p class="help-block">
                                    <?php echo e($errors->first('name')); ?>

                                </p>
                            <?php endif; ?>
                            <p class="helper-block">
                                <?php echo e(trans('global.hotel.fields.name_helper')); ?>

                            </p>
                        </div>
                        <div class="form-group <?php echo e($errors->has('address') ? 'has-error' : ''); ?>">
                            <label for="address"><?php echo e(trans('global.hotel.fields.address')); ?></label>
                            <input type="text" id="address" name="address" class="form-control" value="<?php echo e(old('address', isset($hotel) ? $hotel->address : '')); ?>">
                            <?php if($errors->has('address')): ?>
                                <p class="help-block">
                                    <?php echo e($errors->first('address')); ?>

                                </p>
                            <?php endif; ?>
                            <p class="helper-block">
                                <?php echo e(trans('global.hotel.fields.address_helper')); ?>

                            </p>
                        </div>
                        <div class="form-group <?php echo e($errors->has('country_id') ? 'has-error' : ''); ?>">
                            <label for="country"><?php echo e(trans('global.hotel.fields.country')); ?></label>
                            <select name="country_id" id="country" class="form-control select2">
                                <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id); ?>" <?php echo e((isset($hotel) && $hotel->country ? $hotel->country->id : old('country_id')) == $id ? 'selected' : ''); ?>>
                                        <?php echo e($country); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('country_id')): ?>
                                <p class="help-block">
                                    <?php echo e($errors->first('country_id')); ?>

                                </p>
                            <?php endif; ?>
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
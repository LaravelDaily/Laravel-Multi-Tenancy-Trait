<?php $__env->startSection('content'); ?>
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo e(trans('global.create')); ?> <?php echo e(trans('global.booking.title_singular')); ?>

                </div>
                <div class="panel-body">

                    <form action="<?php echo e(route("admin.bookings.store")); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group <?php echo e($errors->has('first_name') ? 'has-error' : ''); ?>">
                            <label for="first_name"><?php echo e(trans('global.booking.fields.first_name')); ?></label>
                            <input type="text" id="first_name" name="first_name" class="form-control" value="<?php echo e(old('first_name', isset($booking) ? $booking->first_name : '')); ?>">
                            <?php if($errors->has('first_name')): ?>
                                <p class="help-block">
                                    <?php echo e($errors->first('first_name')); ?>

                                </p>
                            <?php endif; ?>
                            <p class="helper-block">
                                <?php echo e(trans('global.booking.fields.first_name_helper')); ?>

                            </p>
                        </div>
                        <div class="form-group <?php echo e($errors->has('last_name') ? 'has-error' : ''); ?>">
                            <label for="last_name"><?php echo e(trans('global.booking.fields.last_name')); ?></label>
                            <input type="text" id="last_name" name="last_name" class="form-control" value="<?php echo e(old('last_name', isset($booking) ? $booking->last_name : '')); ?>">
                            <?php if($errors->has('last_name')): ?>
                                <p class="help-block">
                                    <?php echo e($errors->first('last_name')); ?>

                                </p>
                            <?php endif; ?>
                            <p class="helper-block">
                                <?php echo e(trans('global.booking.fields.last_name_helper')); ?>

                            </p>
                        </div>
                        <div class="form-group <?php echo e($errors->has('hotel_id') ? 'has-error' : ''); ?>">
                            <label for="hotel"><?php echo e(trans('global.booking.fields.hotel')); ?></label>
                            <select name="hotel_id" id="hotel" class="form-control select2">
                                <?php $__currentLoopData = $hotels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $hotel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($id); ?>" <?php echo e((isset($booking) && $booking->hotel ? $booking->hotel->id : old('hotel_id')) == $id ? 'selected' : ''); ?>>
                                        <?php echo e($hotel); ?>

                                    </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->has('hotel_id')): ?>
                                <p class="help-block">
                                    <?php echo e($errors->first('hotel_id')); ?>

                                </p>
                            <?php endif; ?>
                        </div>
                        <div class="form-group <?php echo e($errors->has('booking_from') ? 'has-error' : ''); ?>">
                            <label for="booking_from"><?php echo e(trans('global.booking.fields.booking_from')); ?></label>
                            <input type="text" id="booking_from" name="booking_from" class="form-control date" value="<?php echo e(old('booking_from', isset($booking) ? $booking->booking_from : '')); ?>">
                            <?php if($errors->has('booking_from')): ?>
                                <p class="help-block">
                                    <?php echo e($errors->first('booking_from')); ?>

                                </p>
                            <?php endif; ?>
                            <p class="helper-block">
                                <?php echo e(trans('global.booking.fields.booking_from_helper')); ?>

                            </p>
                        </div>
                        <div class="form-group <?php echo e($errors->has('booking_to') ? 'has-error' : ''); ?>">
                            <label for="booking_to"><?php echo e(trans('global.booking.fields.booking_to')); ?></label>
                            <input type="text" id="booking_to" name="booking_to" class="form-control date" value="<?php echo e(old('booking_to', isset($booking) ? $booking->booking_to : '')); ?>">
                            <?php if($errors->has('booking_to')): ?>
                                <p class="help-block">
                                    <?php echo e($errors->first('booking_to')); ?>

                                </p>
                            <?php endif; ?>
                            <p class="helper-block">
                                <?php echo e(trans('global.booking.fields.booking_to_helper')); ?>

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
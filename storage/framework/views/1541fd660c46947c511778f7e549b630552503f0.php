<?php $__env->startSection('content'); ?>
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo e(trans('global.show')); ?> <?php echo e(trans('global.hotel.title')); ?>

                </div>
                <div class="panel-body">

                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th>
                                    <?php echo e(trans('global.hotel.fields.name')); ?>

                                </th>
                                <td>
                                    <?php echo e($hotel->name); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(trans('global.hotel.fields.address')); ?>

                                </th>
                                <td>
                                    <?php echo e($hotel->address); ?>

                                </td>
                            </tr>
                            <tr>
                                <th>
                                    <?php echo e(trans('global.hotel.fields.country')); ?>

                                </th>
                                <td>
                                    <?php echo e($hotel->country->name); ?>

                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>
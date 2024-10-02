
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="card border-0">
            <div class="card-body">
                <div class="table-responsive" id="table-display">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <th>#</th>
                                
                                <th><?php echo e(trans('labels.user_info')); ?></th>
                                <th><?php echo e(trans('labels.date_time')); ?></th>
                                <th><?php echo e(trans('labels.guests')); ?></th>
                                <th><?php echo e(trans('labels.reservation_type')); ?></th>
                                
                                <th><?php echo e(trans('labels.action')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; ?>
                            <?php $__currentLoopData = $tableBooks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $booking): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo $i++; ?></td>
                                
                                <td><?php echo e($booking->name); ?> <br> <?php echo e($booking->email); ?> <br> <?php echo e($booking->mobile); ?></td>
                                <td><?php echo e($booking->date); ?> <br> <?php echo $booking->time; ?> </td>
                                <td><?php echo e($booking->guests); ?></td>
                                <td><?php echo e($booking->reservation_type); ?> </td>
                                <td>
                                    <a href="<?php echo e(route('book.delete',['id' => $booking->id])); ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure delete this ?')"><i class="fa fa-trash"></i></a>
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
<!-- modal-add-table-number -->

<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(url(env('ASSETSPATHURL').'admin-assets/assets/js/custom/bookings.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.theme.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u913747247/domains/elpasto.de/public_html/resources/views/admin/bookings/bookings.blade.php ENDPATH**/ ?>
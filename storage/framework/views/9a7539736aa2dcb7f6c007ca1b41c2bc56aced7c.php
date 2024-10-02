<?php $__env->startSection('content'); ?>
<div class="row page-titles mx-0 mb-3">
    <div class="d-flex justify-content-between align-items-center">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item active"><a href="javascript:void(0)"> <?php echo e(trans('labels.addons_manager')); ?> </a></li>
        </ol>
        <a href="<?php echo e(URL::to('/admin/createsystem-addons')); ?>" class="btn btn-primary"> <?php echo e(trans('labels.install_update_addons')); ?> </a>
    </div>
</div>
<div class="container-fluid">
    <div class="card mb-3 border-0 shadow">
        <div class="card-body py-4">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="card-title mb-1 fw-bold">Buy More Premium Addons</h5>
                    <p class="text-muted fw-medium">Connect your favorite tools.</p>
                </div>
                <a href="https://rb.gy/t1pak" target="_blank" class="btn btn-primary">Buy More Premium Addons</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-body">
                    <h5 class="card-title mb-1 fw-bold">Installed Addons</h5>
                    <div class="row row-cols-1 row-cols-md-3 g-4 py-3 addons-manager">
                        <?php $__empty_1 = true; $__currentLoopData = \App\SystemAddons::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $addon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col col-md-6 col-lg-6 col-xl-3">
                            <div class="card h-100 rounded-3 overflow-hidden">
                                <img src="<?php echo URL('storage/app/public/addons/' . $addon->image); ?>" alt="">
                                <div class="card-body">
                                    <span class="badge bg-primary mb-2 fw-400 fs-8"><?php echo e($addon->version); ?></span>
                                    <h5 class="card-title fw-600 fs-5 line-limit-2"><?php echo e(ucfirst($addon->name)); ?></h5>
                                </div>
                                <div class="card-footer bg-transparent d-flex justify-content-between align-items-center">
                                    <p class="text-muted fs-7 fw-500"><?php echo e(date('d M Y', strtotime($addon->created_at))); ?></p>
                                    <?php if($addon->activated): ?>
                                        <a href="javascript:void(0)" class="btn btn-success fs-7"
                                            <?php if(env('Environment') == 'sendbox'): ?> onclick="myFunction()" <?php else: ?> onclick="StatusUpdate('<?php echo e($addon->id); ?>','0','<?php echo e(URL::to('admin/systemaddons/update')); ?>')" <?php endif; ?>>Activated</a>
                                    <?php else: ?>
                                        <a href="javascript:void(0)" class="btn btn-danger fs-7"
                                            <?php if(env('Environment') == 'sendbox'): ?> onclick="myFunction()" <?php else: ?> onclick="StatusUpdate('<?php echo e($addon->id); ?>','1','<?php echo e(URL::to('admin/systemaddons/update')); ?>')" <?php endif; ?>>Deactivated</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="col col-md-12 text-center text-muted">
                            <h4><?php echo e(trans('labels.no_data')); ?></h4>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script src="<?php echo e(url(env('ASSETSPATHURL').'admin-assets/assets/js/custom/systemaddons.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.theme.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u913747247/domains/elpasto.de/public_html/resources/views/admin/systemaddons/system-addons.blade.php ENDPATH**/ ?>
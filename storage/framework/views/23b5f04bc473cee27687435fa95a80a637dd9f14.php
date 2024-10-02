<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="form-validation">
                        <form action="<?php echo e(URL::to('admin/gallery/update-'.$gallerydata->id)); ?>" method="post" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
<div class="row">
                                    <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-form-label" for=""><?php echo e(trans('labels.image')); ?> (500 x 500) <span class="text-danger">*</span> </label>
                                    <input type="file" class="form-control" name="image" accept="image/*">
                                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span><br> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    <img src="<?php echo e(Helper::image_path($gallerydata->image)); ?>" alt="" class="img-fluid rounded hw-50 mt-1">
                                </div>
                            </div>
                            </div>
                                    </div>
                            <div class="form-group text-end">
                                <a href="<?php echo e(URL::to('admin/gallery')); ?>" class="btn btn-outline-danger"><?php echo e(trans('labels.cancel')); ?></a>
                                <button class="btn btn-primary" <?php if(env('Environment') == 'sendbox'): ?> type="button" onclick="myFunction()" <?php else: ?> type="submit" <?php endif; ?>><?php echo e(trans('labels.save')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.theme.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u913747247/domains/elpasto.de/public_html/resources/views/admin/gallery/edit.blade.php ENDPATH**/ ?>
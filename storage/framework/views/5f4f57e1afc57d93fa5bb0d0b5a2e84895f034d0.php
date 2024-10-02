<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between align-items-center">

    <h5 class="text-uppercase"><?php echo e(trans('labels.languages')); ?></h5>

    <nav aria-label="breadcrumb">

        <ol class="breadcrumb m-0">

            <li class="breadcrumb-item"><a href="<?php echo e(URL::to('admin/language-settings')); ?>"><?php echo e(trans('labels.language')); ?></a></li>

            <li class="breadcrumb-item active <?php echo e(session()->get('direction') == 2 ? 'breadcrumb-rtl' : ''); ?>" aria-current="page"><?php echo e(trans('labels.edit')); ?></li>

        </ol>

    </nav>

</div>
<div class="row">
    <div class="col-12">
        <div class="card border-0 my-3">
            <div class="card-body">
                <form action="<?php echo e(URL::to('/admin/language-settings/update-' . $getlanguage->id)); ?>" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-sm-3 col-md-12">
                            <div class="form-group mb-3">
                                <label for="layout" class="col-form-label"><?php echo e(trans('labels.layout')); ?></label>
                                <select name="layout" class="form-control layout-dropdown" id="layout">
                                    <option value="" selected><?php echo e(trans('labels.select')); ?></option>
                                    <option value="1"<?php echo e($getlanguage->layout == "1" ? 'selected' : ''); ?> ><?php echo e(trans('labels.ltr')); ?></option>
                                    <option value="2"<?php echo e($getlanguage->layout == "2" ? 'selected' : ''); ?> ><?php echo e(trans('labels.rtl')); ?></option>
                                </select>
                                <?php $__errorArgs = ['layout'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <br><span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="layout" class="col-form-label"><?php echo e(trans('labels.image')); ?></label>
                                <input type="file" class="form-control" name="image">
                                <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <br><span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                <img src="<?php echo e(Helper::image_path($getlanguage->image)); ?>" class="img-fluid rounded hw-50 mt-1" alt="">
                            </div>

                            <label class="form-label"
                                    for=""><?php echo e(trans('labels.default')); ?> </label>
                            <input id="default-switch" type="checkbox" class="checkbox-switch" name="default" value="1" <?php echo e($getlanguage->is_default == 1 ? 'checked' : ''); ?>>
                            <label for="default-switch" class="switch me-3">
                                <span class="<?php echo e(session()->get('direction') == 2 ? 'switch__circle-rtl' : 'switch__circle'); ?>"><span class="switch__circle-inner"></span></span>
                                <span class="switch__left <?php echo e(session()->get('direction') == 2 ? 'pe-2' : 'ps-2'); ?>"><?php echo e(trans('labels.off')); ?></span>
                                <span class="switch__right <?php echo e(session()->get('direction') == 2 ? 'ps-2' : 'pe-2'); ?>"><?php echo e(trans('labels.on')); ?></span>
                            </label>
                        </div>
                    </div>

                    <div class="text-end">
                        <a href="<?php echo e(URL::to('admin/language-settings')); ?>" class="btn btn-outline-danger"><?php echo e(trans('labels.cancel')); ?></a>
                        <button
                        <?php if(env('Environment') == 'sendbox'): ?> type="button" onclick="myFunction()" <?php else: ?> type="submit" <?php endif; ?>
                        class="btn btn-primary"><?php echo e(trans('labels.save')); ?></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.theme.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp25-04-24\htdocs\agua30-03-24\resources\views/admin/language/edit.blade.php ENDPATH**/ ?>
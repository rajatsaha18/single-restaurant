<?php $__env->startSection('page_title'); ?>
    | <?php echo e(trans('labels.my_profile')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="breadcrumb-sec">
        <div class="container">
            <div class="breadcrumb-sec-content">
                <h1><?php echo e(trans('labels.my_profile')); ?></h1>
                <nav class="text-dark d-flex justify-content-center breadcrumb-divider" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li
                            class="breadcrumb-item <?php echo e(session()->get('direction') == '2' ? 'breadcrumb-item-rtl ps-0' : ''); ?>">
                            <a class="text-muted" href="<?php echo e(route('home')); ?>"><?php echo e(trans('labels.home')); ?></a>
                        </li>
                        <li class="breadcrumb-item <?php echo e(session()->get('direction') == '2' ? 'breadcrumb-item-rtl ps-0' : ''); ?> active"
                            aria-current="page"><?php echo e(trans('labels.my_profile')); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-3 d-flex">
                    <?php echo $__env->make('web.layout.usersidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="col-lg-9">
                    <div class="user-content-wrapper h-100">
                        <p class="title text-center text-md-start"><?php echo e(trans('labels.my_profile')); ?></p>
                        <form action="<?php echo e(URL::to('/profile/update')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row mb-3 align-items-center">
                                <div class="col-md-3 mb-3">
                                    <div class="avatar-upload mx-auto">
                                        <div class="avatar-edit <?php echo e(session()->get('direction') == '2' ? 'avatar-edit-rtl' : ''); ?>">
                                            <input type='file' name="profile_image" id="imageupload" accept=".png, .jpg, .jpeg" />
                                            <label for="imageupload"></label>
                                        </div>
                                        <div class="avatar-preview">
                                            <div id="imagepreview">
                                                <img src="<?php echo e(Helper::image_path(Auth::user()->profile_image)); ?>" alt="" id="imgupload">
                                            </div>
                                        </div>
                                    </div>
                                    <?php $__errorArgs = ['profile_image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group mb-3">
                                        <label for="" class="form-label mb-2"><?php echo e(trans('labels.full_name')); ?></label>
                                        <input type="text" class="form-control" name="name" placeholder="<?php echo e(trans('labels.full_name')); ?>" value="<?php echo e(Auth::user()->name); ?>">
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="" class="form-label mb-2"><?php echo e(trans('labels.email')); ?></label>
                                                <input type="email" class="form-control" name="email" placeholder="<?php echo e(trans('labels.email')); ?>" value="<?php echo e(Auth::user()->email); ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group mb-3">
                                                <label for="" class="form-label mb-2"><?php echo e(trans('labels.mobile')); ?></label>
                                                <input type="text" class="form-control" name="mobile" placeholder="<?php echo e(trans('labels.mobile')); ?>" value="<?php echo e(Auth::user()->mobile); ?>" disabled>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 <?php echo e(session()->get('direction') == '2' ? 'text-start' : 'text-end'); ?>">
                                    <button class="btn btn-primary px-4 py-2" <?php if(env('Environment') == 'sendbox'): ?> type="button" onclick="myFunction()" <?php else: ?> type="submit" <?php endif; ?>><?php echo e(trans('labels.save')); ?></button>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <p class="title"><?php echo e(trans('labels.alert_settings')); ?></p>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0 d-flex justify-content-between align-items-center">
                                        <h6 class="mb-0 fw-bold"><?php if(\App\SystemAddons::where('unique_identifier', 'otp')->first() != null && \App\SystemAddons::where('unique_identifier', 'otp')->first()->activated = 1): ?>
                                            <?php echo e(trans('labels.mobile')); ?>

                                            
                                        <?php else: ?>
                                        <?php echo e(trans('labels.email')); ?>

                                        <?php endif; ?>
                                       </h6>
                                        <span>
                                            <input type="checkbox" class="checkbox-switch" id="send_email-switch" data-url="<?php echo e(URL::to('/profile/send-email-status')); ?>" name="send_email" <?php echo e(Auth::user()->is_mail == 1 ? 'checked' : ''); ?> >
                                            <label for="send_email-switch" class="switch">
                                                <span class="<?php echo e(session()->get('direction') == 2 ? 'switch__circle-rtl' : 'switch__circle'); ?>"><span class="switch__circle-inner"></span></span>
                                                <span class="<?php echo e(session()->get('direction') == '2' ? 'switch__right pe-2' : 'switch__left ps-2'); ?>"><?php echo e(trans('labels.off')); ?></span>
                                                <span class="<?php echo e(session()->get('direction') == '2' ? 'switch__left ps-2' : 'switch__right pe-2'); ?>"><?php echo e(trans('labels.on')); ?></span>
                                            </label>
                                        </span>
                                    </li>
                                    <li class="list-group-item px-0">
                                        <small>
                                        <?php if(\App\SystemAddons::where('unique_identifier', 'otp')->first() != null && \App\SystemAddons::where('unique_identifier', 'otp')->first()->activated = 1): ?>
                                        
                                        <?php echo e(trans('labels.keep_on_recieve_mobile')); ?> 
                                        
                                        <?php else: ?>

                                        <?php echo e(trans('labels.keep_on_recieve_email')); ?> 

                                        <?php endif; ?>
                                    </small>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php echo $__env->make('web.subscribeform', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(url(env('ASSETSPATHURL').'web-assets/js/custom/profile.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp30-03-24\htdocs\agua30-03-24\resources\views/web/profile/profile.blade.php ENDPATH**/ ?>
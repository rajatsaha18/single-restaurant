<?php $__env->startSection('page_title'); ?>
| <?php echo e(trans('labels.help_contact_us')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="breadcrumb-sec">
    <div class="container">
        <div class="breadcrumb-sec-content">
            <h1><?php echo e(trans('labels.help_contact_us')); ?></h1>
            <nav class="text-dark d-flex justify-content-center breadcrumb-divider" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li
                        class="breadcrumb-item <?php echo e(session()->get('direction') == '2' ? 'breadcrumb-item-rtl ps-0' : ''); ?>">
                        <a class="text-muted" href="<?php echo e(route('home')); ?>"><?php echo e(trans('labels.home')); ?></a>
                    </li>
                    <li class="breadcrumb-item <?php echo e(session()->get('direction') == '2' ? 'breadcrumb-item-rtl ps-0' : ''); ?> active"
                        aria-current="page"><?php echo e(trans('labels.help_contact_us')); ?></li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Contact us Section Start Here -->
<section>
    <div class="contact-us">
        <div class="container">
            <div class="contact-content">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-auto right-side">
                        <form method="POST" class="p-5" action="<?php echo e(route('createcontact')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <p class="fs-2 fw-bold"><?php echo e(trans('labels.contactus_heading')); ?></p>
                                <span class="text-muted"><?php echo e(trans('labels.contactus_description')); ?></span>
                            </div>
                            <div class="mb-3 mt-5 form-group">
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="fname"
                                            placeholder="<?php echo e(trans('messages.first_name')); ?>">
                                        <?php $__errorArgs = ['fname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                    <div class="col-6">
                                        <input type="text" class="form-control" name="lname"
                                            placeholder="<?php echo e(trans('messages.last_name')); ?>">
                                        <?php $__errorArgs = ['lname'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3 form-group">
                                <input type="email" class="form-control" name="email"
                                    placeholder="<?php echo e(trans('labels.email')); ?>">
                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="mb-3 form-group">
                                <textarea class="form-control" rows="2" name="message"
                                    placeholder="<?php echo e(trans('labels.message')); ?>"></textarea>
                                <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <small class="text-danger"><?php echo e($message); ?></small> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-12 d-inline-block">
                                <button type="submit" class="btn px-4 py-2 btn-primary float-end"><?php echo e(trans('labels.save')); ?></button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6 col-sm-12 col-auto p-3 left-side">
                        <div class="col-12 my-1">
                            <div class="card border-0  rounded-3 p-3 h-100 ">
                                <h2 class="fw-bold">Get in Touch</h2>                                
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-6 col-sm-6 my-1">
                            <div class="card border-0  rounded-3 p-3 h-100">
                                <h5> <i class="fa-solid fa-location-dot pe-2"></i><?php echo e(trans('labels.address')); ?></h5>
                                <a href="javascript:void(0)"><?php echo e(@Helper::appdata()->address); ?></a>
                            </div>
                        </div>
                        <div class="row mb-4 ">
                            <div class="col-xl-6 col-lg-6 col-sm-6 my-1">
                                <div class="card border-0  rounded-3 p-3 h-100">
                                    <h5> <i class="fa-solid fa-envelope pe-2"></i><?php echo e(trans('labels.email')); ?></h5>
                                    <a href="mailto:<?php echo e(@Helper::appdata()->email); ?>"
                                    class=" text-break"><?php echo e(@Helper::appdata()->email); ?></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-sm-6 my-1">
                                <div class="card border-0  rounded-3 p-3 h-100 ">
                                    <h5> <i class="fa-solid fa-phone pe-2"></i><?php echo e(trans('labels.mobile')); ?></h5>
                                <a href="tel:<?php echo e(@Helper::appdata()->mobile); ?>"
                                    class="text-break"><?php echo e(@Helper::appdata()->mobile); ?></a>
                                </div>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-sm-6 my-1">
                                <div class="card border-0  rounded-3 p-3 h-100">
                                    <h5> <i class="fa-solid fa-clock pe-2"></i><?php echo e(trans('labels.working_hours')); ?>  </h5>
                                    <h5 class="text-muted"><span
                                        class="cursor-pointer" data-bs-toggle="modal"
                                        data-bs-target="#modal_working_hours"></span></h5>
                                    <p> Sonntag - Donnerstag: 11:00AM to 11:00PM</p>
                                    <p>Freitag - Samstag: 11:00AM to 11:30PM</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- MODAL_working_hours--START -->
<div class="modal fade" id="modal_working_hours" tabindex="-1" aria-labelledby="working_hours_Label" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="working_hours_Label"><?php echo e(trans('labels.working_hours')); ?></h5>
                <button type="button" class="btn-close m-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="list-group list-group-flush">
                    <?php $__currentLoopData = $gettimings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $time): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="list-group-item d-flex justify-content-between"> <?php echo e(ucfirst($time->day)); ?>

                        <span><?php echo e($time->open_time); ?> <?php echo e(trans('labels.to')); ?> <?php echo e($time->break_start); ?> <br>
                            <?php echo e($time->break_end); ?> <?php echo e(trans('labels.to')); ?> <?php echo e($time->close_time); ?></span></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger px-4 py-2" data-bs-dismiss="modal"><?php echo e(trans('labels.close')); ?></button>
            </div>
        </div>
    </div>
</div>
<!-- MODAL_working_hours--END -->
<!-- Contact us Section End Here -->

<?php echo $__env->make('web.subscribeform', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u120135824/domains/businesssolution.com.bd/public_html/burger/resources/views/web/contactus.blade.php ENDPATH**/ ?>
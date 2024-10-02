<?php $__env->startSection('content'); ?>
    <div class="breadcrumb-sec">
        <div class="container">
            <div class="breadcrumb-sec-content">
                <h1><?php echo e(trans('labels.testimonials')); ?></h1>
                <nav class="text-dark d-flex justify-content-center breadcrumb-divider" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li
                            class="breadcrumb-item <?php echo e(session()->get('direction') == '2' ? 'breadcrumb-item-rtl ps-0' : ''); ?>">
                            <a class="text-muted" href="<?php echo e(URL::to('/')); ?>"><?php echo e(trans('labels.home')); ?></a>
                        </li>
                        <li
                            class="breadcrumb-item <?php echo e(session()->get('direction') == '2' ? 'breadcrumb-item-rtl ps-0' : ''); ?>">
                            <a class="text-muted" href="javascript:void(0)"><?php echo e(trans('labels.testimonials')); ?></a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section>
        <div class="testimonials-wrapper-1">
            <div class="container">
                <?php if(count($testimonials) > 0): ?>
                    <div class="row mt-5 mb-3">
                        <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonialdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-lg-4 col-md-6 col-sm-12 d-flex mb-3">
                                <div class="review">                                    
                                    <div class="d-flex taxt-start col-12 p-2">
                                        <img src="<?php echo e($testimonialdata['user_info']->profile_image); ?>"
                                            class="img-circle img-responsive"/>
                                        <div class="mx-2">
                                            <h4><?php echo e($testimonialdata['user_info']->name); ?></h4>
                                            <div class="review-star">
                                                <?php if($testimonialdata->ratting == 1): ?>
                                                    <i class="fa-solid fa-star fs-8"></i>
                                                <?php elseif($testimonialdata->ratting == 2): ?>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                <?php elseif($testimonialdata->ratting == 3): ?>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                <?php elseif($testimonialdata->ratting == 4): ?>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                <?php elseif($testimonialdata->ratting == 5): ?>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                    <i class="fa-solid fa-star"></i>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="gray"><span class="text-primary">"</span><?php echo e(Str::limit($testimonialdata->comment, 150)); ?><span
                                                class="text-primary">"</span></p>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="mb-5 d-flex justify-content-center">
                        <?php echo e($testimonials->links()); ?>

                    </div>
                <?php else: ?>
                    <?php echo $__env->make('web.nodata', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
                <?php if(Auth::user() && Auth::user()->type == 2): ?>
                    <?php if(!Helper::check_review_exist(Auth::user()->id)): ?>
                    <div class="col-12 d-flex justify-content-center">
                        <a class="btn btn-primary my-5 px-3 py-2" data-bs-toggle="modal" data-bs-target="#addreviewmodal"><?php echo e(trans('labels.add_review')); ?><i class="fa-solid fa-plus px-1"></i> </a>
                    </div>
                    <?php endif; ?>
                <?php else: ?>
                <div class="col-12 d-flex justify-content-center">
                    <a class="btn btn-primary my-5 px-3 py-2" href="<?php echo e(URL::to('/login')); ?>"><?php echo e(trans('labels.add_review')); ?></a>
                </div>
                <?php endif; ?>
            </div>
            <!-- ADD_REVIEW_ODAL_START -->
            <div class="modal fade" id="addreviewmodal" tabindex="-1" aria-labelledby="addreviewmodalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title fw-bold" id="addreviewmodalLabel"><?php echo e(trans('labels.add_review')); ?></h4>
                            <button type="button" class="btn-close <?php echo e(session()->get('direction') == 2 ? 'close' : ''); ?>" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="<?php echo e(URL::to('/add-review')); ?>" method="POST" class="mb-0">
                            <?php echo csrf_field(); ?>
                            <div class="modal-body">
                                <div class="form-body">
                                    <div class="form-group col-lg-12 text-center">
                                        <div class="review border-0 py-2">
                                            <img src="<?php echo e(Helper::image_path(@Auth::user()->profile_image)); ?>"
                                                class="img-circle img-responsive mb-0" />
                                            <h4 class="mb-0 mt-3"><?php echo e(@Auth::user()->name); ?></h4>
                                        </div>
                                        <div class="star-rating">
                                            <?php for($i = 5; $i > 0; $i=$i-1): ?>
                                                <input type="radio" id="<?php echo e($i); ?>" name="rating" onclick="$('#ratting').val('<?php echo e($i); ?>')" <?php echo e($i == 1 ? 'checked' : ''); ?>>
                                                <label for="<?php echo e($i); ?>"><i class="fa-solid fa-star" aria-hidden="true"></i></label>
                                            <?php endfor; ?>
                                            <?php $__errorArgs = ['ratting'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"> <br> <?php echo e($message); ?> </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                        <input type="hidden" name="ratting" id="ratting" value="1">
                                    </div>
                                    <div class="form-group col-lg-12">
                                        <textarea name="message" rows="4" class="form-control" placeholder="Message" required></textarea>
                                        <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                            <span class="text-danger"> <?php echo e($message); ?> </span>
                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-center border-0">
                                <button type="button" class="btn btn-outline-danger px-4 py-2 fs-7" data-bs-dismiss="modal"><?php echo e(trans('labels.close')); ?></button>
                                <button type="submit" class="btn btn-primary px-4 py-2 fs-7"><?php echo e(trans('labels.save')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- ADD_REVIEW_ODAL_END -->
        </div>
    </section>

    <?php echo $__env->make('web.subscribeform', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp30-03-24\htdocs\agua30-03-24\resources\views/web/testimonials.blade.php ENDPATH**/ ?>
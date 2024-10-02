<!-- Back to Top Button Start Here -->
<div id="back-to-top">
    <a class="btn text-primary">
        <i class="fa-solid fa-angle-up"></i>
    </a>
</div>
<!-- Back to Top Button End Here -->
<!-- Footer Start Here -->
<footer>


<?php if(request()->is('/') || request()->is('home')): ?>

    <?php if(Helper::get_theme() == 1): ?>

    <div class="theme-2-product-service">
        <div class="container">
            <div class="row justify-content-center my-4">
                <?php $__currentLoopData = Helper::footer_features(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
                    <div class="card border-0 bg-transparent">
                        <div class="card-body d-flex">
                            <div class="quality-icon col-3 mb-3">
                                <?php echo $feature->icon; ?>

                            </div>
                            <div class="quality-content px-3">
                                <h3><?php echo e($feature->title); ?></h3>
                                <p class="m-0 text-muted fs-7"><?php echo e($feature->description); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>                                      
    </div>

    <?php elseif(Helper::get_theme() == 2): ?>


    <!------------------- theme-2 ------------------->
    <div class="theme-2-product-service">
        <div class="container">
            <div class="row justify-content-center my-4">
                <?php $__currentLoopData = Helper::footer_features(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
                    <div class="card border-0 bg-transparent">
                        <div class="card-body d-flex">
                            <div class="quality-icon col-3 mb-3">
                                <?php echo $feature->icon; ?>

                            </div>
                            <div class="quality-content px-3">
                                <h3><?php echo e($feature->title); ?></h3>
                                <p class="m-0 text-muted fs-7"><?php echo e($feature->description); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>                                      
    </div>

    <?php else: ?>

    <div class="theme-2-product-service">
        <div class="container">
            <div class="row justify-content-center my-4">
                <?php $__currentLoopData = Helper::footer_features(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-3 col-md-6 col-sm-6 mb-2">
                    <div class="card border-0 bg-transparent">
                        <div class="card-body d-flex">
                            <div class="quality-icon col-3 mb-3">
                                <?php echo $feature->icon; ?>

                            </div>
                            <div class="quality-content px-3">
                                <h3><?php echo e($feature->title); ?></h3>
                                <p class="m-0 text-muted fs-7"><?php echo e($feature->description); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>                                      
    </div>

    <?php endif; ?>

<?php endif; ?>
    <!------------------- theme-2 ------------------->


    <div class="footer" style="background : url('<?php echo e(Helper::image_path(@Helper::appdata()->footer_bg_image)); ?>') center center/cover no-repeat rgba(0, 0, 0, .6) !important;">
        <div class="container">
            <div class="row footer-area border-bottom-primary">
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 left-side mt-3">
                    <a href="<?php echo e(route('home')); ?>">
                        <img src="<?php echo e(Helper::image_path(@Helper::appdata()->logo)); ?>" width="75" class="my-3" alt="footer_logo">
                    </a>
                    <h1><?php echo e(@Helper::appdata()->footer_title); ?></h1>
                    <p><?php echo e(@Helper::appdata()->footer_description); ?></p>
                    <div class="col-lg-5 col-md-5 col-auto my-2">
                        <a class="fs-4 text-white " href="<?php echo e(@Helper::appdata()->fb); ?>" target="_blank"> <i class="fab fa-facebook-square"></i> </a>
                        <a class="fs-4 text-white <?php echo e(session()->get('direction') == '2' ? 'me-3' : 'ms-3'); ?> " href="<?php echo e(@Helper::appdata()->insta); ?>" target="_blank"> <i class="fab fa-instagram"></i> </a>
                        <a class="fs-4 text-white <?php echo e(session()->get('direction') == '2' ? 'me-3' : 'ms-3'); ?> " href="<?php echo e(@Helper::appdata()->youtube); ?>" target="_blank"> <i class="fab fa-youtube"></i> </a>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-12 right-side">
                    <div class="row justify-content-between">
                        <div class="col-md-4 col-sm-4 col-auto mb-2">
                            <h4><?php echo e(trans('labels.about_us')); ?></h4>
                            <ul>
                                <li><a href="<?php echo e(route('about-us')); ?>" class="text-white"><?php echo e(trans('labels.about')); ?></a></li>
                                <li><a href="<?php echo e(route('ourteam')); ?>" class="text-white"><?php echo e(trans('labels.our_team')); ?></a></li>
                                <li><a href="<?php echo e(route('testimonials')); ?>" class="text-white"><?php echo e(trans('labels.testimonials')); ?></a></li>
                                <li><a href="<?php echo e(URL::to('/view-all?type=todayspecial')); ?>" class="text-white"><?php echo e(trans('labels.todays_special')); ?></a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4 col-auto mb-2">
                            <h4><?php echo e(trans('labels.legal')); ?></h4>
                            <ul>
                                <li><a href="<?php echo e(route('privacy-policy')); ?>" class="text-white"><?php echo e(trans('labels.privacy_policy')); ?></a></li>
                                <li><a href="<?php echo e(route('refund-policy')); ?>" class="text-white"><?php echo e(trans('labels.refund_policy')); ?></a></li>
                                <li><a href="<?php echo e(route('terms-conditions')); ?>" class="text-white"><?php echo e(trans('labels.terms_condition')); ?></a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-sm-4 col-auto mb-2">
                            <h4><?php echo e(trans('labels.other_pages')); ?></h4>
                            <ul>
                                <li><a href="<?php echo e(route('faq')); ?>" class="text-white"><?php echo e(trans('labels.faq')); ?></a></li>
                                <li><a href="<?php echo e(route('gallery')); ?>" class="text-white"><?php echo e(trans('labels.gallery')); ?></a></li>
                                <li><a href="<?php echo e(route('contact-us')); ?>" class="text-white"><?php echo e(trans('labels.help_contact_us')); ?></a></li>
                                <li><a href="<?php echo e(route('blogs')); ?>" class="text-white"><?php echo e(trans('labels.blogs')); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <p class="text-white my-3 fs-7"><?php echo e(Helper::appdata()->copyright); ?></p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End here -->
<?php /**PATH /home/u120135824/domains/businesssolution.com.bd/public_html/burger/resources/views/web/layout/footer.blade.php ENDPATH**/ ?>
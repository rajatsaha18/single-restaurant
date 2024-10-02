<link rel="stylesheet" href="<?php echo e(url(env('ASSETSPATHURL').'web-assets/css/fancybox/fancybox-v4-0-27.css')); ?>"><!-- Fancybox 4.0 CSS -->
<?php $__env->startSection('page_title'); ?>
    | <?php echo e(trans('labels.gallery')); ?>

<?php $__env->stopSection(); ?>
<style>
    @media only screen and (max-width: 767px) {
            /* Adjust image height for mobile */
            #galImage
            {
                display: flex;
        justify-content: center; /* Center items horizontally */
        align-items: center; /* Center items vertically */
        height: 100vh; /* Ensure full viewport height */
        overflow-x: auto; /* Allow horizontal scrolling */
        -webkit-overflow-scrolling: touch; /* Smooth scrolling on iOS */
        -ms-overflow-style: -ms-autohiding-scrollbar;
            }
            #galImage img{

                height: auto !important;
                width: 100% !important;
            }
        }



</style>
<?php $__env->startSection('content'); ?>
    <div class="breadcrumb-sec">
        <div class="container">
            <div class="breadcrumb-sec-content">
                <h1><?php echo e(trans('labels.gallery')); ?></h1>
                <nav class="text-dark d-flex justify-content-center breadcrumb-divider" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li
                            class="breadcrumb-item <?php echo e(session()->get('direction') == '2' ? 'breadcrumb-item-rtl ps-0' : ''); ?>">
                            <a class="text-muted" href="<?php echo e(URL::to('/')); ?>"><?php echo e(trans('labels.home')); ?></a>
                        </li>
                        <li class="breadcrumb-item <?php echo e(session()->get('direction') == '2' ? 'breadcrumb-item-rtl ps-0' : ''); ?> active"
                            aria-current="page"><?php echo e(trans('labels.gallery')); ?></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section>
        <div class="container my-5">
            <div class="row" id="galImage">
                <?php $__currentLoopData = $getgalleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3 mt-3">

                <img src="<?php echo e($image->image_url); ?>" style="height: 220px!important;width:250px;"/>

                </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                
            </div>
            
        </div>
    </section>

   <?php echo $__env->make('web.subscribeform', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script src="<?php echo e(url(env('ASSETSPATHURL').'web-assets/js/fancybox/fancybox-v4-0-27.js')); ?>"></script><!-- Fancybox 4.0 JS -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp23-04-24\htdocs\agua30-03-24\resources\views/web/gallery.blade.php ENDPATH**/ ?>
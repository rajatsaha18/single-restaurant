<?php $__env->startSection('page_title'); ?>
    | <?php echo e(trans('labels.our_team')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="breadcrumb-sec">
        <div class="container">
            <div class="breadcrumb-sec-content">
                <h1><?php echo e(trans('labels.our_team')); ?></h1>
                <nav class="text-dark d-flex justify-content-center breadcrumb-divider" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item <?php echo e(session()->get('direction') == '2' ? 'breadcrumb-item-rtl ps-0' : ''); ?>"><a class="text-muted"
                                href="<?php echo e(URL::to('/')); ?>"><?php echo e(trans('labels.home')); ?></a></li>
                        <li class="breadcrumb-item <?php echo e(session()->get('direction') == '2' ? 'breadcrumb-item-rtl ps-0' : ''); ?>"><a class="text-muted"
                                href="javascript:void(0)"><?php echo e(trans('labels.our_team')); ?></a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section>
        <div class="testimonials-wrapper">
            <div class="container">
                <?php if(count($getteams)>0): ?>
                <div class="row my-5">
                    <?php $__currentLoopData = $getteams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $teamdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-lg-3 col-md-6 col-sm-12 d-flex mb-3">
                            <div class="review">
                                <img src="<?php echo e($teamdata->image_url); ?>"
                                    class="img-circle img-responsive" />
                                <h4><?php echo e($teamdata->title); ?></h4>
                                <h6><?php echo e($teamdata->subtitle); ?></h6>
                                <p><span class="text-primary">"</span><?php echo e(Str::limit($teamdata->description, 58)); ?><span
                                        class="text-primary">"</span></p>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <?php else: ?>
                <?php echo $__env->make('web.nodata', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>                    
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php echo $__env->make('web.subscribeform', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u120135824/domains/businesssolution.com.bd/public_html/burger/resources/views/web/ourteam.blade.php ENDPATH**/ ?>
<?php $__env->startSection('page_title'); ?>
    | <?php echo e(trans('labels.search')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="breadcrumb-sec">
        <div class="container">
            <div class="breadcrumb-sec-content">
                <h1><?php echo e(trans('labels.search')); ?></h1>
                <nav class="text-dark d-flex justify-content-center breadcrumb-divider" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li
                            class="breadcrumb-item <?php echo e(session()->get('direction') == '2' ? 'breadcrumb-item-rtl ps-0' : ''); ?>">
                            <a class="text-muted" href="<?php echo e(URL::to('/')); ?>"><?php echo e(trans('labels.home')); ?></a></li>
                        <li
                            class="breadcrumb-item <?php echo e(session()->get('direction') == '2' ? 'breadcrumb-item-rtl ps-0' : ''); ?>">
                            <a class="text-muted" href="javascript:void(0)"><?php echo e(trans('labels.search')); ?></a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section>
        <div class="container mt-5">
            <div class="menu-section menu-section-header">
                <form action="<?php echo e(URL::to('/search')); ?>" method="get">
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <input type="text" class="form-control rounded" name="itemname"
                                placeholder="<?php echo e(trans('labels.search_here')); ?>"
                                <?php if(isset($_GET['itemname'])): ?> value="<?php echo e($_GET['itemname']); ?>" <?php endif; ?>>
                            <button class="input-group-text rounded fs-6" type="submit" id="inputGroup-sizing-lg"><?php echo e(trans('labels.search')); ?>

                                <i class="fa-solid fa-magnifying-glass px-2"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="container">
            <div class="row mb-5">
                <div class="menu m-0">
                    <?php if(count($getsearchitems) > 0): ?>
                        <div class="row boxes">
                            <?php $__currentLoopData = $getsearchitems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $itemdata): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php echo $__env->make('web.home1.itemview', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="mt-5 d-flex justify-content-center">
                            <?php echo e($getsearchitems->appends(request()->query())->links()); ?>

                        </div>
                    <?php else: ?>
                        <?php echo $__env->make('web.nodata', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layout.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u913747247/domains/elpasto.de/public_html/resources/views/web/search.blade.php ENDPATH**/ ?>
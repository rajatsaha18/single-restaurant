<div class="user-sidebar">
    <div class="user-info col-12 d-flex pb-4 mb-3">
    <div class="user-info d-xl-flex pb-4 mb-3">
        <div class="col-xl-3 col-12 mb-xl-0 mb-3">
            <div class="avatar-upload mx-auto d-flex justify-content-center">
                <div class="avatar-preview-two ">
                    <div id="imagepreview-two">
                        <img src="<?php echo e(Helper::image_path(Auth::user()->profile_image)); ?>" alt="" id="imgupload">
                    </div>
                </div>
            </div>
        </div>
        <div class="px-xl-3 col-12 d-flex align-items-center">
            <div class="col-12">
                <p class="mb-0 text-xl-start text-center"><?php echo e(Auth::user()->name); ?></p>
                <p class="mb-0 text-xl-start text-center"><?php echo e(Auth::user()->email); ?></p>
            </div>
        </div>
    </div>

    </div>
    <li>
        <a class="<?php echo e(request()->is('profile') ? 'active' : ''); ?>" href="<?php echo e(route('user-profile')); ?>">
            <i class="mx-2 fa-regular fa-user"></i><?php echo e(trans('labels.my_profile')); ?> </a>
    </li>
    <li>
        <a class="<?php echo e(request()->is('orders*') ? 'active' : ''); ?>" href="<?php echo e(route('order-history')); ?>">
            <i class="mx-2 fa fa-list-check"></i><?php echo e(trans('labels.my_orders')); ?> </a>
    </li>
    <li>
        <a class="<?php echo e(request()->is('favouritelist') ? 'active' : ''); ?>" href="<?php echo e(route('user-favouritelist')); ?>">
            <i class="mx-2 fa-regular fa-heart"></i><?php echo e(trans('labels.favourite_list')); ?> </a>
    </li>
    <li>
        <a class="<?php echo e(request()->is('changepassword') ? 'active' : ''); ?>"
            href="<?php echo e(route('user-changepassword')); ?>">
            <i class="mx-2 fa fa-key"></i><?php echo e(trans('labels.change_password')); ?> </a>
    </li>

    <?php if(Helper::appdata()->pickup_delivery != 3): ?>
        <li>
            <a class="<?php echo e(request()->is('address*') ? 'active' : ''); ?>" href="<?php echo e(route('address')); ?>">
                <i class="mx-2 fa-regular fa-map"></i><?php echo e(trans('labels.my_addresses')); ?> </a>
        </li>
    <?php endif; ?> 


    <li>
        <a class="<?php echo e(request()->is('wallet*') ? 'active' : ''); ?>" href="<?php echo e(route('user-wallet')); ?>">
            <i class="mx-2 fa-solid fa-wallet"></i><?php echo e(trans('labels.my_wallet')); ?> </a>
    </li>
    <li>
        <a class="<?php echo e(request()->is('refer-earn') ? 'active' : ''); ?>" href="<?php echo e(route('refer-earn')); ?>">
            <i class="mx-2 fa-solid fa-share-nodes"></i><?php echo e(trans('labels.refer_earn')); ?> </a>
    </li>
    <li>
        <a href="javascript:void(0)" onclick="logout('<?php echo e(route('logout')); ?>','<?php echo e(trans('messages.are_you_sure_logout')); ?>','<?php echo e(trans('labels.logout')); ?>')">
            <i class="mx-2 fa fa-arrow-right-from-bracket"></i><?php echo e(trans('labels.logout')); ?> </a>
    </li>
</div>
<?php /**PATH E:\xampp30-03-24\htdocs\agua30-03-24\resources\views/web/layout/usersidebar.blade.php ENDPATH**/ ?>
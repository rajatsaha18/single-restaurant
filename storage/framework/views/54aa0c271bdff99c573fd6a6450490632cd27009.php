<!doctype html>
<html lang="en" dir="<?php echo e(session('direction') == 2 ? 'rtl' : 'ltr'); ?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title> <?php echo e(@Helper::appdata()->title); ?> | <?php echo e(trans('labels.forgot_password')); ?> </title>
    <link rel="icon" href="<?php echo e(Helper::image_path(@Helper::appdata()->favicon)); ?>"><!-- Favicon -->
    <link rel="stylesheet" href="<?php echo e(url(env('ASSETSPATHURL').'web-assets/css/bootstrap.min.css')); ?>">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo e(url(env('ASSETSPATHURL').'web-assets/css/font_awesome/all.css')); ?>">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="<?php echo e(url(env('ASSETSPATHURL').'web-assets/css/style.css')); ?>"><!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo e(url(env('ASSETSPATHURL').'web-assets/css/responsive.css')); ?>">
    <!-- Media Query Resposive CSS -->
    <!-- COMMON-CSS -->
    <link rel="stylesheet" href="<?php echo e(url(env('ASSETSPATHURL').'admin-assets/assets/css/toastr/toastr.min.css')); ?>">
    <!-- Toastr CSS -->
</head>

<body>
    <!--Preloader start here-->
    <div id="preload" class="bg-light">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class='loader-icon'><img src="<?php echo e(Helper::image_path(@Helper::appdata()->logo)); ?>" alt="Swipy">
                </div>
            </div>
        </div>
    </div>
    <!--Preloader area end here-->
    <main>
        <div class="img-fluid">
            <div class="d-flex align-items-center justify-content-center vh-100 container">
                <div class="auth_form_inner box col-12">
                    <div class="row">
                        <div class="forgot-pass col-lg-4 col-12 px-sm-5 py-sm-5 my-3 px-4 d-flex align-items-center">
                            <form action="<?php echo e(route('sendpass')); ?>" method="POST" class="m-0">
                                <?php echo csrf_field(); ?>
                                <div>
                                    <a href="<?php echo e(route('home')); ?>">
                                        <img src="<?php echo e(Helper::image_path(@Helper::appdata()->logo)); ?>" alt=""
                                            class="login-form-logo">
                                    </a>
                                </div>
                                <div class="mb-3">
                                    <h5 class="py-3 bottom-line m-0 fw-bold w-auto">
                                        <?php echo e(trans('labels.forgot_password')); ?></h5>
                                    <p class="fs-7 col-10"><?php echo e(trans('labels.reset_pass_note')); ?></p>
                                </div>
                                <div class="my-3">
                                    <div class="bg-transparent">
                                        <div>
                                            <label class="form-label fs-7 mb-1"><?php echo e(trans('labels.email')); ?></label>
                                            <div class="input-group flex-nowrap  mb-1">
                                                <input type="email" name="email" class="form-control"
                                                    placeholder="<?php echo e(trans('labels.email')); ?>">
                                            </div>
                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger mt-1"><?php echo e($message); ?></span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="my-3 d-grid">
                                    <button
                                        <?php if(env('Environment') == 'sendbox'): ?> type="button" onclick="myFunction()" <?php else: ?> type="submit" <?php endif; ?>
                                        class="btn btn-primary"><?php echo e(trans('labels.submit')); ?></button>
                                </div>
                                <div class="my-3 text-center">
                                    <p class="mb-0 fs-7">
                                        <?php echo e(trans('labels.dont_account')); ?>

                                        <a href="<?php echo e(route('register')); ?>"
                                            class="text-primary fw-bold "><?php echo e(trans('labels.signup')); ?></a>
                                    </p>
                                </div>
                            </form>
                        </div>
                        <div class="image col-8">
                            <img src="<?php echo e(url(env('ASSETSPATHURL').'web-assets/images/bg1.jpg')); ?>" class="w-100">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="<?php echo e(url(env('ASSETSPATHURL').'web-assets/js/jquery/jquery-3.6.0.js')); ?>"></script><!-- jQuery JS -->
    <script src="<?php echo e(url(env('ASSETSPATHURL').'web-assets/js/bootstrap/bootstrap.bundle.min.js')); ?>"></script><!-- Bootstrap JS -->
    <!-- COMMON-JS -->
    <script src="<?php echo e(url(env('ASSETSPATHURL').'admin-assets/assets/js/toastr/toastr.min.js')); ?>"></script><!-- Toastr JS -->
    <script>
        toastr.options = {
            "closeButton": true,
        }
        <?php if(Session::has('success')): ?>
            toastr.success("<?php echo e(session('success')); ?>");
        <?php endif; ?>
        <?php if(Session::has('error')): ?>
            toastr.error("<?php echo e(session('error')); ?>");
        <?php endif; ?>
        // for-page-loader
        $(window).on('load', function() {
            "use strict";
            $("#preload").delay(600).fadeOut(500);
            $(".pre-loader").delay(600).fadeOut(500);
        })

        function myFunction() {
            "use strict";
            toastr.error("This operation was not performed due to demo mode");
        }
    </script>
</body>

</html>
<?php /**PATH /home/u913747247/domains/elpasto.de/public_html/resources/views/web/auth/forgot_password.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card border-0">
                <div class="card-body">
                    <div class="form-validation roles-form">
                        <form action="<?php echo e(URL::to('admin/roles/update-'.$data->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label" for=""><?php echo e(trans('labels.role_name')); ?> <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="name" placeholder="<?php echo e(trans('labels.role_name')); ?>" value="<?php echo e($data->name); ?>">
                                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <?php $modules = explode(',',$data->modules); ?>
                                    <div class="form-group">
                                        <label class="col-form-label" for=""><?php echo e(trans('labels.system_modules')); ?> <span class="text-danger">*</span></label>
                                        <div class="row mb-0">
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox0">
                                                    <input type="checkbox" class="me-2" id="checkbox0" name="modules[]" value="0" <?php echo e(in_array('0',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.dashboard')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.dashboard')); ?>">
                                                </label>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox1">
                                                    <input type="checkbox" class="me-2" id="checkbox1" name="modules[]" value="1" <?php echo e(in_array('1',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.orders')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.orders')); ?>">
                                                </label>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox2">
                                                    <input type="checkbox" class="me-2" id="checkbox2" name="modules[]" value="2" <?php echo e(in_array('2',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.report')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.report')); ?>">
                                                </label>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox3">
                                                    <input type="checkbox" class="me-2" id="checkbox3" name="modules[]" value="3" <?php echo e(in_array('3',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.sliders')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.sliders')); ?>">
                                                </label>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox4">
                                                    <input type="checkbox" class="me-2" id="checkbox4" name="modules[]" value="4" <?php echo e(in_array('4',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.banners')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.banners')); ?>">
                                                </label>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox5">
                                                    <input type="checkbox" class="me-2" id="checkbox5" name="modules[]" value="5" <?php echo e(in_array('5',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.promocodes')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.promocodes')); ?>">
                                                </label>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox6">
                                                    <input type="checkbox" class="me-2" id="checkbox6" name="modules[]" value="6" <?php echo e(in_array('6',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.notification')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.notification')); ?>">
                                                </label>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox7">
                                                    <input type="checkbox" class="me-2" id="checkbox7" name="modules[]" value="7" <?php echo e(in_array('7',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.categories')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.categories')); ?>">
                                                </label>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox8">
                                                    <input type="checkbox" class="me-2" id="checkbox8" name="modules[]" value="8" <?php echo e(in_array('8',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.subcategories')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.subcategories')); ?>">
                                                </label>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox9">
                                                    <input type="checkbox" class="me-2" id="checkbox9" name="modules[]" value="9" <?php echo e(in_array('9',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.addons')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.addons')); ?>">
                                                </label>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox10">
                                                    <input type="checkbox" class="me-2" id="checkbox10" name="modules[]" value="10" <?php echo e(in_array('10',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.items')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.items')); ?>">
                                                </label>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox11">
                                                    <input type="checkbox" class="me-2" id="checkbox11" name="modules[]" value="11" <?php echo e(in_array('11',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.zone')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.zone')); ?>">
                                                </label>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox12">
                                                    <input type="checkbox" class="me-2" id="checkbox12" name="modules[]" value="12" <?php echo e(in_array('12',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.working_hours')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.working_hours')); ?>">
                                                </label>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox13">
                                                    <input type="checkbox" class="me-2" id="checkbox13" name="modules[]" value="13" <?php echo e(in_array('13',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.payment_methods')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.payment_methods')); ?>">
                                                </label>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox14">
                                                    <input type="checkbox" class="me-2" id="checkbox14" name="modules[]" value="14" <?php echo e(in_array('14',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.reviews')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.reviews')); ?>">
                                                </label>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox15">
                                                    <input type="checkbox" class="me-2" id="checkbox15" name="modules[]" value="15" <?php echo e(in_array('15',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.bookings')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.bookings')); ?>">
                                                </label>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox16">
                                                    <input type="checkbox" class="me-2" id="checkbox16" name="modules[]" value="16" <?php echo e(in_array('16',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.inquiries')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.inquiries')); ?>">
                                                </label>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox17">
                                                    <input type="checkbox" class="me-2" id="checkbox17" name="modules[]" value="17" <?php echo e(in_array('17',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.customers')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.customers')); ?>">
                                                </label>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox18">
                                                    <input type="checkbox" class="me-2" id="checkbox18" name="modules[]" value="18" <?php echo e(in_array('18',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.drivers')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.drivers')); ?>">
                                                </label>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox19">
                                                    <input type="checkbox" class="me-2" id="checkbox19" name="modules[]" value="19" <?php echo e(in_array('19',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.employee_role')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.employee_role')); ?>">
                                                </label>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox20">
                                                    <input type="checkbox" class="me-2" id="checkbox20" name="modules[]" value="20" <?php echo e(in_array('20',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.employee')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.employee')); ?>">
                                                </label>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox21">
                                                    <input type="checkbox" class="me-2" id="checkbox21" name="modules[]" value="21" <?php echo e(in_array('21',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.pages')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.pages')); ?>">
                                                </label>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox22">
                                                    <input type="checkbox" class="me-2" id="checkbox22" name="modules[]" value="22" <?php echo e(in_array('22',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.general_settings')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.general_settings')); ?>">
                                                </label>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox23">
                                                    <input type="checkbox" class="me-2" id="checkbox23" name="modules[]" value="23" <?php echo e(in_array('23',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.addons_manager')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.addons_manager')); ?>">
                                                </label>
                                            </div>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox24">
                                                    <input type="checkbox" class="me-2" id="checkbox24" name="modules[]" value="24" <?php echo e(in_array('24',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.clear_cache')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.clear_cache')); ?>">
                                                </label>
                                            </div>
                                            <?php if(\App\SystemAddons::where('unique_identifier', 'pos')->first() != null && \App\SystemAddons::where('unique_identifier', 'pos')->first()->activated == 1): ?>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox25">
                                                    <input type="checkbox" class="me-2" id="checkbox25" name="modules[]" value="25" <?php echo e(in_array('25',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.pos')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.pos')); ?>">
                                                </label>
                                            </div>
                                            <?php endif; ?>
                                            <?php if(\App\SystemAddons::where('unique_identifier', 'otp')->first() != null && \App\SystemAddons::where('unique_identifier', 'otp')->first()->activated == 1): ?>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox26">
                                                    <input type="checkbox" class="me-2" id="checkbox26" name="modules[]" value="26" <?php echo e(in_array('26',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.otp_configuration')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.otp_configuration')); ?>">
                                                </label>
                                            </div>
                                            <?php endif; ?>

                                            <?php if(\App\SystemAddons::where('unique_identifier', 'language')->first() != null && \App\SystemAddons::where('unique_identifier', 'language')->first()->activated == 1): ?>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox27">
                                                    <input type="checkbox" class="me-2" id="checkbox27" name="modules[]" value="27" <?php echo e(in_array('27',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.language')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.language')); ?>">
                                                </label>
                                            </div>
                                            <?php endif; ?>
                                            <?php if(\App\SystemAddons::where('unique_identifier', 'whatsapp_message')->first() != null && \App\SystemAddons::where('unique_identifier', 'whatsapp_message')->first()->activated == 1): ?>
                                            <div class="col-lg-3 col-md-6 py-2">
                                                <label class="cursor-pointer" for="checkbox28">
                                                    <input type="checkbox" class="me-2" id="checkbox28" name="modules[]" value="28" <?php echo e(in_array('28',$modules)==true?'checked':''); ?>>
                                                    <?php echo e(trans('labels.language')); ?>

                                                    <input type="hidden" name="title[]" value="<?php echo e(trans('labels.language')); ?>">
                                                </label>
                                            </div>
                                            <?php endif; ?>
                                            <?php $__errorArgs = ['modules'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <br><span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-end">
                                <a href="<?php echo e(URL::to('admin/roles')); ?>" class="btn btn-outline-danger"><?php echo e(trans('labels.cancel')); ?></a>
                                    <button class="btn btn-primary" <?php if(env('Environment') == 'sendbox'): ?> type="button" onclick="myFunction()" <?php else: ?> type="submit" <?php endif; ?>><?php echo e(trans('labels.save')); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.theme.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u913747247/domains/elpasto.de/public_html/resources/views/admin/roles/edit.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html>

<head>
    <title><?php echo e(trans('labels.new_booking')); ?></title>
</head>

<body>
    <div>
        <div style="background:#ffffff;padding:15px">
            <center>
                <div style="width:100%;max-width:500px;background:#ffffff;height:180px">
                    <br>
                    <center>
                        <a href="javascript:void(0)">
                            <img alt="" src='<?php echo e($logo); ?>' width="170" height="170"
                                style="display:block;font-family:Helvetica,Arial,sans-serif;color:#666666;font-size:16px"
                                border="0" class="CToWUd">
                        </a>
                    </center>
                </div>
                <br>
                <div style="width:100%;max-width:580px;background:#ffffff;height:auto;padding:10px 0 10px 0">
                    <hr style="border:dashed 1px #e1e1e1;max-width:100%">
                    <div style="width:100%;max-width:580px;background:#ffffff;height:auto;padding:0px 0 0px 0">
                        <div
                            style="font-family:'Lato',Helvetica,Arial,sans-serif;display:inline-block;margin:0px 0px 0 0;max-width:100%;width:100%;margin-right:0px">
                            <div style="width:100%;max-width:580px;background:#ffffff;height:auto;padding:20px 0 0px 0">
                                <div
                                    style="width:100%;max-width:580px;background:#ffffff;height:auto;padding:15px 0 0px 0">
                                    <div bgcolor="#f8f4e8" align="left"
                                        style="padding:0px 0% 0px 0%;font-size:16px;line-height:25px;font-family:'Lato',Helvetica,Arial,sans-serif;color:#6c6e6e;font-weight:500"
                                        class="m_-7788511936867687679padding-copy">
                                        <b><?php echo e(trans('labels.booking_number')); ?></b> : <?php echo e($booking_number); ?> <br>
                                        <b><?php echo e(trans('labels.date')); ?></b> : <?php echo e($date); ?> <br>
                                        <b><?php echo e(trans('labels.time')); ?></b> : <?php echo e($time); ?> <br>
                                        <b><?php echo e(trans('labels.guests')); ?></b> : <?php echo e($guests); ?> <br>
                                        <b><?php echo e(trans('labels.reservation_type')); ?></b> : <?php echo e($reservation_type); ?> <br>
                                        <b><?php echo e(trans('labels.fullname')); ?></b> : <?php echo e($fullname); ?> <br>
                                        <b><?php echo e(trans('labels.email')); ?></b> : <?php echo e($email); ?> <br>
                                        <b><?php echo e(trans('labels.mobile')); ?></b> : <?php echo e($mobile); ?> <br>
                                        <b><?php echo e(trans('labels.special_request')); ?></b> : <?php echo e($special_request); ?> <br>
                                    </div>
                                    <div
                                        style="width:100%;max-width:580px;background:#ffffff;height:auto;padding:0px 0 10px 0">
                                        <hr style="border:dashed 1px #e1e1e1;max-width:100%">
                                    </div>
                                    <div style="display:inline-block;text-align:center;color:#777777;margin:0px auto 26px auto;font-family:'Lato',Helvetica,Arial,sans-serif"
                                        align="center">
                                        <div
                                            style="font-size:12px;color:#777777;margin:12px auto 30px auto;font-family:'Lato',Helvetica,Arial,sans-serif">
                                            <p style="font-size: 11px"><b><?php echo e(trans('labels.note')); ?></b>
                                                <?php echo e(trans('labels.do_not_reply')); ?></p>
                                            <p
                                                style="line-height:1;font-size:12px;margin:0 20px 30px 20px;padding:0 0 0 0;color:#777777;font-family:'Lato',Helvetica,Arial,sans-serif">
                                                <?php echo e(trans('labels.all_rights_reserved')); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>
</body>

</html>
<?php /**PATH E:\xampp30-03-24\htdocs\agua30-03-24\resources\views/Email/reservation.blade.php ENDPATH**/ ?>
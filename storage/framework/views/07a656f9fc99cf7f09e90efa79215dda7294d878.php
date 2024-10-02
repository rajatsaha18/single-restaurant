<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e(trans('labels.print')); ?></title>
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(Helper::image_path(@Helper::appdata()->favicon)); ?>"><!-- Favicon icon -->
    <style type="text/css">
        body {
            width: 88mm;
            height: 100%;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
            --webkit-font-smoothing: antialiased;
        }
        #printDiv {
            font-weight: 600;
            margin: 0;
            padding: 0;
            background: #ffffff;
        }
        #printDiv div,#printDiv p,#printDiv a,#printDiv li,#printDiv td {
            -webkit-text-size-adjust: none;
        }
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
        @media print {
            @page {
                margin: 0;
            }
            body {
                margin: 1.6cm;
            }
        }
    </style>
</head>
<body>
    <div id="printDiv">
        <div class="">
            <table width="90%" border="0" cellpadding='2' cellspacing="2" align="center" bgcolor="#ffffff"
                style="padding-top:4px;">
                <tbody>
                    <tr>
                        <td style="font-size: 15px;color: #fffffff; font-family: 'Open Sans', sans-serif; line-height:18px; vertical-align: bottom; text-align: center;">
                            <h3 style="margin-top: 2px;margin-bottom: 2px;"><?php echo e(@Helper::appdata()->short_title); ?></h3>
                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 13px;color: #fffffff; font-family: 'Open Sans', sans-serif; line-height:18px; vertical-align: bottom; text-align: center;">
                            #<?php echo e($orderdata->order_number); ?>

                        </td>
                    </tr>
                    <tr>
                        <td style="font-size: 13px;color: #fffffff; font-family: 'Open Sans', sans-serif; line-height:18px; vertical-align: bottom; text-align: center;">
                            <?php echo e(trans('labels.order_type')); ?> : <?php echo e($orderdata->order_type == '1' ? trans('labels.delivery') : trans('labels.pickup')); ?>

                        </td>
                    </tr>
                </tbody>
            </table>
            <table width="90%" border="0" cellpadding="0" cellspacing="0" align="center">
                <tbody>
                    <tr>
                        <td style="font-size: 12px; color: #fffffff;  font-family: 'Open Sans', sans-serif; line-height:18px; vertical-align: bottom; text-align: center;">
                            <?php echo e(trans('labels.name')); ?> : <?php if($orderdata->user_id != null): ?> <?php echo e(@$orderdata['user_info']->name); ?> <?php else: ?> <?php echo e(@$orderdata->name); ?> <?php endif; ?>
                            <br><?php echo e(trans('labels.email')); ?> : <?php if($orderdata->user_id != null): ?> <?php echo e(@$orderdata['user_info']->email); ?> <?php else: ?> <?php echo e(@$orderdata->email); ?> <?php endif; ?>
                            <br><?php echo e(trans('labels.mobile')); ?> : <?php if($orderdata->user_id != null): ?> <?php echo e(@$orderdata['user_info']->mobile); ?> <?php else: ?> <?php echo e(@$orderdata->mobile); ?> <?php endif; ?>
                            <?php if($orderdata->order_type == 1): ?>
                                <br> <?php echo e(trans('labels.address')); ?> : <?php echo e($orderdata->address); ?>

                            <?php endif; ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- /Header -->
            <!-- Table Total -->
            <table width="90%" border="0" cellpadding="2" cellspacing="2" align="center" class="fullPadding">
                <tbody>
                    <?php if($orderdata->order_notes != ""): ?>
                        <div style="padding: 5px 10px 5px 15px;">
                            <h5 style="margin-top: 2px;margin-bottom: 2px;"><?php echo e(trans('labels.order_note')); ?> : <small style="color: gray"><?php echo e($orderdata->order_notes); ?></small></h5>
                        </div>
                    <?php endif; ?>
                    <table width="90%" border="0" cellpadding="0" cellspacing="0" align="center" style="padding-top:2px">
                        <thead>
                            <tr>
                                <th style="font-size:15px;font-family:'Open Sans',sans-serif;color:#fffffff;font-weight:normal;line-height:1;vertical-align:top;padding-bottom:5px;text-align:left;"
                                    width="10%">#</th>
                                <th style="font-size:15px;font-family:'Open Sans',sans-serif;color:#fffffff;font-weight:normal;line-height:1;vertical-align:top;padding-bottom:5px;text-align:left;"
                                    width="50%"><?php echo e(trans('labels.item')); ?></th>
                                <th style="font-size:15px;font-family:'Open Sans',sans-serif;color:#fffffff;font-weight:normal;line-height:1;vertical-align:top;padding-bottom:5px;text-align:right;"
                                    width="10%"><?php echo e(trans('labels.qty')); ?></th>
                                <th style="font-size:15px;font-family:'Open Sans',sans-serif;color:#fffffff;font-weight:normal;line-height:1;vertical-align:top;padding-bottom:5px;text-align:right;"
                                    width="30%"><?php echo e(trans('labels.total')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i=1;
                                foreach ($ordersdetails as $orders) {
                                    $total_price = ($orders['item_price']+$orders['addons_total_price'])*$orders['qty'];
                                    $data[] = array("total_price" => $total_price,);
                            ?>
                            <tr>
                                <td style="font-size:15px;font-family:'Open Sans',sans-serif;color:#fffffff;line-height:18px;vertical-align:top;text-align:left;"><?php echo e($i); ?></td>
                                <td style="font-size:12px;font-family:'Open Sans',sans-serif;color:#fffffff;line-height:18px;vertical-align:top;text-align:left;">
                                    <?php echo e($orders->item_name); ?> [<?php echo e($orders['item_type'] == 1 ? trans('labels.veg') : trans('labels.nonveg')); ?>]
                                    <?php if($orders->variation != ""): ?>
                                        [<?php echo e($orders->variation); ?>]
                                    <?php endif; ?> <br>
                                    <?php
                                        $addons_name = explode(',', $orders->addons_name);
                                        $addons_price = explode(',', $orders->addons_price);
                                        $addonstotal = 0;
                                    ?>
                                    <?php if($orders->addons_id != ""): ?>
                                        <?php $__currentLoopData = $addons_name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <span class="text-muted"><?php echo e($addons_name[$key]); ?> : <span><?php echo e(Helper::currency_format($addons_price[$key])); ?></span></span><br>
                                        <?php $addonstotal += (float)$addons_price[$key]?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </td>
                                <td style="font-size:12px;font-family:'Open Sans',sans-serif;color:#fffffff;line-height:18px;vertical-align:top;text-align:right;"><?php echo e($orders->qty); ?></td>
                                <td style="font-size:12px;font-family:'Open Sans',sans-serif;color:#fffffff;line-height:18px;vertical-align:top;text-align:right;">
                                    
                                    <?php echo e(Helper::currency_format($total_price)); ?>

                                </td>
                            </tr>
                            <?php
                                    $i++;
                                }
                                $order_total = array_sum(array_column(@$data, 'total_price'));
                            ?>
                        </tbody>
                    </table>
                    <table width="90%" border="0" cellpadding="0" cellspacing="0" align="center">
                        <tbody>
                            <tr>
                                <td style="font-size: 15px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right;"
                                    width="70%"><strong><?php echo e(trans('labels.subtotal')); ?></strong></td>
                                <td style="font-size: 15px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right;"
                                    width="30%"><strong><?php echo e(Helper::currency_format($order_total)); ?></strong></td>
                            </tr>
                            <tr>
                                <td style="font-size: 15px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right;"
                                    width="70%"><strong><?php echo e(trans('labels.tax')); ?></strong></td>
                                <td style="font-size: 15px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right;"
                                    width="30%"><strong><?php echo e(Helper::currency_format($orderdata->tax_amount)); ?></strong></td>
                            </tr>
                            <?php if($orderdata->discount_amount > 0): ?>
                                <tr>
                                    <td style="font-size: 15px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right;"
                                    width="70%"><strong><?php echo e(trans('labels.discount')); ?> <?php echo e($orderdata->offer_code != "" ? '('.$orderdata->offer_code.')' : ''); ?></strong></td>
                                    <td style="font-size: 15px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right;"
                                    width="30%"><strong><?php echo e(Helper::currency_format($orderdata->discount_amount)); ?></strong></td>
                                </tr>
                            <?php endif; ?>
                            <?php if($orderdata->delivery_charge > 0): ?>
                                <tr>
                                    <td style="font-size: 15px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right;"
                                    width="70%"><strong><?php echo e(trans('labels.delivery_charge')); ?></strong></td>
                                    <td style="font-size: 15px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right;"
                                    width="30%"><strong><?php echo e(Helper::currency_format($orderdata->delivery_charge)); ?></strong></td>
                                </tr>
                            <?php endif; ?>
                            <tr>
                                <td style="font-size: 15px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right;"
                                    width="70%"><strong><?php echo e(trans('labels.grand_total')); ?></strong></td>
                                <td style="font-size: 15px; font-family: 'Open Sans', sans-serif; color: #000; line-height: 22px; vertical-align: top; text-align:right;"
                                    width="30%"><strong><?php echo e(Helper::currency_format($orderdata->grand_total)); ?></strong></td>
                            </tr>
                        </tbody>
                    </table>
                </tbody>
            </table>
        </div>
    </div>
    <button id="btnPrint" class="hidden-print center"><?php echo e(trans('labels.print')); ?></button>
    <script>
        const $btnPrint = document.querySelector("#btnPrint");
        $btnPrint.addEventListener("click", () => {
            window.print();
        });
    </script>
</body>
<?php /**PATH /home/u204847481/domains/aguarestaurant.de/public_html/resources/views/admin/orders/print.blade.php ENDPATH**/ ?>
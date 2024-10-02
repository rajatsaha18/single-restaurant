<table class="table table-striped table-bordered zero-configuration">
    <thead>
        <tr>
            <th>#</th>
            <th><?php echo e(trans('labels.name')); ?></th>
            <th><?php echo e(trans('labels.designation')); ?></th>
            <th><?php echo e(trans('labels.social_links')); ?></th>
            <th><?php echo e(trans('labels.action')); ?></th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1; ?>
        <?php $__currentLoopData = $getteams; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $team): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr id="dataid<?php echo e($team->id); ?>">
            <td><?php echo $i++; ?></td>
            <td><?php echo e($team->title); ?></td>
            <td><?php echo e($team->subtitle); ?></td>
            <td>
                <a class="btn btn-sm btn-outline-primary" href="<?php echo e($team->fb); ?>" target="_blank"> <i class="fab fa-facebook-square"></i> </a>
                <a class="btn btn-sm btn-outline-primary" href="<?php echo e($team->youtube); ?>" target="_blank"> <i class="fab fa-youtube"></i> </a>
                <a class="btn btn-sm btn-outline-primary" href="<?php echo e($team->insta); ?>" target="_blank"> <i class="fab fa-instagram-square"></i> </a>
            </td>
            <td>
                <a class="btn btn-sm btn-outline-info" href="<?php echo e(URL::to('admin/our-team-'.$team->id)); ?>"><i class="fa-solid fa-pen-to-square"></i></a>
                <a class="btn btn-sm btn-outline-danger" <?php if(env('Environment')=='sendbox'): ?> onclick="myFunction()" <?php else: ?> onclick="Delete('<?php echo e($team->id); ?>','<?php echo e(URL::to('admin/our-team/delete')); ?>')" <?php endif; ?>><i class="fa fa-trash"></i></a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH /home/u913747247/domains/elpasto.de/public_html/resources/views/admin/team/table.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style>

</style>
<div class="container-fluid">
    <h4 class="text-center text-success"><?php echo e(Session::get('message')); ?></h4>
    <div class="row">
        <div class="col-12">

            <div class="card border-0">
                <div class="card-body">
                    <div class="table-responsive" id="table-display">
                        <a href="<?php echo e(route('videoGallery.create')); ?>" class="btn btn-dark mb-3">Add New</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sl</th>
                                    <th>Video</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($loop->iteration); ?></td>
                                    <td>
                                        <iframe width="250" height="150" src="https://www.youtube.com/embed/<?php echo e($video->admin_video); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                    </td>



                                    <td>
                                        <?php if($video->status == 1): ?>
                                            <span class="badge bg-success">Active</span>
                                        <?php else: ?>
                                            <span class="badge bg-danger">Inactive</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="<?php echo e(route('videoGallery.edit', ['id' => $video->id])); ?>" class="btn btn-outline-info btn-sm"><i class="fa fa-edit"></i></a>
                                        <a href="<?php echo e(route('videoGallery.delete', ['id' => $video->id])); ?>" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are You Sure Delete This ?')"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.theme.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u913747247/domains/elpasto.de/public_html/resources/views/admin/videoGallery/index.blade.php ENDPATH**/ ?>
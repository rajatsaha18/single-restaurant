<?php $__env->startSection('content'); ?>
<?php echo $__env->make('admin.breadcrumb', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<style>

</style>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <h4 class="text-center text-success"><?php echo e(Session::get('message')); ?></h4>
            <a href="<?php echo e(route('video.index')); ?>" class="btn btn-info mb-3">Back</a>
            <div class="card border-0">
                <div class="card-body">
                    <form action="<?php echo e(route('video.update',['id' => $video->id])); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" value="<?php echo e($video->title); ?>" class="form-control" placeholder="Title"/>
                        </div>
                        <!--<div class="form-group">-->
                        <!--    <label for="">Image</label>-->
                        <!--    <input type="file" name="image" class="form-control"/>-->
                        <!--    <img src="<?php echo e(asset($video->image)); ?>" alt="image" height="80px" width="80px">-->
                        <!--</div>-->
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" id="summernote" class="form-control"><?php echo e($video->description); ?></textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Video Url</label>
                            <input type="text" name="video" value="<?php echo e($video->video); ?>" class="form-control"/>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control">
                                <option value="1"selected <?php echo e($video->status == '1' ?'selected': ''); ?>>Active</option>
                                <option value="0" <?php echo e($video->status == '0' ?'selected': ''); ?>>Inactive</option>

                            </select>
                        </div>
                        <div class="form-group text-center">
                            <label for=""></label>
                            <input type="submit" class="btn btn-success" value="Update"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
<script>
    $('#summernote').summernote({
      placeholder: 'Hello stand alone ui',
      tabsize: 2,
      height: 120,
      toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'video']],
        ['view', ['fullscreen', 'codeview', 'help']]
      ]
    });
  </script>
<script src="<?php echo e(url(env('ASSETSPATHURL').'admin-assets/assets/js/custom/category.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.theme.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u913747247/domains/elpasto.de/public_html/resources/views/admin/video/edit.blade.php ENDPATH**/ ?>
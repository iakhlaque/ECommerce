<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h4> Add category</h4>
        </div>
        <div class="card-body">
            <form action="<?php echo e(url('insert_category')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col-md-6">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-med-6">
                        <label>Slug</label>
                        <input type="text" class="form-control" name="slug">
                    </div>
                    <div class="col-md-12">
                        <textarea name="description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Status</label>
                        <input type="checkbox" name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>Popular</label>
                        <input type="checkbox" name="popular">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>meta_title</label>
                        <input type="text" class="form-control" name="meta_title">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>meta_desc</label>
                        <input type="text" class="form-control" name="meta_desc" rows="3">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label>meta_keywords</label>
                        <input type="text" class="form-control" name="meta_keywords" rows="3">
                    </div>
                    <div class="col-md-12">
                        <input type="file" name="image" class="form_control">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\ECommerce\ECommerce\resources\views/admin/categories/add.blade.php ENDPATH**/ ?>
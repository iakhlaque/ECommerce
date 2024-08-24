<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h4>Edit Category</h4> </div>
        <div class="card-body">
            <form action="<?php echo e(url('update-category/'.$category->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="row">
                    <div class="col-md-6">
                        <label>Name</label>
                        <input type="text" value="<?php echo e($category->name); ?>" class="form-control" name="name">
                    </div>
                    <div class="col-med-6">
                        <label>Slug</label>
                        <input type="text" value="<?php echo e($category->slug); ?>" class="form-control" name="slug">
                    </div>
                    <div class="col-md-12">
                    <textarea name="description"  rows="3" class="form-control"> <?php echo e($category->description); ?></textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Status</label>
                    <input type="checkbox" <?php echo e($category->status == '1' ? 'checked':'null'); ?> name="status">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Popular</label>
                    <input type="checkbox" <?php echo e($category->popular == '1' ? 'checked':'null'); ?> name="popular">
                </div>
                <div class="col-md-6 mb-3">
                    <label>meta_title</label>
                    <input type="text" value="<?php echo e($category->meta_title); ?>" class="form-control" name="meta_title">
                </div>
                <div class="col-md-12">
                    <label>meta_desc</label>
                    <textarea name="meta_desc"  rows="3" class="form-control"> <?php echo e($category->meta_desc); ?></textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label>meta_keywords</label>
                    <input type="text" value="<?php echo e($category->meta_keywords); ?>" class="form-control" name="meta_keywords" rows="3">
                </div>
                <?php if($category->image): ?>
                <img src="<?php echo e(asset('assets/uploads/category/'.$category->image)); ?>" alt="category image">
                    
                <?php endif; ?>
                <div class="col-md-12">
                    <input type="file" name="image" class="form_control">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </div>
            </form>
            </div>        
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\ECommerce\ECommerce\resources\views/admin/categories/edit.blade.php ENDPATH**/ ?>
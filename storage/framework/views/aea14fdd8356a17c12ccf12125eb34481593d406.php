<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header">
            <h4> Edit Product</h4> </div>
        <div class="card-body">
            <form action="<?php echo e(url('update-product/'.$products->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <select class="form-select" >
                            <option value=""><?php echo e($products->category->name); ?></option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label>Name</label>
                        <input type="text" class="form-control" value="<?php echo e($products->name); ?>" name="name">
                    </div>
                    <div class="col-med-6">
                        <label>Slug</label>
                        <input type="text" class="form-control" value="<?php echo e($products->slug); ?>" name="slug">
                    </div>
                    <div class="col-med-6">
                        <label>Small_Desc</label>
                        <input type="text" class="form-control" value="<?php echo e($products->small_desc); ?>" name="small_desc">
                    </div>
                    <div class="col-md-12">
                    <textarea name="desc"  rows="3"  class="form-control"><?php echo e($products->desc); ?></textarea>
                </div>
                <div class="col-md-6 mb-3">
                    <label>Original_Price</label>
                    <input type="number" class="form-control" value="<?php echo e($products->original_price); ?>" name="original_price">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Selling_Price</label>
                    <input type="number" class="form-control" value="<?php echo e($products->selling_price); ?>" name="selling_price">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Tax</label>
                    <input type="number" class="form-control" value="<?php echo e($products->tax); ?>" name="tax">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Quantity</label>
                    <input type="number" class="form-control" value="<?php echo e($products->qty); ?>" name="qty">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Status</label>
                    <input type="checkbox" <?php echo e($products->status== '1' ? 'checked': ''); ?> name="status">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Trending</label>
                    <input type="checkbox" <?php echo e($products->trending == '1' ? 'checked': ''); ?> name="trending">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Meta_Title</label>
                    <input type="text" class="form-control" value="<?php echo e($products->meta_title); ?>" name="meta_title">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Meta_Desc</label>
                    <input type="text" class="form-control" value="<?php echo e($products->meta_desc); ?>" name="meta_desc" rows="3">
                </div>
                <div class="col-md-6 mb-3">
                    <label>Meta_Keywords</label>
                    <input type="text" class="form-control" value="<?php echo e($products->meta_keywords); ?>" name="meta_keywords" rows="3">
                </div>
                <?php if($products->image): ?>
                <img src="<?php echo e(asset('assets/uploads/products/'.$products->image)); ?>" alt="product image">
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\ECommerce\ECommerce\resources\views/admin/product/edit.blade.php ENDPATH**/ ?>
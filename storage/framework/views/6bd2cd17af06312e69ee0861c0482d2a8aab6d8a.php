
<?php $__env->startSection('title', 'All Brands'); ?>

<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/brands.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section class="brand-section py-5">
        <div class="container">
            
            <div class="category-breadcrumb mb-4 d-flex align-items-center">
                <a href="<?php echo e(route('home')); ?>">Home</a>
                <span class="mx-2">/</span>
                <strong>All Brands</strong>
            </div>

            
            <div class="text-center mb-4">
                <h2 class="fw-bold">Our Brands</h2>
                <p class="text-muted">Explore products from your favorite brands</p>
            </div>

            
            <div class="row">
                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                        <div class="brand-card text-center p-3 border rounded shadow-sm h-100">
                            <a href="<?php echo e(route('shop', ['brand_id' => $brand->id])); ?>" class="d-block">
                                <?php if($brand->logo): ?>
                                    <img src="<?php echo e(asset($brand->logo)); ?>" alt="<?php echo e($brand->name); ?>" class="img-fluid mb-2">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('public/frontEnd/images/no-brand.png')); ?>" alt="<?php echo e($brand->name); ?>"
                                        class="img-fluid mb-2">
                                <?php endif; ?>
                                <h6 class="brand-name mt-2 text-dark"><?php echo e($brand->name); ?></h6>
                            </a>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

            <?php if($brands->isEmpty()): ?>
                <div class="text-center text-muted py-5">
                    <h5>No brands found</h5>
                </div>
            <?php endif; ?>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u737498567/domains/technogeekbd.store/public_html/resources/views/frontEnd/layouts/pages/brands.blade.php ENDPATH**/ ?>
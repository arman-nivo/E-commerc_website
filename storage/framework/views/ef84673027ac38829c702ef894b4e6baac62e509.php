
<?php $__env->startSection('title', 'Shop'); ?>

<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/jquery-ui.css')); ?>" />
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <section class="product-section">
        <div class="container">
            
            <div class="sorting-section">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="category-breadcrumb d-flex align-items-center">
                            <a href="<?php echo e(route('home')); ?>">Home</a>
                            <span>/</span>
                            <strong>Shop</strong>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="showing-data">
                                    <span>Showing <?php echo e($products->firstItem()); ?>–<?php echo e($products->lastItem()); ?> of
                                        <?php echo e($products->total()); ?> Results</span>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mobile-filter-toggle">
                                    <i class="fa fa-list-ul"></i><span>filter</span>
                                </div>

                                <div class="page-sort">
                                    <form action="<?php echo e(url()->current()); ?>" method="GET" class="sort-form">
                                        <select name="sort" class="form-control form-select sort">
                                            <option value="">Sort By</option>
                                            <option value="1" <?php echo e(request('sort') == 1 ? 'selected' : ''); ?>>Product:
                                                Latest</option>
                                            <option value="2" <?php echo e(request('sort') == 2 ? 'selected' : ''); ?>>Product:
                                                Oldest</option>
                                            <option value="3" <?php echo e(request('sort') == 3 ? 'selected' : ''); ?>>Price: High
                                                To Low</option>
                                            <option value="4" <?php echo e(request('sort') == 4 ? 'selected' : ''); ?>>Price: Low
                                                To High</option>
                                            <option value="5" <?php echo e(request('sort') == 5 ? 'selected' : ''); ?>>Name: A-Z
                                            </option>
                                            <option value="6" <?php echo e(request('sort') == 6 ? 'selected' : ''); ?>>Name: Z-A
                                            </option>
                                        </select>

                                        
                                        <input type="hidden" name="min_price" value="<?php echo e(request('min_price')); ?>">
                                        <input type="hidden" name="max_price" value="<?php echo e(request('max_price')); ?>">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="filter-section mt-3">
                <form method="GET" action="<?php echo e(url()->current()); ?>" class="price-filter-form">


                    
                    <input type="hidden" name="sort" value="<?php echo e(request('sort')); ?>">
                    <input type="hidden" id="min_price" name="min_price"
                        value="<?php echo e(request('min_price', $products->min('new_price') ?? 0)); ?>">
                    <input type="hidden" id="max_price" name="max_price"
                        value="<?php echo e(request('max_price', $products->max('new_price') ?? 0)); ?>">
                </form>
            </div>

            
            <div class="row mt-4">
                <div class="col-sm-12">
                    <div class="category-product main_product_inner">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="product_item wist_item wow zoomIn" data-wow-duration="1.5s"
                                data-wow-delay="0.<?php echo e($key); ?>s">
                                <div class="product_item_inner">
                                    <?php if($value->old_price): ?>
                                        <div class="sale-badge">
                                            <div class="sale-badge-inner">
                                                <div class="sale-badge-box">
                                                    <span class="sale-badge-text">
                                                        <?php
                                                            $discount =
                                                                (($value->old_price - $value->new_price) /
                                                                    $value->old_price) *
                                                                100;
                                                        ?>
                                                        <p><?php echo e(number_format($discount, 0)); ?>%</p> ছাড়
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <div class="pro_img">
                                        <a href="<?php echo e(route('product', $value->slug)); ?>">
                                            <img src="<?php echo e(asset($value->image ? $value->image->image : '')); ?>"
                                                alt="<?php echo e($value->name); ?>">
                                        </a>
                                    </div>

                                    <div class="pro_des">
                                        <div class="pro_name">
                                            <a
                                                href="<?php echo e(route('product', $value->slug)); ?>"><?php echo e(Str::limit($value->name, 35)); ?></a>
                                        </div>
                                    </div>
                                </div>

                                
                                <?php
                                    $averageRating = $value->reviews->avg('ratting');
                                    $filledStars = floor($averageRating);
                                    $hasHalfStar = $averageRating - $filledStars >= 0.5;
                                    $emptyStars = 5 - $filledStars - ($hasHalfStar ? 1 : 0);
                                ?>
                                <div class="rating">
                                    <?php for($i = 0; $i < $filledStars; $i++): ?>
                                        <i class="fas fa-star"></i>
                                    <?php endfor; ?>
                                    <?php if($hasHalfStar): ?>
                                        <i class="fas fa-star-half-alt"></i>
                                    <?php endif; ?>
                                    <?php for($i = 0; $i < $emptyStars; $i++): ?>
                                        <i class="far fa-star"></i>
                                    <?php endfor; ?>
                                </div>

                                
                                <div class="pro_price">
                                    <p>
                                        <?php if($value->old_price): ?>
                                            <del>৳ <?php echo e($value->old_price); ?></del>
                                        <?php endif; ?>
                                        ৳ <?php echo e($value->new_price); ?>

                                    </p>
                                </div>

                                
                                <div class="pro_btn">
                                    <div class="cart_btn order_button">
                                        <?php if(!$value->prosizes->isEmpty() || !$value->procolors->isEmpty()): ?>
                                            <a href="<?php echo e(route('product', $value->slug)); ?>"
                                                class="addcartbutton"><span>অর্ডার করুন</span></a>
                                        <?php else: ?>
                                            <a class="addcartbutton" data-id="<?php echo e($value->id); ?>"
                                                data-checkout="yes"><span>অর্ডার করুন</span></a>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

            
            <div class="row mt-3">
                <div class="col-sm-12">
                    <div class="custom_paginate">
                        <?php echo e($products->appends(request()->input())->links('pagination::bootstrap-4')); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>
        $(".sort").change(function() {
            $('#loading').show();
            $(".sort-form").submit();
        });

        // jQuery UI Slider for Price Filter
        $(function() {
            var minPrice = <?php echo e($products->min('new_price') ?? 0); ?>;
            var maxPrice = <?php echo e($products->max('new_price') ?? 0); ?>;
            var currentMin = <?php echo e(request('min_price', $products->min('new_price') ?? 0)); ?>;
            var currentMax = <?php echo e(request('max_price', $products->max('new_price') ?? 0)); ?>;

            $("#slider-range").slider({
                range: true,
                min: minPrice,
                max: maxPrice,
                values: [currentMin, currentMax],
                slide: function(event, ui) {
                    $("#amount").val("৳" + ui.values[0] + " - ৳" + ui.values[1]);
                    $("#min_price").val(ui.values[0]);
                    $("#max_price").val(ui.values[1]);
                }
            });

            $("#amount").val("৳" + $("#slider-range").slider("values", 0) +
                " - ৳" + $("#slider-range").slider("values", 1));
        });
    </script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\New_website\resources\views/frontEnd/layouts/pages/shop.blade.php ENDPATH**/ ?>
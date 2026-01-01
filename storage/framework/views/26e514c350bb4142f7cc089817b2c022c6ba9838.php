 <?php $__env->startSection('title', 'Home'); ?> <?php $__env->startPush('seo'); ?>
<meta name="app-url" content="" />
<meta name="robots" content="index, follow" />
<meta name="description" content="" />
<meta name="keywords" content="" />

<!-- Open Graph data -->
<meta property="og:title" content="" />
<meta property="og:type" content="website" />
<meta property="og:url" content="" />
<meta property="og:image" content="<?php echo e(asset($generalsetting->white_logo)); ?>" />
<meta property="og:description" content="" />
<?php $__env->stopPush(); ?> <?php $__env->startPush('css'); ?>
<link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/owl.carousel.min.css')); ?>" />
<link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/owl.theme.default.min.css')); ?>" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" rel="stylesheet" />
<?php $__env->stopPush(); ?> <?php $__env->startSection('content'); ?>
<style>
    .container {
    max-width: 100% !important;
}
</style>

<!-- slider start -->
<section class="slider-section bg-white">
    <div class="heroSilderBox">
        <div class="row g-3">

            
            <div class="col-lg-7 col-md-12 p-0" id="heroSlider" style="margin-right: 90px;">
                <div class="home-slider-container">
                    <div class="main_slider owl-carousel owl-theme">
                        <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="slider-item">
                                <img src="<?php echo e(asset($slider->image)); ?>" alt="Slider Image" />
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>
            </div>

            
            
            <div class="col-lg-2 d-none d-lg-block">
                <div class="d-flex flex-column gap-3 h-100"  style="justify-content: center;">

                    
                    <?php $__currentLoopData = $rightTopBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e($banner->link ?? '#'); ?>">
                            <img src="<?php echo e(asset($banner->image)); ?>"
                                class="img-fluid rounded"
                                alt="Right Top Banner" 
                                style="width: 100%;height: 42vh;object-fit: revert-layer;border-radius: 18px !important;">
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>

            <div class="col-lg-2 d-none d-lg-block" >
                <div class="d-flex flex-column gap-3 h-100" style="justify-content: center;">

                    
                    <?php $__currentLoopData = $rightBottomBanners; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $banner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e($banner->link ?? '#'); ?>">
                            <img src="<?php echo e(asset($banner->image)); ?>"
                                class="img-fluid rounded"
                                alt="Right Bottom Banner"
                                style="width: 100%;height: 42vh;object-fit: revert-layer;border-radius: 18px !important;">
                        </a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>


        </div>
    </div>
</section>
<!-- slider end -->


 <section class="bottoads_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="bottoads_inner">
                    <?php $__currentLoopData = $sliderbottomads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="ads_item">
                            <a href="<?php echo e($value->link); ?>">
                                <img src="<?php echo e(asset($value->image)); ?>" alt="" />
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section> 

<section class="homeproduct">
    <div class="container" style="width: 100% !important;">
        <div class="row">
            <div class="col-sm-12">
                <div class="sec_title">
                    <h3 class="section-title-header">
                        <div class="timer_inner">
                            <div class="">
                                <span class="section-title-name"> Categories </span>
                            </div>
                        </div>
                    </h3>
                </div>
            </div>
            <div class="col-sm-12">
                <style>
                    .category-slider>div{
                        padding: 20px 0px;
                    }
                </style>
                <div class="category-slider owl-carousel">
                    <?php $__currentLoopData = $menucategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="cat_item">
                            <div class="cat_img">
                                <a href="<?php echo e(route('category', $value->slug)); ?>">
                                    <img src="<?php echo e(asset($value->image)); ?>" alt="" />
                                </a>
                            </div>
                            <div class="cat_name">
                                <a href="<?php echo e(route('category', $value->slug)); ?>">
                                    <?php echo e($value->name); ?>

                                </a>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row">
            <?php $__currentLoopData = $hitdealsbaner; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hotads): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-12">
                    <a href="<?php echo e($hotads->link); ?>?sold=show">
                        <img class="img-fluid w-100" src="<?php echo e($hotads->image); ?>" />
                    </a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>


<section class="homeproduct">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="sec_title">
                    <h3 class="section-title-header">
                        <div class="timer_inner">
                            <div class="">
                                <span class="section-title-name"> Hot Deal </span>
                            </div>

                            <div class="">
                                <div class="offer_timer" id="simple_timer"></div>
                            </div>
                        </div>
                    </h3>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="product_slider owl-carousel">
                    <?php $__currentLoopData = $hotdeal_top; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="product_item wist_item wow zoomIn" data-wow-duration="1.5s"
                            data-wow-delay="0.<?php echo e($key); ?>s">
                            <div class="product_item_inner">
                                <?php if($value->old_price): ?>
                                    <div class="sale-badge">
                                        <div class="sale-badge-inner">
                                            <div class="sale-badge-box">
                                                <span class="sale-badge-text">
                                                    <p>- <?php $discount=(((($value->old_price)-($value->new_price))*100) / ($value->old_price)) ?> <?php echo e(number_format($discount, 0)); ?>%</p>
                                                   
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="pro_img">
                                    <a href="<?php echo e(route('product', $value->slug)); ?>">
                                        <img src="<?php echo e(asset($value->image ? $value->image->image : '')); ?>"
                                            alt="<?php echo e($value->name); ?>" />
                                    </a>
                                </div>
                                <div class="pro_des">
                                    <div class="pro_name">
                                        <a
                                            href="<?php echo e(route('product', $value->slug)); ?>"><?php echo e(Str::limit($value->name, 35)); ?></a>
                                    </div>
                                </div>
                            </div>

                            <div class="price_star">

                                <div class="pro_price">
                                    <p>
                                        <del>৳ <?php echo e($value->old_price); ?></del>
                                            ৳ <?php echo e($value->new_price); ?> <?php if($value->old_price): ?>
                                        <?php endif; ?>
                                    </p>
                                </div>
                                <div>
                                    <?php
                                        $averageRating = $value->reviews->avg('ratting');
                                        $filledStars = floor($averageRating);
                                        $hasHalfStar = $averageRating - $filledStars >= 0.5;
                                        $emptyStars = 5 - $filledStars - ($hasHalfStar ? 1 : 0);
                                    ?>

                                    <?php if($averageRating >= 0 && $averageRating <= 5): ?>
                                        
                                        <?php for($i = 0; $i < $filledStars; $i++): ?>
                                            <i class="fas fa-star"></i>
                                        <?php endfor; ?>

                                        
                                        <?php if($hasHalfStar): ?>
                                            <i class="fas fa-star-half-alt"></i>
                                        <?php endif; ?>

                                        
                                        <?php for($i = 0; $i < $emptyStars; $i++): ?>
                                            <i class="far fa-star"></i>
                                        <?php endfor; ?>
                                    <?php else: ?>
                                        <span>Invalid rating range</span>
                                    <?php endif; ?>
                                </div>

                                
                            </div>
                            

                            
                            <?php if(!$value->prosizes->isEmpty() || !$value->procolors->isEmpty()): ?>
                                <div class="pro_btn">
                                    <div class="cart_btn order_button">
                                        <a href="<?php echo e(route('product', $value->slug)); ?>" class="addcartbutton">
                                            <span>Order Now</span>
                                        </a>
                                    </div>

                                </div>
                            <?php else: ?>
                                <div class="pro_btn">
                                    <div class="cart_btn order_button">
                                        <form action="<?php echo e(route('cart.store')); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <input type="hidden" name="id" value="<?php echo e($value->id); ?>" />
                                            <input type="hidden" name="qty" value="1" />
                                            <button type="submit">Order Now</button>
                                        </form>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="footer_top_ads_area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="sec_title">
                    <h3 class="section-title-header">
                        <div class="timer_inner">
                            <div class="">
                                <span class="section-title-name"> New Collections </span>
                            </div>

                            <div class="">
                                <div class="offer_timer" id="simple_timer"></div>
                            </div>
                        </div>
                    </h3>
                </div>
            </div>

            <div class="col-sm-12">
                <style>
                    .img-fluid {
                            max-width: 100%;
                            height: -webkit-fill-available !important;
                        }
                </style>
                <div class="row g-3">
                    <?php $__currentLoopData = $footertopads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-sm-12 col-md-6 footertop_ads_item">
                            <a href="<?php echo e($value->link); ?>">
                                <img src="<?php echo e(asset($value->image)); ?>" alt="" class="img-fluid"
                                    style="border-radius: 10px" />
                            </a>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
</section>



<section class="homeproduct">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="sec_title">
                    <h3 class="section-title-header">
                        <div class="timer_inner">
                            <div class="">
                                <span class="section-title-name"> All Products </span>
                            </div>

                            <div class="">
                                <div class="offer_timer" id="simple_timer"></div>
                            </div>
                        </div>
                    </h3>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="product_section">
                    <div class="row">
                        <?php $__currentLoopData = $allProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class=" col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
                                <div class="product_item wist_item wow zoomIn" data-wow-duration="1.5s"
                                    data-wow-delay="0.<?php echo e($key); ?>s">
                                    <div class="product_item_inner">

                                        
                                        <?php if($value->old_price): ?>
                                            <div class="sale-badge">
                                                <div class="sale-badge-inner">
                                                    <div class="sale-badge-box">
                                                        <span class="sale-badge-text">
                                                            <p>-
                                                                <?php
                                                                    $discount =
                                                                        (($value->old_price - $value->new_price) *
                                                                            100) /
                                                                        $value->old_price;
                                                                ?>
                                                                <?php echo e(number_format($discount, 0)); ?>%
                                                            </p>
                                                        
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>

                                        
                                        <div class="pro_img">
                                            <a href="<?php echo e(route('product', $value->slug)); ?>">
                                                <img src="<?php echo e(asset($value->image ? $value->image->image : '')); ?>"
                                                    alt="<?php echo e($value->name); ?>" />
                                            </a>
                                        </div>

                                        
                                        <div class="pro_des">
                                            <div class="pro_name">
                                                <a href="<?php echo e(route('product', $value->slug)); ?>">
                                                    <?php echo e(Str::limit($value->name, 35)); ?>

                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                    
                                    <?php
                                        $averageRating = $value->reviews->avg('ratting');
                                        $filledStars = floor($averageRating);
                                        $hasHalfStar = $averageRating - $filledStars >= 0.5;
                                        $emptyStars = 5 - $filledStars - ($hasHalfStar ? 1 : 0);
                                    ?>

                                    <?php if($averageRating >= 0 && $averageRating <= 5): ?>
                                        <div class="rating mb-2">
                                            
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
                                    <?php else: ?>
                                        <span>Invalid rating range</span>
                                    <?php endif; ?>

                                    
                                    <div class="pro_price">
                                        <p>
                                            <?php if($value->old_price): ?>
                                                <del>৳ <?php echo e($value->old_price); ?></del>
                                            <?php endif; ?>
                                            ৳ <?php echo e($value->new_price); ?>

                                        </p>
                                    </div>

                                    
                                    <?php if(!$value->prosizes->isEmpty() || !$value->procolors->isEmpty()): ?>
                                        <div class="pro_btn">
                                            <div class="cart_btn order_button">
                                                <a href="<?php echo e(route('product', $value->slug)); ?>" class="addcartbutton">
                                                    <span>Order Now</span>
                                                </a>
                                            </div>
                                        </div>
                                    <?php else: ?>
                                        <div class="pro_btn">
                                            <div class="cart_btn order_button">
                                                <form action="<?php echo e(route('cart.store')); ?>" method="POST">
                                                    <?php echo csrf_field(); ?>
                                                    <input type="hidden" name="id"
                                                        value="<?php echo e($value->id); ?>" />
                                                    <input type="hidden" name="qty" value="1" />
                                                    <button type="submit">Order Now</button>
                                                </form>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>


                
                <div class="d-flex justify-content-end mt-3">
                    <ul class="pagination">
                        
                        <?php if($allProducts->onFirstPage()): ?>
                            <li class="page-item disabled">
                                <span class="page-link bg-orange text-white border-0">Previous</span>
                            </li>
                        <?php else: ?>
                            <li class="page-item">
                                <a class="page-link bg-orange text-white border-0"
                                    href="<?php echo e($allProducts->previousPageUrl()); ?>" rel="prev">Previous</a>
                            </li>
                        <?php endif; ?>

                        
                        <?php $__currentLoopData = $allProducts->getUrlRange(1, $allProducts->lastPage()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page => $url): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="page-item <?php echo e($allProducts->currentPage() == $page ? 'active' : ''); ?>">
                                <a class="page-link <?php echo e($allProducts->currentPage() == $page ? 'bg-dark text-white' : 'bg-orange text-white'); ?> border-0"
                                    href="<?php echo e($url); ?>"><?php echo e($page); ?></a>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        
                        <?php if($allProducts->hasMorePages()): ?>
                            <li class="page-item">
                                <a class="page-link bg-orange text-white border-0"
                                    href="<?php echo e($allProducts->nextPageUrl()); ?>" rel="next">Next</a>
                            </li>
                        <?php else: ?>
                            <li class="page-item disabled">
                                <span class="page-link bg-orange text-white border-0">Next</span>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>





<?php if($reviews->count() > 0): ?>
    <section class="homeproduct">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="sec_title">
                        <h5 class="text-center text-light py-2" style="background-color:#1d2224">
                            Positive reviews from valued customers
                        </h5>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="customer-review owl-carousel">
                        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="border rounded">
                                <img class="img-fluid w-100" src="<?php echo e(asset($review->image)); ?>" />
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php endif; ?>




<?php $__env->stopSection(); ?> <?php $__env->startPush('script'); ?>
<script src="<?php echo e(asset('public/frontEnd/js/owl.carousel.min.js')); ?>"></script>
<script src="<?php echo e(asset('public/frontEnd/js/jquery.syotimer.min.js')); ?>"></script>

<script>
    $(document).ready(function() {
        $(".main_slider").owlCarousel({
            items: 1,
            loop: true,
            dots: true,
            nav: true,
            rtl: true,
            autoplay: true,
            autoplayHoverPause: false,
            margin: 0,
            mouseDrag: true,
            smartSpeed: 1000,
            autoplayTimeout: 5000,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            navText: [
                "<i class='fa-solid fa-angle-right'></i>",
                "<i class='fa-solid fa-angle-left'></i>"
            ],
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 1
                },
                768: {
                    items: 1
                },
                992: {
                    items: 1
                },
                1200: {
                    items: 1
                }
            }
        });
    });
</script>



<script>
    $(document).ready(function() {
        $(".hotdeals-slider").owlCarousel({
            margin: 15,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 3,
                    nav: true,
                },
                600: {
                    items: 3,
                    nav: false,
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false,
                },
            },
        });
    });
</script>
<script>
    $(document).ready(function() {
        $(".category-slider").owlCarousel({
            margin: 15,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 3,
                    nav: true,
                },
                600: {
                    items: 5,
                    nav: false,
                },
                1000: {
                    items: 8,
                    nav: true,
                    loop: false,
                },
            },
        });

        $(".product_slider").owlCarousel({
            margin: 15,
            items: 6,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,
                    nav: false,
                },
                600: {
                    items: 5,
                    nav: false,
                },
                1000: {
                    items: 5,
                    nav: false,
                },
            },
        });
        $(".customer-review").owlCarousel({
            margin: 8,
            items: 6,
            loop: true,
            dots: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 2,
                    nav: false,
                },
                600: {
                    items: 3,
                    nav: false,
                },
                1000: {
                    items: 5,
                    nav: false,
                },
            },
        });

        $(".brand-slider").owlCarousel({
            margin: 2,
            loop: true,
            dots: false,
            nav: false,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 5,
                    nav: true,
                },
                600: {
                    items: 10,
                    nav: false,
                },
                1000: {
                    items: 15,
                    nav: true,
                    loop: false,
                },
            },
        });
    });
</script>

<script>
    $("#simple_timer").syotimer({
        date: new Date(2015, 0, 1),
        layout: "hms",
        doubleNumbers: false,
        effectType: "opacity",

        periodUnit: "d",
        periodic: true,
        periodInterval: 1,
    });
</script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('frontEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u737498567/domains/technogeekbd.store/public_html/resources/views/frontEnd/layouts/pages/index.blade.php ENDPATH**/ ?>
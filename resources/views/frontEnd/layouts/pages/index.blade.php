@extends('frontEnd.layouts.master') @section('title', 'Home') @push('seo')
<meta name="app-url" content="" />
<meta name="robots" content="index, follow" />
<meta name="description" content="" />
<meta name="keywords" content="" />

<!-- Open Graph data -->
<meta property="og:title" content="" />
<meta property="og:type" content="website" />
<meta property="og:url" content="" />
<meta property="og:image" content="{{ asset($generalsetting->white_logo) }}" />
<meta property="og:description" content="" />
@endpush @push('css')
<link rel="stylesheet" href="{{ asset('public/frontEnd/css/owl.carousel.min.css') }}" />
<link rel="stylesheet" href="{{ asset('public/frontEnd/css/owl.theme.default.min.css') }}" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css" rel="stylesheet" />
@endpush @section('content')
<style>
    .container {
    max-width: 100% !important;
}
</style>

<!-- slider start -->
<section class="slider-section bg-white">
    <div class="heroSilderBox">
        <div class="row g-3">

            {{-- Slider --}}
            <div class="col-lg-7 col-md-12 p-0" id="heroSlider" style="margin-right: 90px;">
                <div class="home-slider-container">
                    <div class="main_slider owl-carousel owl-theme">
                        @foreach ($sliders as $slider)
                            <div class="slider-item">
                                <img src="{{ asset($slider->image) }}" alt="Slider Image" />
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Right side banners --}}
            {{-- Right side banners --}}
            <div class="col-lg-2 d-none d-lg-block">
                <div class="d-flex flex-column gap-3 h-100"  style="justify-content: center;">

                    {{-- Right Top Banner --}}
                    @foreach($rightTopBanners as $banner)
                        <a href="{{ $banner->link ?? '#' }}">
                            <img src="{{ asset($banner->image) }}"
                                class="img-fluid rounded"
                                alt="Right Top Banner" 
                                style="width: 100%;height: 42vh;object-fit: revert-layer;border-radius: 18px !important;">
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-2 d-none d-lg-block" >
                <div class="d-flex flex-column gap-3 h-100" style="justify-content: center;">

                    {{-- Right Bottom Banner --}}
                    @foreach($rightBottomBanners as $banner)
                        <a href="{{ $banner->link ?? '#' }}">
                            <img src="{{ asset($banner->image) }}"
                                class="img-fluid rounded"
                                alt="Right Bottom Banner"
                                style="width: 100%;height: 42vh;object-fit: revert-layer;border-radius: 18px !important;">
                        </a>
                    @endforeach

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
                    @foreach ($sliderbottomads as $key => $value)
                        <div class="ads_item">
                            <a href="{{ $value->link }}">
                                <img src="{{ asset($value->image) }}" alt="" />
                            </a>
                        </div>
                    @endforeach
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
                    @foreach ($menucategories as $key => $value)
                        <div class="cat_item">
                            <div class="cat_img">
                                <a href="{{ route('category', $value->slug) }}">
                                    <img src="{{ asset($value->image) }}" alt="" />
                                </a>
                            </div>
                            <div class="cat_name">
                                <a href="{{ route('category', $value->slug) }}">
                                    {{ $value->name }}
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row">
            @foreach ($hitdealsbaner as $hotads)
                <div class="col-md-12">
                    <a href="{{ $hotads->link }}?sold=show">
                        <img class="img-fluid w-100" src="{{ $hotads->image }}" />
                    </a>
                </div>
            @endforeach
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
                    @foreach ($hotdeal_top as $key => $value)
                        <div class="product_item wist_item wow zoomIn" data-wow-duration="1.5s"
                            data-wow-delay="0.{{ $key }}s">
                            <div class="product_item_inner">
                                @if ($value->old_price)
                                    <div class="sale-badge">
                                        <div class="sale-badge-inner">
                                            <div class="sale-badge-box">
                                                <span class="sale-badge-text">
                                                    <p>- @php $discount=(((($value->old_price)-($value->new_price))*100) / ($value->old_price)) @endphp {{ number_format($discount, 0) }}%</p>
                                                   
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="pro_img">
                                    <a href="{{ route('product', $value->slug) }}">
                                        <img src="{{ asset($value->image ? $value->image->image : '') }}"
                                            alt="{{ $value->name }}" />
                                    </a>
                                </div>
                                <div class="pro_des">
                                    <div class="pro_name">
                                        <a
                                            href="{{ route('product', $value->slug) }}">{{ Str::limit($value->name, 35) }}</a>
                                    </div>
                                </div>
                            </div>

                            <div class="price_star">

                                <div class="pro_price">
                                    <p>
                                        <del>৳ {{ $value->old_price }}</del>
                                            ৳ {{ $value->new_price }} @if ($value->old_price)
                                        @endif
                                    </p>
                                </div>
                                <div>
                                    @php
                                        $averageRating = $value->reviews->avg('ratting');
                                        $filledStars = floor($averageRating);
                                        $hasHalfStar = $averageRating - $filledStars >= 0.5;
                                        $emptyStars = 5 - $filledStars - ($hasHalfStar ? 1 : 0);
                                    @endphp

                                    @if ($averageRating >= 0 && $averageRating <= 5)
                                        {{-- Filled stars --}}
                                        @for ($i = 0; $i < $filledStars; $i++)
                                            <i class="fas fa-star"></i>
                                        @endfor

                                        {{-- Half star --}}
                                        @if ($hasHalfStar)
                                            <i class="fas fa-star-half-alt"></i>
                                        @endif

                                        {{-- Empty stars --}}
                                        @for ($i = 0; $i < $emptyStars; $i++)
                                            <i class="far fa-star"></i>
                                        @endfor
                                    @else
                                        <span>Invalid rating range</span>
                                    @endif
                                </div>

                                
                            </div>
                            

                            
                            @if (!$value->prosizes->isEmpty() || !$value->procolors->isEmpty())
                                <div class="pro_btn">
                                    <div class="cart_btn order_button">
                                        <a href="{{ route('product', $value->slug) }}" class="addcartbutton">
                                            <span>Order Now</span>
                                        </a>
                                    </div>

                                </div>
                            @else
                                <div class="pro_btn">
                                    <div class="cart_btn order_button">
                                        <form action="{{ route('cart.store') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $value->id }}" />
                                            <input type="hidden" name="qty" value="1" />
                                            <button type="submit">Order Now</button>
                                        </form>
                                    </div>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- footertop_ads --}}
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
                    @foreach ($footertopads as $key => $value)
                        <div class="col-sm-12 col-md-6 footertop_ads_item">
                            <a href="{{ $value->link }}">
                                <img src="{{ asset($value->image) }}" alt="" class="img-fluid"
                                    style="border-radius: 10px" />
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

{{-- all products --}}

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
                        @foreach ($allProducts as $key => $value)
                            <div class=" col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12 mb-4">
                                <div class="product_item wist_item wow zoomIn" data-wow-duration="1.5s"
                                    data-wow-delay="0.{{ $key }}s">
                                    <div class="product_item_inner">

                                        {{-- Discount badge  col-custom-5 --}}
                                        @if ($value->old_price)
                                            <div class="sale-badge">
                                                <div class="sale-badge-inner">
                                                    <div class="sale-badge-box">
                                                        <span class="sale-badge-text">
                                                            <p>-
                                                                @php
                                                                    $discount =
                                                                        (($value->old_price - $value->new_price) *
                                                                            100) /
                                                                        $value->old_price;
                                                                @endphp
                                                                {{ number_format($discount, 0) }}%
                                                            </p>
                                                        
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif

                                        {{-- Product Image --}}
                                        <div class="pro_img">
                                            <a href="{{ route('product', $value->slug) }}">
                                                <img src="{{ asset($value->image ? $value->image->image : '') }}"
                                                    alt="{{ $value->name }}" />
                                            </a>
                                        </div>

                                        {{-- Product Name --}}
                                        <div class="pro_des">
                                            <div class="pro_name">
                                                <a href="{{ route('product', $value->slug) }}">
                                                    {{ Str::limit($value->name, 35) }}
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                    {{-- Star Rating --}}
                                    @php
                                        $averageRating = $value->reviews->avg('ratting');
                                        $filledStars = floor($averageRating);
                                        $hasHalfStar = $averageRating - $filledStars >= 0.5;
                                        $emptyStars = 5 - $filledStars - ($hasHalfStar ? 1 : 0);
                                    @endphp

                                    @if ($averageRating >= 0 && $averageRating <= 5)
                                        <div class="rating mb-2">
                                            {{-- Filled stars --}}
                                            @for ($i = 0; $i < $filledStars; $i++)
                                                <i class="fas fa-star"></i>
                                            @endfor

                                            {{-- Half star --}}
                                            @if ($hasHalfStar)
                                                <i class="fas fa-star-half-alt"></i>
                                            @endif

                                            {{-- Empty stars --}}
                                            @for ($i = 0; $i < $emptyStars; $i++)
                                                <i class="far fa-star"></i>
                                            @endfor
                                        </div>
                                    @else
                                        <span>Invalid rating range</span>
                                    @endif

                                    {{-- Product Price --}}
                                    <div class="pro_price">
                                        <p>
                                            @if ($value->old_price)
                                                <del>৳ {{ $value->old_price }}</del>
                                            @endif
                                            ৳ {{ $value->new_price }}
                                        </p>
                                    </div>

                                    {{-- Order Button --}}
                                    @if (!$value->prosizes->isEmpty() || !$value->procolors->isEmpty())
                                        <div class="pro_btn">
                                            <div class="cart_btn order_button">
                                                <a href="{{ route('product', $value->slug) }}" class="addcartbutton">
                                                    <span>Order Now</span>
                                                </a>
                                            </div>
                                        </div>
                                    @else
                                        <div class="pro_btn">
                                            <div class="cart_btn order_button">
                                                <form action="{{ route('cart.store') }}" method="POST">
                                                    @csrf
                                                    <input type="hidden" name="id"
                                                        value="{{ $value->id }}" />
                                                    <input type="hidden" name="qty" value="1" />
                                                    <button type="submit">Order Now</button>
                                                </form>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>


                {{-- Pagination --}}
                <div class="d-flex justify-content-end mt-3">
                    <ul class="pagination">
                        {{-- Previous Page Link --}}
                        @if ($allProducts->onFirstPage())
                            <li class="page-item disabled">
                                <span class="page-link bg-orange text-white border-0">Previous</span>
                            </li>
                        @else
                            <li class="page-item">
                                <a class="page-link bg-orange text-white border-0"
                                    href="{{ $allProducts->previousPageUrl() }}" rel="prev">Previous</a>
                            </li>
                        @endif

                        {{-- Pagination Elements --}}
                        @foreach ($allProducts->getUrlRange(1, $allProducts->lastPage()) as $page => $url)
                            <li class="page-item {{ $allProducts->currentPage() == $page ? 'active' : '' }}">
                                <a class="page-link {{ $allProducts->currentPage() == $page ? 'bg-dark text-white' : 'bg-orange text-white' }} border-0"
                                    href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach

                        {{-- Next Page Link --}}
                        @if ($allProducts->hasMorePages())
                            <li class="page-item">
                                <a class="page-link bg-orange text-white border-0"
                                    href="{{ $allProducts->nextPageUrl() }}" rel="next">Next</a>
                            </li>
                        @else
                            <li class="page-item disabled">
                                <span class="page-link bg-orange text-white border-0">Next</span>
                            </li>
                        @endif
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>


{{-- <section>
    <div class="container">
        <div class="row">
            @foreach ($homepageads as $homeads)
                <div class="col-md-12">
                    <a href="{{ $homeads->link }}?sold=show">
                        <img class="img-fluid w-100" src="{{ $homeads->image }}" />
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            @foreach ($homepageads2 as $homeads2)
                <div class="col-md-12">
                    <a href="{{ $homeads2->link }}?sold=show">
                        <img class="img-fluid w-100" src="{{ $homeads2->image }}" />
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</section> --}}


@if ($reviews->count() > 0)
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
                        @foreach ($reviews as $review)
                            <div class="border rounded">
                                <img class="img-fluid w-100" src="{{ asset($review->image) }}" />
                            </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </section>
@endif


{{-- <section class="homeproduct">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="sec_title">
                    <h3 class="section-title-header">
                        <div class="timer_inner">
                            <div class="">
                                <span class="section-title-name"> Top Brands </span>
                            </div>
                        </div>
                    </h3>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="brand-slider owl-carousel">
                    @foreach ($brands as $key => $value)
                        <div>
                            <div class="brand_img">
                                <img src="{{ asset($value->image) }}" alt="" />
                            </div>
                            <div class="cat_name">
                                {{ $value->name }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section> --}}

@endsection @push('script')
<script src="{{ asset('public/frontEnd/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/frontEnd/js/jquery.syotimer.min.js') }}"></script>

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
@endpush

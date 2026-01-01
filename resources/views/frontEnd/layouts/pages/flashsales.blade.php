@extends('frontEnd.layouts.master')
@section('title', 'Flash Sales')

@push('css')
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/jquery-ui.css') }}" />
@endpush

@section('content')
    <section class="product-section">
        <div class="container">
            {{-- Sorting & Breadcrumb --}}
            <div class="sorting-section">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="category-breadcrumb d-flex align-items-center">
                            <a href="{{ route('home') }}">Home</a>
                            <span>/</span>
                            <strong>Flash Sales</strong>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="showing-data">
                                    <span>Showing {{ $products->firstItem() }}–{{ $products->lastItem() }} of
                                        {{ $products->total() }} Results</span>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="mobile-filter-toggle">
                                    <i class="fa fa-list-ul"></i><span>filter</span>
                                </div>

                                <div class="page-sort">
                                    <form action="{{ url()->current() }}" method="GET" class="sort-form">
                                        <select name="sort" class="form-control form-select sort">
                                            <option value="">Sort By</option>
                                            <option value="1" {{ request('sort') == 1 ? 'selected' : '' }}>Product:
                                                Latest</option>
                                            <option value="2" {{ request('sort') == 2 ? 'selected' : '' }}>Product:
                                                Oldest</option>
                                            <option value="3" {{ request('sort') == 3 ? 'selected' : '' }}>Price: High
                                                To Low</option>
                                            <option value="4" {{ request('sort') == 4 ? 'selected' : '' }}>Price: Low
                                                To High</option>
                                            <option value="5" {{ request('sort') == 5 ? 'selected' : '' }}>Name: A-Z
                                            </option>
                                            <option value="6" {{ request('sort') == 6 ? 'selected' : '' }}>Name: Z-A
                                            </option>
                                        </select>

                                        {{-- Preserve min/max price --}}
                                        <input type="hidden" name="min_price" value="{{ request('min_price') }}">
                                        <input type="hidden" name="max_price" value="{{ request('max_price') }}">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Price Range Filter --}}
            <div class="filter-section mt-3">
                <form method="GET" action="{{ url()->current() }}" class="price-filter-form">

                    {{-- Preserve sort --}}
                    <input type="hidden" name="sort" value="{{ request('sort') }}">
                    <input type="hidden" id="min_price" name="min_price"
                        value="{{ request('min_price', $products->min('new_price') ?? 0) }}">
                    <input type="hidden" id="max_price" name="max_price"
                        value="{{ request('max_price', $products->max('new_price') ?? 0) }}">
                </form>
            </div>

            {{-- Products Section --}}
            <div class="row mt-4">
                <div class="col-sm-12">
                    <div class="offer_timer" id="simple_timer"></div>
                </div>

                <div class="col-sm-12">
                    <div class="category-product main_product_inner">
                        @foreach ($products as $key => $value)
                            <div class="product_item wist_item wow zoomIn" data-wow-duration="1.5s"
                                data-wow-delay="0.{{ $key }}s">
                                <div class="product_item_inner">
                                    @if ($value->old_price)
                                        <div class="sale-badge">
                                            <div class="sale-badge-inner">
                                                <div class="sale-badge-box">
                                                    <span class="sale-badge-text">
                                                        @php
                                                            $discount =
                                                                (($value->old_price - $value->new_price) /
                                                                    $value->old_price) *
                                                                100;
                                                        @endphp
                                                        <p>{{ number_format($discount, 0) }}%</p> ছাড়
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="pro_img">
                                        <a href="{{ route('product', $value->slug) }}">
                                            <img src="{{ asset($value->image ? $value->image->image : '') }}"
                                                alt="{{ $value->name }}">
                                        </a>
                                    </div>

                                    <div class="pro_des">
                                        <div class="pro_name">
                                            <a
                                                href="{{ route('product', $value->slug) }}">{{ Str::limit($value->name, 35) }}</a>
                                        </div>
                                    </div>
                                </div>

                                {{-- Star Ratings --}}
                                @php
                                    $averageRating = $value->reviews->avg('ratting');
                                    $filledStars = floor($averageRating);
                                    $hasHalfStar = $averageRating - $filledStars >= 0.5;
                                    $emptyStars = 5 - $filledStars - ($hasHalfStar ? 1 : 0);
                                @endphp
                                <div class="rating">
                                    @for ($i = 0; $i < $filledStars; $i++)
                                        <i class="fas fa-star"></i>
                                    @endfor
                                    @if ($hasHalfStar)
                                        <i class="fas fa-star-half-alt"></i>
                                    @endif
                                    @for ($i = 0; $i < $emptyStars; $i++)
                                        <i class="far fa-star"></i>
                                    @endfor
                                </div>

                                {{-- Price --}}
                                <div class="pro_price">
                                    <p>
                                        @if ($value->old_price)
                                            <del>৳ {{ $value->old_price }}</del>
                                        @endif
                                        ৳ {{ $value->new_price }}
                                    </p>
                                </div>

                                {{-- Add to Cart / Order --}}
                                <div class="pro_btn">
                                    <div class="cart_btn order_button">
                                        @if (!$value->prosizes->isEmpty() || !$value->procolors->isEmpty())
                                            <a href="{{ route('product', $value->slug) }}"
                                                class="addcartbutton"><span>অর্ডার করুন</span></a>
                                        @else
                                            <a class="addcartbutton" data-id="{{ $value->id }}"
                                                data-checkout="yes"><span>অর্ডার করুন</span></a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Pagination --}}
            <div class="row">
                <div class="col-sm-12">
                    <div class="custom_paginate">
                        {{ $products->appends(request()->input())->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
    <script>
        $(".sort").change(function() {
            $('#loading').show();
            $(".sort-form").submit();
        });

        // jQuery UI Slider for Price Filter
        $(function() {
            var minPrice = {{ $products->min('new_price') ?? 0 }};
            var maxPrice = {{ $products->max('new_price') ?? 0 }};
            var currentMin = {{ request('min_price', $products->min('new_price') ?? 0) }};
            var currentMax = {{ request('max_price', $products->max('new_price') ?? 0) }};

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

        $("#simple_timer").syotimer({
            date: new Date(2025, 11, 31),
            layout: "hms",
            doubleNumbers: false,
            effectType: "opacity",
            periodUnit: "d",
            periodic: true,
            periodInterval: 1,
        });
    </script>
@endpush

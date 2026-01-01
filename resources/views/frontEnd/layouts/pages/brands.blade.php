@extends('frontEnd.layouts.master')
@section('title', 'All Brands')

@push('css')
    <link rel="stylesheet" href="{{ asset('public/frontEnd/css/brands.css') }}">
@endpush

@section('content')
    <section class="brand-section py-5">
        <div class="container">
            {{-- Breadcrumb --}}
            <div class="category-breadcrumb mb-4 d-flex align-items-center">
                <a href="{{ route('home') }}">Home</a>
                <span class="mx-2">/</span>
                <strong>All Brands</strong>
            </div>

            {{-- Page Header --}}
            <div class="text-center mb-4">
                <h2 class="fw-bold">Our Brands</h2>
                <p class="text-muted">Explore products from your favorite brands</p>
            </div>

            {{-- Brands Grid --}}
            <div class="row">
                @foreach ($brands as $brand)
                    <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                        <div class="brand-card text-center p-3 border rounded shadow-sm h-100">
                            <a href="{{ route('shop', ['brand_id' => $brand->id]) }}" class="d-block">
                                @if ($brand->logo)
                                    <img src="{{ asset($brand->logo) }}" alt="{{ $brand->name }}" class="img-fluid mb-2">
                                @else
                                    <img src="{{ asset('public/frontEnd/images/no-brand.png') }}" alt="{{ $brand->name }}"
                                        class="img-fluid mb-2">
                                @endif
                                <h6 class="brand-name mt-2 text-dark">{{ $brand->name }}</h6>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            @if ($brands->isEmpty())
                <div class="text-center text-muted py-5">
                    <h5>No brands found</h5>
                </div>
            @endif
        </div>
    </section>
@endsection

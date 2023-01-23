@extends('layouts.admin.master')

@section('title')
    Product
    {{ $title }}
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/range-slider.css') }}">
@endpush

@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>Product</h3>
        @endslot
        <li class="breadcrumb-item">ECommerce</li>
        <li class="breadcrumb-item active">Product</li>
    @endcomponent

    <div class="container-fluid product-wrapper">
        <div class="product-grid">

            <div class="product-wrapper-grid">
                <h2 class="text-center">{{ $gallery->title }}</h2>

                <div class="row">
                    @foreach ($gallery->galleryDetalis as $galler)
                        <div class="col-xl-3 col-sm-6 xl-4">
                            <div class="card">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img class="img-fluid" src="{{ $galler->getFirstMediaUrl('galleryDetails') }}"
                                            alt="" />
                                        <div class="product-hover">

                                            <ul>
                                                <li>
                                                    <a href="{{ route('galleriesgDetails.deleteImage', $galler->id) }}"><i class="icon-remove-sign"></i></a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('wellBeingDetails.edit', $galler->id) }}"><i
                                                            class="icon-eye"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-details">
                                        <h4>{{ $galler->title }} {{ $galler->getFirstMedia() }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>


    @push('scripts')
        <script src="{{ asset('assets/js/range-slider/ion.rangeSlider.min.js') }}"></script>
        <script src="{{ asset('assets/js/range-slider/rangeslider-script.js') }}"></script>
        <script src="{{ asset('assets/js/touchspin/vendors.min.js') }}"></script>
        <script src="{{ asset('assets/js/touchspin/touchspin.js') }}"></script>
        <script src="{{ asset('assets/js/touchspin/input-groups.min.js') }}"></script>
        <script src="{{ asset('assets/js/owlcarousel/owl.carousel.js') }}"></script>
        <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
        <script src="{{ asset('assets/js/select2/select2-custom.js') }}"></script>
        <script src="{{ asset('assets/js/tooltip-init.js') }}"></script>
        <script src="{{ asset('assets/js/product-tab.js') }}"></script>
    @endpush
@endsection

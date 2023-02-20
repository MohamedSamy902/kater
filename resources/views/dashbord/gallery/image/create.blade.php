@extends('layouts.admin.master')

@section('title')
    {{ __('master.add_article') }}
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/select2.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/select2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owlcarousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/range-slider.css') }}">
@endpush

@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3></h3>
        @endslot

        {{-- <li class="breadcrumb-item"><a href="{{ route('abouts.index') }}">{{ __('master.article') }}</a></li> --}}
        {{-- <li class="breadcrumb-item active">{{ __('master.add_article') }}</li> --}}
    @endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>{{ __('master.data') }}</h5>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" novalidate="" method="post"
                            action="{{ route('galleriesgDetails.store') }}" enctype="multipart/form-data">
                            @csrf

                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label class="form-label" for="validationCustom01">{{ __('master.title_en') }}</label>
                                    <input class="form-control" id="validationCustom01" type="text" name="title"
                                        value="" />
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationCustom02">{{ __('master.title_ar') }}</label>
                                    <input class="form-control" id="validationCustom02" type="text" name="title_ar"
                                        value="" />
                                    <input type="hidden" value="{{ $gallery }}" name="galleries_id">
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>
                            </div>



                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationCustom02">{{ __('master.order_by') }}</label>
                                <input class="form-control" id="validationCustom02" type="text" name="order_by"
                                    value="{{ old('order_by') ? old('order_by') : '' }}" />
                                <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                    data-bs-target=".bd-example-modal-lg">Select Image</button>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">

                                                    @foreach ($images as $galler)
                                                        <div class="col-3 gallary{{ $galler->id }}">
                                                            <div class="card">
                                                                <div class="product-box">
                                                                    <div class="product-img">
                                                                        <img id="ImagePreview"
                                                                            class="img-fluid ImagePreview"
                                                                            src="{{ url('media/' . $galler->id . '/' . $galler->file_name) }}"
                                                                            alt="" />
                                                                        <div class="product-hover">
                                                                            <ul>
                                                                                <li class="addImage"
                                                                                    data-id="{{ $galler->id }}">
                                                                                    <a><i class="fa fa-plus"></i></a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                    data-bs-target=".vide-model">Select Video</button>
                                <div class="modal fade vide-model" tabindex="-1" role="dialog"
                                    aria-labelledby="videoModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="videoModalLabel">Select Video</h4>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">

                                                    @foreach ($videos as $video)
                                                        <div class="col-3 gallary{{ $video->id }}">
                                                            <div class="card">
                                                                <div class="product-box">
                                                                    <div class="">

                                                                        <video width="100%" id="ImagePreview"
                                                                            class="ImagePreview"  controls
                                                                            src="{{ url('media/' . $video->id . '/' . $video->file_name) }}">
                                                                            <source src="{{ url('media/' . $video->id . '/' . $video->file_name) }}" type="video/mp4">
                                                                            <source src="{{ url('media/' . $video->id . '/' . $video->file_name) }}" type="video/ogg">
                                                                        </video>
                                                                        <div class="product-hover">
                                                                            <ul>
                                                                                <li class="addImage"
                                                                                    data-id="{{ $video->id }}">
                                                                                    <a><i class="fa fa-plus"></i></a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" name="attachments[]" id="attachments">


                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationCustom10">{{ __('master.image') }}</label>
                                    <input class="form-control" id="validationCustom10" type="file"
                                        aria-label="file example" name="galleryDetails[]" multiple />
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>
                            </div>

                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationCustom10">{{ __('master.video') }}</label>
                                    <input class="form-control" id="validationCustom10" type="file"
                                        aria-label="file example" name="galleryVideo[]" multiple />
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>
                            </div>


                            <button class="btn btn-primary" type="submit">{{ __('master.save') }}</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


    @push('scripts')
        <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
        <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
        <script src="{{ asset('assets/js/select2/select2-custom.js') }}"></script>
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

        <script>
            var newArray = [];

            $(".addImage").click(function() {

                var id = this.getAttribute("data-id")
                $(".gallary" + id).css('display', 'none');

                newArray.push(id);
                console.log(newArray);
                $('#attachments').val(newArray);

            });
        </script>
    @endpush
@endsection

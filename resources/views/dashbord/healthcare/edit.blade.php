@extends('layouts.admin.master')

@section('title')
    {{ __('master.add_healthcare') }}
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/select2.css') }}" />
@endpush

@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3></h3>
        @endslot

        {{-- <li class="breadcrumb-item"><a href="{{ route('abouts.index') }}">{{ __('master.healthcare') }}</a></li> --}}
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
                        <form class="needs-validation" method="post"
                            action="{{ route('healthcare.update', $healthcare->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('patch')


                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label class="form-label" for="validationCustom01">{{ __('master.title_en') }}</label>
                                    <input class="form-control" id="validationCustom01" type="text" name="title"
                                        required=""
                                        value="{{ old('title') ? old('title') : $healthcare->getTranslation('title', 'en') }}" />
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationCustom02">{{ __('master.title_ar') }}</label>
                                    <input class="form-control" id="validationCustom02" type="text" name="title_ar"
                                        required=""
                                        value="{{ old('title_ar') ? old('title_ar') : $healthcare->getTranslation('title', 'ar') }}" />
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>
                            </div>

                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label"
                                        for="validationCustom03">{{ __('master.content_en') }}</label>
                                    <textarea id="editor1" cols="30" rows="10" class="form-control" id="validationCustom03" type="text"
                                        name="content" required="">{{ old('content') ? old('content') : $healthcare->getTranslation('content', 'en') }}</textarea>
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>
                            </div>
                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label"
                                        for="validationCustom04">{{ __('master.content_ar') }}</label>
                                    <textarea id="editor2" cols="30" rows="10" class="form-control" id="validationCustom04" type="text"
                                        name="content_ar" required="">{{ old('content_ar') ? old('content_ar') : $healthcare->getTranslation('content', 'ar') }}</textarea>
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>
                            </div>

                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label"
                                        for="validationCustom03">Short Content En</label>
                                    <textarea rows="5" class="form-control" id="validationCustom03" type="text" name="short_content"
                                        >{{ old('short_content') ? old('short_content') : $healthcare->getTranslation('short_content', 'en') }}</textarea>
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>
                            </div>
                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label"
                                        for="validationCustom04">Short Content Ar</label>
                                    <textarea rows="5" class="form-control" id="validationCustom04" type="text" name="short_content_ar"
                                        >{{ old('short_content_ar') ? old('short_content_ar') : $healthcare->getTranslation('short_content', 'ar') }}</textarea>
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>
                            </div>


                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label class="form-label"
                                        for="validationCustom01">{{ __('master.convoys_en') }}</label>
                                    <input class="form-control" id="validationCustom01" type="text" name="convoys"
                                        required=""
                                        value="{{ old('convoys') ? old('convoys') : $healthcare->getTranslation('convoys', 'en') }}" />
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label"
                                        for="validationCustom02">{{ __('master.convoys_ar') }}</label>
                                    <input class="form-control" id="validationCustom02" type="text" name="convoys_ar"
                                        required=""
                                        value="{{ old('convoys_ar') ? old('convoys_ar') : $healthcare->getTranslation('convoys', 'ar') }}" />
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label class="form-label"
                                        for="validationCustom01">{{ __('master.services_en') }}</label>
                                    <input class="form-control" id="validationCustom01" type="text" name="services"
                                        required=""
                                        value="{{ old('services') ? old('services') : $healthcare->getTranslation('services', 'en') }}" />
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label"
                                        for="validationCustom02">{{ __('master.services_ar') }}</label>
                                    <input class="form-control" id="validationCustom02" type="text"
                                        name="services_ar" required=""
                                        value="{{ old('services_ar') ? old('services_ar') : $healthcare->getTranslation('services', 'ar') }}" />
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>
                            </div>

                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationDefault06">{{ __('master.status') }}</label>
                                    <select class="form-select" id="validationDefault06" name="status">
                                        <option value="active"  {{ $healthcare->status == 'active' ? 'selected' : '' }}> Active</option>
                                        <option value="inactive" {{ $healthcare->status == 'inactive' ? 'selected' : '' }}> InActive</option>
                                    </select>
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationCustom02">{{ __('master.order_by') }}</label>
                                <input class="form-control" id="validationCustom02" type="text" name="order_by" value="{{ old('order_by') ? old('order_by') : $healthcare->order_by }}" />
                                <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                            </div>


                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationCustom10">{{ __('master.image') }}</label>
                                    <input class="form-control" id="validationCustom10" type="file"
                                        aria-label="file example" name="healthcarePhoto" />
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>
                            </div>
                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationCustom10">{{ __('master.video') }}</label>
                                    <input class="form-control" id="validationCustom10" type="file"
                                        aria-label="file example" name="healthcarevideo" />
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>
                            </div>

                            <img src="{{ $healthcare->getFirstMediaUrl('healthcareImage ') }}" alt="">


                            <button class="btn btn-primary" type="submit">{{ __('master.save') }}</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


    @push('scripts')
        <script src="{{ asset('assets/js/editor/ckeditor/ckeditor.js') }}"></script>
        <script src="{{ asset('assets/js/editor/ckeditor/adapters/jquery.js') }}"></script>
        <script src="{{ asset('assets/js/editor/ckeditor/styles.js') }}"></script>
        <script src="{{ asset('assets/js/editor/ckeditor/ckeditor.custom.js') }}"></script>
        <script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
        <script src="{{ asset('assets/js/select2/select2.full.min.js') }}"></script>
        <script src="{{ asset('assets/js/select2/select2-custom.js') }}"></script>
    @endpush
@endsection

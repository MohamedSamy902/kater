@extends('layouts.admin.master')

@section('title')
    {{ __('master.edit_event') }}
@endsection

@push('css')
@endpush

@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3></h3>
        @endslot

        {{-- <li class="breadcrumb-item"><a href="{{ route('galleries.index') }}">{{ __('master.event') }}</a></li> --}}
        <li class="breadcrumb-item active">{{ __('master.edit_event') }}</li>
    @endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>{{ __('master.data') }}</h5>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" novalidate="" method="post" action="{{ route('events.update', $event->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('patch')

                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label class="form-label" for="validationCustom01">{{ __('master.title_en') }}</label>
                                    <input class="form-control" id="validationCustom01" type="text" name="title"  required="" value="{{ old('title') ? old('title') : $event->getTranslation('title', 'en') }}" />
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationCustom02">{{ __('master.title_ar') }}</label>
                                    <input class="form-control" id="validationCustom02" type="text" name="title_ar" required="" value="{{ old('title_ar') ? old('title_ar') : $event->getTranslation('title', 'ar') }}" />
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>
                            </div>

                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label"
                                        for="validationCustom03">{{ __('master.content_en') }}</label>
                                    <textarea rows="5" class="form-control" id="validationCustom03" type="text" name="content"
                                        >{{ old('content') ? old('content') : $event->getTranslation('content', 'en') }}</textarea>
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>
                            </div>
                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label"
                                        for="validationCustom04">{{ __('master.content_ar') }}</label>
                                    <textarea rows="5" class="form-control" id="validationCustom04" type="text" name="content_ar"
                                        >{{ old('content_ar') ? old('content_ar') : $event->getTranslation('content', 'ar') }}</textarea>
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>
                            </div>
                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationCustom5">{{ __('master.link') }}</label>
                                    <input class="form-control" id="validationCustom5" type="text"
                                        aria-label="file example" name="link" value="{{ old('link') ? old('link') : $event->link }}"/>
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>

                            </div>



                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationDefault06">{{ __('master.status') }}</label>
                                    <select class="form-select" id="validationDefault06" name="status">
                                        <option value="active"  {{ $event->status == 'active' ? 'selected' : '' }}> Active</option>
                                        <option value="inactive" {{ $event->status == 'inactive' ? 'selected' : '' }}> InActive</option>
                                    </select>
                                    <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                    <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                                </div>
                            </div>




                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationCustom02">{{ __('master.order_by') }}</label>
                                <input class="form-control" id="validationCustom02" type="text" name="order_by" value="{{ old('order_by') ? old('order_by') : $event->order_by }}" />
                                <div class="valid-feedback">{{ __('validation.valid_feedback') }}</div>
                                <div class="invalid-feedback">{{ __('validation.invalid_feedback') }}</div>
                            </div>

                            @include('dashbord.image')


                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label"
                                        for="validationCustom10">{{ __('master.image') }}</label>
                                    <input class="form-control" id="validationCustom10" type="file"
                                        aria-label="file example" name="event"/>
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
    @endpush
@endsection

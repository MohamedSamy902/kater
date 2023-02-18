@extends('site.layout.master')

@section('content')
    <!--Gallery Page Start-->
    <section class="gallery-page">
        <h1 class="text-center pb-3">{{ $gall->title }}</h1>
        <div class="container">
            <div class="pb-5 text-center">{!! $gall->content !!}</div>

            <div class="row">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button style="text-transform: unset;" class="nav-link active" id="nav-Photos-tab" data-bs-toggle="tab" data-bs-target="#nav-Photos"
                            type="button" role="tab" aria-controls="nav-Photos" aria-selected="true">{{ __('site.photo') }}</button>
                        <button style="text-transform: unset;" class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-videos"
                            type="button" role="tab" aria-controls="nav-videos" aria-selected="false">{{ __('site.video') }}</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-Photos" role="tabpanel" aria-labelledby="nav-home-tab">

                        <!--Gallery Page Start-->
                        <section class="gallery-page">
                            <div class="container">
                                <div class="row">
                                    @foreach ($galleries as $gallery)
                                        @if ($gallery->getFirstMediaUrl('galleryDetails') != '')
                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="gallery-page__single">
                                                    <div class="gallery-page__img">
                                                        <img src="{{ $gallery->getFirstMediaUrl('galleryDetails') }}">
                                                        <a href="{{ $gallery->getFirstMediaUrl('galleryDetails') }}"
                                                            class="img-popup"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                </div>
                            </div>
                        </section>
                        <!--Gallery Page End-->

                    </div>
                    <div class="tab-pane fade" id="nav-videos" role="tabpanel" aria-labelledby="nav-videos-tab">
                        <!--Gallery Page Start-->
                        <section class="gallery-page">
                            <div class="container">
                                <div class="row">
                                    @foreach ($galleries as $gallery)
                                        @if ($gallery->getFirstMediaUrl('galleryVideo') != '')
                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="gallery-page__single">
                                                    <div class="gallery-page__img">
                                                        <video src="{{ $gallery->getFirstMediaUrl('galleryVideo') }}"></video>
                                                        {{-- <img src="{{ $gallery->getFirstMediaUrl('galleryVideo') }}"> --}}
                                                        <a href="{{ $gallery->getFirstMediaUrl('galleryVideo') }}"
                                                            class="img-popup"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </section>
                        <!--Gallery Page End-->

                    </div>
                </div>
                {{-- @foreach ($galleries as $gallery)
                    @if ($gallery->getFirstMediaUrl('galleryDetails') != '')
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="gallery-page__single">
                                <div class="gallery-page__img">
                                    <img src="{{ $gallery->getFirstMediaUrl('galleryDetails') }}">
                                    <a href="{{ $gallery->getFirstMediaUrl('galleryDetails') }}" class="img-popup"></a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach --}}

            </div>
        </div>
    </section>
    <!--Gallery Page End-->
@endsection

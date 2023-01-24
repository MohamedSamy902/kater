@extends('site.layout.master')

@section('content')
    <!--Gallery Page Start-->
    <section class="gallery-page">
        <h1 class="text-center pb-3">{{ $gall->title }}</h1>
        <div class="container">
            <div class="pb-5 text-center">{!! $gall->content !!}</div>


            <div class="row">
                @foreach ($galleries as $gallery)
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
                @endforeach

            </div>
        </div>
    </section>
    <!--Gallery Page End-->
@endsection

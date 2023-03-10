@extends('site.layout.master')

@section('content')
    <section class="donation-carousel-page text-center" style="padding: 60px 0px;">
        <div class="container-fuild p-5">
            <h1 style="text-align: -webkit-auto;padding-bottom: 30px;">{{ __('site.gallery') }}</h1>

            <div class="row">
                <!--Causes One Single Start-->

                <!--Causes One Single End-->
                <!--Causes One Single Start-->
                @foreach ($galleries as $gallery)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="causes-one__single">
                            <a href="{{ route('gallery.detils', $gallery->id) }}">

                                <div class="causes-one__img">
                                    <img src="{{ $gallery->getFirstMediaUrl('gallery') }}" alt="">
                                </div>
                            </a>

                            <div class="causes-one__content_index">
                                <h3 class="causes-one__title"><a
                                        href="{{ route('gallery.detils', $gallery->id) }}">{{ $gallery->title }}</a>
                                </h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

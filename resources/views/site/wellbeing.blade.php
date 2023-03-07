@extends('site.layout.master')
@section('css')
    <style>
        .main-slider__nav {
            position: absolute;
            top: 89%;
            left: 43% !important;
            z-index: 100;
            transform: translateY(-50%) translateX(0%);
            display: flex;
            align-items: flex-start;
            flex-direction: column;
            max-width: 1200px;
            width: 100%;
            padding: 0 15px;
            height: 0;
            line-height: 0;
            direction: ltr;
        }

        .main-slider__nav .swiper-button-next,
        .main-slider__nav .swiper-button-prev {
            position: relative;
            top: auto;
            left: auto;
            right: auto;
            bottom: auto;
            z-index: 100;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 18px;
            color: #15c0f2;
            border: 2px solid #15c0f2;
            border-radius: 50%;
            margin: 0;
            text-align: center;
            transition: all 500ms ease;
            padding: 23px 0;
            margin-right: 10px;
        }

        .main-slider__nav .swiper-button-next:hover,
        .main-slider__nav .swiper-button-prev:hover {
            color: #4a346d;
            border: 2px solid #4a346d;
        }
    </style>
@endsection
@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('site') }}/assets/images/wellbeing.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">

            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--About Two Start-->
    <section class="about-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-two__right">
                        <div class="section-title text-left">
                            <h2 class="section-title__title">{{ $Wellbiganing->title }}</h2>
                        </div>
                        <p class="about-two__text-1">{!! $Wellbiganing->content !!}</p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-two__left">
                        <div class="about-two__img-box  wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-two__img">
                                <img src="{{ $Wellbiganing->getFirstMediaUrl('Wellbiganing') }}" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--About Two End-->

    <!--Donation Start-->
    {{-- <section class="donation">
        <div class="container-fluid" style="padding: 30px 20px 0">
            <div class="row">
                @foreach ($wellbeingies as $wellbeing)
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="causes-one__single">
                            <a href="{{ route('wellbeing.detils', $wellbeing->id) }}">
                                <div class="causes-one__img">
                                    <img src="{{ $wellbeing->getFirstMediaUrl('wellbeingPhoto') }}" alt="">
                                </div>
                            </a>

                            <div class="causes-one__content">
                                <h3 class="causes-one__title"><a
                                        href="{{ route('wellbeing.detils', $wellbeing->id) }}">{{ $wellbeing->title }}</a>
                                </h3>
                                <p class="causes-one__text">
                                    {!! $wellbeing->short_content == null ? Str::limit($wellbeing->content, 250, ' .....') : Str::limit($wellbeing->short_content, 250, ' .....') !!}
                                </p>

                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}
    <section class="brand-one brand-three">
        <div class="container-fluid">

            <div class="thm-swiper__slider swiper-container"
                data-swiper-options='{"spaceBetween": 0, "slidesPerView": 1, "autoplay":false,
                "autoplayTimeout":3000,"navigation": {
                    "nextEl": "#main-slider__swiper-button-next",
                    "prevEl": "#main-slider__swiper-button-prev"
                    }, "breakpoints": {
                            "0": {
                                "spaceBetween": 0,
                                "slidesPerView": 1
                            },

                            "575": {
                                "spaceBetween": 0,
                                "slidesPerView": 2
                            },


                            "1199": {
                                "spaceBetween": 0,
                                "slidesPerView": 3
                            }
                        }}'>
                <div class="swiper-wrapper">
                    @foreach ($wellbeingies as $wellbeing)
                        <div class="col-xl-12 col-lg-12 col-md-6 p-2 swiper-slide">
                            <div class="causes-one__single">
                                <a href="{{ route('wellbeing.detils', $wellbeing->id) }}">
                                    <div class="causes-one__img">
                                        <img style="width: 100%; height: 300px;"
                                            src="{{ $wellbeing->getFirstMediaUrl('wellbeingPhoto') }}" alt="">
                                    </div>
                                </a>

                                <div class="causes-one__content">
                                    <h3 class="causes-one__title"><a
                                            href="{{ route('wellbeing.detils', $wellbeing->id) }}">{{ $wellbeing->title }}</a>
                                    </h3>
                                    <p class="causes-one__text">
                                        {{ $wellbeing->short_content }}
                                        {{-- {{ $wellbeing->short_content == null ? Str::limit($wellbeing->title, 250, ' .....') : Str::limit($wellbeing->short_content, 250, ' .....') }} --}}
                                    </p>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="main-slider__nav" style="display: -webkit-box;">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Donation End-->
@endsection

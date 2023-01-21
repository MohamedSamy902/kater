@extends('site.layout.master')

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg"
            style="background-image: url({{ asset('site') }}/assets/images/resources/WhatsApp\ Image\ 2022-11-22\ at\ 12.41.01\ PM.jpeg)">
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
                        <p class="about-two__text-1">{{ $Wellbiganing->content }}</p>
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
    <section class="donation">
        <div class="container-fluid" style="padding: 30px 20px 0">
            <div class="row">
                <!--Causes One Single Start-->
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
    </section>
    <!--Donation End-->
@endsection

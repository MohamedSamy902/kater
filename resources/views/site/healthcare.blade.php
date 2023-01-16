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
                            <h2 class="section-title__title">{{ $healthcare->title }}</h2>
                        </div>
                        <p class="about-two__text-1">{{ $healthcare->content }}</p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-two__left">
                        <div class="about-two__img-box  wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-two__img">
                                <img src="{{ $healthcare->getFirstMediaUrl('HealthcareInitiatives') }}" class="w-100">
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
                @foreach ($healthcareies as $healthcareie)
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <a href="{{ route('healthcare.detils', $healthcareie->id) }}">

                                    <img src="{{ $healthcareie->getFirstMediaUrl('healthcarePhoto') }}"
                                        alt="">
                                </a>

                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title"><a
                                        href="{{ route('healthcare.detils', $healthcareie->id) }}">{{ $healthcareie->title }}</a>
                                </h3>
                                <p class="causes-one__text">
                                    {{ $healthcareie->short_content == null ? Str::limit($healthcareie->title, 250, ' .....') : Str::limit($healthcareie->short_content, 250, ' .....') }}</p>

                            </div>
                        </div>
                    </div>
                @endforeach


                <!--Causes One Single End-->
                <!--Causes One Single Start-->
                {{-- <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <a href="{{ route('healthcare.detils', $wellBeing[1]->id) }}">
                                <img src="{{ asset('site') }}/assets/images/gallery/WhatsApp Image 2022-11-22 at 12.44.56 PM.jpeg"
                                    alt="">
                            </a>
                        </div>
                        <div class="causes-one__content">
                            <h3 class="causes-one__title"><a
                                    href="{{ route('healthcare.detils', $wellBeing[1]->id) }}">{{ $wellBeing[1]->title }}</a>
                            </h3>
                            <p class="causes-one__text">{{ Str::limit($wellBeing[1]->content, 250, ' .....') }}</p>
                        </div>
                    </div>
                </div> --}}
                <!--Causes One Single End-->
                <!--Causes One Single Start-->
                {{-- <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <a href="{{ route('healthcare.detils', $wellBeing[2]->id) }}">
                                <img src="{{ asset('site') }}/assets/images/resources/a994fa78-cf34-48c6-9ee0-6200db5846b5.jpg"
                                    alt="">
                            </a>
                        </div>
                        <div class="causes-one__content">
                            <h3 class="causes-one__title"><a
                                    href="{{ route('healthcare.detils', $wellBeing[2]->id) }}">{{ $wellBeing[2]->title }}
                                </a>
                            </h3>
                            <p class="causes-one__text">{{ Str::limit($wellBeing[2]->content, 250, ' .....') }} </p>
                        </div>
                    </div>
                </div> --}}
                <!--Causes One Single End-->
            </div>
        </div>
    </section>
    <!--Donation End-->
@endsection

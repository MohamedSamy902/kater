@extends('site.layout.master')

@section('content')
    <!--Event Details Start-->
    <section class="event-details ">
        <div class="container-fluid">
            <div class="row">
                <h3 class="event-details__title">{{ $healthcare->title }}</h3>
                <div class="col-xl-9 col-lg-9 ">
                    @php
                        if ($healthcare->getFirstMediaUrl('healthcarevideo')) {
                            echo '<div class="event-details__left">

                            <video autoplay controls width="100%" style="">
                                <source src=" ' .
                                $healthcare->getFirstMediaUrl('healthcarevideo') .
                                ' " type="video/mp4">
                                <source src=" ' .
                                $healthcare->getFirstMediaUrl('healthcarevideo') .
                                ' " type="video/ogg">
                            </video>
                            </div>';
                        } else {
                            echo '<p class="event-details__text-6">' . $healthcare->content . '</p>';
                        }

                    @endphp
                    {{-- <div class="event-details__left">
                        <video autoplay controls width="100%" style="">
                            <source src="{{ $healthcare->getFirstMediaUrl('healthcarevideo') }}" type="video/mp4">
                            <source src="{{ $healthcare->getFirstMediaUrl('healthcarevideo') }}" type="video/ogg">
                        </video>
                    </div> --}}

                </div>
                <div class="col-xl-3 col-lg-3 ">
                    <div class="sidebar">

                        <div class="sidebar__single sidebar__post ">
                            <div class="sidebar-shape-1"
                                style="background-image: url(assets/images/shapes/sidebar-shape-1.png)"></div>
                            <marquee width="100%" direction="up" height="510px" scrollamount="2" loop="true"
                                onmouseover="this.stop()" onmouseout="this.start()">

                                @foreach ($allHealthcare as $allHealth)
                                    <div class="">
                                        <a href="{{ route('healthcare.detils', $allHealth->id) }}">
                                            <div class="causes-one__single">
                                                <div class="causes-one__img">
                                                    <div class="row">
                                                        <div class="col-8"> <img
                                                                src="{{ $allHealth->getFirstMediaUrl('healthcarePhoto') }}"
                                                                style="height: 80px;" alt=""></div>
                                                        <div class="col-4">
                                                            <p
                                                                style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">

                                                                {{ $allHealth->title != null ? Str::limit($allHealth->title, 38, ' .....') : '' }}
                                                            </p>

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                                @foreach ($allWellBeing as $allWell)
                                    <div class="">
                                        <a href="{{ route('wellbeing.detils', $allWell->id) }}">
                                            <div class="causes-one__single">
                                                <div class="causes-one__img">
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <img src="{{ $allWell->getFirstMediaUrl('wellbeingPhoto') }}"
                                                                style="height: 80px;" alt="">
                                                        </div>
                                                        <div class="col-4">
                                                            <p
                                                                style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">
                                                                {{ $allWell->title != null ? Str::limit($allWell->title, 38, ' .....') : '' }}

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach

                            </marquee>
                        </div>

                    </div>
                </div>
                <div class="contener">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9">
                            <div class="event-details__top">
                                @php
                                    if ($healthcare->getFirstMediaUrl('healthcarevideo')) {
                                        echo '<p class="event-details__text-6">' . $healthcare->content . '</p>';
                                    }

                                @endphp
                                {{-- <p class="event-details__text-6">{!! $healthcare->content !!}</p> --}}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3">
                            <ul style="padding: 20px 0 0 0;">
                                <li class="counter-one__single Provided">
                                    <img src="{{ asset('site') }}/assets/images/healthcare- icon 2022 KF.png"
                                        style="height: 50px;" alt="">
                                    <div class="counter-one__count-box p-2">
                                        <p class="counter-one__text4" style="width: 300px;">
                                            {{ $healthcare->convoys != 0 ? $healthcare->convoys : '' }}</span> </p>
                                        <p class="counter-one__text4" style="width: 300px;">
                                            {{ $healthcare->services != 0 ? $healthcare->services : '' }}
                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--Event Details End-->
    <!--Events Page Start-->
    <section class="events-carousel-page">
        <div class="container-fluid">
            <div class="events-carousel thm-owl__carousel owl-theme owl-carousel carousel-dot-style"
                data-owl-options='{
                    "items": 4,
                    "margin": 0,
                    "loop":true,
                    "autoplay": { "delay": 5000 },
                    "nav":false,
                    "dots":false,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive":{
                        "0":{
                            "items":1
                        },
                        "768":{
                            "items":2
                        },
                        "992":{
                            "items": 4
                        }
                    }
                }'>
                @foreach ($healthcare->HealthcareDetails as $HealthcareDetails)
                    <div class="item px-1">
                        <div class="events-one__single">
                            <div class="causes-one__single">
                                <div class="causes-one__img">
                                    <img src="{{ $HealthcareDetails->getFirstMediaUrl('healthcareDetails') }}"
                                        style="height: 300px" alt="">
                                    {{-- <div class="causes-one__cat">
                                        <p>{{ $HealthcareDetails->title }}</p>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>

    <!--Events Page End-->
@endsection

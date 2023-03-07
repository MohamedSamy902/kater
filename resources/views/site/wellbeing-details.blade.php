@extends('site.layout.master')

@section('content')
    <!--Event Details Start-->
    <section class="event-details ">
        <div class="container-fluid">
            <div class="row">
                <h3 class="event-details__title">{{ $wellBeing->title }}</h3>
                <div class="col-xl-9 col-lg-9 ">

                    @php
                        if ($wellBeing->getFirstMediaUrl('wellbeingVideo')) {
                            echo '<div class="event-details__left">

                                <video autoplay controls width="100%" style="">
                                    <source src=" ' .
                                $wellBeing->getFirstMediaUrl('wellbeingVideo') .
                                ' " type="video/mp4">
                                    <source src=" ' .
                                $wellBeing->getFirstMediaUrl('wellbeingVideo') .
                                ' " type="video/ogg">
                                </video>
                                </div>';
                        } else {
                            echo '<p class="event-details__text-6">' . $wellBeing->content . '</p>';
                        }

                    @endphp

                </div>
                <div class="col-xl-3 col-lg-3 marqueeweb">
                    <div class="sidebar">

                        <div class="sidebar__single sidebar__post ">
                            <div class="sidebar-shape-1"
                                style="background-image: url(assets/images/shapes/sidebar-shape-1.png)"></div>
                            <marquee width="100%" direction="up" height="580px" scrollamount="2" loop="true"
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
                                    if ($wellBeing->getFirstMediaUrl('wellbeingVideo')) {
                                        echo '<p class="event-details__text-6">' . $wellBeing->content . '</p>';
                                    }

                                @endphp
                                {{-- <p class="event-details__text-6">{{ $wellBeing->content }}</p> --}}
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3">
                            <ul style="padding: 20px 0 0 0;">
                                <li class="counter-one__single Provided">
                                    <img src="{{ asset('site') }}/assets/images/well-bieng icon.png"
                                        style="height: 50px;" alt="">
                                    <div class="counter-one__count-box p-2">
                                        <p class="counter-one__text4" style="width: 300px;">
                                            {{ $wellBeing->convoys != 0 ? $wellBeing->convoys : '' }}</span> </p>
                                        <p class="counter-one__text4" style="width: 300px;">
                                            {{ $wellBeing->services != 0 ? $wellBeing->services : '' }}
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
                    "width": 194px,
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
                @foreach ($wellBeing->WellBeingDetalis as $WellBeingDetails)
                    <div class="item px-1">
                        <div class="events-one__single">
                            <div class="causes-one__single">
                                <a
                                    href="{{ $WellBeingDetails->link != null ? URL::to($WellBeingDetails->link) : 'javascript: void(0);' }}">

                                    <div class="causes-one__img">
                                        {{-- <img src="{{ $WellBeingDetails->getFirstMediaUrl('wellBeingDetails') }}"

                                            style="height: 300px" alt=""> --}}
                                        {{-- {{ getUrlMedia($WellBeingDetails, 'wellBeingDetails') }} --}}
                                        <img src="{{ getUrlMedia($WellBeingDetails, 'wellBeingDetails') }}">
                                        <div class="causes-one__cat">
                                            <p>{{ $WellBeingDetails->title }}</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>


    <div class="col-xl-3 col-lg-3 marqueemob">
        <div class="sidebar">

            <div class="sidebar__single sidebar__post ">
                <div class="sidebar-shape-1" style="background-image: url(assets/images/shapes/sidebar-shape-1.png)">
                </div>
                <marquee width="100%" direction="scroll" height="200px" scrollamount="2" loop="-1"
                    onmouseover="this.stop()" onmouseout="this.start()">
                    <div style="display: flex;">
                        @for ($i = 0; $i < 10; $i++)
                            @foreach ($allHealthcare as $allHealth)
                                <a href="{{ route('healthcare.detils', $allHealth->id) }}" style="margin: 0px 10px;">
                                    <div style="">
                                        <img src="{{ $allHealth->getFirstMediaUrl('healthcarePhoto') }}"
                                            style="height: 150px; width:150px;" alt="">
                                        <p style="font-size: 12px;">

                                            {{ $allHealth->title != null ? Str::limit($allHealth->title, 26, ' .....') : '' }}
                                        </p>
                                    </div>
                                </a>
                            @endforeach
                            @foreach ($allWellBeing as $allWell)
                                <a href="{{ route('wellbeing.detils', $allWell->id) }}" style="margin: 0px 10px;">
                                    <div style="">
                                        <img src="{{ $allWell->getFirstMediaUrl('wellbeingPhoto') }}"
                                            style="height: 150px; width:150px;" alt="">
                                        <p style="font-size: 12px;">

                                            {{ $allWell->title != null ? Str::limit($allWell->title, 26, ' .....') : '' }}
                                        </p>
                                    </div>
                                </a>
                            @endforeach
                        @endfor
                    </div>
                </marquee>
            </div>

        </div>
    </div>


    <!--Events Page End-->
@endsection

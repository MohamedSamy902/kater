@extends('site.layout.master')

@section('content')
    <!--Event Details Start-->
    <section class="event-details ">
        <div class="container-fluid">
            <div class="row">
                <h3 class="event-details__title">{{ $healthcare->title }}</h3>
                <div class="col-xl-9 col-lg-9 ">
                    <div class="event-details__left">
                        <video autoplay controls width="100%" style="">
                            <source src="{{ $healthcare->getFirstMediaUrl('healthcarevideo') }}" type="video/mp4">
                            <source src="{{ $healthcare->getFirstMediaUrl('healthcarevideo') }}" type="video/ogg">
                        </video>
                    </div>

                </div>
                <div class="col-xl-3 col-lg-3 ">
                    <div class="sidebar">

                        <div class="sidebar__single sidebar__post ">
                            <div class="sidebar-shape-1"
                                style="background-image: url(assets/images/shapes/sidebar-shape-1.png)"></div>
                            <h3 class="sidebar__title" style="color: #005172;margin-top: 10px;">{{ __('site.Healthcare') }}
                            </h3>
                            <marquee width="100%" direction="up" height="236px" scrollamount="2" loop="true"
                                onmouseover="this.stop()" onmouseout="this.start()">
                                <div class="">
                                    <div class="causes-one__single">
                                        <div class="causes-one__img">
                                            <div class="row">
                                                <div class="col-8"> <img
                                                        src="{{ asset('site') }}/assets/images/resources/a994fa78-cf34-48c6-9ee0-6200db5846b5.jpg"
                                                        style="height: 80px;" alt=""></div>
                                                <div class="col-4">
                                                    <p
                                                        style="font-size: 12px; margin-left: -9px; padding: 15px 0px 0px 0px;letter-spacing: -0.05em;">
                                                        Online Clinics</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="">
                                    <div class="causes-one__single">
                                        <div class="causes-one__img">
                                            <div class="row">
                                                <div class="col-8"> <img
                                                        src="{{ asset('site') }}/assets/images/gallery/WhatsApp Image 2022-11-22 at 12.44.56 PM.jpeg"
                                                        style="height: 80px;" alt=""></div>
                                                <div class="col-4">
                                                    <p style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">
                                                        Abu El Reesh Children’s Hospital
                                                        Al
                                                        Munira</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="">
                                    <div class="causes-one__single">
                                        <div class="causes-one__img">
                                            <div class="row">
                                                <div class="col-8"> <img
                                                        src="{{ asset('site') }}/assets/images/resources/a994fa78-cf34-48c6-9ee0-6200db5846b5.jpg"
                                                        style="height: 80px;" alt=""></div>
                                                <div class="col-4">
                                                    <p
                                                        style="font-size: 12px; margin-left: -9px; padding: 15px 0px 0px 0px;letter-spacing: -0.05em;">
                                                        Online Clinics</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="">
                                    <div class="causes-one__single">
                                        <div class="causes-one__img">
                                            <div class="row">
                                                <div class="col-8"> <img
                                                        src="{{ asset('site') }}/assets/images/gallery/WhatsApp Image 2022-11-22 at 12.44.56 PM.jpeg"
                                                        style="height: 80px;" alt=""></div>
                                                <div class="col-4">
                                                    <p style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">
                                                        Abu El Reesh Children’s Hospital
                                                        Al
                                                        Munira</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="">
                                    <div class="causes-one__single">
                                        <div class="causes-one__img">
                                            <div class="row">
                                                <div class="col-8"> <img
                                                        src="{{ asset('site') }}/assets/images/resources/a994fa78-cf34-48c6-9ee0-6200db5846b5.jpg"
                                                        style="height: 80px;" alt=""></div>
                                                <div class="col-4">
                                                    <p
                                                        style="font-size: 12px; margin-left: -9px; padding: 15px 0px 0px 0px;letter-spacing: -0.05em;">
                                                        Online Clinics</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="">
                                    <div class="causes-one__single">
                                        <div class="causes-one__img">
                                            <div class="row">
                                                <div class="col-8"> <img
                                                        src="{{ asset('site') }}/assets/images/gallery/WhatsApp Image 2022-11-22 at 12.44.56 PM.jpeg"
                                                        style="height: 80px;" alt=""></div>
                                                <div class="col-4">
                                                    <p style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">
                                                        Abu El Reesh Children’s Hospital
                                                        Al
                                                        Munira</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </marquee>

                            <hr style="height: 2px;">
                            <h3 class="sidebar__title" style="color: #62BB46;">{{ __('site.Healthcare') }}</h3>
                            <marquee width="100%" direction="up" height="236px" scrollamount="2" loop="true"
                                onmouseover="this.stop()" onmouseout="this.start()">
                                <div class="">
                                    <div class="causes-one__single">
                                        <div class="causes-one__img">
                                            <div class="row">
                                                <div class="col-8"> <img
                                                        src="{{ asset('site') }}/assets/images/gallery/Khater (40 of 128).jpg"
                                                        style="height: 80px;" alt=""></div>
                                                <div class="col-4">
                                                    <p
                                                        style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">
                                                        Ramadan Campaigns</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="">
                                    <div class="causes-one__single">
                                        <div class="causes-one__img">
                                            <div class="row">
                                                <div class="col-8"> <img
                                                        src="{{ asset('site') }}/assets/images//gallery/1P7A0605.JPG"
                                                        style="height: 80px;" alt=""></div>
                                                <div class="col-4">
                                                    <p
                                                        style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">
                                                        Decent Housing Project</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="">
                                    <div class="causes-one__single">
                                        <div class="causes-one__img">
                                            <div class="row">
                                                <div class="col-8"> <img
                                                        src="{{ asset('site') }}/assets/images/gallery/khairy (41 of 186).jpg"
                                                        style="height: 80px;" alt=""></div>
                                                <div class="col-4">
                                                    <p
                                                        style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">
                                                        Edu-behavioural Program for kids
                                                        with Autism</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="">
                                    <div class="causes-one__single">
                                        <div class="causes-one__img">
                                            <div class="row">
                                                <div class="col-8"> <img
                                                        src="{{ asset('site') }}/assets/images/gallery/Khater (40 of 128).jpg"
                                                        style="height: 80px;" alt=""></div>
                                                <div class="col-4">
                                                    <p
                                                        style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">
                                                        Ramadan Campaigns</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="">
                                    <div class="causes-one__single">
                                        <div class="causes-one__img">
                                            <div class="row">
                                                <div class="col-8"> <img
                                                        src="{{ asset('site') }}/assets/images//gallery/1P7A0605.JPG"
                                                        style="height: 80px;" alt=""></div>
                                                <div class="col-4">
                                                    <p
                                                        style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">
                                                        Decent Housing Project</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="">
                                    <div class="causes-one__single">
                                        <div class="causes-one__img">
                                            <div class="row">
                                                <div class="col-8"> <img
                                                        src="{{ asset('site') }}/assets/images/gallery/khairy (41 of 186).jpg"
                                                        style="height: 80px;" alt=""></div>
                                                <div class="col-4">
                                                    <p
                                                        style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">
                                                        Edu-behavioural Program for kids
                                                        with Autism</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="">
                                    <div class="causes-one__single">
                                        <div class="causes-one__img">
                                            <div class="row">
                                                <div class="col-8"> <img
                                                        src="{{ asset('site') }}/assets/images/gallery/Khater (40 of 128).jpg"
                                                        style="height: 80px;" alt=""></div>
                                                <div class="col-4">
                                                    <p
                                                        style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">
                                                        Ramadan Campaigns</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="">
                                    <div class="causes-one__single">
                                        <div class="causes-one__img">
                                            <div class="row">
                                                <div class="col-8"> <img
                                                        src="{{ asset('site') }}/assets/images//gallery/1P7A0605.JPG"
                                                        style="height: 80px;" alt=""></div>
                                                <div class="col-4">
                                                    <p
                                                        style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">
                                                        Decent Housing Project</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="">
                                    <div class="causes-one__single">
                                        <div class="causes-one__img">
                                            <div class="row">
                                                <div class="col-8"> <img
                                                        src="{{ asset('site') }}/assets/images/gallery/khairy (41 of 186).jpg"
                                                        style="height: 80px;" alt=""></div>
                                                <div class="col-4">
                                                    <p
                                                        style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">
                                                        Edu-behavioural Program for kids
                                                        with Autism</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="">
                                    <div class="causes-one__single">
                                        <div class="causes-one__img">
                                            <div class="row">
                                                <div class="col-8"> <img
                                                        src="{{ asset('site') }}/assets/images/gallery/Khater (40 of 128).jpg"
                                                        style="height: 80px;" alt=""></div>
                                                <div class="col-4">
                                                    <p
                                                        style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">
                                                        Ramadan Campaigns</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="">
                                    <div class="causes-one__single">
                                        <div class="causes-one__img">
                                            <div class="row">
                                                <div class="col-8"> <img
                                                        src="{{ asset('site') }}/assets/images//gallery/1P7A0605.JPG"
                                                        style="height: 80px;" alt=""></div>
                                                <div class="col-4">
                                                    <p
                                                        style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">
                                                        Decent Housing Project</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="">
                                    <div class="causes-one__single">
                                        <div class="causes-one__img">
                                            <div class="row">
                                                <div class="col-8"> <img
                                                        src="{{ asset('site') }}/assets/images/gallery/khairy (41 of 186).jpg"
                                                        style="height: 80px;" alt=""></div>
                                                <div class="col-4">
                                                    <p
                                                        style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">
                                                        Edu-behavioural Program for kids
                                                        with Autism</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </marquee>


                        </div>

                    </div>
                </div>
                <div class="contener">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9">
                            <div class="event-details__top">

                                <p class="event-details__text-6">{{ $healthcare->content }}</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3">
                            <ul style="padding: 20px 0 0 0;">
                                <li class="counter-one__single Provided">
                                    <img src="{{ asset('site') }}/assets/images/healthcare- icon 2022 KF.png"
                                        style="height: 50px;" alt="">
                                    <div class="counter-one__count-box p-2">



                                        <p class="counter-one__text4" style="width: 300px;">{{ $healthcare->convoys != 0 ? $healthcare->convoys : '' }}</span> </p>
                                         <p class="counter-one__text4" style="width: 300px;">{{ $healthcare->services != 0 ? $healthcare->services : '' }}
                                        </p>
                                        {{-- <p class="counter-one__text4" style="width: 300px;"><span class="odometer"
                                            data-count="81">00</span> <span style="">Convoys</span>
                                    </p>
                                     --}}
                                        {{-- <p class="counter-one__text4"><span class="odometer" data-count="10276">00</span>
                                            <span>Services</span>
                                        </p> --}}
                                        {{-- </p> --}}
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

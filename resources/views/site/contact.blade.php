@extends('site.layout.master')

@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url({{ asset('site') }}/assets/images/backgrounds/IMG-20200513-WA0007.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
                <!-- <h2>Contact us</h2> -->
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--Contact Three Start-->
    <section class="contact-three">
        <div class="contact-three-shape" style="background-image: url({{ asset('site') }}/assets/images/shapes/contact-three-shape.png);"></div>
        <div class="container">
            <div class="section-title text-center">
                <!-- <span class="section-title__tagline">Contact with us</span> -->
                <h2 class="section-title__title" style="font-weight: 100;">{{ __('site.contact_title') }}</h2>
            </div>
            <div class="contact-page__form-box">
                <form action="https://layerdrops.com/khater/main-html/assets/inc/sendemail.php"
                    class="contact-page__form contact-form-validated" novalidate="novalidate">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="contact-form__input-box">
                                <input type="text" placeholder="{{ __('site.name') }}" name="name">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact-form__input-box">
                                <input type="email" placeholder="{{ __('site.email') }}" name="email">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact-form__input-box">
                                <input type="text" placeholder="{{ __('site.phone') }}" name="phone">
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="contact-form__input-box">
                                <input type="text" placeholder="{{ __('site.subject') }}" name="subject">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="contact-form__input-box text-message-box">
                                <textarea name="message" placeholder="{{ __('site.write_message') }}"></textarea>
                            </div>
                            <div class="contact-form__btn-box">
                                <button type="submit" class="thm-btn contact-form__btn">{{ __('site.send_message') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!--Contact Three End-->

    <!--Contact One Start-->
    <section class="contact-one">
        <div class="container">
            <div class="contact-one__inne">
                <ul class="list-unstyled contact-one__list">
                    <li class="contact-one__single">
                        <div class="contact-one__icon">
                            <span class="icon-phone-call"></span>
                        </div>
                        <div class="contact-one__content number">
                            <p class="contact-one__sub-title">{{ __('site.phone') }}</p>
                            <h3 class="contact-one__number"><a href="tel:980009630">+225174018</a></h3>
                        </div>
                    </li>
                    <li class="contact-one__single">
                        <div class="contact-one__icon">
                            <span class="icon-message"></span>
                        </div>
                        <div class="contact-one__content">
                            <p class="contact-one__sub-title">{{ __('site.email') }}</p>
                            <h3 class="contact-one__number"><a
                                    href="mailto:info@khaterfoundation.com">info@khaterfoundation.com</a></h3>
                        </div>
                    </li>
                    <li class="contact-one__single">
                        <div class="contact-one__icon">
                            <span class="icon-location"></span>
                        </div>
                        <div class="contact-one__content">
                            <p class="contact-one__sub-title">{{ __('site.address') }}</p>
                            <h3 class="contact-one__number">{{ __('site.addr') }}</h3>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!--Contact One End-->

    <!--Google Map Start-->
    <section class="google-map google-map-two">
        <div style="width: 100%"><iframe width="100%" height="500" frameborder="0" scrolling="no" marginheight="0"
                marginwidth="0"
                src="https://maps.google.com/maps?width=100%25&amp;height=500&amp;hl=en&amp;q=29.9617229,31.2758247+(Khater)&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
        </div>

    </section>
    <!--Google Map End-->
@endsection

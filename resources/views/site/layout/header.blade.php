<header class="main-header">
    <nav class="main-menu">
        <div class="main-menu__wrapper">
            <div class="main-menu__wrapper-inner">
                <div class="main-menu__left">
                    <div class="main-menu__logo">
                        @php
                            if (App::getLocale() == 'ar') {
                                echo '<a href="' . route('about') . '"><img src=" ' . asset('site') . '/assets/images/logo-ar.png" alt="" width="200px" class="pb-2"></a>';
                            } else {
                                echo '<a href=""><img src=" ' . asset('site') . '/assets/images/logo.png" alt="" width="200px" class="pb-2"></a>';
                            }
                        @endphp
                    </div>

                </div>
                <div class="main-menu__right">

                    <div class="main-menu__right-bottom">
                        <div class="main-menu__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="current megamenu active"><a href="{{ route('index') }}">{{ __('site.home') }}
                                    </a></li>
                                <li class="current megamenu"><a href="{{ route('about') }}">{{ __('site.about') }}</a>
                                </li>
                                <li class="dropdown">
                                    <a href="{{ route('impact') }}">{{ __('site.ourImpact') }}</a>
                                    <ul>
                                        <li><a href="{{ route('healthcare') }}"> {{ __('site.Healthcare') }}</a></li>
                                        <li><a href="{{ route('wellbeing') }}">{{ __('site.WellBeing') }}</a></li>
                                    </ul>
                                </li>
                                <li class="current megamenu"><a href="{{ route('gallery') }}">{{ __('site.gallery') }}
                                    </a></li>
                                <li class="current megamenu"><a
                                        href="{{ route('contact') }}">{{ __('site.contact') }}</a></li>


                                @php
                                    if (App::getLocale() == 'ar') {
                                        echo '<li class="current megamenu ling"><a href="' . LaravelLocalization::getLocalizedURL('en') . '"> EN <i class="flag flag-us"></i></a></li>';
                                    } else {
                                        echo '<li class="current megamenu ling"><a href="' . LaravelLocalization::getLocalizedURL('ar') . '"> <i class="flag flag-egypt"></i> ع</a></li>';
                                    }
                                @endphp
                            </ul>
                        </div>
                        <div class="main-menu__main-menu-content-box">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

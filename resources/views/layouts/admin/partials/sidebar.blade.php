<header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary" href="{{ route('users.edit', auth()->user()->id) }}">
            <i data-feather="settings"></i>
        </a>
        <img class="img-90 rounded-circle"
            src="
                    {{ auth()->user()->getFirstMediaUrl('user') != null
                        ? auth()->user()->getFirstMediaUrl('user')
                        : asset('assets/images/dashboard/1.png') }}"
            alt="" />
        <div class="badge-bottom"><span class="badge badge-primary">{{ auth()->user()->roles_name }}</span></div>
        <a href="user-profile">
            <h6 class="mt-3 f-14 f-w-600">{{ auth()->user()->name }}</h6>
        </a>
    </div>
    <nav>
        <div class="main-navbar">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="mainnav">
                <ul class="nav-menu custom-scrollbar">
                    <li class="back-btn">
                        <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2"
                                aria-hidden="true"></i></div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>{{ __('master.list') }}</h6>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>{{ __('user.user') }}</span>
                        </a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ route('users.index') }}"
                                    class="">{{ __('user.user_list') }}</a>
                            </li>
                            <li><a href="{{ route('users.create') }}"
                                    class="">{{ __('user.user_add') }}
                                </a></li>
                        </ul>
                    </li>



                    <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>Index </span>
                        </a>
                        <ul class="nav-submenu menu-content">

                            <li><a href="{{ URL::route('articles.index', 'Vision') }}"
                                    class="">Vision</a>
                            </li>
                            <li><a href="{{ URL::route('articles.index', 'HowItAllBegan') }}"
                                    class="">How It All Began</a>
                            </li>
                            
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title  href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>{{ __('master.slider') }}</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('sliders') }};">
                            <li><a href="{{ route('sliders.index') }}"
                                    class="">{{ __('master.slider_list') }}</a>
                            </li>
                            <li><a href="{{ route('sliders.create') }}"
                                    class="">{{ __('master.slider') }}
                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>About</span>
                        </a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ URL::route('articles.edit', ['FoundationStory']) }}"
                                    class="">FoundationStory</a>
                            </li>

                            <li><a href="{{ route('articles.index', 'TimeLine') }}"
                                    class="">{{ __('master.time_line') }}</a>
                            </li>

                            <li><a href="{{ URL::route('articles.index', 'OurGoals') }}"
                                    class="">Our Goals</a>
                            </li>
                            <li><a href="{{ URL::route('articles.index', 'OurMission') }}"
                                    class="">Our Mission</a>
                            </li>
                            <li><a href="{{ URL::route('articles.index', 'OurVision') }}"
                                    class="">Our Vision</a>
                            </li>

                            <li><a href="{{ URL::route('articles.edit', ['WhoWeServe']) }}"
                                    class="">Who We Serve</a>
                            </li>


                            <li><a href="{{ URL::route('articles.index', 'WhereWeServe ') }}"
                                    class="">Where We Serve</a>
                            </li>


                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>Our Impact</span>
                        </a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="{{ URL::route('articles.index', 'Impact ') }}"
                                    class="">Impact</a>
                            </li>

                            <li><a href="{{ URL::route('articles.index', 'HealthcareInitiatives') }}"
                                    class="">Healthcare Initiatives</a>
                            </li>
                            <li><a href="{{ URL::route('articles.index', 'Wellbiganing') }}"
                                    class="">Well-Biganing</a>
                            </li>

                        </ul>
                    </li>


                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>{{ __('master.WellBeing') }}</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('WellBeing') }};">
                            <li><a href="{{ route('wellBeing.index') }}"
                                    class="">{{ __('master.wellBeing_list') }}</a>
                            </li>
                            <li><a href="{{ route('wellBeing.create') }}"
                                    class="">Add {{ __('master.Well') }}
                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>{{ __('master.Healthcare') }}</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('healthcare') }};">
                            <li><a href="{{ route('healthcare.index') }}"
                                    class="">{{ __('master.Healthcare_list') }}</a>
                            </li>
                            <li><a href="{{ route('healthcare.create') }}"
                                    class="">Add {{ __('master.Healthcare') }}
                                </a></li>
                        </ul>
                    </li>



                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>{{ __('master.gallery') }}</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('galleries') }};">
                            <li><a href="{{ route('galleries.index') }}"
                                    class="">{{ __('master.gallery') }} List</a>
                            </li>
                            <li><a href="{{ route('galleries.create') }}"
                                    class=""> {{ __('master.add_gallery') }}
                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>{{ __('master.events') }}</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('events') }};">
                            <li><a href="{{ route('events.index') }}"
                                    class="">{{ __('master.events_list') }}</a>
                            </li>
                            <li><a href="{{ route('events.create') }}"
                                    class="">Add {{ __('master.events') }}
                                </a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>

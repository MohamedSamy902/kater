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

                    {{-- @can('role-list') --}}
                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('roles') }}" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>{{ __('role.role') }}</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('roles') }};">
                            <li><a href="{{ route('roles.index') }}"
                                    class="{{ routeActive('roles.index') }}">{{ __('role.role_list') }}</a>
                            </li>
                            @can('role-create')
                                <li><a href="{{ route('roles.create') }}"
                                        class="{{ routeActive('roles.create') }}">{{ __('role.add_role') }}
                                    </a></li>
                            @endcan
                        </ul>
                    </li>
                    {{-- @endcan --}}

                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('users') }}" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>{{ __('user.user') }}</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('users') }};">
                            <li><a href="{{ route('users.index') }}"
                                    class="{{ routeActive('users.index') }}">{{ __('user.user_list') }}</a>
                            </li>
                            <li><a href="{{ route('users.create') }}"
                                    class="{{ routeActive('users.create') }}">{{ __('user.user_add') }}
                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('users') }}" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>About</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('users') }};">
                            <li><a href="{{ URL::route('articles.edit', ['FoundationStory']) }}"
                                    class="{{ routeActive('users.index') }}">{{ __('master.FoundationStory') }}</a>
                            </li>

                            <li><a href="{{ route('articles.index', 'TimeLine') }}"
                                    class="{{ routeActive('users.index') }}">{{ __('master.time_line') }}</a>
                            </li>

                            <li><a href="{{ URL::route('articles.edit', ['WhoWeServe']) }}"
                                    class="{{ routeActive('users.index') }}">{{ __('master.Who We Serve') }}</a>
                            </li>

                            <li><a href="{{ URL::route('articles.index', 'OurGoals') }}"
                                    class="{{ routeActive('users.index') }}">{{ __('master.Our Goals') }}</a>
                            </li>
                            <li><a href="{{ URL::route('articles.index', 'OurMission') }}"
                                    class="{{ routeActive('users.index') }}">{{ __('master.Our Mission') }}</a>
                            </li>
                            <li><a href="{{ URL::route('articles.index', 'OurVision') }}"
                                    class="{{ routeActive('users.index') }}">{{ __('master.Our Vision') }}</a>
                            </li>


                            <li><a href="{{ URL::route('articles.index', 'HowItAllBegan ') }}"
                                class="{{ routeActive('users.index') }}">{{ __('master.How It All Began ') }}</a>
                        </li>


                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('users') }}" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>{{ __('user.user') }}</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('users') }};">
                            <li><a href="{{ route('users.index') }}"
                                    class="{{ routeActive('users.index') }}">{{ __('user.user_list') }}</a>
                            </li>
                            <li><a href="{{ route('users.create') }}"
                                    class="{{ routeActive('users.create') }}">{{ __('user.user_add') }}
                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('wellBeing') }}" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>{{ __('master.wellBeing') }}</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('wellBeing') }};">
                            <li><a href="{{ route('wellBeing.index') }}"
                                    class="{{ routeActive('users.wellBeing') }}">{{ __('user.user_list') }}</a>
                            </li>
                            <li><a href="{{ route('wellBeing.create') }}"
                                    class="{{ routeActive('wellBeing.create') }}">{{ __('master.wellBeing') }}
                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('healthcare') }}" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>{{ __('master.healthcare') }}</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('healthcare') }};">
                            <li><a href="{{ route('healthcare.index') }}"
                                    class="{{ routeActive('users.healthcare') }}">{{ __('user.user_list') }}</a>
                            </li>
                            <li><a href="{{ route('healthcare.create') }}"
                                    class="{{ routeActive('healthcare.create') }}">{{ __('master.healthcare') }}
                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('sliders') }}" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>{{ __('master.slider') }}</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('sliders') }};">
                            <li><a href="{{ route('sliders.index') }}"
                                    class="{{ routeActive('sliders.index') }}">{{ __('master.sliders') }}</a>
                            </li>
                            <li><a href="{{ route('sliders.create') }}"
                                    class="{{ routeActive('sliders.create') }}">{{ __('master.sliders') }}
                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('galleries') }}" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>{{ __('master.gallery') }}</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('galleries') }};">
                            <li><a href="{{ route('galleries.index') }}"
                                    class="{{ routeActive('galleries.index') }}">{{ __('master.gallery') }}</a>
                            </li>
                            <li><a href="{{ route('galleries.create') }}"
                                    class="{{ routeActive('galleries.create') }}">{{ __('master.gallery') }}
                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title {{ prefixActive('events') }}" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>{{ __('master.events') }}</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: {{ prefixBlock('events') }};">
                            <li><a href="{{ route('events.index') }}"
                                    class="{{ routeActive('events.index') }}">{{ __('master.events') }}</a>
                            </li>
                            <li><a href="{{ route('events.create') }}"
                                    class="{{ routeActive('events.create') }}">{{ __('master.events') }}
                                </a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>

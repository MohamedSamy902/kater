<header class="main-nav">
    <div class="sidebar-user text-center">
        <a class="setting-primary" href="<?php echo e(route('users.edit', auth()->user()->id)); ?>">
            <i data-feather="settings"></i>
        </a>
        <img class="img-90 rounded-circle"
            src="
                    <?php echo e(auth()->user()->getFirstMediaUrl('user') != null
                        ? auth()->user()->getFirstMediaUrl('user')
                        : asset('assets/images/dashboard/1.png')); ?>"
            alt="" />
        <div class="badge-bottom"><span class="badge badge-primary"><?php echo e(auth()->user()->roles_name); ?></span></div>
        <a href="user-profile">
            <h6 class="mt-3 f-14 f-w-600"><?php echo e(auth()->user()->name); ?></h6>
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
                            <h6><?php echo e(__('master.list')); ?></h6>
                        </div>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span><?php echo e(__('user.user')); ?></span>
                        </a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="<?php echo e(route('users.index')); ?>"
                                    class=""><?php echo e(__('user.user_list')); ?></a>
                            </li>
                            <li><a href="<?php echo e(route('users.create')); ?>"
                                    class=""><?php echo e(__('user.user_add')); ?>

                                </a></li>
                        </ul>
                    </li>



                    <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>Index </span>
                        </a>
                        <ul class="nav-submenu menu-content">

                            <li><a href="<?php echo e(URL::route('articles.index', 'Vision')); ?>"
                                    class="">Vision</a>
                            </li>
                            <li><a href="<?php echo e(URL::route('articles.index', 'HowItAllBegan')); ?>"
                                    class="">How It All Began</a>
                            </li>
                            
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title  href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span><?php echo e(__('master.slider')); ?></span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('sliders')); ?>;">
                            <li><a href="<?php echo e(route('sliders.index')); ?>"
                                    class=""><?php echo e(__('master.slider_list')); ?></a>
                            </li>
                            <li><a href="<?php echo e(route('sliders.create')); ?>"
                                    class=""><?php echo e(__('master.slider')); ?>

                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title " href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>About</span>
                        </a>
                        <ul class="nav-submenu menu-content">
                            <li><a href="<?php echo e(URL::route('articles.edit', ['FoundationStory'])); ?>"
                                    class="">FoundationStory</a>
                            </li>

                            <li><a href="<?php echo e(route('articles.index', 'TimeLine')); ?>"
                                    class=""><?php echo e(__('master.time_line')); ?></a>
                            </li>

                            <li><a href="<?php echo e(URL::route('articles.index', 'OurGoals')); ?>"
                                    class="">Our Goals</a>
                            </li>
                            <li><a href="<?php echo e(URL::route('articles.index', 'OurMission')); ?>"
                                    class="">Our Mission</a>
                            </li>
                            <li><a href="<?php echo e(URL::route('articles.index', 'OurVision')); ?>"
                                    class="">Our Vision</a>
                            </li>

                            <li><a href="<?php echo e(URL::route('articles.edit', ['WhoWeServe'])); ?>"
                                    class="">Who We Serve</a>
                            </li>


                            <li><a href="<?php echo e(URL::route('articles.index', 'WhereWeServe ')); ?>"
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
                            <li><a href="<?php echo e(URL::route('articles.index', 'Impact ')); ?>"
                                    class="">Impact</a>
                            </li>

                            <li><a href="<?php echo e(URL::route('articles.index', 'HealthcareInitiatives')); ?>"
                                    class="">Healthcare Initiatives</a>
                            </li>
                            <li><a href="<?php echo e(URL::route('articles.index', 'Wellbiganing')); ?>"
                                    class="">Well-Biganing</a>
                            </li>

                        </ul>
                    </li>


                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span><?php echo e(__('master.WellBeing')); ?></span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('WellBeing')); ?>;">
                            <li><a href="<?php echo e(route('wellBeing.index')); ?>"
                                    class=""><?php echo e(__('master.wellBeing_list')); ?></a>
                            </li>
                            <li><a href="<?php echo e(route('wellBeing.create')); ?>"
                                    class="">Add <?php echo e(__('master.Well')); ?>

                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span><?php echo e(__('master.Healthcare')); ?></span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('healthcare')); ?>;">
                            <li><a href="<?php echo e(route('healthcare.index')); ?>"
                                    class=""><?php echo e(__('master.Healthcare_list')); ?></a>
                            </li>
                            <li><a href="<?php echo e(route('healthcare.create')); ?>"
                                    class="">Add <?php echo e(__('master.Healthcare')); ?>

                                </a></li>
                        </ul>
                    </li>



                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span><?php echo e(__('master.gallery')); ?></span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('galleries')); ?>;">
                            <li><a href="<?php echo e(route('galleries.index')); ?>"
                                    class=""><?php echo e(__('master.gallery')); ?> List</a>
                            </li>
                            <li><a href="<?php echo e(route('galleries.create')); ?>"
                                    class=""> <?php echo e(__('master.add_gallery')); ?>

                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span><?php echo e(__('master.events')); ?></span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('events')); ?>;">
                            <li><a href="<?php echo e(route('events.index')); ?>"
                                    class=""><?php echo e(__('master.events_list')); ?></a>
                            </li>
                            <li><a href="<?php echo e(route('events.create')); ?>"
                                    class="">Add <?php echo e(__('master.events')); ?>

                                </a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </div>
    </nav>
</header>
<?php /**PATH /home/mohamed/Desktop/kater/resources/views/layouts/admin/partials/sidebar.blade.php ENDPATH**/ ?>
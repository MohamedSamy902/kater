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
                        <a class="nav-link menu-title <?php echo e(prefixActive('roles')); ?>" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span><?php echo e(__('role.role')); ?></span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('roles')); ?>;">
                            <li><a href="<?php echo e(route('roles.index')); ?>"
                                    class="<?php echo e(routeActive('roles.index')); ?>"><?php echo e(__('role.role_list')); ?></a>
                            </li>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('role-create')): ?>
                                <li><a href="<?php echo e(route('roles.create')); ?>"
                                        class="<?php echo e(routeActive('roles.create')); ?>"><?php echo e(__('role.add_role')); ?>

                                    </a></li>
                            <?php endif; ?>
                        </ul>
                    </li>
                    

                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('users')); ?>" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span><?php echo e(__('user.user')); ?></span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('users')); ?>;">
                            <li><a href="<?php echo e(route('users.index')); ?>"
                                    class="<?php echo e(routeActive('users.index')); ?>"><?php echo e(__('user.user_list')); ?></a>
                            </li>
                            <li><a href="<?php echo e(route('users.create')); ?>"
                                    class="<?php echo e(routeActive('users.create')); ?>"><?php echo e(__('user.user_add')); ?>

                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('users')); ?>" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>About</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('users')); ?>;">
                            <li><a href="<?php echo e(URL::route('articles.edit', ['FoundationStory'])); ?>"
                                    class="<?php echo e(routeActive('users.index')); ?>"><?php echo e(__('master.FoundationStory')); ?></a>
                            </li>

                            <li><a href="<?php echo e(route('articles.index', 'TimeLine')); ?>"
                                    class="<?php echo e(routeActive('users.index')); ?>"><?php echo e(__('master.time_line')); ?></a>
                            </li>

                            <li><a href="<?php echo e(URL::route('articles.edit', ['WhoWeServe'])); ?>"
                                    class="<?php echo e(routeActive('users.index')); ?>"><?php echo e(__('master.Who We Serve')); ?></a>
                            </li>

                            <li><a href="<?php echo e(URL::route('articles.index', 'OurGoals')); ?>"
                                    class="<?php echo e(routeActive('users.index')); ?>"><?php echo e(__('master.Our Goals')); ?></a>
                            </li>
                            <li><a href="<?php echo e(URL::route('articles.index', 'OurMission')); ?>"
                                    class="<?php echo e(routeActive('users.index')); ?>"><?php echo e(__('master.Our Mission')); ?></a>
                            </li>
                            <li><a href="<?php echo e(URL::route('articles.index', 'OurVision')); ?>"
                                    class="<?php echo e(routeActive('users.index')); ?>"><?php echo e(__('master.Our Vision')); ?></a>
                            </li>


                            <li><a href="<?php echo e(URL::route('articles.index', 'HowItAllBegan ')); ?>"
                                    class="<?php echo e(routeActive('users.index')); ?>"><?php echo e(__('master.How It All Began ')); ?></a>
                            </li>


                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('users')); ?>" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span>Index</span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('users')); ?>;">

                            <li><a href="<?php echo e(URL::route('articles.index', 'Vision')); ?>"
                                    class="<?php echo e(routeActive('users.index')); ?>"><?php echo e(__('master.Vision')); ?></a>
                            </li>
                            <li><a href="<?php echo e(URL::route('articles.index', 'HowItAllBegan')); ?>"
                                    class="<?php echo e(routeActive('users.index')); ?>"><?php echo e(__('master.How It All Began')); ?></a>
                            </li>
                            <li><a href="<?php echo e(URL::route('articles.index', 'HealthcareInitiatives')); ?>"
                                    class="<?php echo e(routeActive('users.index')); ?>"><?php echo e(__('master.Healthcare Initiatives')); ?></a>
                            </li>
                            <li><a href="<?php echo e(URL::route('articles.index', 'Wellbiganing')); ?>"
                                    class="<?php echo e(routeActive('users.index')); ?>"><?php echo e(__('master.Well-Biganing')); ?></a>
                            </li>


                            <li><a href="<?php echo e(URL::route('articles.index', 'Impact ')); ?>"
                                    class="<?php echo e(routeActive('users.index')); ?>"><?php echo e(__('master.Impact')); ?></a>
                            </li>


                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('users')); ?>" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span><?php echo e(__('user.user')); ?></span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('users')); ?>;">
                            <li><a href="<?php echo e(route('users.index')); ?>"
                                    class="<?php echo e(routeActive('users.index')); ?>"><?php echo e(__('user.user_list')); ?></a>
                            </li>
                            <li><a href="<?php echo e(route('users.create')); ?>"
                                    class="<?php echo e(routeActive('users.create')); ?>"><?php echo e(__('user.user_add')); ?>

                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('wellBeing')); ?>" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span><?php echo e(__('master.wellBeing')); ?></span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('wellBeing')); ?>;">
                            <li><a href="<?php echo e(route('wellBeing.index')); ?>"
                                    class="<?php echo e(routeActive('users.wellBeing')); ?>"><?php echo e(__('user.user_list')); ?></a>
                            </li>
                            <li><a href="<?php echo e(route('wellBeing.create')); ?>"
                                    class="<?php echo e(routeActive('wellBeing.create')); ?>"><?php echo e(__('master.wellBeing')); ?>

                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('healthcare')); ?>" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span><?php echo e(__('master.healthcare')); ?></span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('healthcare')); ?>;">
                            <li><a href="<?php echo e(route('healthcare.index')); ?>"
                                    class="<?php echo e(routeActive('users.healthcare')); ?>"><?php echo e(__('user.user_list')); ?></a>
                            </li>
                            <li><a href="<?php echo e(route('healthcare.create')); ?>"
                                    class="<?php echo e(routeActive('healthcare.create')); ?>"><?php echo e(__('master.healthcare')); ?>

                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('sliders')); ?>" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span><?php echo e(__('master.slider')); ?></span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('sliders')); ?>;">
                            <li><a href="<?php echo e(route('sliders.index')); ?>"
                                    class="<?php echo e(routeActive('sliders.index')); ?>"><?php echo e(__('master.sliders')); ?></a>
                            </li>
                            <li><a href="<?php echo e(route('sliders.create')); ?>"
                                    class="<?php echo e(routeActive('sliders.create')); ?>"><?php echo e(__('master.sliders')); ?>

                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('galleries')); ?>" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span><?php echo e(__('master.gallery')); ?></span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('galleries')); ?>;">
                            <li><a href="<?php echo e(route('galleries.index')); ?>"
                                    class="<?php echo e(routeActive('galleries.index')); ?>"><?php echo e(__('master.gallery')); ?></a>
                            </li>
                            <li><a href="<?php echo e(route('galleries.create')); ?>"
                                    class="<?php echo e(routeActive('galleries.create')); ?>"><?php echo e(__('master.gallery')); ?>

                                </a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a class="nav-link menu-title <?php echo e(prefixActive('events')); ?>" href="javascript:void(0)">
                            <i data-feather="home"></i>
                            <span><?php echo e(__('master.events')); ?></span>
                        </a>
                        <ul class="nav-submenu menu-content" style="display: <?php echo e(prefixBlock('events')); ?>;">
                            <li><a href="<?php echo e(route('events.index')); ?>"
                                    class="<?php echo e(routeActive('events.index')); ?>"><?php echo e(__('master.events')); ?></a>
                            </li>
                            <li><a href="<?php echo e(route('events.create')); ?>"
                                    class="<?php echo e(routeActive('events.create')); ?>"><?php echo e(__('master.events')); ?>

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
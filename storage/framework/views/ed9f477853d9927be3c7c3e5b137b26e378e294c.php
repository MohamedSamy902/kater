<header class="main-header">
    <nav class="main-menu">
        <div class="main-menu__wrapper">
            <div class="main-menu__wrapper-inner">
                <div class="main-menu__left">
                    <div class="main-menu__logo">
                        <?php
                            if (App::getLocale() == 'ar') {
                                echo '<a href="' . route('about') . '"><img src=" ' . asset('site') . '/assets/images/logo-ar.png" alt="" width="200px" class="pb-2"></a>';
                            } else {
                                echo '<a href=""><img src=" ' . asset('site') . '/assets/images/logo.png" alt="" width="200px" class="pb-2"></a>';
                            }
                        ?>
                    </div>

                </div>
                <div class="main-menu__right">

                    <div class="main-menu__right-bottom">
                        <div class="main-menu__main-menu-box">
                            <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                            <ul class="main-menu__list">
                                <li class="current megamenu active"><a href="<?php echo e(route('index')); ?>"><?php echo e(__('site.home')); ?>

                                    </a></li>
                                <li class="current megamenu"><a href="<?php echo e(route('about')); ?>"><?php echo e(__('site.about')); ?></a>
                                </li>
                                <li class="dropdown">
                                    <a href="<?php echo e(route('impact')); ?>"><?php echo e(__('site.ourImpact')); ?></a>
                                    <ul>
                                        <li><a href="<?php echo e(route('healthcare')); ?>"> <?php echo e(__('site.Healthcare')); ?></a></li>
                                        <li><a href="<?php echo e(route('wellbeing')); ?>"><?php echo e(__('site.WellBeing')); ?></a></li>
                                    </ul>
                                </li>
                                <li class="current megamenu"><a href="<?php echo e(route('gallery')); ?>"><?php echo e(__('site.gallery')); ?>

                                    </a></li>
                                <li class="current megamenu"><a
                                        href="<?php echo e(route('contact')); ?>"><?php echo e(__('site.contact')); ?></a></li>


                                        <?php
                                        if (App::getLocale() == 'ar') {
                                            echo '<li class="current megamenu ling"><a href="'. LaravelLocalization::getLocalizedURL('en'). '"> EN <i class="flag flag-us"></i></a></li>';
                                        }else {
                                            echo '<li class="current megamenu ling"><a href="'. LaravelLocalization::getLocalizedURL('ar'). '"> <i class="flag flag-egypt"></i> ع</a></li>';
                                        }
                                    ?>

                                
                                
                                
                                
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


<?php /**PATH /home/mohamed/Documents/kater/resources/views/site/layout/header.blade.php ENDPATH**/ ?>
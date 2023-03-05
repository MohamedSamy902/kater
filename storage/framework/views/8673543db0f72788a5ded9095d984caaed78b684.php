        <!--Site Footer Start-->
        <footer class="site-footer">
            <div class="site-footer-bg"
                style="background-image: url(<?php echo e(asset('site')); ?>/assets/images/backgrounds/site-footer-bg.jpg);">
            </div>
            <div class="site-footer__top">
                <div class="container ">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__about-logo">
                                    <?php
                                        if (App::getLocale() == 'ar') {
                                            echo '<a href=""><img src=" ' . asset('site') . '/assets/images/logo-white-ar.png" alt=""></a>';
                                        } else {
                                            echo '<a href=""><img src=" ' . asset('site') . '/assets/images/logo_white.png" alt=""></a>';
                                        }
                                    ?>
                                    
                                </div>

                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__links clearfix">
                                <h3 class="footer-widget__title"> <?php echo e(__('site.Quicklinks')); ?></h3>
                                <ul class="footer-widget__links-list list-unstyled clearfix">
                                    <li><a href="<?php echo e(route('about')); ?>"><?php echo e(__('site.about')); ?></a></li>
                                    <li><a href="<?php echo e(route('impact')); ?>"><?php echo e(__('site.ourImpact')); ?></a></li>
                                    

                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__contact">
                                <h3 class="footer-widget__title"><?php echo e(__('site.contact')); ?></h3>
                                <a
                                    href="https://www.google.com/maps/place//data=!4m2!3m1!1s0x145839c7b0d267d3:0x45da94c73096ce18?utm_source=mstt_1&entry=gps&lucs=swa&g_ep=CAESBzEwLjU1LjIYACD___________8BKgNzd2E%3D">
                                    <p class="footer-widget__contact-text"><?php echo e(__('site.addr')); ?>

                                    </p>
                                </a>
                                <ul class="list-unstyled footer-widget__contact-list">
                                    <li>
                                        <div class="icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>
                                        <div class="text">
                                            <p><a href="mailto:offical@khaterfoundation.com ">offical@khaterfoundation.com</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            
                                            <?php
                                                if (App::getLocale() == 'ar') {
                                                    echo '<i class="fas fa-phone"></i>';
                                                } elseif (App::getLocale() == 'en') {
                                                    echo '<i class="fas fa-phone-alt"></i>';
                                                }
                                            ?>
                                        </div>


                                        <div class="text number">
                                            <p><a class="number" href="tel:980009630">+2 25 17 40 18</a></p>
                                        </div>
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp">
                            <form action="https://layerdrops.com/khater/main-html/assets/inc/sendemail.php"
                                class="contact-page__form contact-form-validated" novalidate="novalidate">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3 class="footer-widget__title"> <?php echo e(__('site.Subscribetoournewslette')); ?></h3>
                                        <div class="input-group mb-3">
                                            <input type="text" class="form-control p-2 rounded subscribe"
                                                placeholder="<?php echo e(__('site.email')); ?>" aria-label="Email"
                                                aria-describedby="button-addon2">
                                            <button style="border-radius: 5px"class="btn btn-info text-white"
                                                type="button" id="button-addon2"><?php echo e(__('site.Subscribe')); ?></button>
                                        </div>

                                    </div>


                                </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="site-footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© All Copyright 2022 by <a
                                        href="#">KhaterFoundation.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Site Footer End-->


        </div><!-- /.page-wrapper -->


        <div class="mobile-nav__wrapper">
            <div class="mobile-nav__overlay mobile-nav__toggler"></div>
            <!-- /.mobile-nav__overlay -->
            <div class="mobile-nav__content">
                <span class="mobile-nav__close mobile-nav__toggler"><i class="fa fa-times"></i></span>

                <div class="logo-box">
                    <a href="index.html" aria-label="logo image"><img src="<?php echo e(asset('site')); ?>/assets/images/logo_white.png"
                            width="143" alt="" /></a>
                </div>
                <!-- /.logo-box -->
                <div class="mobile-nav__container"></div>
                <!-- /.mobile-nav__container -->

                <ul class="mobile-nav__contact list-unstyled">
                    <li>

                        <i class="fa fa-envelope"></i>
                        <a href="mailto:needhelp@packageName__.com">offical@khaterfoundation.com</a>
                    </li>
                    <li>
                        <?php if(App::getLocale() == 'ar'): ?>
                            <i class="fa fa-phone-alt"></i>
                        <?php else: ?>
                            <i class="fa fa-phone"></i>
                        <?php endif; ?>
                        <a href="tel:+2 25 17 40 18">+2 25 17 40 18</a>
                    </li>
                </ul><!-- /.mobile-nav__contact -->
            </div>
            <!-- /.mobile-nav__content -->
        </div>
        <!-- /.mobile-nav__wrapper -->

        <div class="search-popup">
            <div class="search-popup__overlay search-toggler"></div>
            <!-- /.search-popup__overlay -->
            <div class="search-popup__content">
                <form action="#">
                    <label for="search" class="sr-only">search here</label><!-- /.sr-only -->
                    <input type="text" id="search" placeholder="Search Here..." />
                    <button type="submit" aria-label="search submit" class="thm-btn">
                        <i class="icon-magnifying-glass"></i>
                    </button>
                </form>
            </div>
            <!-- /.search-popup__content -->
        </div>
        <!-- /.search-popup -->

        <a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="icon-up-arrow"></i>
        </a>
<?php /**PATH C:\Users\Administrator\Desktop\kater\resources\views/site/layout/footer.blade.php ENDPATH**/ ?>
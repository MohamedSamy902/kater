<?php $__env->startSection('content'); ?>
    <!--Main Slider Start-->
    <section class="main-slider clearfix">
        <div class="swiper-container thm-swiper__slider"
            data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
            <div class="swiper-wrapper">
                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(<?php echo e($slider->getFirstMediaUrl('slider')); ?>);">
                        </div>
                        <!-- /.image-layer -->

                        <div class="main-slider-shape-1"
                            style="background-image: url(<?php echo e(asset('site')); ?>/assets/images/shapes/main-slider-shape-1.jpg);">
                        </div>
                        <div class="main-slider-shape-2 float-bob-x">
                            <img src="<?php echo e($slider->getFirstMediaUrl('shaip')); ?>" alt="">
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-5 col-lg-5">
                                    <div class="main-slider__content">
                                        <h2 class="main-slider__title"><?php echo e($slider->title); ?></h2>
                                        <p class="text-white"><?php echo e($slider->content); ?></p>
                                        <div class="main-slider__btn-box">
                                            <?php if($slider->link != null): ?>
                                            <a href="<?php echo e(URL::current()); ?>/<?php echo e($slider->link); ?>" class="thm-btn main-slider__btn">
                                                <?php echo e(__('site.readMore')); ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

            <!-- If we need navigation buttons -->
            <div class="main-slider__nav">
                <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                    <i class="icon-left-arrow"></i>
                </div>
                <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                    <i class="icon-right-arrow"></i>
                </div>
            </div>

        </div>
    </section>
    <!--Main Slider End-->

    <!--About One Start-->
    <section class="about-one">
        <div class="about-one__shape-box-1">
            <div class="about-one__shape-1"
                style="background-image: url(<?php echo e(asset('site')); ?>/assets/images/shapes/about-one-shape-1.png);">
            </div>
        </div>
        <div class="container-fluid">
            <div class="row p-0">
                <div class="col-xl-5 p-0">
                    <div class="about-one__left">
                        <div class="about-one__img-box wow slideInLeft" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-one__img">
                                <img src="<?php echo e($HowItAllBegan->getFirstMediaUrl('HowItAllBegan')); ?>" alt="">
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-xl-7">
                    <div class="about-one__right pt-5">
                        <div class="section-title text-left">
                            <h2 class="section-title__title pb-2"><?php echo e($HowItAllBegan->title); ?></h2>
                        </div>
                        <p class="about-one__text pb-3"><?php echo $HowItAllBegan->content; ?></p>
                        <a href="<?php echo e(route('about')); ?>" class="thm-btn about-one__btn"><?php echo e(__('site.readMore')); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About One End-->



    <!--FAQ One Start-->
    <section class="faq-one faq-two faq-three">
        <div class="faq-one-shape-1"
            style="background-image: url(<?php echo e(asset('site')); ?>/assets/images/shapes/faq-one-shape-1.png);"></div>
        <div class="faq-one-bg"
            style="background-image: url(<?php echo e(asset('site')); ?>/assets/images/gallery/Khater.jpg);height: 100%"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 col-lg-5 pt-2 pb-0 px-5">
                    <div class="faq-one__left">
                        <div class="section-title text-left">
                            <h2 class="section-title__title"> <?php echo e($Vision->title); ?></h2>
                        </div>
                        <p class="faq-one__text-1"><?php echo $Vision->content; ?></p>
                        <a href="<?php echo e(route('about')); ?>" class="thm-btn about-one__btn"><?php echo e(__('site.readMore')); ?></a>

                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 p-0">
                    <div class="faq-one__right">
                        <div class="accrodion-grp" data-grp-name="faq-one-accrodion">
                            <img src="<?php echo e($Vision->getFirstMediaUrl('Vision')); ?>" class="" style="width: 100%"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--FAQ One End-->

    <!--Become Volunteer One Start-->
    <section class="become-volunteer-one" style="margin-top: 5px;">
        <div class="become-volunteer-one__bg-box">
            <div class="become-volunteer-one__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(<?php echo e(asset('site')); ?>/assets/images/resources/khairy\ \(63\ of\ 186\).jpg);">
            </div>
        </div>
        <div class="become-volunteer-one__shape-1"
            style="background-image: url(<?php echo e(asset('site')); ?>/assets/images/shapes/become-volunteer-shape-1.png);"></div>
        <div class="container-fuild">
            <div class="become-volunteer-one__inner">
                <ul class="list-unstyled counter-one__list">
                    <li class="counter-one__single Served">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/icon/khater counters (1).png" class="w-25 p-2 mt-3"
                            alt="">
                        <div class="counter-one__count-box">
                            <h3 class="odometer" style="font-size: 28px;" data-count="14">00</h3>
                            <p class="counter-one__text1"><?php echo e(__('site.Institutions')); ?> </p>
                        </div>
                    </li>
                    <li class="counter-one__single Provided">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/healthcare- icon 2022 KF.png" class="w-25 p-2 mt-3"
                            alt="">
                        <div class="counter-one__count-box">
                            <h3 class="odometer" style="font-size: 28px;" data-count="66,480">00</h3>
                            <p class="counter-one__text2"><?php echo e(__('site.HealthcareServices')); ?></p>
                        </div>
                    </li>
                    <li class="counter-one__single boxes">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/well-bieng icon.png" class="w-25 p-2 mt-3"
                            alt="">
                        <div class="counter-one__count-box">
                            <h3 class="odometer" style="font-size: 28px;" data-count="2,846,020">00</h3>
                            <p class="counter-one__text3"><?php echo e(__('site.WellbeingServices')); ?></p>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </section>
    <section class="donation-carousel-page">
        <div class="container-fuild p-5">
            <div class="row">
                <!--Causes One Single Start-->

                <!--Causes One Single End-->
                <!--Causes One Single Start-->
                <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="causes-one__single">
                            <a href="<?php echo e(URL::current()); ?>/<?php echo e($event->link); ?>">
                                <div class="causes-one__img">
                                    <img src="<?php echo e($event->getFirstMediaUrl('event')); ?>" alt="">
                                </div>
                            </a>

                            <div class="causes-one__content_index">
                                <h3 class="causes-one__title"><a
                                        href="<?php echo e(URL::current()); ?>/<?php echo e($event->link); ?>"><?php echo e($event->title); ?></a>
                                </h3>
                                <p class="causes-one__text"><?php echo e($event->content); ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <!--Causes One Single End-->

            </div>
        </div>
    </section>

    <section class="brand-one brand-three">
        <div class="container-fluid">
            <div class="col-xl-12 col-lg-12">
                <div class="events-two__left">
                    <div class="section-title text-left">
                        <h2 class="section-title__title"><?php echo e(__('site.SuccessPartners')); ?></h2>
                    </div>
                </div>
            </div>
            <div class="thm-swiper__slider swiper-container"
                data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay":true,
                "autoplayTimeout":3000, "breakpoints": {
                            "0": {
                                "spaceBetween": 30,
                                "slidesPerView": 2
                            },
                            "375": {
                                "spaceBetween": 30,
                                "slidesPerView": 2
                            },
                            "575": {
                                "spaceBetween": 30,
                                "slidesPerView": 3
                            },
                            "767": {
                                "spaceBetween": 50,
                                "slidesPerView": 4
                            },
                            "991": {
                                "spaceBetween": 50,
                                "slidesPerView": 5
                            },
                            "1199": {
                                "spaceBetween": 100,
                                "slidesPerView": 6
                            }
                        }}'>
                <div class="swiper-wrapper">
                    <!-- 57357 -->
                    <div class="swiper-slide story" style="margin-left: 25px;"
                        data-point="30.023051, 31.237779,brand-1-2.png,Children's Cancer Hospital 57357">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/57357.jpg" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide story"
                        data-point="24.0882715,32.900754,brand-1-3.png,Magdi Yacoub Hospital in Aswan">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/Abul_Reesh_Japan_ar.jpg" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide story"
                        data-point="30.031553, 31.226395,brand-1-6.png,Kasr Al Ainy Hospitals ciro">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/Abul_Reesh_Mounira.jpg" alt="">
                    </div>
                    <div class="swiper-slide story"
                        data-point="30.024057, 31.230955,brand-1-1.png,National Cancer Institute in Cairo">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/Ahl_Masr.jpg" alt="">
                    </div>
                    <!-- hero only -->
                    <div class="swiper-slide story"
                        data-point="30.0287572,31.2360329,brand-1-5.png,Abu El Reesh Japanese Hospital">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/Alameda_en.jpg" alt="">
                    </div>
                    <div class="swiper-slide story"
                        data-point="30.0287572,31.2360329,brand-1-5.png,Abu El Reesh Japanese Hospital">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/Egyptian_Autistic_Society.jpg"
                            alt="">
                    </div>
                    <div class="swiper-slide story"
                        data-point="30.0315206,31.2374614,brand-1-4.png,Abu El Reesh Hospital in Al Mounira ">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/Egyptian_Society_ar.jpg" alt="">
                    </div>
                    <div class="swiper-slide story"
                        data-point="29.9738291,31.2749382,brand-1-6.png,Face charity in Maadi">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/face.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/Kasr_Al_Ainy_en.jpg" alt="">
                    </div>
                    <?php
                        if (App::getLocale() == 'ar') {
                            echo '<div class="swiper-slide">
                                    <img src="' .
                                asset('site') .
                                '/assets/images/partners/Magdi_Yacoub_ar.jpg" alt="">
                                    </div>';
                            echo '<div class="swiper-slide">
                                    <img src="' .
                                asset('site') .
                                '/assets/images/partners/National_Cancer_Institute_ar.jpg" alt="">
                                    </div>';
                        } else {
                            echo '<div class="swiper-slide">
                                    <img src="' .
                                asset('site') .
                                '/assets/images/partners/Magdi_Yacoub_en.jpg" alt="">
                                    </div>';
                            echo '<div class="swiper-slide">
                                    <img src="' .
                                asset('site') .
                                '/assets/images/partners/National_Cancer_Institute_en.jpg" alt="">
                                    </div>';
                        }
                    ?>
                    
                    
                    <div class="swiper-slide">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/suez_canal.jpg" alt="">
                    </div>
                    <!-- 57357 -->
                    <div class="swiper-slide story" style="margin-left: 25px;"
                        data-point="30.023051, 31.237779,brand-1-2.png,Children's Cancer Hospital 57357">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/57357.jpg" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide story"
                        data-point="24.0882715,32.900754,brand-1-3.png,Magdi Yacoub Hospital in Aswan">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/Abul_Reesh_Japan_ar.jpg" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide story"
                        data-point="30.031553, 31.226395,brand-1-6.png,Kasr Al Ainy Hospitals ciro">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/Abul_Reesh_Mounira.jpg" alt="">
                    </div>
                    <div class="swiper-slide story"
                        data-point="30.024057, 31.230955,brand-1-1.png,National Cancer Institute in Cairo">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/Ahl_Masr.jpg" alt="">
                    </div>
                    <!-- hero only -->
                    <div class="swiper-slide story"
                        data-point="30.0287572,31.2360329,brand-1-5.png,Abu El Reesh Japanese Hospital">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/Alameda_en.jpg" alt="">
                    </div>
                    <div class="swiper-slide story"
                        data-point="30.0287572,31.2360329,brand-1-5.png,Abu El Reesh Japanese Hospital">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/Egyptian_Autistic_Society.jpg"
                            alt="">
                    </div>
                    <div class="swiper-slide story"
                        data-point="30.0315206,31.2374614,brand-1-4.png,Abu El Reesh Hospital in Al Mounira ">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/Egyptian_Society_ar.jpg" alt="">
                    </div>
                    <div class="swiper-slide story"
                        data-point="29.9738291,31.2749382,brand-1-6.png,Face charity in Maadi">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/face.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/Kasr_Al_Ainy_en.jpg" alt="">
                    </div>
                    
                    
                    <?php
                        if (App::getLocale() == 'ar') {
                            echo '<div class="swiper-slide">
                                    <img src="' .
                                asset('site') .
                                '/assets/images/partners/Magdi_Yacoub_ar.jpg" alt="">
                                    </div>';
                            echo '<div class="swiper-slide">
                                    <img src="' .
                                asset('site') .
                                '/assets/images/partners/National_Cancer_Institute_ar.jpg" alt="">
                                    </div>';
                        } else {
                            echo '<div class="swiper-slide">
                                    <img src="' .
                                asset('site') .
                                '/assets/images/partners/Magdi_Yacoub_en.jpg" alt="">
                                    </div>';
                            echo '<div class="swiper-slide">
                                    <img src="' .
                                asset('site') .
                                '/assets/images/partners/National_Cancer_Institute_en.jpg" alt="">
                                    </div>';
                        }
                    ?>
                    <div class="swiper-slide">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/suez_canal.jpg" alt="">
                    </div>
                    <div class="swiper-slide">
                        <!-- <img src="<?php echo e(asset('site')); ?>/assets/images/partners/suez_canal.jpg" alt=""> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed/Desktop/kater/resources/views/site/index.blade.php ENDPATH**/ ?>
<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.2/dist/leaflet.css"
        integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.2/dist/leaflet.js"
        integrity="sha256-o9N1jGDZrf5tS+Ft4gbIK7mYMipq9lqpVJ91xHSyKhg=" crossorigin=""></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <style>
        #map {
            height: 500px;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(<?php echo e(asset('site')); ?>/assets/images/backgrounds/khairy.jpg)">
        </div>
        <div class="container">
            <div class="page-header__inner">
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--About Four Start-->
    <section class="about-four mt-5">
        <div class="container-fuild">
            <div class="row">

                <div class="col-xl-6">
                    <div class="about-four__right">
                        <div class="section-title text-left">
                            <h2 class="section-title__title"><?php echo e($FoundationStory->title); ?></h2>
                        </div>
                        <p class="about-four__text"><?php echo $FoundationStory->content; ?></p>


                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-four__left" style="margin-top: 25px;">
                        <div class="about-four__img-box">
                            <div class="about-four__img story">
                                <img src="<?php echo e($FoundationStory->getFirstMediaUrl('FoundationStory')); ?>" class="w-100"
                                    alt=" w">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Four End-->
    <!--About Time Line Start -->
    <section class="content-inner-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title__title text-center"><?php echo e(__('site.timeLine')); ?></h2>
                    <div class="main-timeline9" style="top: -80px;">
                        <div class="timeline">
                            <div class="timeline-content line1">
                                <a href="<?php echo e($TimeLine[0]->link != null ? URL::to($TimeLine[0]->link) : 'javascript: void(0);'); ?>">
                                    <div class="circle"><img src="<?php echo e($TimeLine[0]->getFirstMediaUrl('TimeLine')); ?>"
                                            class=" " alt="">
                                    </div>
                                </a>
                                <div class="content">
                                    <p class="description">
                                    <ul style="text-align: start;"><?php echo $TimeLine[0]->content; ?>

                                    </ul>
                                    </p>

                                    <div class="icon"><?php echo e($TimeLine[0]->title); ?></div>

                                </div>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-content line2" style="margin-top: 50px">
                                <a href="<?php echo e($TimeLine[1]->link != null ? URL::to($TimeLine[1]->link) : 'javascript: void(0);'); ?>">
                                    <div class="circle"><img src="<?php echo e($TimeLine[1]->getFirstMediaUrl('TimeLine')); ?>"
                                            class=" " alt="">
                                    </div>
                                </a>
                                <div class="content">
                                    <p class="description">

                                    <ul style="text-align: start;">
                                        <?php echo e($TimeLine[1]->content); ?>

                                    </ul>
                                    </p>

                                    <div class="icon"><?php echo e($TimeLine[1]->title); ?></div>

                                </div>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-content line3" style="margin-top: 210px;">
                                <a href="<?php echo e($TimeLine[2]->link != null ? URL::to($TimeLine[2]->link) : 'javascript: void(0);'); ?>">
                                    <div class="circle"><img src="<?php echo e($TimeLine[2]->getFirstMediaUrl('TimeLine')); ?>"
                                            class=" " alt="">
                                    </div>
                                </a>
                                <div class="content">
                                    <p class="description">
                                    <ul style="text-align: start;">
                                        <?php
                                            $timelineLists = explode('//', $TimeLine[2]->content);
                                            foreach ($timelineLists as $timelineList) {
                                                echo '<li>' . $timelineList . '</li>';
                                            }
                                        ?>

                                    </ul>
                                    </p>

                                    <div class="icon"><?php echo e($TimeLine[2]->title); ?></div>

                                </div>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-content line4" style="margin-top: 200px;">
                                <a href="<?php echo e($TimeLine[3]->link != null ? URL::to($TimeLine[3]->link) : 'javascript: void(0);'); ?>">
                                    <div class="circle"><img src="<?php echo e($TimeLine[3]->getFirstMediaUrl('TimeLine')); ?>"
                                            class=" " alt="">
                                    </div>
                                </a>
                                <div class="content">
                                    <p class="description">
                                    <ul style="text-align: start;">
                                        <?php
                                            $timelineLists = explode('//', $TimeLine[3]->content);
                                            foreach ($timelineLists as $timelineList) {
                                                echo '<li>' . $timelineList . '</li>';
                                            }
                                        ?>

                                    </ul>
                                    </p>

                                    <div class="icon"><?php echo e($TimeLine[3]->title); ?></div>

                                </div>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-content line6" style="margin-top: 210px;">
                                <a href="<?php echo e($TimeLine[4]->link != null ? URL::to($TimeLine[4]->link) : 'javascript: void(0);'); ?>">
                                    <div class="circle">
                                        <img src="<?php echo e($TimeLine[4]->getFirstMediaUrl('TimeLine')); ?>" class=""
                                            alt="">
                                    </div>
                                </a>
                                <div class="content">
                                    <p class="description">
                                    <ul style="text-align: start;">
                                        <?php
                                            $timelineLists = explode('//', $TimeLine[4]->content);
                                            foreach ($timelineLists as $timelineList) {
                                                echo '<li>' . $timelineList . '</li>';
                                            }
                                        ?>

                                    </ul>
                                    </p>
                                    <div class="icon"><?php echo e($TimeLine[4]->title); ?></div>
                                </div>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-content line3" style="margin-top: 210px;">
                                <a href="<?php echo e($TimeLine[5]->link != null ? URL::to($TimeLine[5]->link) : 'javascript: void(0);'); ?>">

                                    <div class="circle"><img src="<?php echo e($TimeLine[5]->getFirstMediaUrl('TimeLine')); ?>"
                                            class=" " alt="">
                                    </div>
                                </a>
                                <div class="content">
                                    <p class="description">
                                    <ul style="text-align: start;">
                                        <?php
                                            $timelineLists = explode('//', $TimeLine[5]->content);
                                            foreach ($timelineLists as $timelineList) {
                                                echo '<li>' . $timelineList . '</li>';
                                            }
                                        ?>

                                    </ul>
                                    </p>

                                    <div class="icon"><?php echo e($TimeLine[5]->title); ?></div>

                                </div>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-content line5" style="margin-top: 200px;">
                                <a href="<?php echo e($TimeLine[6]->link != null ? URL::to($TimeLine[6]->link) : 'javascript: void(0);'); ?>">

                                    <div class="circle">
                                        <img src="<?php echo e($TimeLine[6]->getFirstMediaUrl('TimeLine')); ?>" class=""
                                            alt="">
                                    </div>
                                </a>
                                <div class="content">
                                    <p class="description">
                                    <ul style="text-align: start;">
                                        <?php
                                            $timelineLists = explode('//', $TimeLine[6]->content);
                                            foreach ($timelineLists as $timelineList) {
                                                echo '<li>' . $timelineList . '</li>';
                                            }
                                        ?>

                                    </ul>
                                    </p>
                                    <div class="icon"><?php echo e($TimeLine[6]->title); ?></div>
                                </div>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-content line7" style="margin-top: 210px;">
                                <a href="<?php echo e($TimeLine[7]->link != null ? URL::to($TimeLine[7]->link) : 'javascript: void(0);'); ?>">

                                    <div class="circle">
                                        <img src="<?php echo e($TimeLine[7]->getFirstMediaUrl('TimeLine')); ?>" class=""
                                            alt="">
                                    </div>
                                </a>
                                <div class="content">
                                    <p class="description">
                                    <ul style="text-align: start;">
                                        <?php
                                            $timelineLists = explode('//', $TimeLine[7]->content);
                                            foreach ($timelineLists as $timelineList) {
                                                echo '<li>' . $timelineList . '</li>';
                                            }
                                        ?>
                                    </ul>
                                    </p>
                                    <div class="icon"><?php echo e($TimeLine[7]->title); ?></div>
                                </div>
                            </div>
                        </div>

                        <div class="timeline">
                            <div class="timeline-content line9" style="margin-top: 250px;">
                                <a href="<?php echo e($TimeLine[8]->link != null ? URL::to($TimeLine[8]->link) : 'javascript: void(0);'); ?>">

                                    <div class="circle">
                                        <img src="<?php echo e($TimeLine[8]->getFirstMediaUrl('TimeLine')); ?>" class=""
                                            alt="">
                                    </div>
                                </a>
                                <div class="content">
                                    <p class="description">
                                    <ul style="text-align: start;">
                                        <?php
                                            $timelineLists = explode('//', $TimeLine[8]->content);
                                            foreach ($timelineLists as $timelineList) {
                                                echo '<li>' . $timelineList . '</li>';
                                            }
                                        ?>
                                    </ul>
                                    </p>
                                    <div class="icon"><?php echo e($TimeLine[8]->title); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <a href="<?php echo e(route('gallery')); ?>" class="thm-btn "><?php echo e(__('site.explore_more')); ?></a>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!--FAQ One Start-->
    <section class=" faq-one faq-two faq-three">
        <div class="faq-one-bg"
            style="background-image: url(<?php echo e(asset('site')); ?>/assets/images/backgrounds/project-manager-interview-questions.jpeg);">
        </div>

        <div class="container-fluid">
            <div class="row">

                <div class="col-xl-12 col-lg-12">
                    <div class="faq-one__left">
                        <div class="section-title text-center">
                            <h2 class="section-title__title"><?php echo e(__('site.approaches')); ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="200ms">
                        <div class="feature-two__single">
                            <div class="feature-two__single-inner two">
                                <div class="feature-two__content-box">
                                    <div class="feature-two__icon">
                                        <img src="<?php echo e(asset('site')); ?>/assets/images/icon/3074346.png" alt="">
                                    </div>
                                    <div class="feature-two__content-left">
                                        <h3 class="feature-two__title" style="margin: -9px 0px 10px 40px;">
                                            <?php echo e($OurVision->title); ?></h3>
                                        <p class="feature-two__tagline">
                                            <?php echo $OurVision->content; ?>

                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--Feature Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="100ms">
                        <div class="feature-two__single">
                            <div class="feature-two__single-inner one">
                                <div class="feature-two__content-box">
                                    <div class="feature-two__icon">
                                        <img src="<?php echo e(asset('site')); ?>/assets/images/icon/1310485.png" alt="">
                                    </div>
                                    <div class="feature-two__content-left">
                                        <h3 class="feature-two__title" style="margin: -9px 0px 10px 65px;">
                                            <?php echo e($OurMission->title); ?></h3>
                                        <p class="feature-two__tagline"><?php echo $OurMission->content; ?>

                                        </p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!--Feature Two Single End-->
                    <!--Feature Two Single Start-->

                    <!--Feature Two Single End-->
                    <!--Feature Two Single Start-->
                    <div class="col-xl-4 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
                        <div class="feature-two__single">
                            <div class="feature-two__single-inner three">
                                <div class="feature-two__content-box">
                                    <div class="feature-two__icon">
                                        <img src="<?php echo e(asset('site')); ?>/assets/images/icon/3165466.png" alt="">
                                    </div>
                                    <div class="feature-two__content-left">
                                        <h3 class="feature-two__title" style="margin: -9px 0px 12px 57px">
                                            <?php echo e($OurGoals->title); ?></h3>
                                        <div class="feature-two__tagline">
                                            <ul style="list-style-type: '- ';font-family: var(--khater-font-two);">
                                                <?php
                                                    $OurGoals = explode('//', $OurGoals->content);
                                                    foreach ($OurGoals as $goal) {
                                                        echo '<li>' . $goal . '</li>';
                                                    }
                                                ?>

                                            </ul>

                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                    <!--Feature Two Single End-->
                </div>


            </div>
        </div>
    </section>
    <!--FAQ One End-->

    <!--About One Start-->
    <section class="about-one">

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="about-one__right">
                        <div class="section-title text-left">
                            <h2 class="section-title__title"><?php echo e($WhoWeServe->title); ?></h2>
                        </div>
                        <p class="about-one__text"><?php echo $WhoWeServe->content; ?></p>

                    </div>
                </div>
                <div class="col-xl-12"
                    style="justify-content: center;  align-items: center;
                    display: flex;">
                    <div class="about-one__left">
                        <div class="about-one__img-box">
                            <img class=" " style="width: 100%;"
                                src="<?php echo e($WhoWeServe->getFirstMediaUrl('WhoWeServe')); ?>" alt="">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!--Brand One Start-->
    <section class="brand-one brand-three">
        <div class="container-fluid">
            <div class="col-xl-12 col-lg-12">
                <div class="events-two__left">
                    <div class="section-title text-left">
                        <h2 class="section-title__title"><?php echo e($WhereWeServe->title); ?></h2>
                    </div>
                    <p class="events-two__text"><?php echo $WhereWeServe->content; ?></p>
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
                        data-point="30.023051, 31.237779,57357.jpg,Children’s Cancer Hospital Foundation “57357”">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/57357.jpg" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide story"
                        data-point="30.0286233,31.2311496,Abul_Reesh_Japan_ar.jpg,Abu El Reesh Japanese Children’s Hospital">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/Abul_Reesh_Japan_ar.jpg" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide story"
                        data-point="30.0295405,31.2349331,Abul_Reesh_Mounira.jpg,Abu El Reesh Al Munira Children’s Hospital ">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/Abul_Reesh_Mounira.jpg" alt="">
                    </div>
                    <div class="swiper-slide story"
                        data-point="29.9811238,31.4322782,Ahl_Masr.jpg,Ahl Misr Foundation-new Cairo">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/Ahl_Masr.jpg" alt="">
                    </div>
                    <!-- hero only -->
                    <div class="swiper-slide story"
                        data-point="30.0287572,31.2360329,Egyptian_Autistic_Society.jpg,The Egyptian Autistic Society">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/Egyptian_Autistic_Society.jpg"
                            alt="">
                    </div>
                    <div class="swiper-slide story"
                        data-point="29.9596373,31.2714336,Egyptian_Society_ar.jpg,the Egyptian Society for Developing Skills of Children with Special Needs">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/Egyptian_Society_ar.jpg" alt="">
                    </div>
                    <div class="swiper-slide story"
                        data-point="29.9591905,31.2562821,face.jpg,Face for Children in Need Foundation- Maadi">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/face.jpg" alt="">
                    </div>
                    <div class="swiper-slide story"
                        data-point="30.0302578,31.228098,Kasr_Al_Ainy_en.jpg,Kasr AlAiny (Cairo University)">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/Kasr_Al_Ainy_en.jpg" alt="">
                    </div>
                    <?php
                        if (App::getLocale() == 'ar') {
                            echo '<div class="swiper-slide story"
                        data-point="30.0605837,31.2244674,Magdi_Yacoub_en.jpg,Magdi Yacoub Global Heart Foundation –Aswan">
                        <img src="' .
                                asset('site') .
                                '/assets/images/partners/Magdi_Yacoub_ar.jpg" alt="">
                                    </div>';
                            echo '<div class="swiper-slide story"
                        data-point="30.0243157,31.2302171,National_Cancer_Institute_ar.jpg,National Cancer Institute (Cairo University)">
                        <img src="' .
                                asset('site') .
                                '/assets/images/partners/National_Cancer_Institute_ar.jpg" alt="">
                                    </div>';
                        } else {
                            echo '<div class="swiper-slide story"
                        data-point="30.0605837,31.2244674,Magdi_Yacoub_en.jpg,Magdi Yacoub Global Heart Foundation –Aswan">
                        <img src="' .
                                asset('site') .
                                '/assets/images/partners/Magdi_Yacoub_en.jpg" alt="">
                                    </div>';
                            echo '<div class="swiper-slide story"
                        data-point="30.0243157,31.2302171,National_Cancer_Institute_en.jpg,National Cancer Institute (Cairo University)">
                        <img src="' .
                                asset('site') .
                                '/assets/images/partners/National_Cancer_Institute_en.jpg" alt="">
                                    </div>';
                        }
                    ?>
                    <div class="swiper-slide story"
                        data-point="30.620533,32.2675403,suez_canal.jpg,Suez Canal University Hospital">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/suez_canal.jpg" alt="">
                    </div>

                    <div class="swiper-slide story" style="margin-left: 25px;"
                        data-point="30.023051, 31.237779,57357.jpg,Children’s Cancer Hospital Foundation “57357”">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/57357.jpg" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide story"
                        data-point="30.0286233,31.2311496,Abul_Reesh_Japan_ar.jpg,Abu El Reesh Japanese Children’s Hospital">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/Abul_Reesh_Japan_ar.jpg" alt="">
                    </div><!-- /.swiper-slide -->
                    <div class="swiper-slide story"
                        data-point="30.0295405,31.2349331,Abul_Reesh_Mounira.jpg,Abu El Reesh Al Munira Children’s Hospital ">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/Abul_Reesh_Mounira.jpg" alt="">
                    </div>
                    <div class="swiper-slide story"
                        data-point="29.9811238,31.4322782,Ahl_Masr.jpg,Ahl Misr Foundation-new Cairo">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/Ahl_Masr.jpg" alt="">
                    </div>
                    <!-- hero only -->
                    <div class="swiper-slide story"
                        data-point="30.0287572,31.2360329,Egyptian_Autistic_Society.jpg,The Egyptian Autistic Society">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/Egyptian_Autistic_Society.jpg"
                            alt="">
                    </div>
                    <div class="swiper-slide story"
                        data-point="29.9596373,31.2714336,Egyptian_Society_ar.jpg,the Egyptian Society for Developing Skills of Children with Special Needs">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/Egyptian_Society_ar.jpg" alt="">
                    </div>
                    <div class="swiper-slide story"
                        data-point="29.9591905,31.2562821,face.jpg,Face for Children in Need Foundation- Maadi">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/face.jpg" alt="">
                    </div>
                    <div class="swiper-slide story"
                        data-point="30.0302578,31.228098,Kasr_Al_Ainy_en.jpg,Kasr AlAiny (Cairo University)">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/Kasr_Al_Ainy_en.jpg" alt="">
                    </div>

                    <?php
                        if (App::getLocale() == 'ar') {
                            echo '<div class="swiper-slide story"
                        data-point="30.0605837,31.2244674,Magdi_Yacoub_en.jpg,Magdi Yacoub Global Heart Foundation –Aswan">
                        <img src="' .
                                asset('site') .
                                '/assets/images/partners/Magdi_Yacoub_ar.jpg" alt="">
                                    </div>';
                            echo '<div class="swiper-slide story"
                        data-point="30.0243157,31.2302171,National_Cancer_Institute_ar.jpg,National Cancer Institute (Cairo University)">
                        <img src="' .
                                asset('site') .
                                '/assets/images/partners/National_Cancer_Institute_ar.jpg" alt="">
                                    </div>';
                        } else {
                            echo '<div class="swiper-slide story"
                        data-point="30.0605837,31.2244674,Magdi_Yacoub_en.jpg,Magdi Yacoub Global Heart Foundation –Aswan">
                        <img src="' .
                                asset('site') .
                                '/assets/images/partners/Magdi_Yacoub_en.jpg" alt="">
                                    </div>';
                            echo '<div class="swiper-slide story"
                        data-point="30.0243157,31.2302171,National_Cancer_Institute_en.jpg,National Cancer Institute (Cairo University)">
                        <img src="' .
                                asset('site') .
                                '/assets/images/partners/National_Cancer_Institute_en.jpg" alt="">
                                    </div>';
                        }
                    ?>
                    <div class="swiper-slide story"
                        data-point="30.620533,32.2675403,suez_canal.jpg,Suez Canal University Hospital">
                        <img src="<?php echo e(asset('site')); ?>/assets/images/partners/suez_canal.jpg" alt="">
                    </div>

                    <div class="swiper-slide">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Brand One End-->
    <div id="map"></div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('js'); ?>
    <script>
        // basic map setup. include other options as needed, refer to the docs
        var map = L.map('map').setView([30.022863, 31.2378640], 11);
        // map.L.setCode("en");
        L.tileLayer('https://tile.openstreetmap.de/{z}/{x}/{y}.png?lang=en', {
            maxZoom: 17,
            color: 'red',
        }).addTo(map);

        // bind click event to the story divs, add a marker and zoom to that story's location. Remember to add dot before story as it is classname
        $('.story').on('click', function() {
            // parse lat and lng from the divs data attribute
            var latlng = $(this).data().point.split(',');
            var lat = latlng[0];
            var lng = latlng[1];
            var img = latlng[2];
            var txt = latlng[3];
            var zoom = 17;
            var marker = L.marker([lat, lng], {}).addTo(map).bindPopup(
                    `<img src='<?php echo e(asset('site')); ?>/assets/images/partners/${img}' style='max-width:100%'>`)
                .openPopup().on('click',
                    onZoomInMark);
            // set the view
            map.setView([lat, lng], zoom);
        })

        function onZoomInMark(e) {
            map.panTo(e.latlng).zoomIn(5);
            map.setView(e.latlng, 16);
        }
        // function onMapClick(e) {
        //     alert("You clicked the map at " + e.latlng);
        // }
        // map.on('click', onMapClick);


        // function onZoomInMark(e) {
        //     alert(e);
        //     map.panTo(e.latlng).zoomIn(17);
        //     map.setView(e.latlng, 11);
        // }

        // 57357 Children's Cancer Hospital 57357
        L.marker([30.023051, 31.237779]).addTo(map).on('click', onZoomInMark);

        // Magdi Yacoub Hospital in Aswan
        L.marker([30.0605837, 31.2244674]).addTo(map).on('click', onZoomInMark);

        // Kasr Al Ainy Hospitals, Cairo
        L.marker([30.031553, 31.226395]).addTo(map).on('click', onZoomInMark);

        // National Cancer Institute in Cairo
        L.marker([30.0243157, 31.2302171]).addTo(map).on('click', onZoomInMark);

        // Abu El Reesh Japanese Hospital
        L.marker([30.0286233, 31.2311496]).addTo(map).on('click', onZoomInMark);

        // Abu El Reesh Al Munira Children’s Hospital
        L.marker([30.0295405, 31.2349331]).addTo(map).on('click', onZoomInMark);

        // Face for Children in Need Foundation- Maadi
        L.marker([29.9591905, 31.2562821]).addTo(map).on('click', onZoomInMark);

        // The Egyptian Autistic Society in Maadi
        L.marker([29.9596373, 31.2714336]).addTo(map).on('click', onZoomInMark);

        // Kasr AlAiny (Cairo University)
        L.marker([30.0302578, 31.228098]).addTo(map).on('click', onZoomInMark);

        // Advance Society for Autism and other Disabilities in New Cairo.
        L.marker([30.012801, 31.4603227]).addTo(map).on('click', onZoomInMark);

        // Suez Canal University Hospital and University in Ismailia
        L.marker([30.620533, 32.2675403]).addTo(map).on('click', onZoomInMark);

        // Minya Governorate
        L.marker([28.1807533, 31.6380565]).addTo(map).on('click', onZoomInMark);

        // 30.671873,32.2802739
        // L.marker([28.1807533, 31.6380565]).addTo(map).on('click', onZoomInMark);
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed/Desktop/kater/resources/views/site/about.blade.php ENDPATH**/ ?>
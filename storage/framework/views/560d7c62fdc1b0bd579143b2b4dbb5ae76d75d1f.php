<?php $__env->startSection('content'); ?>
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg"
            style="background-image: url(<?php echo e(asset('site')); ?>/assets/images/resources/WhatsApp\ Image\ 2022-11-22\ at\ 12.41.01\ PM.jpeg)">
        </div>
        <div class="container">
            <div class="page-header__inner">

            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--About Two Start-->
    <section class="about-two">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="about-two__right">
                        <div class="section-title text-left">
                            <h2 class="section-title__title"><?php echo e($healthcare->title); ?></h2>
                        </div>
                        <p class="about-two__text-1"><?php echo $healthcare->content; ?></p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-two__left">
                        <div class="about-two__img-box  wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-two__img">
                                <img src="<?php echo e($healthcare->getFirstMediaUrl('HealthcareInitiatives')); ?>" class="w-100">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--About Two End-->

    <!--Donation Start-->
    <section class="donation">
        <div class="container-fluid" style="padding: 30px 20px 0">
            <div class="row">
                <!--Causes One Single Start-->
                <?php $__currentLoopData = $healthcareies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $healthcareie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="causes-one__single">
                            <a href="<?php echo e(route('healthcare.detils', $healthcareie->id)); ?>">
                                <div class="causes-one__img">
                                    <img src="<?php echo e($healthcareie->getFirstMediaUrl('healthcarePhoto')); ?>" alt="">
                                </div>
                            </a>

                            <div class="causes-one__content">
                                <h3 class="causes-one__title"><a
                                        href="<?php echo e(route('healthcare.detils', $healthcareie->id)); ?>"><?php echo e($healthcareie->title); ?></a>
                                </h3>
                                <p class="causes-one__text">
                                    <?php echo e($healthcareie->short_content == null ? Str::limit($healthcareie->title, 250, ' .....') : Str::limit($healthcareie->short_content, 250, ' .....')); ?>

                                </p>

                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                <!--Causes One Single End-->
                <!--Causes One Single Start-->
                
                <!--Causes One Single End-->
                <!--Causes One Single Start-->
                
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
                data-swiper-options='{"spaceBetween": 0, "slidesPerView": 1, "autoplay":false,
                "autoplayTimeout":3000,"navigation": {
                    "nextEl": "#main-slider__swiper-button-next",
                    "prevEl": "#main-slider__swiper-button-prev"
                    }, "breakpoints": {
                            "0": {
                                "spaceBetween": 0,
                                "slidesPerView": 1
                            },

                            "575": {
                                "spaceBetween": 0,
                                "slidesPerView": 2
                            },


                            "1199": {
                                "spaceBetween": 0,
                                "slidesPerView": 3
                            }
                        }}'>
                <div class="swiper-wrapper">
                    <?php $__currentLoopData = $healthcareies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $healthcareie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xl-12 col-lg-12 col-md-6 p-2 swiper-slide">
                            <div class="causes-one__single">
                                <a href="<?php echo e(route('healthcare.detils', $healthcareie->id)); ?>">
                                    <div class="causes-one__img">
                                        <img style="width: 100%; height: 300px;" src="<?php echo e($healthcareie->getFirstMediaUrl('healthcarePhoto')); ?>" alt="">
                                    </div>
                                </a>

                                <div class="causes-one__content">
                                    <h3 class="causes-one__title"><a
                                            href="<?php echo e(route('healthcare.detils', $healthcareie->id)); ?>"><?php echo e($healthcareie->title); ?></a>
                                    </h3>
                                    <p class="causes-one__text">
                                        <?php echo e($healthcareie->short_content == null ? Str::limit($healthcareie->title, 250, ' .....') : Str::limit($healthcareie->short_content, 250, ' .....')); ?>

                                    </p>

                                </div>
                            </div>
                        </div>


                        <div class="col-xl-4 col-lg-6 col-md-6  p-2 swiper-slide">
                            <div class="causes-one__single">
                                <a href="<?php echo e(route('healthcare.detils', $healthcareie->id)); ?>">
                                    <div class="causes-one__img">
                                        <img style="width: 100%; height: 300px;" src="<?php echo e($healthcareie->getFirstMediaUrl('healthcarePhoto')); ?>" alt="">
                                    </div>
                                </a>

                                <div class="causes-one__content">
                                    <h3 class="causes-one__title"><a
                                            href="<?php echo e(route('healthcare.detils', $healthcareie->id)); ?>"><?php echo e($healthcareie->title); ?></a>
                                    </h3>
                                    <p class="causes-one__text">
                                        <?php echo e($healthcareie->short_content == null ? Str::limit($healthcareie->title, 250, ' .....') : Str::limit($healthcareie->short_content, 250, ' .....')); ?>

                                    </p>

                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="main-slider__nav" style="display: -webkit-box;">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Donation End-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed/Desktop/kater/resources/views/site/healthcare.blade.php ENDPATH**/ ?>
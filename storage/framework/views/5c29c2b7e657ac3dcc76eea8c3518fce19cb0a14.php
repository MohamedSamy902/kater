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
                        <p class="about-two__text-1"><?php echo e($healthcare->content); ?></p>
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
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="causes-one__single">
                            <div class="causes-one__img">
                                <a href="<?php echo e(route('healthcare.detils', $wellBeing[0]->id)); ?>">

                                    <img src="<?php echo e(asset('site')); ?>/assets/images/resources/WhatsApp Image 2022-11-22 at 12.43.46 PM.jpeg"
                                        alt="">
                                </a>

                            </div>
                            <div class="causes-one__content">
                                <h3 class="causes-one__title"><a href="<?php echo e(route('healthcare.detils', $wellBeing[0]->id)); ?>"><?php echo e($wellBeing[0]->title); ?></a>
                                </h3>
                                <p class="causes-one__text"> <?php echo e(Str::limit($wellBeing[0]->content, 250, ' .....')); ?></p>

                            </div>
                        </div>
                    </div>

                <!--Causes One Single End-->
                <!--Causes One Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <a href="<?php echo e(route('healthcare.detils', $wellBeing[1]->id)); ?>">
                                <img src="<?php echo e(asset('site')); ?>/assets/images/gallery/WhatsApp Image 2022-11-22 at 12.44.56 PM.jpeg"
                                    alt="">
                            </a>
                        </div>
                        <div class="causes-one__content">
                            <h3 class="causes-one__title"><a href="<?php echo e(route('healthcare.detils', $wellBeing[1]->id)); ?>"><?php echo e($wellBeing[1]->title); ?></a>
                            </h3>
                            <p class="causes-one__text"><?php echo e(Str::limit($wellBeing[1]->content, 250, ' .....')); ?></p>
                        </div>
                    </div>
                </div>
                <!--Causes One Single End-->
                <!--Causes One Single Start-->
                <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                    <div class="causes-one__single">
                        <div class="causes-one__img">
                            <a href="<?php echo e(route('healthcare.detils', $wellBeing[2]->id)); ?>">
                                <img src="<?php echo e(asset('site')); ?>/assets/images/resources/a994fa78-cf34-48c6-9ee0-6200db5846b5.jpg"
                                    alt="">
                            </a>
                        </div>
                        <div class="causes-one__content">
                            <h3 class="causes-one__title"><a href="<?php echo e(route('healthcare.detils', $wellBeing[2]->id)); ?>"><?php echo e($wellBeing[2]->title); ?> </a>
                            </h3>
                            <p class="causes-one__text"><?php echo e(Str::limit($wellBeing[2]->content, 250, ' .....')); ?> </p>
                        </div>
                    </div>
                </div>
                <!--Causes One Single End-->
            </div>
        </div>
    </section>
    <!--Donation End-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed/Documents/kater/resources/views/site/healthcare.blade.php ENDPATH**/ ?>
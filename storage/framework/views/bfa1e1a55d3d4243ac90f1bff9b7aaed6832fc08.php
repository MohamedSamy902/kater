<?php $__env->startSection('content'); ?>
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg" style="background-image: url(<?php echo e(asset('site')); ?>/assets/images/resources/WhatsApp\ Image.png)">
        </div>
        <div class="container">
            <div class="page-header__inner">

            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!--About Four Start-->
    <section class="about-four " style="padding:  100px 0;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7 " style=" display: flex;
                align-items: center; ">
                    <div class="about-four__right">
                        <div class="section-title text-left">
                            <h2 class="section-title__title"><?php echo e($impact->title); ?></h2>
                        </div>
                        <p class="about-four__text"><?php echo $impact->content; ?></p>
                        <div class="">
                            <a href="<?php echo e(route('healthcare')); ?>" class=" main-slider__btn Healthcare">  <?php echo e(__('site.Health')); ?> </a>
                            <a href="<?php echo e(route('wellbeing')); ?>" class=" main-slider__btn being"> <?php echo e(__('site.Well')); ?></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="about-four__left " style="margin-top: 70px;">
                        <div class="about-four__img-box impact_img">
                            <div class="about-four__img-box impact_img" style="left: 15px;">
                                <img src="<?php echo e($impact->getFirstMediaUrl('Impact')); ?>" class="w-100" alt=" ">
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!--About Four End-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed/Desktop/kater/resources/views/site/impact.blade.php ENDPATH**/ ?>
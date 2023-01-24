<?php $__env->startSection('content'); ?>
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header-bg"
            style="background-image: url(<?php echo e(asset('site')); ?>/assets/images/wellbeing.jpg)">
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
                            <h2 class="section-title__title"><?php echo e($Wellbiganing->title); ?></h2>
                        </div>
                        <p class="about-two__text-1"><?php echo $Wellbiganing->content; ?></p>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="about-two__left">
                        <div class="about-two__img-box  wow slideInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                            <div class="about-two__img">
                                <img src="<?php echo e($Wellbiganing->getFirstMediaUrl('Wellbiganing')); ?>" class="w-100">
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
                <?php $__currentLoopData = $wellbeingies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $wellbeing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                        <div class="causes-one__single">
                            <a href="<?php echo e(route('wellbeing.detils', $wellbeing->id)); ?>">
                                <div class="causes-one__img">
                                    <img src="<?php echo e($wellbeing->getFirstMediaUrl('wellbeingPhoto')); ?>" alt="">
                                </div>
                            </a>

                            <div class="causes-one__content">
                                <h3 class="causes-one__title"><a
                                        href="<?php echo e(route('wellbeing.detils', $wellbeing->id)); ?>"><?php echo e($wellbeing->title); ?></a>
                                </h3>
                                <p class="causes-one__text">
                                    <?php echo $wellbeing->short_content == null ? Str::limit($wellbeing->content, 250, ' .....') : Str::limit($wellbeing->short_content, 250, ' .....'); ?>

                                </p>

                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
    <!--Donation End-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed/Desktop/kater/resources/views/site/wellbeing.blade.php ENDPATH**/ ?>
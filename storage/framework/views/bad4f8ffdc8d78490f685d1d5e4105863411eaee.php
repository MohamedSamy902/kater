<?php $__env->startSection('content'); ?>
<section class="donation-carousel-page" style="padding: 120px 0px;">
    <div class="container-fuild p-5">
        <div class="row">
            <!--Causes One Single Start-->

            <!--Causes One Single End-->
            <!--Causes One Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="causes-one__single">
                    <div class="causes-one__img">
                        <a href="<?php echo e(route('gallery.detils')); ?>">
                            <img src="<?php echo e(asset('site')); ?>/assets/images/Kasr.jpg" alt="">
                        </a>
                    </div>
                    <div class="causes-one__content_index">
                        <h3 class="causes-one__title"><a href="">Kasr AlAiny-Cairo University</a>
                        </h3>
                    </div>
                </div>
            </div>
            <!--Causes One Single End-->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                <div class="causes-one__single">
                    <div class="causes-one__img">
                        <a href="<?php echo e(route('gallery.detils')); ?>">

                            <img src="<?php echo e(asset('site')); ?>/assets/images/Ramadan cover.jpg" alt="">
                        </a>

                    </div>
                    <div class="causes-one__content_index">
                        <h3 class="causes-one__title"><a href="<?php echo e(route('gallery.detils')); ?>">Ramadan Campaigns</a>
                        </h3>
                    </div>
                </div>
            </div>
            <!--Causes One Single Start-->
            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="600ms">
                <div class="causes-one__single">
                    <div class="causes-one__img">
                        <a href="<?php echo e(route('gallery.detils')); ?>">
                            <img src="<?php echo e(asset('site')); ?>/assets/images/Varian -NCI (22)-home page.jpg" alt="">
                        </a>
                    </div>
                    <div class="causes-one__content_index">
                        <h3 class="causes-one__title"><a href="">National Cancer Institute – Cairo University
                            </a>
                        </h3>
                    </div>
                </div>
            </div>
            <!--Causes One Single End-->
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed/Documents/resources/views/site/gallery.blade.php ENDPATH**/ ?>
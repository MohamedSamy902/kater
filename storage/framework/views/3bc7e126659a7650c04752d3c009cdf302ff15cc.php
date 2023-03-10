<?php $__env->startSection('content'); ?>
    <section class="donation-carousel-page text-center" style="padding: 60px 0px;">
        <div class="container-fuild p-5">
            <h1 style="text-align: -webkit-auto;padding-bottom: 30px;"><?php echo e(__('site.gallery')); ?></h1>

            <div class="row">
                <!--Causes One Single Start-->

                <!--Causes One Single End-->
                <!--Causes One Single Start-->
                <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="causes-one__single">
                            <a href="<?php echo e(route('gallery.detils', $gallery->id)); ?>">

                                <div class="causes-one__img">
                                    <img src="<?php echo e($gallery->getFirstMediaUrl('gallery')); ?>" alt="">
                                </div>
                            </a>

                            <div class="causes-one__content_index">
                                <h3 class="causes-one__title"><a
                                        href="<?php echo e(route('gallery.detils', $gallery->id)); ?>"><?php echo e($gallery->title); ?></a>
                                </h3>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed/Desktop/kater/resources/views/site/gallery.blade.php ENDPATH**/ ?>
<?php $__env->startSection('content'); ?>
    <!--Gallery Page Start-->
    <section class="gallery-page">
        <h1 class="text-center pb-3"><?php echo e($gall->title); ?></h1>
        <div class="container">
        <p class="pb-5 text-center"><?php echo e($gall->content); ?></p>


            <div class="row">
                <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="gallery-page__single">
                            <div class="gallery-page__img">
                                <img src="<?php echo e($gallery->getFirstMediaUrl('galleryDetails')); ?>">
                                <a href="<?php echo e($gallery->getFirstMediaUrl('galleryDetails')); ?>" class="img-popup"></a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
    </section>
    <!--Gallery Page End-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed/Desktop/kater/resources/views/site/gallery-details.blade.php ENDPATH**/ ?>
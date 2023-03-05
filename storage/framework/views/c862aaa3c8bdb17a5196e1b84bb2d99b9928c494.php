
<?php $__env->startSection('css'); ?>
    <style>
        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link.active {
            color: #54b4d3;
            border-color: #54b4d3;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <!--Gallery Page Start-->
    <section class="gallery-page">
        <h1 class="text-center pb-3 pt-5"><?php echo e($gall->title); ?></h1>
        <div class="container">
            <div class="pb-5 text-center"><?php echo $gall->content; ?></div>

            <div class="row">
                <?php if($countImageGallery > 0 && $countVideoGallery > 0): ?>
                    <nav class="pb-5">

                        <div class="nav nav-tabs" id="nav-tab" role="tablist" style="justify-content: center;">
                            <button style="text-transform: unset;    font-family: var(--khater-font-three);"
                                class="nav-link active" id="nav-Photos-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-Photos" type="button" role="tab" aria-controls="nav-Photos"
                                aria-selected="true"><?php echo e(__('site.photo')); ?></button>
                            <button style="text-transform: unset;" class="nav-link" id="nav-profile-tab"
                                data-bs-toggle="tab" data-bs-target="#nav-videos" type="button" role="tab"
                                aria-controls="nav-videos" aria-selected="false"><?php echo e(__('site.video')); ?></button>
                        </div>
                    </nav>
                <?php endif; ?>

                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-Photos" role="tabpanel" aria-labelledby="nav-home-tab">

                        <!--Gallery Page Start-->
                        <section class="gallery-page">
                            <div class="container">
                                <div class="row">
                                    <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(getUrlMedia($gallery, 'galleryDetails') != ''): ?>
                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="gallery-page__single">
                                                    <div class="gallery-page__img">
                                                        <img src="<?php echo e(getUrlMedia($gallery, 'galleryDetails')); ?>">
                                                        <a href="<?php echo e(getUrlMedia($gallery, 'galleryDetails')); ?>"
                                                            class="img-popup"></a>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </div>
                            </div>
                        </section>
                        <!--Gallery Page End-->

                    </div>
                    <div class="tab-pane fade" id="nav-videos" role="tabpanel" aria-labelledby="nav-videos-tab">
                        <!--Gallery Page Start-->
                        <section class="gallery-page">
                            <div class="container">
                                <div class="row">
                                    <?php $__currentLoopData = $galleries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gallery): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if(getUrlVideo($gallery, 'galleryVideo') != ''): ?>
                                            <div class="col-xl-4 col-lg-6 col-md-6">
                                                <div class="gallery-page__single">
                                                    <div class="gallery-page__img">
                                                        <video width="100%" controls
                                                            src="<?php echo e(getUrlVideo($gallery, 'galleryVideo')); ?>"></video>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </section>
                        <!--Gallery Page End-->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Gallery Page End-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Administrator\Desktop\kater\resources\views/site/gallery-details.blade.php ENDPATH**/ ?>
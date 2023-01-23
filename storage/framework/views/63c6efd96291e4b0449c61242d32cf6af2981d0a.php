<?php $__env->startSection('title'); ?>
    Product
    <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/select2.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owlcarousel.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/range-slider.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb_title'); ?>
            <h3>Product</h3>
        <?php $__env->endSlot(); ?>
        <li class="breadcrumb-item">ECommerce</li>
        <li class="breadcrumb-item active">Product</li>
    <?php echo $__env->renderComponent(); ?>

    <div class="container-fluid product-wrapper">
        <div class="product-grid">

            <div class="product-wrapper-grid">
                <h2 class="text-center"><?php echo e($gallery->title); ?></h2>

                <div class="row">
                    <?php $__currentLoopData = $gallery->galleryDetalis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galler): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-xl-3 col-sm-6 xl-4">
                            <div class="card">
                                <div class="product-box">
                                    <div class="product-img">
                                        <img class="img-fluid" src="<?php echo e($galler->getFirstMediaUrl('galleryDetails')); ?>"
                                            alt="" />
                                        <div class="product-hover">

                                            <ul>
                                                <li>
                                                    <a href="<?php echo e(route('deleteImage', $galler->id)); ?>"><i class="icon-shopping-cart"></i></a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo e(route('wellBeingDetails.edit', $galler->id)); ?>"><i
                                                            class="icon-eye"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="product-details">
                                        <h4><?php echo e($galler->title); ?> <?php echo e($galler->getFirstMedia()); ?></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
            </div>
        </div>
    </div>


    <?php $__env->startPush('scripts'); ?>
        <script src="<?php echo e(asset('assets/js/range-slider/ion.rangeSlider.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/range-slider/rangeslider-script.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/touchspin/vendors.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/touchspin/touchspin.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/touchspin/input-groups.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/owlcarousel/owl.carousel.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/product-tab.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed/Desktop/kater/resources/views/dashbord/gallery/show.blade.php ENDPATH**/ ?>
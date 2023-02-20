<?php $__env->startSection('title'); ?>
    <?php echo e(__('master.add_article')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/select2.css')); ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/select2.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owlcarousel.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/range-slider.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb_title'); ?>
            <h3></h3>
        <?php $__env->endSlot(); ?>

        
        
    <?php echo $__env->renderComponent(); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5><?php echo e(__('master.data')); ?></h5>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" novalidate="" method="post"
                            action="<?php echo e(route('galleriesgDetails.store')); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label class="form-label" for="validationCustom01"><?php echo e(__('master.title_en')); ?></label>
                                    <input class="form-control" id="validationCustom01" type="text" name="title"
                                        required="" value=".." />
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationCustom02"><?php echo e(__('master.title_ar')); ?></label>
                                    <input class="form-control" id="validationCustom02" type="text" name="title_ar"
                                        required="" value=".." />
                                    <input type="hidden" value="<?php echo e($gallery); ?>" name="galleries_id">
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>



                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationCustom02"><?php echo e(__('master.order_by')); ?></label>
                                <input class="form-control" id="validationCustom02" type="text" name="order_by"
                                    value="<?php echo e(old('order_by') ? old('order_by') : ''); ?>" />
                                <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                    data-bs-target=".bd-example-modal-lg">Large modal</button>
                                <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                                    aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">

                                                    <?php $__currentLoopData = $test; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $galler): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <div class="col-3">
                                                            <div class="card">
                                                                <div class="product-box">
                                                                    <div class="product-img">
                                                                        <img class="img-fluid"
                                                                            src="<?php echo e(url('media/' . $galler->id . '/' . $galler->file_name)); ?>"
                                                                            alt="" />
                                                                        <div class="product-hover">

                                                                            <ul>
                                                                                <li>
                                                                                    <a
                                                                                        href="<?php echo e(route('image.deleteImage', $galler->id)); ?>"><i
                                                                                            class="fa fa-plus"></i></a>
                                                                                </li>

                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                    <div class="product-details">
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationCustom10"><?php echo e(__('master.image')); ?></label>
                                    <input class="form-control" id="validationCustom10" type="file"
                                        aria-label="file example" name="galleryDetails[]" multiple />
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>

                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationCustom10"><?php echo e(__('master.video')); ?></label>
                                    <input class="form-control" id="validationCustom10" type="file"
                                        aria-label="file example" name="galleryVideo[]" multiple />
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>


                            <button class="btn btn-primary" type="submit"><?php echo e(__('master.save')); ?></button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <?php $__env->startPush('scripts'); ?>
        <script src="<?php echo e(asset('assets/js/form-validation-custom.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>
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

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed/Desktop/kater/resources/views/dashbord/gallery/image/create.blade.php ENDPATH**/ ?>
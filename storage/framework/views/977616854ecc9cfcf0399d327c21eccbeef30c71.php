<?php $__env->startSection('title'); ?>
    <?php echo e(__('master.add_article')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/select2.css')); ?>" />
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
                        <form class="needs-validation" novalidate="" method="post" action="<?php echo e(route('healthcare.store')); ?>"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>

                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label class="form-label" for="validationCustom01"><?php echo e(__('master.title_en')); ?></label>
                                    <input class="form-control" id="validationCustom01" type="text" name="title"
                                        required="" />
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationCustom02"><?php echo e(__('master.title_ar')); ?></label>
                                    <input class="form-control" id="validationCustom02" type="text" name="title_ar"
                                        required="" />
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>


                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label"
                                        for="validationCustom03"><?php echo e(__('master.content_en')); ?></label>
                                    <textarea id="editor1" cols="30" rows="10" class="form-control" id="validationCustom03" type="text" name="content" required=""></textarea>
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>
                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label"
                                        for="validationCustom04"><?php echo e(__('master.content_ar')); ?></label>
                                    <textarea id="editor2" rows="10" cols="30" class="form-control" id="validationCustom04" type="text" name="content_ar" required=""></textarea>
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>

                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label"
                                        for="validationCustom03"><?php echo e(__('master.short_content_en')); ?></label>
                                    <textarea rows="5" class="form-control" id="validationCustom03" type="text" name="short_content"
                                        required=""></textarea>
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>
                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label"
                                        for="validationCustom04"><?php echo e(__('master.short_content_ar')); ?></label>
                                    <textarea rows="5" class="form-control" id="validationCustom04" type="text" name="short_content_ar"
                                        required=""></textarea>
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>


                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label class="form-label"
                                        for="validationCustom01"><?php echo e(__('master.convoys_en')); ?></label>
                                    <input class="form-control" id="validationCustom01" type="text" name="convoys"
                                        required="" />
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label"
                                        for="validationCustom02"><?php echo e(__('master.convoys_ar')); ?></label>
                                    <input class="form-control" id="validationCustom02" type="text" name="convoys_ar"
                                        required="" />
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label class="form-label"
                                        for="validationCustom01"><?php echo e(__('master.services_en')); ?></label>
                                    <input class="form-control" id="validationCustom01" type="text" name="services"
                                        required="" />
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label"
                                        for="validationCustom02"><?php echo e(__('master.services_ar')); ?></label>
                                    <input class="form-control" id="validationCustom02" type="text"
                                        name="services_ar" required="" />
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label class="form-label" for="validationCustom02"><?php echo e(__('master.order_by')); ?></label>
                                <input class="form-control" id="validationCustom02" type="text" name="order_by" value="<?php echo e(old('order_by') ? old('order_by') : ''); ?>" />
                                <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                            </div>

                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationCustom10"><?php echo e(__('master.image')); ?></label>
                                    <input class="form-control" id="validationCustom10" type="file"
                                        aria-label="file example" name="healthcarePhoto" />
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>
                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationCustom10"><?php echo e(__('master.video')); ?></label>
                                    <input class="form-control" id="validationCustom10" type="file"
                                        aria-label="file example" name="healthcarevideo" />
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
        <script src="<?php echo e(asset('assets/js/editor/ckeditor/ckeditor.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/editor/ckeditor/adapters/jquery.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/editor/ckeditor/styles.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/editor/ckeditor/ckeditor.custom.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/form-validation-custom.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed/Desktop/kater/resources/views/dashbord/healthcare/create.blade.php ENDPATH**/ ?>
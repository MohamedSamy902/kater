<?php $__env->startSection('title'); ?>
    <?php echo e(__('master.add_healthcare')); ?>

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
                        <form class="needs-validation" method="post"
                            action="<?php echo e(route('healthcare.update', $healthcare->id)); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('patch'); ?>


                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label class="form-label" for="validationCustom01"><?php echo e(__('master.title_en')); ?></label>
                                    <input class="form-control" id="validationCustom01" type="text" name="title"
                                        required=""
                                        value="<?php echo e(old('title') ? old('title') : $healthcare->getTranslation('title', 'en')); ?>" />
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationCustom02"><?php echo e(__('master.title_ar')); ?></label>
                                    <input class="form-control" id="validationCustom02" type="text" name="title_ar"
                                        required=""
                                        value="<?php echo e(old('title_ar') ? old('title_ar') : $healthcare->getTranslation('title', 'ar')); ?>" />
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>

                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label"
                                        for="validationCustom03"><?php echo e(__('master.content_en')); ?></label>
                                    <textarea id="editor1" cols="30" rows="10" class="form-control" id="validationCustom03" type="text"
                                        name="content" required=""><?php echo e(old('content') ? old('content') : $healthcare->getTranslation('content', 'en')); ?></textarea>
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>
                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label"
                                        for="validationCustom04"><?php echo e(__('master.content_ar')); ?></label>
                                    <textarea id="editor2" cols="30" rows="10" class="form-control" id="validationCustom04" type="text"
                                        name="content_ar" required=""><?php echo e(old('content_ar') ? old('content_ar') : $healthcare->getTranslation('content', 'ar')); ?></textarea>
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>


                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label class="form-label"
                                        for="validationCustom01"><?php echo e(__('master.convoys_en')); ?></label>
                                    <input class="form-control" id="validationCustom01" type="text" name="convoys"
                                        required=""
                                        value="<?php echo e(old('convoys') ? old('convoys') : $healthcare->getTranslation('convoys', 'en')); ?>" />
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label"
                                        for="validationCustom02"><?php echo e(__('master.convoys_ar')); ?></label>
                                    <input class="form-control" id="validationCustom02" type="text" name="convoys_ar"
                                        required=""
                                        value="<?php echo e(old('convoys_ar') ? old('convoys_ar') : $healthcare->getTranslation('convoys', 'ar')); ?>" />
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>

                            <div class="row g-2">
                                <div class="col-md-6">
                                    <label class="form-label"
                                        for="validationCustom01"><?php echo e(__('master.services_en')); ?></label>
                                    <input class="form-control" id="validationCustom01" type="text" name="services"
                                        required=""
                                        value="<?php echo e(old('services') ? old('services') : $healthcare->getTranslation('services', 'en')); ?>" />
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label"
                                        for="validationCustom02"><?php echo e(__('master.services_ar')); ?></label>
                                    <input class="form-control" id="validationCustom02" type="text"
                                        name="services_ar" required=""
                                        value="<?php echo e(old('services_ar') ? old('services_ar') : $healthcare->getTranslation('services', 'ar')); ?>" />
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>

                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationDefault06"><?php echo e(__('master.status')); ?></label>
                                    <select class="form-select" id="validationDefault06" name="status">
                                        <option value="active"> Active</option>
                                        <option value="inactive"> InActive</option>
                                    </select>
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
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

                            <img src="<?php echo e($healthcare->getFirstMediaUrl('healthcareImage ')); ?>" alt="">


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

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/perfectchoice/public_html/kater/resources/views/dashbord/healthcare/edit.blade.php ENDPATH**/ ?>
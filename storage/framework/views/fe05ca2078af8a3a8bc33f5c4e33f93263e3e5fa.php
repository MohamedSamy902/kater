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
                        <form class="needs-validation" novalidate="" method="post" action="<?php echo e(route('articles.store', $model)); ?>"
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
                                    <textarea rows="5" class="form-control" id="validationCustom03" type="text" name="content" required=""></textarea>
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>
                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label"
                                        for="validationCustom04"><?php echo e(__('master.content_ar')); ?></label>
                                    <textarea rows="5" class="form-control" id="validationCustom04" type="text" name="content_ar" required=""></textarea>
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>

                            

                            

                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationCustom10"><?php echo e(__('master.image')); ?></label>
                                    <input class="form-control" id="validationCustom10" type="file"
                                        aria-label="file example" name="article" />
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
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed/Documents/kater/resources/views/dashbord/article/create.blade.php ENDPATH**/ ?>
<?php $__env->startSection('title'); ?>
    <?php echo e(__('user.user')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.breadcrumb'); ?>
        <?php $__env->slot('breadcrumb_title'); ?>
            <h3><?php echo e(__('user.user')); ?></h3>
        <?php $__env->endSlot(); ?>

        <li class="breadcrumb-item"><a href="<?php echo e(route('users.index')); ?>"><?php echo e(__('user.user')); ?></a></li>
        <li class="breadcrumb-item active"> <?php echo e(__('user.user_edit')); ?></li>
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
                            action="<?php echo e(route('users.update', $user->id)); ?>" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('patch'); ?>


                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationCustom01"><?php echo e(__('master.name')); ?></label>
                                    <input class="form-control" id="validationCustom01" type="text" required="" value="<?php echo e($user->name); ?>"
                                        name="name" placeholder="ex: Mohamed Samy" />
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>

                            <div class="row g-2">

                                <div class="col-md-6">
                                   <label class="form-label" for="validationCustom03"><?php echo e(__('master.phone')); ?></label>
                                    <input class="form-control" id="validationCustom03" type="text" name="mobile"
                                        value="<?php echo e($user->mobile); ?>" required="" />
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>

                                <div class="col-md-6 mb-3">
                                    <label class="form-label" for="validationCustom04"><?php echo e(__('master.email')); ?></label>
                                    <input class="form-control" id="validationCustom04" type="email" name="email"
                                        value="<?php echo e($user->email); ?>" required="" />
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>

                            </div>

                            <div class="row g-1">
                                <div class="col-md-12 mb-3">
                                    <label class="form-label" for="validationCustom05"><?php echo e(__('master.password')); ?></label>
                                    <input class="form-control" id="validationCustom05" type="text" name="password"
                                        placeholder="***********" />
                                    <div class="valid-feedback"><?php echo e(__('validation.valid_feedback')); ?></div>
                                    <div class="invalid-feedback"><?php echo e(__('validation.invalid_feedback')); ?></div>
                                </div>
                            </div>


                            



                            


                            <button class="btn btn-primary" type="submit">حفظ</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <?php $__env->startPush('scripts'); ?>
        <script src="<?php echo e(asset('assets/js/form-validation-custom.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/mohamed/Desktop/kater/resources/views/dashbord/users/edit.blade.php ENDPATH**/ ?>
<div class="col-md-6 mb-3">
    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">Select
        Image</button>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myLargeModalLabel">Images</h4>
                    <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <?php $__currentLoopData = $images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-3 gallary<?php echo e($image->id); ?>">
                                <div class="card">
                                    <div class="product-box">
                                        <div class="product-img">
                                            <img id="ImagePreview" class="img-fluid ImagePreview"
                                                src="<?php echo e(url('media/' . $image->id . '/' . $image->file_name)); ?>"
                                                alt="" />
                                            <div class="product-hover">
                                                <ul>
                                                    <li class="addImage" data-id="<?php echo e($image->id); ?>">
                                                        <a><i class="fa fa-plus"></i></a>
                                                    </li>

                                                </ul>
                                            </div>
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

<input type="hidden" name="attachments[]" id="attachments">


<?php $__env->startPush('scripts'); ?>
    <script>
        var newArray = [];

        $(".addImage").click(function() {

            var id = this.getAttribute("data-id")
            $(".gallary" + id).css('display', 'none');

            newArray.push(id);
            console.log(newArray);
            $('#attachments').val(newArray);

        });
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/mohamed/Desktop/kater/resources/views/dashbord/image.blade.php ENDPATH**/ ?>
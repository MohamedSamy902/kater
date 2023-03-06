

<?php $__env->startSection('content'); ?>
    <!--Event Details Start-->
    <section class="event-details ">
        <div class="container-fluid">
            <div class="row">
                <h3 class="event-details__title"><?php echo e($healthcare->title); ?></h3>
                <div class="col-xl-9 col-lg-9 ">
                    <?php
                        if ($healthcare->getFirstMediaUrl('healthcarevideo')) {
                            echo '<div class="event-details__left">

                            <video autoplay controls width="100%" style="">
                                <source src=" ' .
                                $healthcare->getFirstMediaUrl('healthcarevideo') .
                                ' " type="video/mp4">
                                <source src=" ' .
                                $healthcare->getFirstMediaUrl('healthcarevideo') .
                                ' " type="video/ogg">
                            </video>
                            </div>';
                        } else {
                            echo '<p class="event-details__text-6">' . $healthcare->content . '</p>';
                        }

                    ?>
                </div>
                <div class="col-xl-3 col-lg-3 ">
                    <div class="sidebar">

                        <div class="sidebar__single sidebar__post ">
                            <div class="sidebar-shape-1"
                                style="background-image: url(assets/images/shapes/sidebar-shape-1.png)"></div>
                            <marquee width="100%" direction="up" height="580px" scrollamount="2" loop="-1"
                                onmouseover="this.stop()" onmouseout="this.start()">

                                <?php $__currentLoopData = $allHealthcare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allHealth): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="">
                                        <a href="<?php echo e(route('healthcare.detils', $allHealth->id)); ?>">
                                            <div class="causes-one__single">
                                                <div class="causes-one__img">
                                                    <div class="row">
                                                        <div class="col-8"> <img
                                                                src="<?php echo e($allHealth->getFirstMediaUrl('healthcarePhoto')); ?>"
                                                                style="height: 80px;" alt=""></div>
                                                        <div class="col-4">
                                                            <p
                                                                style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">

                                                                <?php echo e($allHealth->title != null ? Str::limit($allHealth->title, 38, ' .....') : ''); ?>

                                                            </p>

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $allWellBeing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allWell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="">
                                        <a href="<?php echo e(route('wellbeing.detils', $allWell->id)); ?>">
                                            <div class="causes-one__single">
                                                <div class="causes-one__img">
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <img src="<?php echo e($allWell->getFirstMediaUrl('wellbeingPhoto')); ?>"
                                                                style="height: 80px;" alt="">
                                                        </div>
                                                        <div class="col-4">
                                                            <p
                                                                style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">
                                                                <?php echo e($allWell->title != null ? Str::limit($allWell->title, 38, ' .....') : ''); ?>


                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php $__currentLoopData = $allHealthcare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allHealth): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="">
                                        <a href="<?php echo e(route('healthcare.detils', $allHealth->id)); ?>">
                                            <div class="causes-one__single">
                                                <div class="causes-one__img">
                                                    <div class="row">
                                                        <div class="col-8"> <img
                                                                src="<?php echo e($allHealth->getFirstMediaUrl('healthcarePhoto')); ?>"
                                                                style="height: 80px;" alt=""></div>
                                                        <div class="col-4">
                                                            <p
                                                                style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">

                                                                <?php echo e($allHealth->title != null ? Str::limit($allHealth->title, 38, ' .....') : ''); ?>

                                                            </p>

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $allWellBeing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allWell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="">
                                        <a href="<?php echo e(route('wellbeing.detils', $allWell->id)); ?>">
                                            <div class="causes-one__single">
                                                <div class="causes-one__img">
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <img src="<?php echo e($allWell->getFirstMediaUrl('wellbeingPhoto')); ?>"
                                                                style="height: 80px;" alt="">
                                                        </div>
                                                        <div class="col-4">
                                                            <p
                                                                style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">
                                                                <?php echo e($allWell->title != null ? Str::limit($allWell->title, 38, ' .....') : ''); ?>


                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $allHealthcare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allHealth): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="">
                                        <a href="<?php echo e(route('healthcare.detils', $allHealth->id)); ?>">
                                            <div class="causes-one__single">
                                                <div class="causes-one__img">
                                                    <div class="row">
                                                        <div class="col-8"> <img
                                                                src="<?php echo e($allHealth->getFirstMediaUrl('healthcarePhoto')); ?>"
                                                                style="height: 80px;" alt=""></div>
                                                        <div class="col-4">
                                                            <p
                                                                style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">

                                                                <?php echo e($allHealth->title != null ? Str::limit($allHealth->title, 38, ' .....') : ''); ?>

                                                            </p>

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $allWellBeing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allWell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="">
                                        <a href="<?php echo e(route('wellbeing.detils', $allWell->id)); ?>">
                                            <div class="causes-one__single">
                                                <div class="causes-one__img">
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <img src="<?php echo e($allWell->getFirstMediaUrl('wellbeingPhoto')); ?>"
                                                                style="height: 80px;" alt="">
                                                        </div>
                                                        <div class="col-4">
                                                            <p
                                                                style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">
                                                                <?php echo e($allWell->title != null ? Str::limit($allWell->title, 38, ' .....') : ''); ?>


                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $allHealthcare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allHealth): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="">
                                        <a href="<?php echo e(route('healthcare.detils', $allHealth->id)); ?>">
                                            <div class="causes-one__single">
                                                <div class="causes-one__img">
                                                    <div class="row">
                                                        <div class="col-8"> <img
                                                                src="<?php echo e($allHealth->getFirstMediaUrl('healthcarePhoto')); ?>"
                                                                style="height: 80px;" alt=""></div>
                                                        <div class="col-4">
                                                            <p
                                                                style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">

                                                                <?php echo e($allHealth->title != null ? Str::limit($allHealth->title, 38, ' .....') : ''); ?>

                                                            </p>

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $allWellBeing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allWell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="">
                                        <a href="<?php echo e(route('wellbeing.detils', $allWell->id)); ?>">
                                            <div class="causes-one__single">
                                                <div class="causes-one__img">
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <img src="<?php echo e($allWell->getFirstMediaUrl('wellbeingPhoto')); ?>"
                                                                style="height: 80px;" alt="">
                                                        </div>
                                                        <div class="col-4">
                                                            <p
                                                                style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">
                                                                <?php echo e($allWell->title != null ? Str::limit($allWell->title, 38, ' .....') : ''); ?>


                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $allHealthcare; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allHealth): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="">
                                        <a href="<?php echo e(route('healthcare.detils', $allHealth->id)); ?>">
                                            <div class="causes-one__single">
                                                <div class="causes-one__img">
                                                    <div class="row">
                                                        <div class="col-8"> <img
                                                                src="<?php echo e($allHealth->getFirstMediaUrl('healthcarePhoto')); ?>"
                                                                style="height: 80px;" alt=""></div>
                                                        <div class="col-4">
                                                            <p
                                                                style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">

                                                                <?php echo e($allHealth->title != null ? Str::limit($allHealth->title, 38, ' .....') : ''); ?>

                                                            </p>

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $allWellBeing; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $allWell): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="">
                                        <a href="<?php echo e(route('wellbeing.detils', $allWell->id)); ?>">
                                            <div class="causes-one__single">
                                                <div class="causes-one__img">
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <img src="<?php echo e($allWell->getFirstMediaUrl('wellbeingPhoto')); ?>"
                                                                style="height: 80px;" alt="">
                                                        </div>
                                                        <div class="col-4">
                                                            <p
                                                                style="font-size: 12px; margin-left: -9px; letter-spacing: -0.05em;">
                                                                <?php echo e($allWell->title != null ? Str::limit($allWell->title, 38, ' .....') : ''); ?>


                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </marquee>
                        </div>

                    </div>
                </div>
                <div class="contener">
                    <div class="row">
                        <div class="col-xl-9 col-lg-9">
                            <div class="event-details__top">
                                <?php
                                    if ($healthcare->getFirstMediaUrl('healthcarevideo')) {
                                        echo '<p class="event-details__text-6">' . $healthcare->content . '</p>';
                                    }

                                ?>
                                
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3">
                            <ul style="padding: 20px 0 0 0;">
                                <li class="counter-one__single Provided">
                                    <img src="<?php echo e(asset('site')); ?>/assets/images/healthcare- icon 2022 KF.png"
                                        style="height: 50px;" alt="">
                                    <div class="counter-one__count-box p-2">
                                        <p class="counter-one__text4" style="width: 300px;">
                                            <?php echo e($healthcare->convoys != 0 ? $healthcare->convoys : ''); ?></span> </p>
                                        <p class="counter-one__text4" style="width: 300px;">
                                            <?php echo e($healthcare->services != 0 ? $healthcare->services : ''); ?>

                                        </p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!--Event Details End-->
    <!--Events Page Start-->
    <section class="events-carousel-page">
        <div class="container-fluid">
            <div class="events-carousel thm-owl__carousel owl-theme owl-carousel carousel-dot-style"
                data-owl-options='{
                    "items": 4,
                    "margin": 0,
                    "loop":true,
                    "autoplay": { "delay": 5000 },
                    "nav":false,
                    "dots":false,
                    "navText": ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],
                    "responsive":{
                        "0":{
                            "items":1
                        },
                        "768":{
                            "items":2
                        },
                        "992":{
                            "items": 4
                        }
                    }
                }'>
                <?php $__currentLoopData = $healthcare->healthcareDetalis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $HealthcareDetails): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="item px-1">
                        <div class="events-one__single">
                            <div class="causes-one__single">
                                <a
                                    href="<?php echo e($HealthcareDetails->link != null ? URL::to($HealthcareDetails->link) : 'javascript: void(0);'); ?>">

                                    <div class="causes-one__img">
                                        <img src="<?php echo e($HealthcareDetails->getFirstMediaUrl('healthcareDetails')); ?>"
                                            style="height: 300px" alt="">
                                        <div class="causes-one__cat">
                                            <p><?php echo e($HealthcareDetails->title); ?></p>
                                        </div>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


            </div>
        </div>
    </section>

    <!--Events Page End-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('site.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Administrator\Desktop\kater\resources\views/site/healthcare-details.blade.php ENDPATH**/ ?>
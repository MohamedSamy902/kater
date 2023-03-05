<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title> KhaterFoundation </title>
<!-- favicons Icons -->
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('site')); ?>/assets/images/2448648.png" />
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo e(asset('site')); ?>/assets/images/2448648.png" />
<link rel="icon" type="image/png" sizes="16x16" href="<?php echo e(asset('site')); ?>/assets/images/2448648.png" />
<link rel="manifest" href="<?php echo e(asset('site')); ?>/assets/images/favicons/site.webmanifest" />

<!-- fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com/">

<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>

<link
    href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
    rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&amp;display=swap"
    rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&amp;display=swap" rel="stylesheet">


<link rel="stylesheet" href="<?php echo e(asset('site')); ?>/assets/vendors/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo e(asset('site')); ?>/assets/vendors/animate/animate.min.css" />
<link rel="stylesheet" href="<?php echo e(asset('site')); ?>/assets/vendors/animate/custom-animate.css" />
<link rel="stylesheet" href="<?php echo e(asset('site')); ?>/assets/vendors/fontawesome/css/all.min.css" />
<link rel="stylesheet" href="<?php echo e(asset('site')); ?>/assets/vendors/jarallax/jarallax.css" />
<link rel="stylesheet" href="<?php echo e(asset('site')); ?>/assets/vendors/jquery-magnific-popup/jquery.magnific-popup.css" />
<link rel="stylesheet" href="<?php echo e(asset('site')); ?>/assets/vendors/nouislider/nouislider.min.css" />
<link rel="stylesheet" href="<?php echo e(asset('site')); ?>/assets/vendors/nouislider/nouislider.pips.css" />
<link rel="stylesheet" href="<?php echo e(asset('site')); ?>/assets/vendors/odometer/odometer.min.css" />
<link rel="stylesheet" href="<?php echo e(asset('site')); ?>/assets/vendors/swiper/swiper.min.css" />
<link rel="stylesheet" href="<?php echo e(asset('site')); ?>/assets/vendors/khater-icons/style.css">
<link rel="stylesheet" href="<?php echo e(asset('site')); ?>/assets/vendors/tiny-slider/tiny-slider.min.css" />
<link rel="stylesheet" href="<?php echo e(asset('site')); ?>/assets/vendors/reey-font/stylesheet.css" />
<link rel="stylesheet" href="<?php echo e(asset('site')); ?>/assets/vendors/owl-carousel/owl.carousel.min.css" />
<link rel="stylesheet" href="<?php echo e(asset('site')); ?>/assets/vendors/owl-carousel/owl.theme.default.min.css" />
<link rel="stylesheet" href="<?php echo e(asset('site')); ?>/assets/vendors/bxslider/jquery.bxslider.css" />
<link rel="stylesheet" href="<?php echo e(asset('site')); ?>/assets/vendors/bootstrap-select/css/bootstrap-select.min.css" />
<link rel="stylesheet" href="<?php echo e(asset('site')); ?>/assets/vendors/vegas/vegas.min.css" />
<link rel="stylesheet" href="<?php echo e(asset('site')); ?>/assets/vendors/jquery-ui/jquery-ui.css" />
<link rel="stylesheet" href="<?php echo e(asset('site')); ?>/assets/vendors/timepicker/timePicker.css" />

<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>

<!-- template styles -->
<link rel="stylesheet" href="<?php echo e(asset('site')); ?>/assets/css/khater.css" />
<link rel="stylesheet" href="<?php echo e(asset('site')); ?>/assets/css/khater-responsive.css" />
<!-- Font Awesome -->

<?php
    if(App::getLocale() == 'ar'){

        echo '<link rel="stylesheet" href=" '. asset('site') . '/assets/css/rtl.css" />';
    }
?>
<?php echo $__env->yieldContent('css'); ?>
<?php /**PATH C:\Users\Administrator\Desktop\kater\resources\views/site/layout/css.blade.php ENDPATH**/ ?>
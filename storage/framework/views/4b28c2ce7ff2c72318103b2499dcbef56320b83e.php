<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<?php
    $rtlLanguages = !empty($generalSettings['rtl_languages']) ? $generalSettings['rtl_languages'] : [];

    $isRtl = ((in_array(mb_strtoupper(app()->getLocale()), $rtlLanguages)) or (!empty($generalSettings['rtl_layout']) and $generalSettings['rtl_layout'] == 1));
?>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?php echo e($pageTitle ?? ''); ?></title>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- General CSS File -->
    <link rel="stylesheet" href="/assets/admin/vendor/bootstrap/bootstrap.min.css"/>
    <link rel="stylesheet" href="/assets/vendors/fontawesome/css/all.min.css"/>
    <link rel="stylesheet" href="/assets/admin/vendor/daterangepicker/daterangepicker.min.css">
    <link rel="stylesheet" href="/assets/admin/css/style.css">
    <link rel="stylesheet" href="/assets/admin/css/components.css">
    <?php if($isRtl): ?>
        <link rel="stylesheet" href="/assets/admin/css/rtl.css">
    <?php endif; ?>
    <link rel="stylesheet" href="/assets/default/vendors/toast/jquery.toast.min.css">
    <link rel="stylesheet" href="/assets/admin/css/custom.css">
</head>
<body class="<?php if($isRtl): ?> rtl <?php endif; ?>">

<div id="app">
    <?php
        $getPageBackgroundSettings = getPageBackgroundSettings();
    ?>

    <section class="section">
        <div class="d-flex flex-wrap align-items-stretch">
            <div class="col-lg-4 col-md-6 col-12 order-lg-1 min-vh-100 order-2 bg-white">

                <?php echo $__env->yieldContent('content'); ?>

            </div>

            <div class="col-lg-8 col-12 order-lg-2 order-1 min-vh-100 background-walk-y position-relative overlay-gradient-bottom" data-background="<?php echo e($getPageBackgroundSettings['admin_login'] ?? ''); ?>">
            <div class="absolute-bottom-left index-2">
            <div class="text-light p-5 pb-2">
              <div class="mb-2 pb-3">
                <h1 class="mb-2 display-4 font-weight-bold">Rocket LMS</h1>
                <h5 class="font-weight-normal text-muted-transparent">fully-featured educational platform</h5>
              </div>
              All rights reserved for <a class="text-light bb" target="_blank" href="https://codecanyon.net/user/rocketsoft">Rocket Soft</a> on <a class="text-light bb" target="_blank" href="https://codecanyon.net/collections/10821267-rocket-lms-full-package">Codecanyon</a>
            </div>
          </div>
            </div>
            
        </div>
    </section>
</div>
<!-- General JS Scripts -->
<script src="/assets/admin/vendor/jquery/jquery-3.3.1.min.js"></script>
<script src="/assets/admin/vendor/poper/popper.min.js"></script>
<script src="/assets/admin/vendor/bootstrap/bootstrap.min.js"></script>
<script src="/assets/admin/vendor/nicescroll/jquery.nicescroll.min.js"></script>
<script src="/assets/admin/vendor/moment/moment.min.js"></script>
<script src="/assets/admin/js/stisla.js"></script>
<script src="/assets/admin/vendor/daterangepicker/daterangepicker.min.js"></script>
<script src="/assets/default/vendors/toast/jquery.toast.min.js"></script>

<script>
    (function () {
        "use strict";

        window.csrfToken = $('meta[name="csrf-token"]');
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        window.adminPanelPrefix = '<?php echo e(getAdminPanelUrl()); ?>';

        <?php if(session()->has('toast')): ?>
        $.toast({
            heading: '<?php echo e(session()->get('toast')['title'] ?? ''); ?>',
            text: '<?php echo e(session()->get('toast')['msg'] ?? ''); ?>',
            bgColor: '<?php if(session()->get('toast')['status'] == 'success'): ?> #43d477 <?php else: ?> #f63c3c <?php endif; ?>',
            textColor: 'white',
            hideAfter: 10000,
            position: 'bottom-right',
            icon: '<?php echo e(session()->get('toast')['status']); ?>'
        });
        <?php endif; ?>
    })(jQuery);
</script>

<!-- Template JS File -->
<script src="/assets/admin/js/scripts.js"></script>
<script src="/assets/admin/js/custom.js"></script>

</body>
</html>
<?php /**PATH /home2/sc1lefl1855/hubview.fr/resources/views/admin/auth/auth_layout.blade.php ENDPATH**/ ?>
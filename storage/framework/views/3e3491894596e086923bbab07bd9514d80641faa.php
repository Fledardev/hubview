

<?php
    $maintenanceSettings = getMaintenanceSettings();
    $endDate = !empty($maintenanceSettings['end_date']) ? $maintenanceSettings['end_date'] : null;

    $remainingTimes = null;

    if (!empty($endDate) and is_numeric($endDate)) {
        $remainingTimes = time2string($endDate -  time());
    }
?>

<?php $__env->startSection('content'); ?>
    <section class="maintenance-section mt-25 mb-50 position-relative">
        <div class="container">
            <div class="d-flex-center flex-column">
                <?php if(!empty($maintenanceSettings['image'])): ?>
                    <div class="maintenance-image">
                        <img src="<?php echo e($maintenanceSettings['image']); ?>" alt="<?php echo e($maintenanceSettings['title']); ?>" class="img-cover">
                    </div>
                <?php endif; ?>

                <?php if(!empty($maintenanceSettings['title'])): ?>
                    <h1 class="font-36 font-weight-bold mt-10"><?php echo e($maintenanceSettings['title']); ?></h1>
                <?php endif; ?>

                <?php if(!empty($maintenanceSettings['description'])): ?>
                    <p class="font-14 font-weight-500 text-gray mt-15"><?php echo nl2br($maintenanceSettings['description']); ?></p>
                <?php endif; ?>

            </div>
        </div>
    </section>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('scripts_bottom'); ?>
    <style>
        .top-navbar {
            display: none !important;
        }
        section.maintenance-section.mt-25.mb-50.position-relative {
            /* vertical-align: middle; */
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 0 !important;
            margin-bottom: 0 !important;
        }
    </style>
    <script src="/assets/default/js/parts/maintenance.min.js"></script>
<?php $__env->stopPush(); ?>

<?php echo $__env->make('web.default.layouts.app', ['appFooter' => false, 'appHeader' => false, 'justMobileApp' => true], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/sc1lefl1855/hubview.fr/resources/views/web/default/maintenance/index.blade.php ENDPATH**/ ?>
<div class="d-none" id="courseShareModal">
    <h3 class="section-title after-line font-20 text-dark-blue mb-25"><?php echo e(trans('public.share')); ?></h3>

    <div class="text-center">
        <i data-feather="share-2" width="50" height="50" class="webinar-icon"></i>

        <p class="mt-20 font-14"><?php echo e(trans('public.share_this_course_with_others')); ?></p>

        <div class="position-relative d-flex align-items-center justify-content-between p-15 mt-15 border border-gray250 rounded-sm mt-5">
            <div class="js-course-share-link font-weight-bold px-16 text-ellipsis font-14"><?php echo e($course->getUrl()); ?></div>

            <button type="button" class="js-course-share-link-copy btn btn-primary btn-sm font-14 font-weight-500 flex-none" data-toggle="tooltip" data-placement="top" title="<?php echo e(trans('public.copy')); ?>"><?php echo e(trans('public.copy')); ?></button>
        </div>

        <div class="mt-32 mt-lg-40 row align-items-center font-14">
            <a href="<?php echo e($course->getShareLink('telegram')); ?>" target="_blank" class="col text-center">
                <img src="/assets/default/img/social/telegram.svg" width="50" height="50" alt="telegram">
                <span class="mt-10 d-block"><?php echo e(trans('public.telegram')); ?></span>
            </a>

            <a href="<?php echo e($course->getShareLink('whatsapp')); ?>" target="_blank" class="col text-center">
                <img src="/assets/default/img/social/whatsapp.svg" width="50" height="50" alt="whatsapp">
                <span class="mt-10 d-block"><?php echo e(trans('public.whatsapp')); ?></span>
            </a>

            <a href="<?php echo e($course->getShareLink('facebook')); ?>" target="_blank" class="col text-center">
                <img src="/assets/default/img/social/facebook.svg" width="50" height="50" alt="facebook">
                <span class="mt-10 d-block"><?php echo e(trans('public.facebook')); ?></span>
            </a>

            <a href="<?php echo e($course->getShareLink('twitter')); ?>" target="_blank" class="col text-center">
                <img src="/assets/default/img/social/twitter.svg" width="50" height="50" alt="twitter">
                <span class="mt-10 d-block"><?php echo e(trans('public.twitter')); ?></span>
            </a>
        </div>
    </div>

    <div class="mt-30 d-flex align-items-center justify-content-end">
        <button type="button" class="btn btn-sm btn-danger ml-10 close-swl"><?php echo e(trans('public.close')); ?></button>
    </div>
</div>
<?php /**PATH /home2/sc1lefl1855/lms.seomoji.fr/resources/views/web/default/course/share_modal.blade.php ENDPATH**/ ?>
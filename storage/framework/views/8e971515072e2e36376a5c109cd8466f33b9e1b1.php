<?php
    $icon = '';
    $hintText= '';

    if ($type == \App\Models\WebinarChapter::$chapterSession) {
        $icon = 'video';
        $hintText = dateTimeFormat($item->date, 'j M Y  H:i') . ' | ' . $item->duration . ' ' . trans('public.min');
    } elseif ($type == \App\Models\WebinarChapter::$chapterFile) {
        $hintText = trans('update.file_type_'.$item->file_type) . ($item->volume > 0 ? ' | '.$item->getVolume() : '');

        $icon = $item->getIconByType();
    } elseif ($type == \App\Models\WebinarChapter::$chapterTextLesson) {
        $icon = 'file-text';
        $hintText= $item->study_time . ' ' . trans('public.min');
    }

    $checkSequenceContent = $item->checkSequenceContent();
    $sequenceContentHasError = (!empty($checkSequenceContent) and (!empty($checkSequenceContent['all_passed_items_error']) or !empty($checkSequenceContent['access_after_day_error'])));

    $itemPersonalNote = $item->personalNote()->where('user_id', $authUser->id)->first();
    $hasPersonalNote = (!empty($itemPersonalNote) and !empty($itemPersonalNote->note));
?>

<div class=" d-flex align-items-start p-10 cursor-pointer <?php echo e((!empty($checkSequenceContent) and $sequenceContentHasError) ? 'js-sequence-content-error-modal' : 'tab-item'); ?>"
     data-type="<?php echo e($type); ?>"
     data-id="<?php echo e($item->id); ?>"
     data-passed-error="<?php echo e(!empty($checkSequenceContent['all_passed_items_error']) ? $checkSequenceContent['all_passed_items_error'] : ''); ?>"
     data-access-days-error="<?php echo e(!empty($checkSequenceContent['access_after_day_error']) ? $checkSequenceContent['access_after_day_error'] : ''); ?>"
>

        <span class="chapter-icon bg-gray300 mr-10">
            <i data-feather="<?php echo e($icon); ?>" class="text-gray" width="16" height="16"></i>
        </span>

    <div class="flex-grow-1">
        <div class="d-flex align-items-center justify-content-between">
            <div class="">
                <span class="font-weight-500 font-14 text-dark-blue d-block"><?php echo e($item->title); ?></span>
                <span class="font-12 text-gray d-block"><?php echo e($hintText); ?></span>
            </div>

            <?php if($hasPersonalNote): ?>
                <span class="item-personal-note-icon d-flex-center bg-gray200">
                    <i data-feather="edit-2" class="text-gray" width="14" height="14"></i>
                </span>
            <?php endif; ?>
        </div>


        <div class="tab-item-info mt-15">
            <p class="font-12 text-gray d-block">
                <?php
                    $description = !empty($item->description) ? $item->description : (!empty($item->summary) ? $item->summary : '');
                ?>

                <?php echo truncate($description, 150); ?>

            </p>

            <div class="d-flex align-items-center justify-content-between mt-15">
                <label class="mb-0 mr-10 cursor-pointer font-weight-normal font-14 text-dark-blue" for="readToggle<?php echo e($type); ?><?php echo e($item->id); ?>"><?php echo e(trans('public.i_passed_this_lesson')); ?></label>
                <div class="custom-control custom-switch">
                    <input type="checkbox" <?php if($sequenceContentHasError): ?> disabled <?php endif; ?> id="readToggle<?php echo e($type); ?><?php echo e($item->id); ?>" data-item-id="<?php echo e($item->id); ?>" data-item="<?php echo e($type); ?>_id" value="<?php echo e($item->webinar_id); ?>" class="js-passed-lesson-toggle custom-control-input" <?php if(!empty($item->checkPassedItem())): ?> checked <?php endif; ?>>
                    <label class="custom-control-label" for="readToggle<?php echo e($type); ?><?php echo e($item->id); ?>"></label>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home2/sc1lefl1855/lms.seomoji.fr/resources/views/web/default/course/learningPage/components/content_tab/content.blade.php ENDPATH**/ ?>
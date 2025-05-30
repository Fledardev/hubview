<div id="topFilters" class="mt-25 shadow-lg border border-gray300 rounded-sm p-10 p-md-20">
    <div class="row align-items-center">
        <div class="col-lg-9 d-block d-md-flex align-items-center justify-content-start my-25 my-lg-0">
            <div class="d-flex align-items-center justify-content-between justify-content-md-center">
                <label class="mb-0 mr-10 cursor-pointer" for="available_for_meetings"><?php echo e(trans('public.available_for_meetings')); ?></label>
                <div class="custom-control custom-switch">
                    <input type="checkbox" name="available_for_meetings" class="custom-control-input" id="available_for_meetings" <?php if(request()->get('available_for_meetings',null) == 'on'): ?> checked="checked" <?php endif; ?>>
                    <label class="custom-control-label" for="available_for_meetings"></label>
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-between justify-content-md-center mx-0 mx-md-20 my-20 my-md-0">
                <label class="mb-0 mr-10 cursor-pointer" for="free_meetings"><?php echo e(trans('public.free_meetings')); ?></label>
                <div class="custom-control custom-switch">
                    <input type="checkbox" name="free_meetings" class="custom-control-input" id="free_meetings" <?php if(request()->get('free_meetings',null) == 'on'): ?> checked="checked" <?php endif; ?>>
                    <label class="custom-control-label" for="free_meetings"></label>
                </div>
            </div>

            <div class="d-flex align-items-center justify-content-between justify-content-md-center">
                <label class="mb-0 mr-10 cursor-pointer" for="discount"><?php echo e(trans('public.discount')); ?></label>
                <div class="custom-control custom-switch">
                    <input type="checkbox" name="discount" class="custom-control-input" id="discount" <?php if(request()->get('discount',null) == 'on'): ?> checked="checked" <?php endif; ?>>
                    <label class="custom-control-label" for="discount"></label>
                </div>
            </div>

        </div>

        <div class="col-lg-3 d-flex align-items-center">
            <select name="sort" class="form-control">
                <option disabled selected><?php echo e(trans('public.sort_by')); ?></option>
                <option value=""><?php echo e(trans('public.all')); ?></option>
                <option value="top_rate" <?php if(request()->get('sort',null) == 'top_rate'): ?> selected="selected" <?php endif; ?>><?php echo e(trans('site.top_rate')); ?></option>
                <option value="top_sale" <?php if(request()->get('sort',null) == 'top_sale'): ?> selected="selected" <?php endif; ?>><?php echo e(trans('site.top_sellers')); ?></option>
            </select>
        </div>

    </div>
</div>
<?php /**PATH /home2/sc1lefl1855/lms.seomoji.fr/resources/views/web/default/instructorFinder/components/top_filters.blade.php ENDPATH**/ ?>
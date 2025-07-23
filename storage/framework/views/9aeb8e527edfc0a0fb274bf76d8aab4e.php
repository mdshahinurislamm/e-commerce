<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['src', 'alt' => trans('core/base::base.preview_image')]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['src', 'alt' => trans('core/base::base.preview_image')]); ?>
<?php foreach (array_filter((['src', 'alt' => trans('core/base::base.preview_image')]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<img
    <?php echo e($attributes); ?>

    src="<?php echo e($src); ?>"
    alt="<?php echo e($alt); ?>"
/>
<?php /**PATH F:\xamp\htdocs\mimi\platform/core/base/resources/views/components/image.blade.php ENDPATH**/ ?>
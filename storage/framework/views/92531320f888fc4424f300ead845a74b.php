<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['name', 'value', 'key', 'checked' => false, 'inline' => true, 'single' => false]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['name', 'value', 'key', 'checked' => false, 'inline' => true, 'single' => false]); ?>
<?php foreach (array_filter((['name', 'value', 'key', 'checked' => false, 'inline' => true, 'single' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $labelClasses = Arr::toCssClasses([
        'form-check',
        'form-check-inline' => $inline,
        'form-check-single' => $single,
    ]);
?>

<label class="<?php echo e($labelClasses); ?>">
    <input
        <?php echo e($attributes->merge(['class' => 'form-check-input'])); ?>

        type="radio"
        name="<?php echo e($name); ?>"
        value="<?php echo e($value); ?>"
        <?php if(old($name) === $value || $checked): echo 'checked'; endif; ?>
    >

    <span class="form-check-label"><?php echo e($slot); ?></span>
</label>
<?php /**PATH F:\xamp\htdocs\mimi\platform/core/base/resources/views/components/form/radio.blade.php ENDPATH**/ ?>
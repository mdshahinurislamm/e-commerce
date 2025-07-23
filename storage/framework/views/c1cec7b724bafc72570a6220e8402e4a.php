<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['label', 'name' => null, 'checked' => false, 'label' => null, 'id' => null, 'single' => false, 'wrapperClass' => null]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['label', 'name' => null, 'checked' => false, 'label' => null, 'id' => null, 'single' => false, 'wrapperClass' => null]); ?>
<?php foreach (array_filter((['label', 'name' => null, 'checked' => false, 'label' => null, 'id' => null, 'single' => false, 'wrapperClass' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php ($id = $attributes->get('id', $name) ?? Str::random(8)); ?>

<label class="<?php echo \Illuminate\Support\Arr::toCssClasses([
    'form-check form-switch',
    'form-check-single' => $single,
    $wrapperClass,
]); ?>">
    <input
        name="<?php echo e($name); ?>"
        type="hidden"
        value="0"
    />
    <input
        <?php echo e($attributes->merge(['class' => 'form-check-input', 'name' => $name, 'type' => 'checkbox', 'value' => '1', 'id' => $id])); ?>

        <?php if($checked): echo 'checked'; endif; ?>
    />

    <?php if($label): ?>
        <span class="form-check-label"><?php echo $label; ?></span>
    <?php endif; ?>
</label>
<?php /**PATH F:\xamp\htdocs\mimi\platform/core/base/resources/views/components/form/toggle.blade.php ENDPATH**/ ?>
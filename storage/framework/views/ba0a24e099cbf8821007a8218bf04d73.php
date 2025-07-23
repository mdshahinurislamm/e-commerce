<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'id' => null,
    'label' => null,
    'name' => null,
    'value' => null,
    'checked' => false,
    'helperText' => null,
    'inline' => false,
    'single' => false,
    'marginZero' => false
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'id' => null,
    'label' => null,
    'name' => null,
    'value' => null,
    'checked' => false,
    'helperText' => null,
    'inline' => false,
    'single' => false,
    'marginZero' => false
]); ?>
<?php foreach (array_filter(([
    'id' => null,
    'label' => null,
    'name' => null,
    'value' => null,
    'checked' => false,
    'helperText' => null,
    'inline' => false,
    'single' => false,
    'marginZero' => false
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
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
        'form-check-inline mb-3' => $inline,
        'form-check-single' => $single,
        'form-check m-0' => $marginZero,
    ]);

    if (isset($attributes['label_attr'])) {
        $labelAttr = $attributes['label_attr'];
        $labelAttr['class'] .= ' ' . $labelClasses;
        $labelAttr['class'] = trim(str_replace('form-label', '', $labelAttr['class']));
        unset($attributes['label_attr']);
    } else {
        $labelAttr = ['class' => $labelClasses];
    }
?>

<label <?php echo Html::attributes($labelAttr); ?>>
    <input
        <?php echo e($attributes->merge(['type' => 'checkbox', 'id' => $id, 'name' => $name, 'class' => 'form-check-input'])); ?>

        value="<?php echo e($value); ?>"
        <?php if($name ? old($name, $checked) : $checked): echo 'checked'; endif; ?>
    >

    <?php if($label || $slot->isNotEmpty()): ?>
        <span class="form-check-label">
            <?php echo $label ? BaseHelper::clean($label) : $slot; ?>

        </span>
    <?php endif; ?>

    <?php if($helperText): ?>
        <span class="form-check-description"><?php echo BaseHelper::clean($helperText); ?></span>
    <?php endif; ?>
</label>
<?php /**PATH F:\xamp\htdocs\mimi\platform/core/base/resources/views/components/form/checkbox.blade.php ENDPATH**/ ?>
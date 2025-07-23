<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['id', 'isActive' => false]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['id', 'isActive' => false]); ?>
<?php foreach (array_filter((['id', 'isActive' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div <?php echo e($attributes->merge(['class' => 'tab-pane' . ($isActive ? ' active show' : ''), 'id' => $id])); ?>>
    <?php echo e($slot); ?>

</div>
<?php /**PATH F:\xamp\htdocs\mimi\platform/core/base/resources/views/components/tab/pane.blade.php ENDPATH**/ ?>
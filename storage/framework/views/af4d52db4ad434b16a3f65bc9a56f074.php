<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'class',
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'class',
]); ?>
<?php foreach (array_filter(([
    'class',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<span <?php echo e($attributes->merge(['class' => 'badge badge-sm bg-primary text-primary-fg badge-pill menu-item-count ' . $class])); ?> data-url="<?php echo e(route('menu-items-count')); ?>" style="display: none"></span>
<?php /**PATH F:\xamp\htdocs\mimi\platform/core/base/resources/views/components/navbar/badge-count.blade.php ENDPATH**/ ?>
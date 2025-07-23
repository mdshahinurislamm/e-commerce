<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'nowrap' => false,
    'hover' => true,
    'striped' => true,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'nowrap' => false,
    'hover' => true,
    'striped' => true,
]); ?>
<?php foreach (array_filter(([
    'nowrap' => false,
    'hover' => true,
    'striped' => true,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $classes = Arr::toCssClasses(['table table-vcenter card-table', 'table-nowrap' => $nowrap, 'table-hover' => $hover, 'table-striped' => $striped]);
?>

<table <?php echo e($attributes->merge(['class' => $classes])); ?>>
    <?php echo e($slot); ?>

</table>
<?php /**PATH F:\xamp\htdocs\mimi\platform/core/base/resources/views/components/table/index.blade.php ENDPATH**/ ?>
<?php
    Arr::set($selectAttributes, 'class', Arr::get($selectAttributes, 'class') . ' form-select');
    $choices = $list ?? $choices;

    if ($optionsAttributes && ! is_array($optionsAttributes)) {
        $optionsAttributes = [];
    }
?>

<?php echo Form::select(
    $name,
    $choices,
    $selected,
    $selectAttributes,
    $optionsAttributes,
    $optgroupsAttributes,
); ?>

<?php /**PATH F:\xamp\htdocs\mimi\platform/core/base/resources/views/forms/partials/custom-select.blade.php ENDPATH**/ ?>
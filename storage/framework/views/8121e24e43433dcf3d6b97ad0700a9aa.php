<?php
    $fields = Arr::get($options, 'fields', []);
    $attributes = Arr::get($options, 'shortcode_attributes', []);
    $min = Arr::get($options, 'min', 1);
    $max = Arr::get($options, 'max', 20);
    $tabKey = Arr::get($options, 'attr.tab_key');
?>

<?php echo shortcode()->fields()->tabs($fields, $attributes, $max, $min, $tabKey); ?>

<?php /**PATH F:\xamp\htdocs\mimi\platform/packages/shortcode/resources/views/forms/fields/tabs.blade.php ENDPATH**/ ?>
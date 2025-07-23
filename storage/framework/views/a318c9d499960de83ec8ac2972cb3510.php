<?php
    $for = $name;

    if (isset($attributes['for'])) {
        $for = $attributes['for'];
    }
?>
<?php echo Form::label($for, $label, $attributes, $escapeHtml); ?>

<?php /**PATH F:\xamp\htdocs\mimi\platform/core/base/resources/views/forms/partials/label.blade.php ENDPATH**/ ?>
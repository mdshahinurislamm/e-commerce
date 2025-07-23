<?php
    /** @var Botble\Table\Actions\Action $action */
?>

<<?php echo e($action->getType()); ?>

    <?php echo $__env->make('core/table::actions.includes.action-attributes', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
>
    <?php echo $__env->make('core/table::actions.includes.action-icon', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <span class="<?php echo \Illuminate\Support\Arr::toCssClasses(['sr-only' => $action->hasIcon() && $action->isIconOnly()]); ?>"><?php echo e($action->getLabel()); ?></span>
</<?php echo e($action->getType()); ?>>
<?php /**PATH F:\xamp\htdocs\mimi\platform/core/table/resources/views/actions/action.blade.php ENDPATH**/ ?>
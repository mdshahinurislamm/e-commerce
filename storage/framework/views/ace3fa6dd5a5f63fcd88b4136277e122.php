<?php
    /** @var Botble\Table\Actions\Action $action */
    /** @var Botble\Table\Abstracts\TableAbstract $table */
?>

<?php if (isset($component)) { $__componentOriginal7681c9e8cd9d4250104639dd6412633f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7681c9e8cd9d4250104639dd6412633f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::dropdown.item','data' => ['label' => BaseHelper::clean($action->getLabel()),'dataTriggerBulkAction' => true,'dataMethod' => ''.e($action->getActionMethod()).'','dataTableTarget' => ''.e(get_class($table)).'','dataTarget' => ''.e(get_class($action)).'','dataConfirmationModalTitle' => ''.e($action->getConfirmationModalTitle()).'','dataConfirmationModalMessage' => ''.e($action->getConfirmationModalMessage()).'','dataConfirmationModalButton' => ''.e($action->getConfirmationModalButton()).'','dataConfirmationModalCancelButton' => ''.e($action->getConfirmationModalCancelButton()).'','href' => ''.e($action->getDispatchUrl()).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::dropdown.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(BaseHelper::clean($action->getLabel())),'data-trigger-bulk-action' => true,'data-method' => ''.e($action->getActionMethod()).'','data-table-target' => ''.e(get_class($table)).'','data-target' => ''.e(get_class($action)).'','data-confirmation-modal-title' => ''.e($action->getConfirmationModalTitle()).'','data-confirmation-modal-message' => ''.e($action->getConfirmationModalMessage()).'','data-confirmation-modal-button' => ''.e($action->getConfirmationModalButton()).'','data-confirmation-modal-cancel-button' => ''.e($action->getConfirmationModalCancelButton()).'','href' => ''.e($action->getDispatchUrl()).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7681c9e8cd9d4250104639dd6412633f)): ?>
<?php $attributes = $__attributesOriginal7681c9e8cd9d4250104639dd6412633f; ?>
<?php unset($__attributesOriginal7681c9e8cd9d4250104639dd6412633f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7681c9e8cd9d4250104639dd6412633f)): ?>
<?php $component = $__componentOriginal7681c9e8cd9d4250104639dd6412633f; ?>
<?php unset($__componentOriginal7681c9e8cd9d4250104639dd6412633f); ?>
<?php endif; ?>
<?php /**PATH F:\xamp\htdocs\mimi\platform/core/table/resources/views/bulk-action.blade.php ENDPATH**/ ?>
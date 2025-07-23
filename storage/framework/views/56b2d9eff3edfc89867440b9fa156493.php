<?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::button','data' => ['type' => 'button','icon' => 'ti ti-copy','class' => 'btn-trigger-duplicate-product','dataUrl' => ''.e(route('products.duplicate', $product->getKey())).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','icon' => 'ti ti-copy','class' => 'btn-trigger-duplicate-product','data-url' => ''.e(route('products.duplicate', $product->getKey())).'']); ?>
    <?php echo e(trans('plugins/ecommerce::ecommerce.forms.duplicate')); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $attributes = $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__attributesOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $component = $__componentOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>

<?php $__env->startPush('footer'); ?>
    <?php if (isset($component)) { $__componentOriginal9376784f974ff66f3ff18195ab0a89c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9376784f974ff66f3ff18195ab0a89c5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::modal.action','data' => ['id' => 'duplicate-product-modal','type' => 'info','title' => trans('plugins/ecommerce::ecommerce.duplicate_modal'),'submitButtonAttrs' => ['id' => 'confirm-duplicate-product-button'],'submitButtonLabel' => trans('plugins/ecommerce::ecommerce.forms.duplicate')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::modal.action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'duplicate-product-modal','type' => 'info','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::ecommerce.duplicate_modal')),'submit-button-attrs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['id' => 'confirm-duplicate-product-button']),'submit-button-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::ecommerce.forms.duplicate'))]); ?>
        <?php echo e(trans('plugins/ecommerce::ecommerce.duplicate_modal_description')); ?>

     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9376784f974ff66f3ff18195ab0a89c5)): ?>
<?php $attributes = $__attributesOriginal9376784f974ff66f3ff18195ab0a89c5; ?>
<?php unset($__attributesOriginal9376784f974ff66f3ff18195ab0a89c5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9376784f974ff66f3ff18195ab0a89c5)): ?>
<?php $component = $__componentOriginal9376784f974ff66f3ff18195ab0a89c5; ?>
<?php unset($__componentOriginal9376784f974ff66f3ff18195ab0a89c5); ?>
<?php endif; ?>
<?php $__env->stopPush(); ?>
<?php /**PATH F:\xamp\htdocs\mimi\platform/plugins/ecommerce/resources/views/forms/duplicate-action.blade.php ENDPATH**/ ?>
<?php if (isset($component)) { $__componentOriginal9376784f974ff66f3ff18195ab0a89c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9376784f974ff66f3ff18195ab0a89c5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::modal.action','data' => ['id' => 'resend-order-confirmation-email-modal','title' => trans('plugins/ecommerce::order.resend_order_confirmation'),'description' => trans('plugins/ecommerce::order.resend_order_confirmation_description', [
            'email' => $order->user->id ? $order->user->email : $order->address->email,
        ]),'submitButtonAttrs' => ['id' => 'confirm-resend-confirmation-email-button'],'submitButtonLabel' => trans('plugins/ecommerce::order.send')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::modal.action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'resend-order-confirmation-email-modal','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::order.resend_order_confirmation')),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::order.resend_order_confirmation_description', [
            'email' => $order->user->id ? $order->user->email : $order->address->email,
        ])),'submit-button-attrs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['id' => 'confirm-resend-confirmation-email-button']),'submit-button-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::order.send'))]); ?>
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

<?php if (isset($component)) { $__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldc8ac54b6bf7eb0d0560fdd5aa630687 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::modal','data' => ['id' => 'update-shipping-address-modal','title' => trans('plugins/ecommerce::order.update_address'),'buttonId' => 'confirm-update-shipping-address-button','buttonLabel' => trans('plugins/ecommerce::order.update'),'size' => 'md']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'update-shipping-address-modal','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::order.update_address')),'button-id' => 'confirm-update-shipping-address-button','button-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::order.update')),'size' => 'md']); ?>
    <?php echo $__env->make('plugins/ecommerce::orders.shipping-address.form', [
        'address' => $order->address,
        'orderId' => $order->id,
        'url' => route($updateShippingAddressRoute, $order->address->id ?? 0),
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldc8ac54b6bf7eb0d0560fdd5aa630687)): ?>
<?php $attributes = $__attributesOriginaldc8ac54b6bf7eb0d0560fdd5aa630687; ?>
<?php unset($__attributesOriginaldc8ac54b6bf7eb0d0560fdd5aa630687); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687)): ?>
<?php $component = $__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687; ?>
<?php unset($__componentOriginaldc8ac54b6bf7eb0d0560fdd5aa630687); ?>
<?php endif; ?>

<?php if (isset($component)) { $__componentOriginal9376784f974ff66f3ff18195ab0a89c5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9376784f974ff66f3ff18195ab0a89c5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::modal.action','data' => ['id' => 'cancel-order-modal','type' => 'warning','title' => trans('plugins/ecommerce::order.cancel_order_confirmation'),'description' => trans('plugins/ecommerce::order.cancel_order_confirmation_description'),'submitButtonAttrs' => ['id' => 'confirm-cancel-order-button'],'submitButtonLabel' => trans('plugins/ecommerce::order.cancel_order')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::modal.action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'cancel-order-modal','type' => 'warning','title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::order.cancel_order_confirmation')),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::order.cancel_order_confirmation_description')),'submit-button-attrs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['id' => 'confirm-cancel-order-button']),'submit-button-label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::order.cancel_order'))]); ?>
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
<?php /**PATH F:\xamp\htdocs\mimi\platform/plugins/ecommerce/resources/views/orders/edit/modal.blade.php ENDPATH**/ ?>
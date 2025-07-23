<?php if (isset($component)) { $__componentOriginaldaa3077dcea8104eb7236c8018937633 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldaa3077dcea8104eb7236c8018937633 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::navbar.badge-count','data' => ['class' => $class]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::navbar.badge-count'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($class)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldaa3077dcea8104eb7236c8018937633)): ?>
<?php $attributes = $__attributesOriginaldaa3077dcea8104eb7236c8018937633; ?>
<?php unset($__attributesOriginaldaa3077dcea8104eb7236c8018937633); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldaa3077dcea8104eb7236c8018937633)): ?>
<?php $component = $__componentOriginaldaa3077dcea8104eb7236c8018937633; ?>
<?php unset($__componentOriginaldaa3077dcea8104eb7236c8018937633); ?>
<?php endif; ?>
<?php /**PATH F:\xamp\htdocs\mimi\platform/core/base/resources/views/partials/navbar/badge-count.blade.php ENDPATH**/ ?>
<?php if (isset($component)) { $__componentOriginalb01dabf26578858fdcffedb4ad1d59fd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb01dabf26578858fdcffedb4ad1d59fd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::tab.item','data' => ['id' => $id,'label' => $label]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::tab.item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($id),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($label)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb01dabf26578858fdcffedb4ad1d59fd)): ?>
<?php $attributes = $__attributesOriginalb01dabf26578858fdcffedb4ad1d59fd; ?>
<?php unset($__attributesOriginalb01dabf26578858fdcffedb4ad1d59fd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb01dabf26578858fdcffedb4ad1d59fd)): ?>
<?php $component = $__componentOriginalb01dabf26578858fdcffedb4ad1d59fd; ?>
<?php unset($__componentOriginalb01dabf26578858fdcffedb4ad1d59fd); ?>
<?php endif; ?>
<?php /**PATH F:\xamp\htdocs\mimi\platform/core/base/resources/views/forms/tabs/tab-item.blade.php ENDPATH**/ ?>
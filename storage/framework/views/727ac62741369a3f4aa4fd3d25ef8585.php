<?php if (isset($component)) { $__componentOriginal76cffb64887e6cc5d66bf632725c28d8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal76cffb64887e6cc5d66bf632725c28d8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.image','data' => ['name' => $name,'value' => $value,'action' => 'select-image','attributes' => new Illuminate\View\ComponentAttributeBag((array) Arr::get($attributes, 'attr', []))]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form.image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value),'action' => 'select-image','attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(new Illuminate\View\ComponentAttributeBag((array) Arr::get($attributes, 'attr', [])))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal76cffb64887e6cc5d66bf632725c28d8)): ?>
<?php $attributes = $__attributesOriginal76cffb64887e6cc5d66bf632725c28d8; ?>
<?php unset($__attributesOriginal76cffb64887e6cc5d66bf632725c28d8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal76cffb64887e6cc5d66bf632725c28d8)): ?>
<?php $component = $__componentOriginal76cffb64887e6cc5d66bf632725c28d8; ?>
<?php unset($__componentOriginal76cffb64887e6cc5d66bf632725c28d8); ?>
<?php endif; ?>
<?php /**PATH F:\xamp\htdocs\mimi\platform/core/base/resources/views/forms/partials/image.blade.php ENDPATH**/ ?>
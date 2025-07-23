<?php if (isset($component)) { $__componentOriginal4070fdbc26e7b18576b904e0a79085a0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4070fdbc26e7b18576b904e0a79085a0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.toggle','data' => ['id' => $attributes['id'] ?? $name . '_' . md5($name),'name' => $name,'checked' => $value,'attributes' => new Illuminate\View\ComponentAttributeBag((array) $attributes)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form.toggle'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($attributes['id'] ?? $name . '_' . md5($name)),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(new Illuminate\View\ComponentAttributeBag((array) $attributes))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4070fdbc26e7b18576b904e0a79085a0)): ?>
<?php $attributes = $__attributesOriginal4070fdbc26e7b18576b904e0a79085a0; ?>
<?php unset($__attributesOriginal4070fdbc26e7b18576b904e0a79085a0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4070fdbc26e7b18576b904e0a79085a0)): ?>
<?php $component = $__componentOriginal4070fdbc26e7b18576b904e0a79085a0; ?>
<?php unset($__componentOriginal4070fdbc26e7b18576b904e0a79085a0); ?>
<?php endif; ?>
<?php /**PATH F:\xamp\htdocs\mimi\platform/core/base/resources/views/forms/partials/on-off.blade.php ENDPATH**/ ?>
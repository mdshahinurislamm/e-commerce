<?php if (isset($component)) { $__componentOriginal5ee5f78769862fd20bf1abe3e4744d51 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5ee5f78769862fd20bf1abe3e4744d51 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.field','data' => ['showLabel' => $showLabel,'showField' => $showField,'options' => $options,'name' => $name,'prepend' => $prepend ?? null,'append' => $append ?? null,'showError' => $showError,'nameKey' => $nameKey]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form.field'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['showLabel' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($showLabel),'showField' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($showField),'options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($options),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name),'prepend' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($prepend ?? null),'append' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($append ?? null),'showError' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($showError),'nameKey' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($nameKey)]); ?>
     <?php $__env->slot('label', null, []); ?> 
        <?php if($showLabel && $options['label'] !== false && $options['label_show']): ?>
            <?php echo Form::customLabel($name, $options['label'], $options['label_attr']); ?>

        <?php endif; ?>
     <?php $__env->endSlot(); ?>

    <?php echo Form::number($name, $options['value'], $options['attr']); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5ee5f78769862fd20bf1abe3e4744d51)): ?>
<?php $attributes = $__attributesOriginal5ee5f78769862fd20bf1abe3e4744d51; ?>
<?php unset($__attributesOriginal5ee5f78769862fd20bf1abe3e4744d51); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5ee5f78769862fd20bf1abe3e4744d51)): ?>
<?php $component = $__componentOriginal5ee5f78769862fd20bf1abe3e4744d51; ?>
<?php unset($__componentOriginal5ee5f78769862fd20bf1abe3e4744d51); ?>
<?php endif; ?>
<?php /**PATH F:\xamp\htdocs\mimi\platform/core/base/resources/views/forms/fields/number.blade.php ENDPATH**/ ?>
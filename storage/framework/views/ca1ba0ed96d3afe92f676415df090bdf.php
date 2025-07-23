<?php
    $values = Arr::wrap($values ?? []);
?>

<div class="position-relative form-check-group mb-3">
    <?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $option): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginal9166fadad4bef341ac183689b0de8726 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9166fadad4bef341ac183689b0de8726 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.radio','data' => ['name' => $name,'value' => $key,'checked' => $key == $selected,'attributes' => new Illuminate\View\ComponentAttributeBag((array) $attributes)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form.radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($key),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($key == $selected),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(new Illuminate\View\ComponentAttributeBag((array) $attributes))]); ?>
            <?php echo e($option); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9166fadad4bef341ac183689b0de8726)): ?>
<?php $attributes = $__attributesOriginal9166fadad4bef341ac183689b0de8726; ?>
<?php unset($__attributesOriginal9166fadad4bef341ac183689b0de8726); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9166fadad4bef341ac183689b0de8726)): ?>
<?php $component = $__componentOriginal9166fadad4bef341ac183689b0de8726; ?>
<?php unset($__componentOriginal9166fadad4bef341ac183689b0de8726); ?>
<?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>

<?php /**PATH F:\xamp\htdocs\mimi\platform/core/base/resources/views/forms/partials/custom-radio.blade.php ENDPATH**/ ?>
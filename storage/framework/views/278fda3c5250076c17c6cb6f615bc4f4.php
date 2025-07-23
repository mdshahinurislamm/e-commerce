<?php if(
    isset($options['choices'])
    && (is_array($options['choices']) || $options['choices'] instanceof \Illuminate\Support\Collection)
): ?>
    <?php if(count($options['choices']) < 50): ?>
        <div data-bb-toggle="tree-checkboxes">
            <?php echo $__env->make('core/base::forms.partials.tree-categories-checkbox-options', [
                'categories' => $options['choices'],
                'selected' => $options['selected'],
                'currentId' => null,
                'name' => $name,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    <?php else: ?>
        <?php if (isset($component)) { $__componentOriginald8f3cab0e02bd6920e9589a31228d9ca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.select','data' => ['multiple' => true,'name' => $name,'dataBbToggle' => 'tree-categories-select','dataPlaceholder' => trans('core/base::forms.select_placeholder')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form.select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['multiple' => true,'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name),'data-bb-toggle' => 'tree-categories-select','data-placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/base::forms.select_placeholder'))]); ?>
            <?php echo $__env->make('core/base::forms.partials.tree-categories-select-options', [
                'categories' => $options['choices'],
                'selected' => $options['selected'],
                'currentId' => null,
                'name' => $name,
                'indent' => null,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca)): ?>
<?php $attributes = $__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca; ?>
<?php unset($__attributesOriginald8f3cab0e02bd6920e9589a31228d9ca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald8f3cab0e02bd6920e9589a31228d9ca)): ?>
<?php $component = $__componentOriginald8f3cab0e02bd6920e9589a31228d9ca; ?>
<?php unset($__componentOriginald8f3cab0e02bd6920e9589a31228d9ca); ?>
<?php endif; ?>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH F:\xamp\htdocs\mimi\platform/core/base/resources/views/forms/fields/tree-categories.blade.php ENDPATH**/ ?>
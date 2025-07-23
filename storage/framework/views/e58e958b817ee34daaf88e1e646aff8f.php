<?php if($categories): ?>
    <?php
        $selected = (array) $selected;
    ?>

    <ul class="<?php echo \Illuminate\Support\Arr::toCssClasses(['list-unstyled', $class ?? null]); ?>">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($category->id === $currentId) continue; ?>

            <li>
                <?php if (isset($component)) { $__componentOriginal424617256517489644ca6a2e02d16322 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal424617256517489644ca6a2e02d16322 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.checkbox','data' => ['label' => $category->name,'name' => $name,'value' => $category->id,'checked' => in_array($category->id, $selected)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($category->name),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($category->id),'checked' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(in_array($category->id, $selected))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal424617256517489644ca6a2e02d16322)): ?>
<?php $attributes = $__attributesOriginal424617256517489644ca6a2e02d16322; ?>
<?php unset($__attributesOriginal424617256517489644ca6a2e02d16322); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal424617256517489644ca6a2e02d16322)): ?>
<?php $component = $__componentOriginal424617256517489644ca6a2e02d16322; ?>
<?php unset($__componentOriginal424617256517489644ca6a2e02d16322); ?>
<?php endif; ?>

                <?php if($category->activeChildren->isNotEmpty()): ?>
                    <?php echo $__env->make('core/base::forms.partials.tree-categories-checkbox-options', [
                        'categories' => $category->activeChildren,
                        'selected' => $selected,
                        'currentId' => $currentId,
                        'name' => $name,
                        'class' => 'ms-4 mt-2'
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>
<?php /**PATH F:\xamp\htdocs\mimi\platform/core/base/resources/views/forms/partials/tree-categories-checkbox-options.blade.php ENDPATH**/ ?>
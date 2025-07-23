<?php if($histories->isNotEmpty()): ?>
    <div class="table-responsive">
        <?php if (isset($component)) { $__componentOriginal44c83e2eb600bf127a623cda69e3ac8b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal44c83e2eb600bf127a623cda69e3ac8b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::table.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::table'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php if (isset($component)) { $__componentOriginal4d7e52336690b9ea120a6913f2c28a6b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4d7e52336690b9ea120a6913f2c28a6b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::table.body.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::table.body'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                <?php $__currentLoopData = $histories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $history): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if (isset($component)) { $__componentOriginal6776c17865a79e242405889703595892 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6776c17865a79e242405889703595892 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::table.body.row','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::table.body.row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        <?php if (isset($component)) { $__componentOriginal39a228eaec73c356bdf14858f816ca38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal39a228eaec73c356bdf14858f816ca38 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::table.body.cell','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::table.body.cell'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                            <?php echo $__env->make('plugins/audit-log::activity-line', compact('history'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $attributes = $__attributesOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__attributesOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal39a228eaec73c356bdf14858f816ca38)): ?>
<?php $component = $__componentOriginal39a228eaec73c356bdf14858f816ca38; ?>
<?php unset($__componentOriginal39a228eaec73c356bdf14858f816ca38); ?>
<?php endif; ?>
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6776c17865a79e242405889703595892)): ?>
<?php $attributes = $__attributesOriginal6776c17865a79e242405889703595892; ?>
<?php unset($__attributesOriginal6776c17865a79e242405889703595892); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6776c17865a79e242405889703595892)): ?>
<?php $component = $__componentOriginal6776c17865a79e242405889703595892; ?>
<?php unset($__componentOriginal6776c17865a79e242405889703595892); ?>
<?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4d7e52336690b9ea120a6913f2c28a6b)): ?>
<?php $attributes = $__attributesOriginal4d7e52336690b9ea120a6913f2c28a6b; ?>
<?php unset($__attributesOriginal4d7e52336690b9ea120a6913f2c28a6b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4d7e52336690b9ea120a6913f2c28a6b)): ?>
<?php $component = $__componentOriginal4d7e52336690b9ea120a6913f2c28a6b; ?>
<?php unset($__componentOriginal4d7e52336690b9ea120a6913f2c28a6b); ?>
<?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal44c83e2eb600bf127a623cda69e3ac8b)): ?>
<?php $attributes = $__attributesOriginal44c83e2eb600bf127a623cda69e3ac8b; ?>
<?php unset($__attributesOriginal44c83e2eb600bf127a623cda69e3ac8b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal44c83e2eb600bf127a623cda69e3ac8b)): ?>
<?php $component = $__componentOriginal44c83e2eb600bf127a623cda69e3ac8b; ?>
<?php unset($__componentOriginal44c83e2eb600bf127a623cda69e3ac8b); ?>
<?php endif; ?>
    </div>

    <?php if($histories instanceof Illuminate\Pagination\LengthAwarePaginator): ?>
        <?php if (isset($component)) { $__componentOriginal00609f0158ec6107e317b89bf18d2d23 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal00609f0158ec6107e317b89bf18d2d23 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::card.footer.index','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::card.footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <?php echo e($histories->links('core/base::components.simple-pagination')); ?>

         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal00609f0158ec6107e317b89bf18d2d23)): ?>
<?php $attributes = $__attributesOriginal00609f0158ec6107e317b89bf18d2d23; ?>
<?php unset($__attributesOriginal00609f0158ec6107e317b89bf18d2d23); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal00609f0158ec6107e317b89bf18d2d23)): ?>
<?php $component = $__componentOriginal00609f0158ec6107e317b89bf18d2d23; ?>
<?php unset($__componentOriginal00609f0158ec6107e317b89bf18d2d23); ?>
<?php endif; ?>
    <?php endif; ?>
<?php else: ?>
    <?php if (isset($component)) { $__componentOriginald9d6100f07b8c41618767a130852b3e8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald9d6100f07b8c41618767a130852b3e8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::empty-state','data' => ['title' => __('No results found'),'subtitle' => __('It looks as through there are no activities here.')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::empty-state'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('No results found')),'subtitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('It looks as through there are no activities here.'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald9d6100f07b8c41618767a130852b3e8)): ?>
<?php $attributes = $__attributesOriginald9d6100f07b8c41618767a130852b3e8; ?>
<?php unset($__attributesOriginald9d6100f07b8c41618767a130852b3e8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald9d6100f07b8c41618767a130852b3e8)): ?>
<?php $component = $__componentOriginald9d6100f07b8c41618767a130852b3e8; ?>
<?php unset($__componentOriginald9d6100f07b8c41618767a130852b3e8); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH F:\xamp\htdocs\mimi\platform/plugins/audit-log/resources/views/widgets/activities.blade.php ENDPATH**/ ?>
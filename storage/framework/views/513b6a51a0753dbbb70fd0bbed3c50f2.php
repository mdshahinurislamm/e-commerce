<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'showLabel' => true,
    'showField' => true,
    'options' => [],
    'name',
    'nameKey' => null,
    'prepend' => null,
    'append' => null,
    'showError' => true,
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'showLabel' => true,
    'showField' => true,
    'options' => [],
    'name',
    'nameKey' => null,
    'prepend' => null,
    'append' => null,
    'showError' => true,
]); ?>
<?php foreach (array_filter(([
    'showLabel' => true,
    'showField' => true,
    'options' => [],
    'name',
    'nameKey' => null,
    'prepend' => null,
    'append' => null,
    'showError' => true,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php if($showLabel && $showField): ?>
    <?php if($options['wrapper'] !== false): ?>
        <div <?php echo $options['wrapperAttrs']; ?>>
            <?php endif; ?>
            <?php endif; ?>

            <?php if($showLabel && $options['label'] !== false && $options['label_show']): ?>
                <?php if(isset($label)): ?>
                    <?php echo $label; ?>

                <?php else: ?>
                    <?php if (isset($component)) { $__componentOriginal50e5e771b30c35423d2b4f118feb7c0c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.label','data' => ['for' => $name,'label' => $options['label'],'attributes' => new Illuminate\View\ComponentAttributeBag($options['label_attr'])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form.label'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['for' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name),'label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($options['label']),'attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(new Illuminate\View\ComponentAttributeBag($options['label_attr']))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c)): ?>
<?php $attributes = $__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c; ?>
<?php unset($__attributesOriginal50e5e771b30c35423d2b4f118feb7c0c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal50e5e771b30c35423d2b4f118feb7c0c)): ?>
<?php $component = $__componentOriginal50e5e771b30c35423d2b4f118feb7c0c; ?>
<?php unset($__componentOriginal50e5e771b30c35423d2b4f118feb7c0c); ?>
<?php endif; ?>
                <?php endif; ?>
            <?php endif; ?>

            <?php if($showField): ?>
                <?php if($prepend = Arr::get($options, 'prepend')): ?>
                    <?php echo $prepend; ?>

                <?php endif; ?>

                <?php echo $slot; ?>


                <?php if($append = Arr::get($options, 'append')): ?>
                    <?php echo $append; ?>

                <?php endif; ?>

                <?php echo $__env->make('core/base::forms.partials.help-block', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

            <?php echo $__env->make('core/base::forms.partials.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <?php if($showLabel && $showField): ?>
                <?php if($options['wrapper'] !== false): ?>
        </div>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH F:\xamp\htdocs\mimi\platform/core/base/resources/views/components/form/field.blade.php ENDPATH**/ ?>
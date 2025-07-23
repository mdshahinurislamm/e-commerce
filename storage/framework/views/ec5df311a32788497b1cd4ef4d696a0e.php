<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps([
    'name',
    'value',
    'defaultImage' => RvMedia::getDefaultImage(),
    'allowAddFromUrl' => $isInAdmin = is_in_admin(true) && auth()->guard()->check(),
]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps([
    'name',
    'value',
    'defaultImage' => RvMedia::getDefaultImage(),
    'allowAddFromUrl' => $isInAdmin = is_in_admin(true) && auth()->guard()->check(),
]); ?>
<?php foreach (array_filter(([
    'name',
    'value',
    'defaultImage' => RvMedia::getDefaultImage(),
    'allowAddFromUrl' => $isInAdmin = is_in_admin(true) && auth()->guard()->check(),
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $value = BaseHelper::stringify($value);
    $allowThumb = $attributes->get('allow_thumb', $attributes->get('allow-thumb', true));
?>

<div <?php echo e($attributes->merge(['class' => "image-box image-box-$name"])); ?>>
    <input
        class="image-data"
        name="<?php echo e($name); ?>"
        type="hidden"
        value="<?php echo e($value); ?>"
        <?php echo e($attributes->except('action')); ?>

    />

    <?php if(! $isInAdmin): ?>
        <input
            class="media-image-input"
            type="file"
            style="display: none;"
            <?php if($name): ?> name="<?php echo e($name); ?>_input" <?php endif; ?>
            <?php if(!isset($attributes['action']) || $attributes['action'] == 'select-image'): ?> accept="image/*" <?php endif; ?>
            <?php echo e($attributes->except('action')); ?>

        />
    <?php endif; ?>

    <div
        style="width: 8rem"
        class="<?php echo \Illuminate\Support\Arr::toCssClasses([
            'preview-image-wrapper mb-1',
            'preview-image-wrapper-not-allow-thumb' => ! $allowThumb
        ]); ?>"
    >
        <div class="preview-image-inner">
            <a
                data-bb-toggle="image-picker-choose"
                <?php if($isInAdmin): ?> data-target="popup" <?php else: ?> data-target="direct" <?php endif; ?>
                class="image-box-actions"
                data-result="<?php echo e($name); ?>"
                data-action="<?php echo e($attributes['action'] ?? 'select-image'); ?>"
                data-allow-thumb="<?php echo e($allowThumb == true); ?>"
                href="#"
            >
                <?php if (isset($component)) { $__componentOriginalb52fd548b9021b0206841fc657a1fbc9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb52fd548b9021b0206841fc657a1fbc9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::image','data' => ['class' => \Illuminate\Support\Arr::toCssClasses(['preview-image', 'default-image' => !$value]),'dataDefault' => ''.e($defaultImage = $defaultImage ?: RvMedia::getDefaultImage()).'','src' => ''.e(RvMedia::getImageUrl($value, $allowThumb ? 'thumb' : null, false, $defaultImage)).'','alt' => ''.e(trans('core/base::base.preview_image')).'']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssClasses(['preview-image', 'default-image' => !$value])),'data-default' => ''.e($defaultImage = $defaultImage ?: RvMedia::getDefaultImage()).'','src' => ''.e(RvMedia::getImageUrl($value, $allowThumb ? 'thumb' : null, false, $defaultImage)).'','alt' => ''.e(trans('core/base::base.preview_image')).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb52fd548b9021b0206841fc657a1fbc9)): ?>
<?php $attributes = $__attributesOriginalb52fd548b9021b0206841fc657a1fbc9; ?>
<?php unset($__attributesOriginalb52fd548b9021b0206841fc657a1fbc9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb52fd548b9021b0206841fc657a1fbc9)): ?>
<?php $component = $__componentOriginalb52fd548b9021b0206841fc657a1fbc9; ?>
<?php unset($__componentOriginalb52fd548b9021b0206841fc657a1fbc9); ?>
<?php endif; ?>
                <span class="image-picker-backdrop"></span>
            </a>
            <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::button','data' => ['style' => \Illuminate\Support\Arr::toCssStyles(['display: none' => empty($value), '--bb-btn-font-size: 0.5rem']),'class' => 'image-picker-remove-button p-0','pill' => true,'dataBbToggle' => 'image-picker-remove','size' => 'sm','icon' => 'ti ti-x','iconOnly' => true,'tooltip' => trans('core/base::forms.remove_image')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['style' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssStyles(['display: none' => empty($value), '--bb-btn-font-size: 0.5rem'])),'class' => 'image-picker-remove-button p-0','pill' => true,'data-bb-toggle' => 'image-picker-remove','size' => 'sm','icon' => 'ti ti-x','icon-only' => true,'tooltip' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/base::forms.remove_image'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $attributes = $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__attributesOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb)): ?>
<?php $component = $__componentOriginal922f7d3260a518f4cf606eecf9669dcb; ?>
<?php unset($__componentOriginal922f7d3260a518f4cf606eecf9669dcb); ?>
<?php endif; ?>
        </div>
    </div>

    <a
        data-bb-toggle="image-picker-choose"
        <?php if($isInAdmin): ?> data-target="popup" <?php else: ?> data-target="direct" <?php endif; ?>
        data-result="<?php echo e($name); ?>"
        data-action="<?php echo e($attributes['action'] ?? 'select-image'); ?>"
        data-allow-thumb="<?php echo e($allowThumb == true); ?>"
        href="#"
    >
        <?php echo e(trans('core/base::forms.choose_image')); ?>

    </a>

    <?php if($allowAddFromUrl): ?>
        <div data-bb-toggle="upload-from-url">
            <span class="text-muted"><?php echo e(trans('core/media::media.or')); ?></span>
            <a
                href="javascript:void(0)"
                class="mt-1"
                data-bs-toggle="modal"
                data-bs-target="#image-picker-add-from-url"
                data-bb-target=".image-box-<?php echo e($name); ?>"
            >
                <?php echo e(trans('core/media::media.add_from_url')); ?>

            </a>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH F:\xamp\htdocs\mimi\platform/core/base/resources/views/components/form/image.blade.php ENDPATH**/ ?>
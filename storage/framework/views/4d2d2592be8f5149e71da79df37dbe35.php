<?php
    $prefix = apply_filters(FILTER_SLUG_PREFIX, SlugHelper::getPrefix($model::class), $model);
    $value = $value ?: old('slug');
    $endingURL = SlugHelper::getPublicSingleEndingURL();
    $previewURL = str_replace('--slug--', (string) $value, url($prefix) . '/' . config('packages.slug.general.pattern')) . $endingURL . (Auth::user() && $preview ? '?preview=true' : '');
?>

<div
    class="slug-field-wrapper"
    data-field-name="<?php echo e(SlugHelper::getColumnNameToGenerateSlug($model)); ?>"
>
    <?php if(in_array(
        Route::currentRouteName(), ['pages.create', 'pages.edit'])
        && BaseHelper::isHomepage(Route::current()->parameter('page.id'))
    ): ?>
        <?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.text-input','data' => ['label' => trans('core/base::forms.permalink'),'name' => 'slug','groupFlat' => true,'value' => BaseHelper::getHomepageUrl(),'readonly' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/base::forms.permalink')),'name' => 'slug','group-flat' => true,'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(BaseHelper::getHomepageUrl()),'readonly' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $attributes = $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $component = $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
    <?php else: ?>
        <?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.text-input','data' => ['label' => trans('core/base::forms.permalink'),'required' => true,'name' => 'slug','groupFlat' => true,'class' => 'ps-0','value' => $value]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/base::forms.permalink')),'required' => true,'name' => 'slug','group-flat' => true,'class' => 'ps-0','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($value)]); ?>
             <?php $__env->slot('prepend', null, []); ?> 
                <span class="input-group-text">
                    <?php echo e(url($prefix)); ?>/
                </span>
             <?php $__env->endSlot(); ?>

             <?php $__env->slot('append', null, []); ?> 
                <span class="input-group-text slug-actions">
                    <a
                        href="#"
                        class="<?php echo \Illuminate\Support\Arr::toCssClasses(['link-secondary', 'd-none' => ! $value]); ?>"
                        data-bs-toggle="tooltip"
                        aria-label="<?php echo e(trans('packages/slug::slug.generate_url')); ?>"
                        data-bs-original-title="<?php echo e(trans('packages/slug::slug.generate_url')); ?>"
                        data-bb-toggle="generate-slug"
                    >
                        <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-wand'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Botble\Icon\View\Components\Icon::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $attributes = $__attributesOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__attributesOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal73995948b3bd877b76251b40caf28170)): ?>
<?php $component = $__componentOriginal73995948b3bd877b76251b40caf28170; ?>
<?php unset($__componentOriginal73995948b3bd877b76251b40caf28170); ?>
<?php endif; ?>
                    </a>
                </span>
             <?php $__env->endSlot(); ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $attributes = $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051)): ?>
<?php $component = $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051; ?>
<?php unset($__componentOriginala5b2ce8ea835a1a6ed10854da20fa051); ?>
<?php endif; ?>
        <?php if(Auth::user() && $id && is_in_admin(true)): ?>
            <?php if (isset($component)) { $__componentOriginal1844d57dc6206b688bd5adc7dea47e7d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1844d57dc6206b688bd5adc7dea47e7d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.helper-text','data' => ['class' => 'mt-n2 text-truncate']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form.helper-text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mt-n2 text-truncate']); ?>
                <?php echo e(trans('packages/slug::slug.preview')); ?>: <a href="<?php echo e($previewURL); ?>" target="_blank"><?php echo e($previewURL); ?></a>
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1844d57dc6206b688bd5adc7dea47e7d)): ?>
<?php $attributes = $__attributesOriginal1844d57dc6206b688bd5adc7dea47e7d; ?>
<?php unset($__attributesOriginal1844d57dc6206b688bd5adc7dea47e7d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1844d57dc6206b688bd5adc7dea47e7d)): ?>
<?php $component = $__componentOriginal1844d57dc6206b688bd5adc7dea47e7d; ?>
<?php unset($__componentOriginal1844d57dc6206b688bd5adc7dea47e7d); ?>
<?php endif; ?>
        <?php endif; ?>
        <?php if($editable): ?>
            <input
                class="slug-current"
                name="<?php echo e($name); ?>"
                type="hidden"
                value="<?php echo e($value); ?>"
            >
            <div
                class="slug-data"
                data-url="<?php echo e(route('slug.create')); ?>"
                data-view="<?php echo e(rtrim(str_replace('--slug--', '', url($prefix) . '/' . config('packages.slug.general.pattern')), '/') . '/'); ?>"
                data-id="<?php echo e($id ?: 0); ?>"
            ></div>
            <input
                name="slug_id"
                type="hidden"
                value="<?php echo e($id ?: 0); ?>"
            >
            <input
                name="is_slug_editable"
                type="hidden"
                value="1"
            >
        <?php endif; ?>
    <?php endif; ?>
</div>
<?php /**PATH F:\xamp\htdocs\mimi\platform/packages/slug/resources/views/permalink.blade.php ENDPATH**/ ?>
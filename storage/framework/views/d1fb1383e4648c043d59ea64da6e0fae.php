<?php if($productAttributeSets->isNotEmpty()): ?>
    <div class="add-new-product-attribute-wrap">
        <input
            id="is_added_attributes"
            name="is_added_attributes"
            type="hidden"
            value="0"
        >
        <p class="text-muted"><?php echo e(trans('plugins/ecommerce::products.form.add_new_attributes_description')); ?></p>
        <div class="list-product-attribute-values-wrap" style="display: none">
            <div class="product-select-attribute-item-template"></div>
        </div>

        <?php if (isset($component)) { $__componentOriginal20d878510d8f6b63da7004efc7cea55f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal20d878510d8f6b63da7004efc7cea55f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.fieldset','data' => ['class' => 'list-product-attribute-wrap','style' => 'display: none']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form.fieldset'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'list-product-attribute-wrap','style' => 'display: none']); ?>
            <div class="list-product-attribute-items-wrap"></div>

            <div class="btn-list">
                <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::button','data' => ['class' => 'btn-trigger-add-attribute-item','style' => \Illuminate\Support\Arr::toCssStyles(['display: none;' => $productAttributeSets->count() < 2])]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'btn-trigger-add-attribute-item','style' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(\Illuminate\Support\Arr::toCssStyles(['display: none;' => $productAttributeSets->count() < 2]))]); ?>
                    <?php echo e(trans('plugins/ecommerce::products.form.add_more_attribute')); ?>

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
                <?php if(!empty($addAttributeToProductUrl)): ?>
                    <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::button','data' => ['type' => 'button','color' => 'info','class' => 'btn-trigger-add-attribute-to-simple-product','dataTarget' => $addAttributeToProductUrl,'tooltip' => trans('plugins/ecommerce::products.this_action_will_reload_page')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'button','color' => 'info','class' => 'btn-trigger-add-attribute-to-simple-product','data-target' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($addAttributeToProductUrl),'tooltip' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('plugins/ecommerce::products.this_action_will_reload_page'))]); ?>
                        <?php echo e(trans('plugins/ecommerce::products.form.continue')); ?>

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
                <?php endif; ?>
            </div>
            <?php if($product && is_object($product) && $product->id): ?>
                <?php if (isset($component)) { $__componentOriginalecda78b9fe8916cbd83b85e55a8b7a1c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalecda78b9fe8916cbd83b85e55a8b7a1c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::alert','data' => ['type' => 'warning','class' => 'mt-3 mb-0']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'warning','class' => 'mt-3 mb-0']); ?>
                    <?php echo e(trans('plugins/ecommerce::products.this_action_will_reload_page')); ?>

                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalecda78b9fe8916cbd83b85e55a8b7a1c)): ?>
<?php $attributes = $__attributesOriginalecda78b9fe8916cbd83b85e55a8b7a1c; ?>
<?php unset($__attributesOriginalecda78b9fe8916cbd83b85e55a8b7a1c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalecda78b9fe8916cbd83b85e55a8b7a1c)): ?>
<?php $component = $__componentOriginalecda78b9fe8916cbd83b85e55a8b7a1c; ?>
<?php unset($__componentOriginalecda78b9fe8916cbd83b85e55a8b7a1c); ?>
<?php endif; ?>
            <?php endif; ?>
         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal20d878510d8f6b63da7004efc7cea55f)): ?>
<?php $attributes = $__attributesOriginal20d878510d8f6b63da7004efc7cea55f; ?>
<?php unset($__attributesOriginal20d878510d8f6b63da7004efc7cea55f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal20d878510d8f6b63da7004efc7cea55f)): ?>
<?php $component = $__componentOriginal20d878510d8f6b63da7004efc7cea55f; ?>
<?php unset($__componentOriginal20d878510d8f6b63da7004efc7cea55f); ?>
<?php endif; ?>
    </div>
<?php elseif(is_in_admin(true) && Auth::check() && Auth::user()->hasPermission('product-attribute-sets.create')): ?>
    <p class="text-muted mb-0">
        <?php echo trans('plugins/ecommerce::products.form.create_product_variations', [
            'link' => Html::link(
                route('product-attribute-sets.create'),
                trans('plugins/ecommerce::products.form.add_new_attributes'),
                ['target' => '_blank']
            ),
        ]); ?>

    </p>
<?php endif; ?>

<?php if (! $__env->hasRenderedOnce('b575026e-8ac6-4e02-8df6-59b664a11442')): $__env->markAsRenderedOnce('b575026e-8ac6-4e02-8df6-59b664a11442'); ?>
    <?php if(request()->ajax()): ?>
        <?php echo $__env->make('plugins/ecommerce::products.partials.select-product-attributes-template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php else: ?>
        <?php $__env->startPush('footer'); ?>
            <?php echo $__env->make('plugins/ecommerce::products.partials.select-product-attributes-template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php $__env->stopPush(); ?>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH F:\xamp\htdocs\mimi\platform/plugins/ecommerce/resources/views/products/partials/add-product-attributes.blade.php ENDPATH**/ ?>
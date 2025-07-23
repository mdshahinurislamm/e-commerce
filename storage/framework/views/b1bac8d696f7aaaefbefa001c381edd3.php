<?php
    $values = $values == '[null]' ? '[]' : $values;
    $attributes = $attributes ?? [];
    $allowThumb = Arr::get($attributes, 'allow_thumb', true);
    $images = array_filter((array) old($name, !is_array($values) ? json_decode($values ?: '', true) : $values));
?>

<?php if (isset($component)) { $__componentOriginal240afe71776cfec22247481e7abbbac6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal240afe71776cfec22247481e7abbbac6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.images','data' => ['name' => $name,'allowThumb' => true,'images' => $images]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form.images'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($name),'allow-thumb' => true,'images' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($images)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal240afe71776cfec22247481e7abbbac6)): ?>
<?php $attributes = $__attributesOriginal240afe71776cfec22247481e7abbbac6; ?>
<?php unset($__attributesOriginal240afe71776cfec22247481e7abbbac6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal240afe71776cfec22247481e7abbbac6)): ?>
<?php $component = $__componentOriginal240afe71776cfec22247481e7abbbac6; ?>
<?php unset($__componentOriginal240afe71776cfec22247481e7abbbac6); ?>
<?php endif; ?>
<?php /**PATH F:\xamp\htdocs\mimi\platform/core/base/resources/views/forms/partials/images.blade.php ENDPATH**/ ?>
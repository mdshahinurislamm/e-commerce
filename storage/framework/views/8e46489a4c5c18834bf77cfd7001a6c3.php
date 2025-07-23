<header
    class="navbar navbar-expand-md d-none d-lg-flex d-print-none"
    data-bs-theme="dark"
>
    <div class="container-fluid">
        <button
            class="navbar-toggler d-none d-lg-block me-2 ms-n1"
            type="button"
            data-bb-toggle="navbar-minimal"
            data-bb-target="#sidebar-menu-main"
            aria-controls="navbar-menu"
            aria-expanded="false"
            aria-label="Toggle navigation"
            data-url="<?php echo e(route('users.update-preferences', Auth::user())); ?>"
            data-method="PATCH"
        >
            <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-menu-2'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
        </button>

        <h1 class="navbar-brand navbar-brand-autodark me-4">
            <?php echo $__env->make('core/base::partials.logo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </h1>

        <div class="flex-row navbar-nav order-md-last">
            <div class="d-flex align-items-center me-3">
                <?php echo $__env->make('core/base::global-search.navbar-input', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

            <?php if(BaseHelper::getAdminPrefix() != ''): ?>
                <div class="d-flex align-items-center me-3">
                    <?php if (isset($component)) { $__componentOriginal922f7d3260a518f4cf606eecf9669dcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal922f7d3260a518f4cf606eecf9669dcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::button','data' => ['tag' => 'a','href' => url('/'),'icon' => 'ti ti-world','target' => '_blank']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['tag' => 'a','href' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(url('/')),'icon' => 'ti ti-world','target' => '_blank']); ?>
                        <?php echo e(trans('core/base::layouts.view_website')); ?>

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
            <?php endif; ?>

            <div class="d-none d-md-flex me-2">
                <?php echo $__env->make('core/base::layouts.partials.theme-toggle', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php if(auth()->guard()->check()): ?>
                    <?php echo apply_filters(BASE_FILTER_TOP_HEADER_LAYOUT, null); ?>

                <?php endif; ?>
            </div>

            <?php echo $__env->make('core/base::layouts.partials.user-menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>

        <div
            class="collapse navbar-collapse"
            id="navbar-menu"
        ></div>
    </div>
</header>
<?php /**PATH F:\xamp\htdocs\mimi\platform/core/base/resources/views/layouts/vertical/partials/header.blade.php ENDPATH**/ ?>
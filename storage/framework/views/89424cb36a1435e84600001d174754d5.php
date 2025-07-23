<?php if (isset($component)) { $__componentOriginal267ae10e99f5147c684b59e06e741a86 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal267ae10e99f5147c684b59e06e741a86 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::layouts.base','data' => ['bodyAttributes' => ['data-bs-theme' => 'dark']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::layouts.base'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['body-attributes' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(['data-bs-theme' => 'dark'])]); ?>
    <div class="row g-0 flex-fill vh-100">
        <div class="col-12 col-lg-6 col-xl-4 border-top-wide border-primary d-flex flex-column justify-content-center">
            <div class="container container-tight my-5 px-lg-5">
                <div class="text-center mb-4">
                    <?php if(setting('admin_logo') || config('core.base.general.logo')): ?>
                        <a
                            href="<?php echo e(route('dashboard.index')); ?>"
                            class="navbar-brand"
                        >
                            <img
                                src="<?php echo e(setting('admin_logo') ? RvMedia::getImageUrl(setting('admin_logo')) : url(config('core.base.general.logo'))); ?>"
                                style="max-height: 50px; max-width: 100%;"
                                alt="<?php echo e(setting('admin_title', config('core.base.general.base_name'))); ?>"
                            >
                        </a>
                    <?php endif; ?>
                </div>

                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>
        <div class="position-relative col-12 col-lg-6 col-xl-8 d-none d-lg-block">
            <div
                class="bg-cover bg-white h-100 min-vh-100"
                style="background-image: url(<?php echo e($backgroundUrl); ?>)"
            ></div>
            <div class="end-0 bottom-0 position-absolute">
                <div class="text-white me-5 mb-4">
                    <h1 class="mb-1"><?php echo e(setting('admin_title', config('core.base.general.base_name'))); ?></h1>
                    <p><?php echo $__env->make('core/base::partials.copyright', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></p>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal267ae10e99f5147c684b59e06e741a86)): ?>
<?php $attributes = $__attributesOriginal267ae10e99f5147c684b59e06e741a86; ?>
<?php unset($__attributesOriginal267ae10e99f5147c684b59e06e741a86); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal267ae10e99f5147c684b59e06e741a86)): ?>
<?php $component = $__componentOriginal267ae10e99f5147c684b59e06e741a86; ?>
<?php unset($__componentOriginal267ae10e99f5147c684b59e06e741a86); ?>
<?php endif; ?>
<?php /**PATH F:\xamp\htdocs\mimi\platform/core/acl/resources/views/layouts/guest.blade.php ENDPATH**/ ?>
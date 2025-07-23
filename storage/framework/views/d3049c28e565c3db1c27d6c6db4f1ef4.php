<?php if (isset($component)) { $__componentOriginala5b2ce8ea835a1a6ed10854da20fa051 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala5b2ce8ea835a1a6ed10854da20fa051 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'a74ad8dfacd4f985eb3977517615ce25::form.text-input','data' => ['label' => trans('core/acl::auth.login.password'),'type' => 'password','name' => 'password','value' => BaseHelper::hasDemoModeEnabled() ? config('core.base.general.demo.account.password') : null,'placeholder' => trans('core/acl::auth.login.placeholder.password'),'required' => true,'tabindex' => '2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('core::form.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/acl::auth.login.password')),'type' => 'password','name' => 'password','value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(BaseHelper::hasDemoModeEnabled() ? config('core.base.general.demo.account.password') : null),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(trans('core/acl::auth.login.placeholder.password')),'required' => true,'tabindex' => '2']); ?>
     <?php $__env->slot('labelDescription', null, []); ?> 
        <a
            href="<?php echo e(route('access.password.request')); ?>"
            title="<?php echo e(trans('core/acl::auth.forgot_password.title')); ?>"
            tabindex="5"
        ><?php echo e(trans('core/acl::auth.lost_your_password')); ?></a>
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
<?php /**PATH F:\xamp\htdocs\mimi\platform/core/acl/resources/views/auth/partials/password.blade.php ENDPATH**/ ?>
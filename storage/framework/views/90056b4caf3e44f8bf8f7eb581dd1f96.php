<?php if($showError && isset($errors)): ?>
    <?php $__currentLoopData = $errors->get($nameKey); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div <?php echo $options['errorAttrs']; ?>><?php echo e($err); ?></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php /**PATH F:\xamp\htdocs\mimi\platform/core/base/resources/views/forms/partials/errors.blade.php ENDPATH**/ ?>
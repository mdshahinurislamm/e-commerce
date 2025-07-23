<script src="<?php echo e(asset('vendor/core/packages/theme/js/toast.js')); ?>"></script>

<?php if(
    session()->has('success_msg')
    || session()->has('error_msg')
    || (isset($errors) && $errors->count() > 0)
    || isset($error_msg)
): ?>
    <script type="text/javascript">
        window.addEventListener('load', function() {
            <?php if(session()->has('success_msg')): ?>
                Theme.showSuccess('<?php echo BaseHelper::cleanToastMessage(session('success_msg')); ?>');
            <?php endif; ?>

            <?php if(session()->has('error_msg')): ?>
                Theme.showError('<?php echo BaseHelper::cleanToastMessage(session('error_msg')); ?>');
            <?php endif; ?>

            <?php if(isset($error_msg)): ?>
                Theme.showError('<?php echo BaseHelper::cleanToastMessage($error_msg); ?>');
            <?php endif; ?>

            <?php if(isset($errors)): ?>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    Theme.showError('<?php echo BaseHelper::cleanToastMessage($error); ?>');
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        });
    </script>
<?php endif; ?>
<?php /**PATH F:\xamp\htdocs\mimi\platform/packages/theme/resources/views/fronts/toast-notification.blade.php ENDPATH**/ ?>
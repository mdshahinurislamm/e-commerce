<?php $__currentLoopData = RvMedia::getConfig('libraries.javascript', []); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $js): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <script
        src="<?php echo e(asset($js)); ?>?v=<?php echo e(get_cms_version()); ?>"
        type="text/javascript"
    ></script>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH F:\xamp\htdocs\mimi\platform/core/media/resources/views/footer.blade.php ENDPATH**/ ?>
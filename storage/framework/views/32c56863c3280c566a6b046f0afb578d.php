<?php echo $__env->make('core/base::layouts.' . AdminAppearance::getCurrentLayout() . '.partials.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="d-block d-lg-flex">

<?php echo $__env->make('core/base::layouts.' . AdminAppearance::getCurrentLayout() . '.partials.aside', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH F:\xamp\htdocs\mimi\platform/core/base/resources/views/layouts/vertical/partials/before-content.blade.php ENDPATH**/ ?>
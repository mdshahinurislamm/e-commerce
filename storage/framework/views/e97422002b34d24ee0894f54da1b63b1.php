<form <?php echo e($attributes->merge([
    'role' => 'search',
    'action' => route('public.products'),
    'data-ajax-url' => route('public.ajax.search-products'),
    'method' => 'GET',
    'class' => 'bb-form-quick-search',
    'id' => 'bb-form-quick-search',
])); ?>>
    <?php echo e($slot); ?>


    <div class="bb-quick-search-results"></div>
</form>
<?php /**PATH F:\xamp\htdocs\mimi\platform/plugins/ecommerce/resources/views/components/fronts/ajax-search/index.blade.php ENDPATH**/ ?>
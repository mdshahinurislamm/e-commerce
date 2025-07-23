<script>
    "use strict";
    
    var RV_MEDIA_URL = <?php echo e(Js::from(RvMedia::getUrls())); ?>;

    var RV_MEDIA_CONFIG = <?php echo e(Js::from([
        'permissions' => RvMedia::getPermissions(),
        'translations' => trans('core/media::media.javascript'),
        'pagination' => [
            'paged' => RvMedia::getConfig('pagination.paged'),
            'posts_per_page' => RvMedia::getConfig('pagination.per_page'),
            'in_process_get_media' => false,
            'has_more' => true,
        ],
        'chunk' => RvMedia::getConfig('chunk'),
        'random_hash' => setting('media_random_hash') ?: null,
        'default_image' => RvMedia::getDefaultImage(),
    ])); ?>;

    RV_MEDIA_CONFIG.translations.actions_list.other.properties = '<?php echo e(trans('core/media::media.javascript.actions_list.other.properties')); ?>';
</script>
<?php /**PATH F:\xamp\htdocs\mimi\platform/core/media/resources/views/config.blade.php ENDPATH**/ ?>
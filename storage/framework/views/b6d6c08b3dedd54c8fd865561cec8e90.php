<?php
    EcommerceHelper::registerThemeAssets();
    $version = get_cms_version();
    Theme::asset()->add('lightgallery-css', 'vendor/core/plugins/ecommerce/libraries/lightgallery/css/lightgallery.min.css', version: $version);
    Theme::asset()->add('slick-css', 'vendor/core/plugins/ecommerce/libraries/slick/slick.css', version: $version);
    Theme::asset()->container('footer')->add('lightgallery-js', 'vendor/core/plugins/ecommerce/libraries/lightgallery/js/lightgallery.min.js', ['jquery'], version: $version);
    Theme::asset()->container('footer')->add('slick-js', 'vendor/core/plugins/ecommerce/libraries/slick/slick.min.js', ['jquery'], version: $version);

    $galleryStyle = theme_option('ecommerce_product_gallery_image_style', 'vertical');
?>

<div class="bb-product-gallery-wrapper">
    <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['bb-product-gallery', 'bb-product-gallery-' . $galleryStyle]); ?>">
        <div class="bb-product-gallery-images">
            <?php if(! empty($product->video)): ?>
                <?php $__currentLoopData = $product->video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(! $video['url']) continue; ?>

                    <div class="bb-product-video">
                        <?php if($video['provider'] === 'video'): ?>
                            <video
                                id="<?php echo e(md5($video['url'])); ?>"
                                playsinline="playsinline"
                                mute="true"
                                preload="auto"
                                class="media-video"
                                aria-label="<?php echo e($product->name); ?>"
                                poster="<?php echo e($video['thumbnail']); ?>"
                            >
                                <source src="<?php echo e($video['url']); ?>" type="video/<?php echo e(File::extension($video['url']) ?: 'mp4'); ?>">
                                <img src="<?php echo e($video['thumbnail']); ?>" alt="<?php echo e($video['url']); ?>">
                            </video>
                            <button class="bb-button-trigger-play-video" data-target="<?php echo e(md5($video['url'])); ?>">
                                <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-player-play-filled'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                        <?php else: ?>
                            <iframe
                                data-provider="<?php echo e($video['provider']); ?>"
                                src="<?php echo e($video['url']); ?>"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
                            </iframe>
                        <?php endif; ?>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <?php $__currentLoopData = $productImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a href="<?php echo e(RvMedia::getImageUrl($image)); ?>">
                    <?php echo e(RvMedia::image($image, $product->name)); ?>

                </a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="bb-product-gallery-thumbnails" data-vertical="<?php echo e($galleryStyle === 'vertical' ? 1 : 0); ?>">
            <?php $__currentLoopData = $product->video; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if(! $video['url']) continue; ?>

                <div class="video-thumbnail">
                    <img src="<?php echo e($video['thumbnail']); ?>" alt="<?php echo e($product->name); ?>">
                    <?php if (isset($component)) { $__componentOriginal73995948b3bd877b76251b40caf28170 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal73995948b3bd877b76251b40caf28170 = $attributes; } ?>
<?php $component = Botble\Icon\View\Components\Icon::resolve(['name' => 'ti ti-player-play-filled'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
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
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php $__currentLoopData = $productImages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                    <?php echo e(RvMedia::image($image, $product->name, 'thumb')); ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH F:\xamp\htdocs\mimi\platform/plugins/ecommerce/resources/views/themes/includes/product-gallery.blade.php ENDPATH**/ ?>
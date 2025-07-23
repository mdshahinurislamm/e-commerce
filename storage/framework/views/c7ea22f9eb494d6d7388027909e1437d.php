<?php if($products->isNotEmpty()): ?>

    <?php
        $wishlistIds = \Theme\Farmart\Supports\Wishlist::getWishlistIds($products->pluck('id')->all());
    ?>

    <div class="widget-products-with-category py-5 bg-light">
        <div class="container-xxxl">
            <div class="row">
                <div class="col-12">
                    <div class="row align-items-center mb-2 widget-header">
                        <h2 class="col-auto mb-0 py-2"><?php echo e($shortcode->title); ?></h2>
                    </div>
                    <div class="product-deals-day__body arrows-top-right">
                        <div
                            class="product-deals-day-body slick-slides-carousel"
                            data-slick="<?php echo e(json_encode([
                                'rtl' => BaseHelper::siteLanguageDirection() == 'rtl',
                                'appendArrows' => '.arrows-wrapper',
                                'arrows' => true,
                                'dots' => false,
                                'autoplay' => $shortcode->is_autoplay == 'yes',
                                'infinite' => $shortcode->infinite == 'yes' || $shortcode->is_infinite == 'yes',
                                'autoplaySpeed' => in_array($shortcode->autoplay_speed, theme_get_autoplay_speed_options())
                                    ? $shortcode->autoplay_speed
                                    : 3000,
                                'speed' => 800,
                                'slidesToShow' => 6,
                                'slidesToScroll' => 1,
                                'swipeToSlide' => true,
                                'responsive' => [
                                    [
                                        'breakpoint' => 1400,
                                        'settings' => [
                                            'slidesToShow' => 5,
                                        ],
                                    ],
                                    [
                                        'breakpoint' => 1199,
                                        'settings' => [
                                            'slidesToShow' => 4,
                                        ],
                                    ],
                                    [
                                        'breakpoint' => 1024,
                                        'settings' => [
                                            'slidesToShow' => 3,
                                        ],
                                    ],
                                    [
                                        'breakpoint' => 767,
                                        'settings' => [
                                            'arrows' => true,
                                            'dots' => false,
                                            'slidesToShow' => 2,
                                            'slidesToScroll' => 2,
                                        ],
                                    ],
                                ],
                            ])); ?>"
                        >
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="product-inner">
                                    <?php echo Theme::partial('ecommerce.product-item', compact('product', 'wishlistIds')); ?>

                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="arrows-wrapper"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH F:\xamp\htdocs\mimi\platform\themes/farmart/views/ecommerce/shortcodes/recently-viewed-products.blade.php ENDPATH**/ ?>
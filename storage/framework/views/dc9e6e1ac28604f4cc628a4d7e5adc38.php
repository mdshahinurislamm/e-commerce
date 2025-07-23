<form
    class="cart-form"
    action="<?php echo e(route('public.cart.add-to-cart')); ?>"
    method="POST"
>
    <?php echo csrf_field(); ?>
    <?php if(!empty($withVariations) && $product->variations()->count()): ?>
        <div class="pr_switch_wrap">
            <?php echo render_product_swatches($product, [
                'selected' => $selectedAttrs,
            ]); ?>

        </div>
        <div
            class="number-items-available"
            style="display: none; margin-bottom: 10px;"
        ></div>
    <?php endif; ?>

    <?php if(isset($withProductOptions) && $withProductOptions): ?>
        <?php echo render_product_options($product); ?>

    <?php endif; ?>

    <input
        class="hidden-product-id"
        name="id"
        type="hidden"
        value="<?php echo e($product->is_variation || !$product->defaultVariation->product_id ? $product->id : $product->defaultVariation->product_id); ?>"
    />

    <?php if(EcommerceHelper::isCartEnabled() || !empty($withButtons)): ?>
        <?php echo apply_filters(ECOMMERCE_PRODUCT_DETAIL_EXTRA_HTML, null, $product); ?>

        <div class="product-button">
            <?php if(EcommerceHelper::isCartEnabled()): ?>
                <?php echo Theme::partial('ecommerce.product-quantity', compact('product')); ?>

                <button
                    class="btn btn-primary mb-2 add-to-cart-button <?php if($product->isOutOfStock()): ?> disabled <?php endif; ?>"
                    name="add_to_cart"
                    type="submit"
                    value="1"
                    title="<?php echo e(__('Add to cart')); ?>"
                    <?php if($product->isOutOfStock()): ?> disabled <?php endif; ?>
                >
                    <span class="svg-icon">
                        <svg>
                            <use
                                href="#svg-icon-cart"
                                xlink:href="#svg-icon-cart"
                            ></use>
                        </svg>
                    </span>
                    <span class="add-to-cart-text ms-2"><?php echo e(__('Add to cart')); ?></span>
                </button>

                <?php if(EcommerceHelper::isQuickBuyButtonEnabled() && isset($withBuyNow) && $withBuyNow): ?>
                    <button
                        class="btn btn-primary btn-black mb-2 add-to-cart-button <?php if($product->isOutOfStock()): ?> disabled <?php endif; ?>"
                        name="checkout"
                        type="submit"
                        value="1"
                        title="<?php echo e(__('Buy Now')); ?>"
                        <?php if($product->isOutOfStock()): ?> disabled <?php endif; ?>
                    >
                        <span class="add-to-cart-text ms-2"><?php echo e(__('Buy Now')); ?></span>
                    </button>
                <?php endif; ?>
            <?php endif; ?>
            <?php if(!empty($withButtons)): ?>
                <?php echo Theme::partial('ecommerce.product-loop-buttons', compact('product', 'wishlistIds')); ?>

            <?php endif; ?>
        </div>
    <?php endif; ?>
</form>
<?php /**PATH F:\xamp\htdocs\mimi\platform\themes/farmart/partials/ecommerce/product-cart-form.blade.php ENDPATH**/ ?>
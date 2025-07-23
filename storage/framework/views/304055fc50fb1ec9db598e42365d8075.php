<span class="product-price">
    <span class="product-price-sale d-flex align-items-center bb-product-price <?php if(!$product->isOnSale()): ?> d-none <?php endif; ?>">
        <del aria-hidden="true">
            <span class="price-amount">
                <bdi>
                    <span class="amount bb-product-price-text-old" data-bb-value="product-original-price"><?php echo e(format_price($product->price_with_taxes)); ?></span>
                </bdi>
            </span>
        </del>
        <ins>
            <span class="price-amount">
                <bdi>
                    <span class="amount bb-product-price-text" data-bb-value="product-price"><?php echo e(format_price($product->front_sale_price_with_taxes)); ?></span>
                </bdi>
            </span>
        </ins>
    </span>
    <span class="product-price-original <?php if($product->isOnSale()): ?> d-none <?php endif; ?>">
        <span class="price-amount">
            <bdi>
                <span class="amount bb-product-price-text" data-bb-value="product-price"><?php echo e(format_price($product->front_sale_price_with_taxes)); ?></span>
            </bdi>
        </span>
    </span>
</span>
<?php /**PATH F:\xamp\htdocs\mimi\platform\themes/farmart/partials/ecommerce/product-price.blade.php ENDPATH**/ ?>
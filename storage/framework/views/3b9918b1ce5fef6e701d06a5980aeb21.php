<?php
    [$categories, $brands, $tags, $rand, $categoriesRequest, $urlCurrent, $categoryId, $maxFilterPrice] = EcommerceHelper::dataForFilter($category ?? null);

    Theme::asset()
        ->usePath()
        ->add('custom-scrollbar-css', 'plugins/mcustom-scrollbar/jquery.mCustomScrollbar.css');
    Theme::asset()
        ->container('footer')
        ->usePath()
        ->add('custom-scrollbar-js', 'plugins/mcustom-scrollbar/jquery.mCustomScrollbar.js', ['jquery']);
?>

<input
    class="product-filter-item"
    name="sort-by"
    type="hidden"
    value="<?php echo e(BaseHelper::stringify(request()->input('sort-by'))); ?>"
>
<input
    class="product-filter-item"
    name="layout"
    type="hidden"
    value="<?php echo e(BaseHelper::stringify(request()->input('layout'))); ?>"
>

<input type="hidden" name="q" class="product-filter-item" value="<?php echo e(BaseHelper::clean(request()->input('q'))); ?>">

<aside
    class="catalog-primary-sidebar catalog-sidebar"
    data-toggle-target="product-categories-primary-sidebar"
>
    <div class="backdrop"></div>
    <div class="catalog-sidebar--inner side-left">
        <div class="panel__header d-md-none mb-4">
            <span class="panel__header-title"><?php echo e(__('Filter Products')); ?></span>
            <a
                class="close-toggle--sidebar"
                data-toggle-closest=".catalog-primary-sidebar"
                href="#"
            >
                <span class="svg-icon">
                    <svg>
                        <use
                            href="#svg-icon-arrow-right"
                            xlink:href="#svg-icon-arrow-right"
                        ></use>
                    </svg>
                </span>
            </a>
        </div>
        <div class="catalog-filter-sidebar-content px-3 px-md-0">
            <div class="widget-wrapper widget-product-categories">
                <h4 class="widget-title"><?php echo e(__('Product Categories')); ?></h4>
                <div class="widget-layered-nav-list">
                    <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.categories'), [
                        'categories' => $categories,
                        'activeCategoryId' => $categoryId,
                        'categoriesRequest' => $categoriesRequest,
                        'urlCurrent' => $urlCurrent
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <?php if($brands->isNotEmpty()): ?>
                <div class="<?php echo \Illuminate\Support\Arr::toCssClasses(['widget-wrapper widget-product-brands']); ?>">
                    <h4 class="widget-title"><?php echo e(__('Brands')); ?></h4>
                    <div class="widget-layered-nav-list ps-custom-scrollbar">
                        <ul>
                            <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li
                                    data-id="<?php echo e($brand->id); ?>"
                                    data-categories="<?php echo e($brand->categories->pluck('id')->toJson()); ?>"
                                    class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                        'd-none' =>
                                            $categoryId &&
                                            $brand->categories->isNotEmpty() &&
                                            !$brand->categories->contains('id', $categoryId),
                                    ]); ?>"
                                >
                                    <div class="widget-layered-nav-list__item">
                                        <div class="form-check">
                                            <input
                                                class="form-check-input product-filter-item"
                                                id="attribute-brand-<?php echo e($rand); ?>-<?php echo e($brand->id); ?>"
                                                name="brands[]"
                                                type="checkbox"
                                                value="<?php echo e($brand->id); ?>"
                                                <?php if(in_array($brand->id, (array)request()->input('brands', []))): echo 'checked'; endif; ?>
                                            >
                                            <label
                                                class="form-check-label"
                                                for="attribute-brand-<?php echo e($rand); ?>-<?php echo e($brand->id); ?>"
                                            >
                                                <span><?php echo e($brand->name); ?></span>
                                                <span class="count">(<?php echo e($brand->products_count); ?>)</span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($tags->isNotEmpty()): ?>
                <div class="widget-wrapper widget-product-tags">
                    <h4 class="widget-title"><?php echo e(__('Tags')); ?></h4>
                    <div class="widget-layered-nav-list ps-custom-scrollbar">
                        <ul>
                            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                    <div class="widget-layered-nav-list__item">
                                        <div class="form-check">
                                            <input
                                                class="form-check-input product-filter-item"
                                                id="attribute-tag-<?php echo e($rand); ?>-<?php echo e($tag->id); ?>"
                                                name="tags[]"
                                                type="checkbox"
                                                value="<?php echo e($tag->id); ?>"
                                                <?php if(in_array($tag->id, (array)request()->input('tags', []))): echo 'checked'; endif; ?>
                                            >
                                            <label
                                                class="form-check-label"
                                                for="attribute-tag-<?php echo e($rand); ?>-<?php echo e($tag->id); ?>"
                                            >
                                                <span><?php echo e($tag->name); ?></span>
                                                <span class="count">(<?php echo e($tag->products_count); ?>)</span>
                                            </label>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($maxFilterPrice): ?>
                <div class="widget-wrapper">
                    <h4 class="widget-title"><?php echo e(__('By Price')); ?></h4>
                    <div class="widget__content nonlinear-wrapper">
                        <div
                            class="nonlinear"
                            data-min="0"
                            data-max="<?php echo e($maxFilterPrice); ?>"
                        ></div>
                        <div class="slider__meta">
                            <input
                                class="product-filter-item product-filter-item-price-0"
                                name="min_price"
                                data-min="0"
                                type="hidden"
                                value="<?php echo e(BaseHelper::stringify(request()->input('min_price', 0))); ?>"
                            >
                            <input
                                class="product-filter-item product-filter-item-price-1"
                                name="max_price"
                                data-max="<?php echo e($maxFilterPrice); ?>"
                                type="hidden"
                                value="<?php echo e(BaseHelper::stringify(request()->input('max_price', $maxFilterPrice))); ?>"
                            >
                            <span class="slider__value me-2">
                                <span class="slider__min me-1"></span>
                            </span>
                            <span>-</span>
                            <span class="slider__value ms-2">
                                <span class="slider__max me-1"></span>
                            </span>
                        </div>
                    </div>

                    <?php echo render_product_swatches_filter([
                        'view' => Theme::getThemeNamespace('views.ecommerce.attributes.attributes-filter-renderer'),
                        'categoryId' => $categoryId,
                    ]); ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
</aside>
<?php /**PATH F:\xamp\htdocs\mimi\platform\themes/farmart/views/ecommerce/includes/filters.blade.php ENDPATH**/ ?>
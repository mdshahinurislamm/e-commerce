<?php
    $categoriesRequest ??= [];
    $activeCategoryId ??= 0;
    $urlCurrent ??= url()->current();

    if (!isset($groupedCategories)) {
        $groupedCategories = $categories->groupBy('parent_id');
    }

    $currentCategories = $groupedCategories->get($parentId ?? 0);
?>

<ul class="<?php echo \Illuminate\Support\Arr::toCssClasses(['loading-skeleton']); ?>">
    <?php if($currentCategories): ?>
        <?php $__currentLoopData = $currentCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(!empty($categoriesRequest) && $loop->first && !$category->parent_id): ?>
                <li class="category-filter show-all-product-categories mb-2">
                    <a
                        class="nav-list__item-link"
                        data-id=""
                        href="<?php echo e(route('public.products')); ?>"
                    >
                        <span class="cat-menu-close svg-icon">
                            <svg>
                                <use
                                    href="#svg-icon-chevron-left"
                                    xlink:href="#svg-icon-close"
                                ></use>
                            </svg>
                        </span>
                        <span><?php echo e(__('All categories')); ?></span>
                    </a>
                </li>
            <?php endif; ?>
            <li class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                'category-filter',
                'opened' =>
                    in_array($category->id, $categoriesRequest) &&
                    ($activeCategoryId == $category->id || $urlCurrent != route('public.single', $category->url)),
            ]); ?>">
                <div class="widget-layered-nav-list__item">
                    <div class="nav-list__item-title">
                        <a
                            data-id="<?php echo e($category->id); ?>"
                            href="<?php echo e(route('public.single', $category->url)); ?>"
                            class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                                'nav-list__item-link',
                                'active' =>
                                    $activeCategoryId == $category->id || $urlCurrent == route('public.single', $category->url),
                            ]); ?>"
                        >
                            <?php if(!$category->parent_id): ?>
                                <?php if($category->icon_image): ?>
                                    <img
                                        src="<?php echo e(RvMedia::getImageUrl($category->icon_image)); ?>"
                                        alt="<?php echo e($category->name); ?>"
                                        width="18"
                                        height="18"
                                    >
                                <?php elseif($category->icon): ?>
                                    <i class="<?php echo e($category->icon); ?>"></i>
                                <?php endif; ?>
                                <span class="ms-1"><?php echo e($category->name); ?></span>
                            <?php else: ?>
                                <span><?php echo e($category->name); ?></span>
                            <?php endif; ?>
                        </a>
                    </div>

                    <?php
                        $hasChildren = $groupedCategories->has($category->id);
                    ?>

                    <?php if($hasChildren): ?>
                        <span class="cat-menu-close svg-icon closed-icon">
                            <svg>
                                <use
                                    href="#svg-icon-increase"
                                    xlink:href="#svg-icon-increase"
                                ></use>
                            </svg>
                        </span>

                        <span class="cat-menu-close svg-icon opened-icon">
                            <svg>
                                <use
                                    href="#svg-icon-decrease"
                                    xlink:href="#svg-icon-decrease"
                                ></use>
                            </svg>
                        </span>
                    <?php endif; ?>
                </div>
                <?php if($hasChildren): ?>
                    <?php echo $__env->make(Theme::getThemeNamespace('views.ecommerce.includes.categories'), [
                        'categories' => $groupedCategories,
                        'parentId' => $category->id,
                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <?php endif; ?>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</ul>
<?php /**PATH F:\xamp\htdocs\mimi\platform\themes/farmart/views/ecommerce/includes/categories.blade.php ENDPATH**/ ?>
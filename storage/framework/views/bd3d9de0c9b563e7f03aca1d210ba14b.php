<div class="mb-3">
    <div class="mb-3">
        <label class="form-label"><?php echo e(__('Quantity')); ?></label>
        <?php echo Form::customSelect($tabKey ? "{$tabKey}_quantity" : 'quantity', $choices, $current, [
            'id' => $selector,
            'data-max' => $max,
            'data-key' => $tabKey,
            'class' => 'shortcode-tabs-quantity-select',
        ]); ?>

    </div>

    <div
        class="accordion"
        id="accordion-tab-shortcode mt-2"
        style="--bs-accordion-btn-padding-y: .7rem;"
    >
        <?php for($i = $min; $i <= $max; $i++): ?>
            <?php
                $tabItemKey = $tabKey ? "{$tabKey}_{$i}" : $i;
            ?>
            <div
                class="accordion-item"
                style="<?php echo \Illuminate\Support\Arr::toCssStyles(['display: none' => $i > $current]) ?>"
                data-tab-id="<?php echo e($tabItemKey); ?>"
            >
                <h2
                    class="accordion-header"
                    id="heading-<?php echo e($tabItemKey); ?>"
                >
                    <button
                        class="accordion-button collapsed"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapse-<?php echo e($tabItemKey); ?>"
                        type="button"
                        aria-expanded="false"
                        aria-controls="collapse-<?php echo e($tabItemKey); ?>"
                    >
                        <?php echo e(__('Tab #:number', ['number' => $i])); ?>

                    </button>
                </h2>
                <div
                    class="accordion-collapse collapse"
                    id="collapse-<?php echo e($tabItemKey); ?>"
                    data-bs-parent="#accordion-tab-shortcode"
                    aria-labelledby="heading-<?php echo e($tabItemKey); ?>"
                >
                    <div class="accordion-body bg-light">
                        <div class="section">
                            <?php $__currentLoopData = $fields; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k => $field): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    $key = $tabKey ? "{$tabKey}_{$k}_{$i}" : "{$k}_{$i}";
                                    $name = $i <= $current ? $key : '';
                                    $title = Arr::get($field, 'title');
                                    $placeholder = Arr::get($field, 'placeholder', $title);
                                    $defaultValue = Arr::get($field, 'value', Arr::get($field, 'default_value'));
                                    $value = Arr::get($attributes, $key, $defaultValue);
                                    $fieldAttributes = [...Arr::get($field, 'attributes', []), 'data-name' => $key];

                                    $options = [];
                                    if (Arr::has($field, 'options')) {
                                        $options = Arr::get($field, 'options', []);
                                    }
                                ?>

                                <div class="mb-3">
                                    <label class="<?php echo \Illuminate\Support\Arr::toCssClasses(['form-label', 'required' => Arr::get($field, 'required')]); ?>"><?php echo e($title); ?></label>
                                    <?php switch(Arr::get($field, 'type')):
                                        case ('image'): ?>
                                            <?php echo Form::mediaImage($name, $value, $fieldAttributes); ?>

                                            <?php break; ?>

                                        <?php case ('file'): ?>
                                            <?php echo Form::mediaFile($name, $value, $fieldAttributes); ?>

                                            <?php break; ?>

                                        <?php case ('color'): ?>
                                            <?php echo Form::customColor($name, $value, $fieldAttributes); ?>

                                            <?php break; ?>

                                        <?php case ('icon'): ?>
                                            <?php echo Form::themeIcon($name, $value, $fieldAttributes); ?>

                                            <?php break; ?>

                                        <?php case ('number'): ?>
                                            <?php echo Form::number($name, $value, [
                                                'class' => 'form-control',
                                                'placeholder' => $placeholder,
                                                'data-name' => $key,
                                            ]); ?>

                                            <?php break; ?>

                                        <?php case ('textarea'): ?>
                                            <?php echo Form::textarea($name, $value, [
                                                'class' => 'form-control',
                                                'placeholder' => $placeholder,
                                                'rows' => 3,
                                                ...$fieldAttributes,
                                            ]); ?>

                                            <?php break; ?>

                                        <?php case ('checkbox'): ?>
                                            <?php ($options =  ['no' => __('No'), 'yes' => __('Yes')]); ?>

                                        <?php case ('select'): ?>
                                            <?php echo Form::customSelect($name, $options, $value, $fieldAttributes); ?>

                                            <?php break; ?>

                                        <?php case ('onOff'): ?>
                                            <?php echo Form::onOff($name, $value, [...$options, ...$fieldAttributes]); ?>

                                            <?php break; ?>

                                        <?php case ('coreIcon'): ?>
                                            <?php echo Form::coreIcon($name, $value, [...$options, ...$fieldAttributes]); ?>

                                            <?php break; ?>

                                        <?php default: ?>
                                            <?php echo Form::text($name, $value, [
                                                'class' => 'form-control',
                                                'placeholder' => $placeholder,
                                                ...$fieldAttributes,
                                            ]); ?>

                                    <?php endswitch; ?>

                                    <?php if($helper = Arr::get($field, 'helper')): ?>
                                        <?php echo e(Form::helper($helper)); ?>

                                    <?php endif; ?>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>
<script src="<?php echo e(asset('vendor/core/packages/shortcode/js/shortcode-fields.js')); ?>?v=<?php echo e(time()); ?>"></script>
<?php /**PATH F:\xamp\htdocs\mimi\platform/packages/shortcode/resources/views/fields/tabs.blade.php ENDPATH**/ ?>
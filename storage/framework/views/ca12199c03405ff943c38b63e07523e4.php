<?php if(is_plugin_active('newsletter')): ?>
    <div class="col-xl-12">
        <div class="widget">

            <div class="row">
                <div class="col-md-6">
                <!-- <span class="icon-envelope"></span> -->
                    <p class="h4 fw-bold widget-title"><?php echo e($config['title']); ?></p>
                    <div class="widget-description pb-3"><?php echo e($config['subtitle']); ?></div>

                </div>
                <div class="col-md-6">
                     
                    <div class="form-widget">
                        <?php echo \Botble\Newsletter\Forms\Fronts\NewsletterForm::create()
                                ->modify('wrapper_before', 'html', [
                                    'html' => '<div class="form-fields"><div class="input-group">
                                    <div class="input-group-text">
                                        
                                        <span class="svg-icon">
                                            <svg>
                                                <use
                                                    href="#svg-icon-mail"
                                                    xlink:href="#svg-icon-mail"
                                                ></use>
                                            </svg>
                                        </span>
                                    </div>'
                                ])
                                ->modify('wrapper_after', 'html', [
                                    'html' => '</div></div>',
                                ])
                                ->setFormInputClass('form-control shadow-none')
                                ->modify('email', 'email', [
                                    'attr' => ['placeholder' => __('Your email...')],
                                ])
                                ->modify('submit', 'submit', [
                                    'attr' => ['class' => 'btn btn-primary subscribe_tn'],
                                ])
                                ->renderForm(); ?>

                    </div>

                </div>
            </div>           
            

        </div>
    </div>
<?php endif; ?>
<?php /**PATH F:\xamp\htdocs\mimi\platform\themes/farmart/////widgets/newsletter/templates/frontend.blade.php ENDPATH**/ ?>
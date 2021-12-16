<?php //echo do_shortcode('[amocrm id="541135" hash="c1dca76f3d7dd548398d2dbed0499d57" locale="ru"]');?>
<?php //echo do_shortcode('[amocrm id="541147" hash="6967a694c3cc7fc7c9391907b5321682" locale="ru"]');?>

<!-- Modal -->
<div class="modal fade" id="callback-form" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
		
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                <p class="h3"><?php echo pll__('Request a call back'); ?></p>
            </div>
            <div class="modal-body" style="height: 550px;">
                <div class="white-form"  style="height: 550px;">
				
				
				<script>var amo_forms_params = {"id":541135,"hash":"c1dca76f3d7dd548398d2dbed0499d57","locale":"ru"};</script>
				<script id="amoforms_script" charset="utf-8" src="https://forms.amocrm.ru/forms/assets/js/amoforms.js"></script>
				
                    <?php //current_form(40); ?>
                </div>
            </div>
        </div>
    </div>
</div>




<?php if (is_product()): ?>
    <div class="modal fade" id="order-form" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    <p class="h3"><?php echo pll__('Order'); ?></p>
                </div>
                <div class="modal-body">
                    <div class="white-form">
                        <?php current_form(181); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="price-reduction-form" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    <p class="h3"><?php echo pll__('Report a price reduction'); ?></p>
                </div>
                <div class="modal-body">
                    <div class="white-form">
                        <?php current_form(182); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

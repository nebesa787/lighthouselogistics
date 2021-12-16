<?php if (is_active_sidebar('sidebar_catalog')) : ?>
    <div class="col-md-4">
        <aside id="sidebar">
            <div class="sidebar-head">
                <div class="icon">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/icon-car.svg" alt="">
                </div>
                <p><strong><?php echo pll__('Filter'); ?></strong></p>
                <p><?php echo pll__('Sort the car') ?></p>
            </div>
            <div class="sidebar-body">
                <?php dynamic_sidebar('sidebar_catalog'); ?>
            </div>
        </aside>
    </div>
<?php endif; ?>

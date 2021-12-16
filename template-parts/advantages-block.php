<?php if (have_rows('services')): ?>
    <div class="help-block">
        <div class="container">
            <p class="h1"><?php the_field('title') ?></p>
            <div class="help-block-wrap">
                <div class="row">
                    <?php while (have_rows('services')):the_row();
                        $icon = get_sub_field('icon'); ?>
                        <div class="col-sm-6">
                            <div class="item">
                                <div class="icon">
                                    <?php echo '<img src="' . $icon['sizes']['icon'] . '" alt="' . $icon['title'] . '">'; ?>
                                </div>
                                <p class="h3"><?php the_sub_field('title') ?></p>
                                <div class="text"><?php the_sub_field('content') ?></div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>

        </div>
    </div>
<?php endif; ?>
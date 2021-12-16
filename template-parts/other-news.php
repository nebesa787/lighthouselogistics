<div class="col-xs-6 item">
    <div class="row">
        <div class="image col-md-6">

            <?php if ( has_post_thumbnail()): ?>

                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                    <?php $attr = array(
                        'alt' => the_title_attribute('echo=0'),
                        'title' => the_title_attribute('echo=0')
                    );
                    the_post_thumbnail('thumbnail', $attr); ?>
                </a>

            <?php endif; ?>

        </div>
        <div class="info col-md-6">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php echo '<time class="date" datetime="' . get_the_date('Y-m-d') . '">' . get_the_date('d.m.y') . '</time>'; ?>
            <div class="text">
                <?php the_field('short_description');?>
            </div>
            <a href="<?php the_permalink(); ?>" class="btn btn-md"><?php echo pll__('Read more');?></a>
        </div>
    </div>
</div>
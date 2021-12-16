<?php

if (is_archive() && !is_post_type_archive('product')):

    $term = get_queried_object();
    $seo_title = get_field('seo_title', $term->taxonomy . '_' . $term->term_id);
    $seo_content = get_field('seo_content', $term->taxonomy . '_' . $term->term_id);

elseif (is_archive() && is_post_type_archive('product')):

    if (get_locale() == 'uk'):
        $_id = 204;
    else:
        $_id = 159;
    endif;

    $seo_title = get_field('seo_title', $_id);
    $seo_content = get_field('seo_content', $_id);

else:
    $seo_title = get_field('seo_title');
    $seo_content = get_field('seo_content');
endif;

$paged = get_query_var('paged');

if ($seo_content && $paged == 0 || $seo_title && $paged == 0):?>
    <section id="text-bottom">
        <div class="container">
            <?php if ($seo_title):
                echo '<p class="h1">' . $seo_title . '</p>';
            endif;
            if ($seo_content):
                echo '<div class="text">' . $seo_content . '</div>';
            endif; ?>
        </div>
    </section>
<?php endif; ?>
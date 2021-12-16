<?php if (function_exists('bcn_display')):
    echo '<div class="breadcrumbs" vocab="http://schema.org/" typeof="BreadcrumbList">';
    bcn_display();
    echo '</div>';
endif;?>

<script>
    var pll = '<?php echo pll__('Home') ?>';
    $('.breadcrumbs a.home > span').text(pll);
</script>

<form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>">
    <input type="search" placeholder="<?php echo pll__('Search'); ?>" value="<?php echo get_search_query(); ?>" name="s"/>
    <input type="submit" value>
</form>

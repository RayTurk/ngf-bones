<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label for="#lbsearch">
        <span class="sr_only"><?php echo _x( 'Search for:', 'label' ) ?></span>

    </label>
    <input type="search" id="lbsearch" class="search-field"
            placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    <input type="submit" class="search-submit" value="Search" />
</form>
<!-- this is for the search bar -->


<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x( '', 'label' ) ?></span><!-- Search for: can be placed in the empty single quotsion marks in this line -->
        <input type="search" class="search-field"
            placeholder="<?php echo esc_attr_x( 'Looking for …', 'placeholder' ) ?>"
            value="<?php echo get_search_query() ?>" name="s"
            title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    </label>
    <input type="submit" class="search-submit"
        value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
</form>
<form class="field has-addons" method=" get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <div class="control">
        <input class="input" type="text" name="s" id="s" placeholder="<?php esc_attr_e( 'Search by Post' ); ?>" />
        <input type="hidden" name="search-type" value="posts" />
    </div>
    <div class="control">
        <button class="input" type="submit" name="submit" id="searchsubmit" value="<?php esc_attr_e( 'Search' ); ?>">
            <img class="image is-32x32" src="<?php bloginfo('template_url'); ?>/img/magnifying-glass-green.png" />
        </button>
    </div>
</form>
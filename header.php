<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Air_Head_Sweden
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text"
            href="#primary"><?php esc_html_e( 'Skip to content', 'air-head-sweden' ); ?></a>

        <header id="masthead" class="site-header">
            <nav class="navbar container" role="navigation" aria-label="main navigation">
                <div class="navbar-brand">
                    <div class="site-branding">
                        <?php the_custom_logo(); ?>
                    </div><!-- .site-branding -->
                    <button class="button navbar-burger" data-target="primary-menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>
                <?php
        wp_nav_menu( array(
            'theme_location'    => 'primary',
            'depth'             => 0,
            'container'         => false,
            // 'items_wrap'     => 'div',
            'menu_class' => 'navbar-menu is-justify-content-flex-end',
            'menu_id'           => 'primary-menu',
            'after'             => "</div>",
            'walker'            => new Navwalker())
        );
        ?>
            </nav>
        </header><!-- #masthead -->
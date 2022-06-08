<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Air_Head_Sweden
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('section'); ?>>
    <header class="hero">
        <div class="hero-body">
            <?php the_title( '<h1 class="title has-text-centered">', '</h1>' ); ?>
        </div>
    </header><!-- .entry-header -->

    <?php air_head_sweden_post_thumbnail(); ?>

    <div class="content container is-max-desktop has-text-centered">
        <?php
        ?><section><?php the_content(); ?></section><?php

        wp_link_pages(
        array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'air-head-sweden' ),
            'after' => '</div>',
        )
        );
        ?>
    </div><!-- .entry-content -->
    <section class="section">
        <?php if ( get_edit_post_link() ) : ?>
    </section>
    <footer class="section entry-footer">
        <?php
            edit_post_link(
                sprintf(
                    wp_kses(
                        /* translators: %s: Name of current post. Only visible to screen readers */
                        __( 'Edit <span class="screen-reader-text">%s</span>', 'air-head-sweden' ),
                        array(
                            'span' => array(
                                'class' => array(),
                            ),
                        )
                    ),
                    wp_kses_post( get_the_title() )
                ),
                '<span class="edit-link">',
                '</span>'
            );
            ?>
    </footer><!-- .entry-footer -->
    <?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
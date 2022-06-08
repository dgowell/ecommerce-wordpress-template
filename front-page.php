<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Air_Head_Sweden
 */

get_header();
?>

<main id="primary" class="site-main">
    <div>

        <?php
            get_template_part( 'template-parts/section-product', get_post_type() );
            get_template_part( 'template-parts/section-description', get_post_type() );
            get_template_part( 'template-parts/section-highlights', get_post_type() );
            get_template_part( 'template-parts/section-bullet-points', get_post_type() );
            //get_template_part( 'template-parts/section-review', get_post_type() );
            get_template_part( 'template-parts/section-faq', get_post_type() );
            get_template_part( 'template-parts/section-video', get_post_type() );
            get_template_part( 'template-parts/section-twitter', get_post_type() );
        ?><section class="section"><?php the_content(); ?></section><?php

        wp_link_pages(
        array(
        'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'air-head-sweden' ),
            'after' => '</div>',
        )
        );
        ?>
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
    </div>
</main><!-- #main -->

<?php
get_footer();
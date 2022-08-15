<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Air_Head_Sweden
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('content pb-6'); ?>>
    <?php air_head_sweden_post_thumbnail(); ?>
    <div class="section container">
        <?php  if ( !is_page('produkter') ) { ?>
        <header class=" page-header">
            <?php the_title( '<h1 class="title">', '</h1>' ); ?>
            <?php if( get_post_meta( get_the_ID(), 'subtitle', true ) ) { ?>
            <p class=" subtitle"><?php echo get_post_meta(get_the_ID(), 'subtitle', true); ?></p>
            <?php } ?>

        </header> <!-- .entry-header -->
        <?php
    }
        ?><section class="airhead-body pt-5"><?php the_content(); ?></section><?php

        wp_link_pages(
            array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'air-head-sweden' ),
                'after' => '</div>',
            )
        );
        if (is_page('Enkel beskrivning av hur du installera din Air Head')){
            get_template_part('template-parts/section-timeline', get_post_type());
            get_template_part('template-parts/section-video', get_post_type());
        }
        if (is_page('Kontakta oss') | is_page('Om oss')) {
           get_template_part('template-parts/section-social', get_post_type());
            get_template_part('template-parts/section-mailchimp', get_post_type());
           
        }

        ?>
    </div><!-- .entry-content -->
    <section>
        <?php if ( get_edit_post_link() ) : ?>
    </section>
    <footer class=" section entry-footer">
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
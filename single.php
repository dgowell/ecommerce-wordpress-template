<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Air_Head_Sweden
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
        while ( have_posts() ) :
    ?><div class="content container single"><?php

            the_post();

            get_template_part( 'template-parts/content', get_post_type() );

            if (!is_product()){
                the_post_navigation(
                    array(
                        'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'air-head-sweden' ) . '</span> <span class="nav-title">%title</span>',
                        'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'air-head-sweden' ) . '</span> <span class="nav-title">%title</span>',
                    )
                );
            }
        ?>
    </div>
    <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop.
?>
</main><!-- #main -->

<?php
get_footer();
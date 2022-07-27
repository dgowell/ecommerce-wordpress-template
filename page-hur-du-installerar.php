<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Air_Head_Sweden
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
        while ( have_posts() ) :
            the_post();

            //get_template_part( 'template-parts/content', 'page' );
            ?>
    <div class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <article class="message">
                        <div class="message-header">
                            <p>Step One</p>
                            <button class="delete" aria-label="delete"></button>
                        </div>
                        <div class="message-body">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus
                                mi</strong>,
                            tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla.
                            Nullam
                            gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend
                                lacus</em>,
                            in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula,
                            id
                            porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
                        </div>
                    </article>
                </div>
                <div class="column">
                    <img src="" />
                </div>
            </div>
        </div>
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
get_sidebar();
get_footer();
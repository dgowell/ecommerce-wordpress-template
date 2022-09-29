<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Air_Head_Sweden
 */

get_header();
?>

<main id="primary" class="site-main">

    <section class="section error-404 not-found has-text-centered">
        <header class="page-header">
            <h1 class="page-title"><?php esc_html_e( 'Den sidan kan inte hittas.', 'air-head-sweden' ); ?>
            </h1>
        </header><!-- .page-header -->

        <div class="page-content">
            <p><?php esc_html_e( 'Det ser ut som om ingenting hittades på denna plats.', 'air-head-sweden' ); ?>
            </p>



        </div><!-- .page-content -->
    </section><!-- .error-404 -->

</main><!-- #main -->
<?php get_template_part( 'template-parts/section-mailchimp', get_post_type() ); ?>
<?php
get_footer();
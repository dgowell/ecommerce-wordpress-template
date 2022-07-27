<?php
/**
 * Template part for displaying section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Air_Head_Sweden
 */
$post_id = get_the_ID();
$low = 'product-image-low';
$high = 'product-image-high';

?>
<section id="homepage-banner" class="section is-desktop is-vcentered">
    <div class="container">
        <div class="columns reverse-columns-desktop">
            <div class=" column has-text-centered has-text-left-tablet has-text-right-desktop is-align-self-center">
                <h1 class="title has-text-white is-size-1">Air Head komposteringstoalett</h1>
                <h2 class="subtitle has-text-white is-size-4">
                    Miljövänlig och offgrid separerings- och komposteringstoalett för små utrymmen, såsom båtar, bilar,
                    husvagnar, fritidshus
                </h2>
                <a href="/hur-fungerar-det"><button class="button is-white is-outlined is-medium">Mer info</button></a>
            </div>
            <div class="column is-align-self-center">
                <div class="product-image m-auto">
                    <figure class="image is-square m-auto">
                        <img width="300"
                            srcset="<?php echo get_post_meta( $post_id, $low, true ) ?> 1x, <?php echo get_post_meta( $post_id, $high, true ) ?> 2x"
                            src="<?php echo get_post_meta( $post_id, $low, true ) ?>" alt="Air Head" />
                    </figure>
                </div>
                <div class="mt-3 has-text-centered">
                    <a href="/produkter"><button class="button is-white is-medium">Köp Nu</button></a>
                </div>
            </div>
        </div>
    </div>
</section>
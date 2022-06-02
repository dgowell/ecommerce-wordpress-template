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
<section id="homepage-description">
    <div
        class="section has-text-centered is-flex-direction-column is-justify-content-center is-flex-wrap-wrap has-background-white-ter">

        <div class="columns">
            <div
                class="column is-one-third-desktop is-offset-one-quarter-desktop has-text-left-tablet is-align-self-center">
                <h2 class="title">Vad ar en miljovanlig torrkomposteringstoalett?</h2>
                <p class="subtitle">
                    A simple container to divide your page into <strong>sections</strong>, like the one you're currently
                    reading.
                </p>
                <button class="button is-success is-outlined">Read More</button>
                <button class="button">Buy Now</button>
            </div>
            <div class="column is-align-self-center is-one-third">
                <div class="product-image m-auto">
                    <figure class="image is-square m-auto">
                        <img width="300"
                            srcset="<?php echo get_post_meta( $post_id, $low, true ) ?> 1x, <?php echo get_post_meta( $post_id, $high, true ) ?> 2x"
                            src="<?php echo get_post_meta( $post_id, $low, true ) ?>" alt="Air Head" />
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
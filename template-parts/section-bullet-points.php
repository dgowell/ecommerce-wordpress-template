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
<section id="homepage-bullet-points">
    <div class="section has-text-centered is-flex-direction-column is-justify-content-center is-flex-wrap-wrap
        has-background-white-ter is-align-content-center">
        <div class="container">
            <div class="columns">
                <div class="column is-align-self-center">
                    <div class="product-image m-auto">
                        <figure class="image is-square m-auto">
                            <img width="300"
                                srcset="<?php echo get_post_meta( $post_id, $low, true ) ?> 1x, <?php echo get_post_meta( $post_id, $high, true ) ?> 2x"
                                src="<?php echo get_post_meta( $post_id, $low, true ) ?>" alt="Air Head" />
                        </figure>
                    </div>
                </div>
                <div class="column is-align-self-center has-text-left-tablet">
                    <div class="content">
                        <h2 class="title">Vad ar en miljovanlig torrkomposteringstoalett?</h2>
                        <div class="bullet-point my-3">
                            <img src="http://air-head-sweden-shop.local/wp-content/uploads/2022/06/tick-icon.png" />
                            <li>En erkant hallbar produkt som funnits pa marknaden i 20 ar.</li>
                        </div>
                        <div class="bullet-point my-3">
                            <img src="http://air-head-sweden-shop.local/wp-content/uploads/2022/06/tick-icon.png" />
                            <li>En erkant hallbar produkt som funnits pa marknaden i 20 ar.</li>
                        </div>
                        <div class="bullet-point my-3">
                            <img src="http://air-head-sweden-shop.local/wp-content/uploads/2022/06/tick-icon.png" />
                            <li>En erkant hallbar produkt som funnits pa marknaden i 20 ar.</li>
                        </div>
                        </ul>
                        <div class="mt-5">
                            <a href="/hur-fungerar-det"><button class="button is-accent is-outlined mr-4">Läs
                                    mer</button></a>
                            <a href="/produkter"><button class="button is-accent">Köp Nu</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
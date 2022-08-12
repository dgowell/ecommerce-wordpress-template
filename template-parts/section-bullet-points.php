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
                <div class="column has-text-left">
                    <div class="content">
                        <h2 class="title has-text-centered">Varför ska jag välja Air Head?</h2>
                        <div class="bullet-point my-3">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>../../wp-content/uploads/2022/06/tick-icon.png" />
                            <li>Hållbar - Air Head toaletten är tillverkad av rotationsgjuten plast med detaljer i
                                rostfritt marint stål för att den ska ha ett lång liv och stå ut med hård användning.
                            </li>
                        </div>
                        <div class="bullet-point my-3">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>../../wp-content/uploads/2022/06/tick-icon.png" />
                            <li>Kompakt - Det går nästan alltid att installera en Air Head i det flesta utrymme som
                                behöver en toa.</li>
                        </div>
                        <div class="bullet-point my-3">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>../../wp-content/uploads/2022/06/tick-icon.png" />
                            <li>Garanti - Vi garanterar samtliga delar av en Air Head under 5 år. </li>
                        </div>
                        <div class="bullet-point my-3">
                            <img
                                src="<?php echo get_template_directory_uri(); ?>../../wp-content/uploads/2022/06/tick-icon.png" />
                            <li>Miljövänlig - Tillverkningsmaterialet består delvis av återvunnen plast och tillverkade
                                på ett sätt som förenklar återvinning när den inte längre behövs. Vi tar gärna emot din
                                gammal Air Head och återvinner allt. Samt allt som kommer ut vid tömning är naturligt,
                                inga kemiska tillsatser.</li>
                        </div>
                        </ul>
                        <div class="mt-5 has-text-centered">
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
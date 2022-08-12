<?php
/**
 * Template part for displaying section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Air_Head_Sweden
 */

?>
<section class="section has-background-light    ">
    <div class="columns section">
        <div class="column is-one-third is-offset-2">
            <h2 class=" title has-text-centered">Find us on Twitter</h2>
            <div class="container is-max-desktop">
                <a class="twitter-timeline" data-lang="sv" data-height="730" data-dnt="true" data-theme="light"
                    href="https://twitter.com/GreenAirhead?ref_src=twsrc%5Etfw">Tweets by GreenAirhead</a>
                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
        <div class="column is-one-third">
            <h2 class=" title has-text-centered">Find us on Instagram</h2>
            <div class="container is-max-desktop">
                <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
            </div>
        </div>
    </div>
</section>
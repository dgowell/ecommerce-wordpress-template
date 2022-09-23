<?php
/**
 * Template part for displaying section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Air_Head_Sweden
 */
//require_once "libs/Mobile_Detect.php";
$detect = new Mobile_Detect;
?>
<!-- Start Hero Carousel -->
<section class="hero is-medium has-carousel">
    <div id="homepage-carousel" class="hero-carousel">
        <div class="item-1">
            <?php if ($detect->isMobile()) { ?>
            <img class="slide-img" src="http://air-head-sweden-shop.local/wp-content/uploads/2022/09/boat-dark.jpg">
            <?php } else { ?>
            <img class="slide-img"
                src="http://air-head-sweden-shop.local/wp-content/uploads/2022/09/catamarang-1-scaled.jpg">
            <?php } ?>
        </div>
        <div class="item-2">
            <?php if ($detect->isMobile()) { ?>
            <img class="slide-img" src="http://air-head-sweden-shop.local/wp-content/uploads/2022/09/forest-dark-2.jpg">
            <?php } else { ?>
            <img src="http://air-head-sweden-shop.local/wp-content/uploads/2022/09/van-in-snow.jpg" />
            <?php } ?>
        </div>
        <div class="item-3">
            <?php if ($detect->isMobile()) { ?>
            <img class="slide-img" src="http://air-head-sweden-shop.local/wp-content/uploads/2022/09/van-dark-2.jpg">
            <?php } else { ?>
            <img src="http://air-head-sweden-shop.local/wp-content/uploads/2022/09/house-in-the-forest-scaled.jpg" />
            <?php } ?>
        </div>
    </div>
    <div class="container homepage-banner">
        <div class="column is-5-desktop is-offset-7-desktop has-text-centered has-text-right-desktop py-6">
            <h1 class="title has-text-white">Air Head komposteringstoalett</h1>
            <h2 class="subtitle has-text-white">
                Miljövänlig och offgrid separerings- och komposteringstoalett för små utrymmen, såsom
                båtar, bilar,
                husvagnar, fritidshus
            </h2>
            <div class="hero-foot"><a href="/hur-fungerar-det">
                    <button class="button is-white has-outline">Mer info</button>
                </a></div>
        </div>
    </div>
</section>
<!-- End Hero Carousel -->
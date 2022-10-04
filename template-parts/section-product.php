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
$base = get_site_url(null, '/wp-content/uploads/2022/09/', 'https');
?>
<section class="carousel" aria-label="Gallery">
    <ol class="carousel__viewport">
        <li id="carousel__slide1" tabindex="0" class="carousel__slide">
            <div class="carousel__snapper">
                <div class="container homepage-banner">
                    <div class="column is-5-desktop is-offset-7-desktop has-text-centered has-text-right-desktop py-6">
                        <h1 class="title has-text-white">Air Head komposteringstoalett</h1>
                        <h2 class="subtitle has-text-white">
                            Miljövänlig, offgrid, separations- och komposteringstoalett. Luktfri, effektiv, hållbar och
                            lätt anpassad till ditt hem på hjul. Smidig att tömma, och
                            gör ditt privatliv bekvämt och enkelt var du än är.
                        </h2>
                        <div class="hero-foot"><a href="/hur-fungerar-det">
                                <button class="button is-white has-outline">Mer info</button>
                            </a></div>
                    </div>
                </div>
            </div>
        </li>
        <li id="carousel__slide2" tabindex="0" class="carousel__slide">
            <div class="carousel__snapper">
                <div class="container homepage-banner">
                    <div class="column is-5-desktop is-offset-7-desktop has-text-centered has-text-right-desktop py-6">
                        <h1 class="title has-text-white">Air Head komposteringstoalett</h1>
                        <h2 class="subtitle has-text-white">
                            Miljövänlig, offgrid, separations- och komposteringstoalett. Luktfri, effektiv, hållbar samt
                            lagenlig. Lätt att installera, använda och sköta. Passar var som helst; perfekt!
                        </h2>
                        <div class="hero-foot"><a href="/hur-fungerar-det">
                                <button class="button is-white has-outline">Mer info</button>
                            </a></div>
                    </div>
                </div>
            </div>
        </li>
        <li id="carousel__slide3" tabindex="0" class="carousel__slide">
            <div class="carousel__snapper">
                <div class="container homepage-banner">
                    <div class="column is-5-desktop is-offset-7-desktop has-text-centered has-text-right-desktop py-6">
                        <h1 class="title has-text-white">Air Head komposteringstoalett</h1>
                        <h2 class="subtitle has-text-white">
                            Miljövänlig, offgrid, separations- och komposteringstoalett. Luktfri, effektiv, hållbar och
                            laglig. Lätt anpassad till båtar, med enkel tömning utan
                            skrovgenomföringar och utan behov av tömningsstationer.
                        </h2>
                        <div class="hero-foot"><a href="/hur-fungerar-det">
                                <button class="button is-white has-outline">Mer info</button>
                            </a></div>
                    </div>
                </div>
            </div>
        </li>
    </ol>
</section>
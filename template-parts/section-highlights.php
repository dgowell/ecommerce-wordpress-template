<?php
/**
 * Template part for displaying section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Air_Head_Sweden
 */
$fan = "http://air-head-sweden-shop.local/wp-content/uploads/2022/06/fan.png";
$recycle = "http://air-head-sweden-shop.local/wp-content/uploads/2022/06/recycling.png";
$strength = "http://air-head-sweden-shop.local/wp-content/uploads/2022/06/security.png";

?>
<section id="homepage-highlights" class="has-background-white-ter">
    <div class="section has-text-centered">
        <div class="container">
            <div class="columns">
                <div class="column px-4 is-align-self-center mb-4">
                    <span class="icon mb-5">
                        <img src="<?php echo $fan ?>"></img>
                    </span>
                    <h3 class="title">Frihet</h3>
                    <p>Air Head fungerar med en fläkt som kan drivas offgrid, och inga anslutningar
                        behövs till elnätet eller vatten- och avlopp.</p>
                </div>
                <div class="column px-4 is-align-self-center mb-4">
                    <span class="icon mb-5">
                        <img src="<?php echo $recycle ?>"></img>
                    </span>
                    <h3 class="title">Miljövänlig</h3>
                    <p>Air Head främjar en kretsloppsanvändning som inte skadar naturen. Utan
                        kemikalier. Utan utsläpp. Med minimal vattenförbrukning. Mycket energisnålt.</p>
                </div>
                <div class="column px-4 is-align-self-center mb-4">
                    <span class="icon mb-5">
                        <img src="<?php echo $strength ?>"></img>
                    </span>
                    <h3 class="title">Tålig</h3>
                    <p>Air Head är robust och tillverkad för tuffa omständigheter i krävande miljöer,
                        såsom salta hav i storm med tyngd i rörelse. </p>
                </div>
            </div>
        </div>
    </div>
</section>
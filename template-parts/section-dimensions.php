<?php
/**
 * Template part for displaying section
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Air_Head_Sweden
 */
$base = get_site_url(null, '/wp-content/uploads/2022/08/', 'https');
$large_side = $base . "Dimensions-Air-head-mm-Large-Seat.png";
$large_front = $base . "AH-Front-Dimensions-Large-Seat-.png";
$small_side = $base . "Dimensions-Air-head-mm.png";
$small_front = $base . "AH-Front-Dimensions-Small-Seat-.png";
?>
<div class="section my-6">
    <div class="container has-text-centered content">
        <h2 class=" title">Mått</h2>
        <div class="columns py-6">
            <div class="column">
                <img alt="Air Head sidovy av stort säte" src=" <?php echo $large_side ?>"></img>
                <h3>Sidovy av stort säte</h3>
            </div>
            <div class=" column">
                <img alt="Air Head stor sits framifrån" src=" <?php echo $large_front ?>"></img>
                <h3>Stor sits framifrån</h3>
            </div>
            <div class="column">
                <img alt="Air Head sidovy av det lilla sätet" src=" <?php echo $small_side ?>"></img>
                <h3>Sidovy av det lilla sätet</h3>
            </div>
            <div class="column">
                <img alt="Air Head liten sittplats framifrån" src="<?php echo $small_front ?>"></img>
                <h3>Liten sittplats framifrån</h3>
            </div>
        </div>
    </div>
</div>
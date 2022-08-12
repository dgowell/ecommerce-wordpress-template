<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Air_Head_Sweden
 */

get_header();
?>

<main id="primary" class="site-main">

    <?php
        while ( have_posts() ) :
            the_post();

            get_template_part( 'template-parts/content', 'page' );
            ?>
    <div class="section container">
        <div class="timeline is-centered mb-6">
            <header class="timeline-header">
                <span class="tag is-medium is-primary">Start</span>
            </header>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <p class="heading">Steg 1</p>
                    <p>Placera din Air Head på önskad plats.</p>
                    <p>Kontrollera att den står vågrätt, samt att luckan och veven fungerar.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <p class="heading">Steg 2</p>
                    <p>Markera de 4 vinkeljärnens plats för att fästa toalettens urin- och fekaliebehållare.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <p class="heading">Steg 3</p>
                    <p>Ta bort toaletten men behåll vinkeljärnen på sina markerade platser.
                        Markera var de medföljande skruvarna ska sitta.
                    </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <p class="heading">Steg 4</p>
                    <p>Fäst vinkeljärnen på ytan som toaletten ska vara på.
                    </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <p class="heading">Steg 5</p>
                    <p>Sätt toaletten på plats och kolla så att allt passar som det ska.
                    </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <p class="heading">Steg 6</p>
                    <p>Sätt ringen med insektsnätet på sin plats i ena luftningshålet i toalettens överdel.
                    </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <p class="heading">Steg 7</p>
                    <p>Montera flänsen till ventilationsslangen i det andra hålet i toalettens överdelen.</p>
                    <ul>
                        <li>Dra O-ringen till den breda delen.</li>
                        <li>Sätt in flänsen i hålet.</li>
                        <li>Limma fast den medföljande grå PVC-ringen med PVC-lim, eller ett bra superlim.</li>
                        <li>När det är torrt ska O-ringen tillbaka till sin plats.</li>
                    </ul>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <p class="heading">Steg 8</p>
                    <p>Borra ett genomföringshål för ventilation till utsidan, där lämpligt, storlek 60-90 mm i
                        diameter.
                    </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <p class="heading">Steg 9</p>
                    <p>Använd på utsidan en separat anskaffad fläktkåpa.
                    </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <p class="heading">Steg 10</p>
                    <p>Placera fläkten i fläkthuset, och skruva fast fläkthuset med medföljande skruvar.
                    </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <p class="heading">Steg 11</p>
                    <p>Kapa ventilationsslangen där det är lämpligt, för att installera den tvådelade flänsen som har
                        ett insektsnät inuti. Tänk på att nätet ska rengöras då och då, och därför behöver vara
                        lättillgängligt.
                    </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>4
                <div class="timeline-content">
                    <p class="heading">Steg 12</p>
                    <p>Gänga fast ventilationsslangen med toaletten i ena änden, och fläkthuset i andra änden.
                    </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <p class="heading">Steg 13</p>
                    <p>Koppla fläkten till ett 12v batteri, med en säkring emellan. Det kan vara praktiskt att ha en
                        strömbrytare.
                    </p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-marker"></div>
                <div class="timeline-content">
                    <p class="heading">Steg 14</p>
                    <p>Koppla fläkten till ett 12v batteri, med en säkring emellan. Det kan vara praktiskt att ha en
                        strömbrytare.
                    </p>
                </div>
            </div>
            <div class="timeline-header">
                <span class="tag is-medium is-primary">End</span>
            </div>
        </div>
        <p>Det finns en mer ingående beskrivning av installationen i instruktionsmanualen.</p>
        <p><a href="#">Du kan ladda ner den här. (link to the instructions manual)</a></p>
    </div>
    <?php get_template_part( 'template-parts/section-video', get_post_type() ); ?>
    <?php

            // If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; // End of the loop.
        ?>

</main><!-- #main -->

<?php
get_footer();
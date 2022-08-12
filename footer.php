<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Air_Head_Sweden
 */
$website_url = get_stylesheet_directory_uri();
?>

<footer id="colophon" class="site-footer">
    <div class="section">
        <div class="container">
            <div class="columns">
                <div class="column">
                    <?php
                wp_nav_menu( array(
                    'theme_location'    => 'submenu-one',
                    'depth'             => 0,
                    'container'         => false,
                    'menu_class' => '',
                    'menu_id'           => 'submenu-one',
                    'walker' => new Navwalker()),
                );
            ?>
                </div>
                <div class="column">
                    <?php
                wp_nav_menu( array(
                    'theme_location'    => 'submenu-two',
                    'depth'             => 0,
                    'container'         => false,
                    'menu_class' => '',
                    'menu_id'           => 'submenu-two',
                    'walker' => new Navwalker()),
                );
            ?>
                </div>
                <div class="column">
                    <?php
                wp_nav_menu( array(
                    'theme_location'    => 'submenu-three',
                    'depth'             => 0,
                    'container'         => false,
                    'menu_class' => '',
                    'menu_id'           => 'submenu-three',
                    'walker' => new Navwalker()),
                );
            ?>
                </div>
            </div><!-- columns -->

            <div class="container columns">
                <div class="column is-three-quarters">
                    <div class="site-branding is-align-self-center">
                        <?php the_custom_logo(); ?>
                    </div><!-- .site-branding -->
                </div>
                <div class="column is-align-self-center ">
                    <div id="social-icons" class="level is-mobile">
                        <div class="level-item">
                            <a href="<?php echo $GLOBALS['tapacode']['facebook'] ?>">
                                <img class="image is-24x24" src="<?php echo $website_url ?>/img/fb-icon.png"
                                    alt="Facebook Icon" />
                            </a>
                        </div>
                        <div class="level-item">
                            <a href="<?php echo $GLOBALS['tapacode']['twitter'] ?>">
                                <img class="image is-24x24" src="<?php echo $website_url ?>/img/tw-icon.png"
                                    alt="Twitter Icon" />
                            </a>
                        </div>
                        <div class="level-item">
                            <a href="<?php echo $GLOBALS['tapacode']['instagram'] ?>">
                                <img class="image is-24x24" src="<?php echo $website_url ?>/img/ig-icon.png"
                                    alt="Instagram Icon" />
                            </a>
                        </div>
                    </div><!-- social icons -->
                </div><!-- level -->
            </div>
        </div><!-- container -->
    </div><!-- section -->
    <div class=" site-info p-5">
        <a href="<?php echo esc_url( __( 'https://tapacode.com/', 'air-head-sweden' ) ); ?>">
            <?php
                /* translators: %s: CMS name, i.e. WordPress. */
                printf( esc_html__( 'Website design and build by %s', 'air-head-sweden' ), 'TapaCode' );
                ?>
        </a>
        <span class="sep"> | </span>

        &copy; Air Head Sweden <?php echo date("Y"); ?>

    </div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>
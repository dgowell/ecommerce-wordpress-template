<?php
/**
 * Air Head Sweden functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Air_Head_Sweden
 */

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function air_head_sweden_setup() {
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on Air Head Sweden, use a find and replace
        * to change 'air-head-sweden' to the name of your theme in all the template files.
        */
    load_theme_textdomain( 'air-head-sweden', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
        * Let WordPress manage the document title.
        * By adding theme support, we declare that this theme does not use a
        * hard-coded <title> tag in the document head, and expect WordPress to
        * provide it for us.
        */
    add_theme_support( 'title-tag' );

    /*
        * Enable support for Post Thumbnails on posts and pages.
        *
        * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
        */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    require_once('navwalker.php');
    register_nav_menus(
        array(
            'primary' => esc_html__( 'Primary', 'primary' ),
            'submenu-one' => esc_html( 'Submenu One', 'submenu-one'),
            'submenu-two' => esc_html( 'Submenu Two', 'submenu-two'),
            'submenu-three' => esc_html( 'Submenu Three', 'submenu-three'),
        )
    );

    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support(
        'html5',
        array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
        'custom-background',
        apply_filters(
            'air_head_sweden_custom_background_args',
            array(
                'default-color' => 'ffffff',
                'default-image' => '',
            )
        )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
        'custom-logo',
        array(
            'height'      => 250,
            'width'       => 250,
            'flex-width'  => true,
            'flex-height' => true,
        )
    );
}
add_action( 'after_setup_theme', 'air_head_sweden_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function air_head_sweden_content_width() {
    $GLOBALS['content_width'] = apply_filters( 'air_head_sweden_content_width', 640 );
}
add_action( 'after_setup_theme', 'air_head_sweden_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function air_head_sweden_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'air-head-sweden' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'air-head-sweden' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'air_head_sweden_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function air_head_sweden_scripts() {
    wp_enqueue_style( 'air-head-sweden-style', get_stylesheet_uri(), array(), _S_VERSION );
    wp_enqueue_style( 'bulma-style', get_template_directory_uri() . '/css/bulma.css', array(), _S_VERSION );
    wp_enqueue_style( 'bulma-carousel', get_template_directory_uri() . '/css/bulma-carousel.min.css', array(), _S_VERSION );
    wp_enqueue_style( 'bulma-timeline', get_template_directory_uri() . '/css/bulma-timeline.min.css', array(), _S_VERSION );
    wp_style_add_data( 'air-head-sweden-style', 'rtl', 'replace' );

    wp_enqueue_script( 'air-head-sweden-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
    wp_enqueue_script( 'air-head-sweden-bulma-navigation', get_template_directory_uri() . '/js/bulma-navigation.js', array(),
    _S_VERSION, true );
    wp_enqueue_script( 'air-head-sweden-bulma-carousel', get_template_directory_uri() . '/js/bulma-carousel.min.js',
    array(), _S_VERSION, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }

}
add_action( 'wp_enqueue_scripts', 'air_head_sweden_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}
/**
 * Load mobile detection Library
 */
require_once "libs/Mobile_Detect.php";

/*
* CUSTOM GLOBAL VARIABLES
*/
function tapacode_global_vars() {

global $tapacode;
$tapacode = array(
    'twitter' => 'https://twitter.com/GreenAirhead',
    'facebook' => 'https://www.facebook.com/AirHead.miljotoalett',
    'instagram' => 'https://www.instagram.com/airheadtoilet/',
);

}
add_action( 'parse_query', 'tapacode_global_vars' );

/*
* REMOVE SHOP PRODUCT COUNT
*/
function my_remove_product_result_count() {
    remove_action( 'woocommerce_before_shop_loop' , 'woocommerce_result_count', 20 );
    remove_action( 'woocommerce_after_shop_loop' , 'woocommerce_result_count', 20 );
}
add_action( 'after_setup_theme', 'my_remove_product_result_count', 99 );


/*
* SHORTCODE
*/
function get_dimensions() {
    $base = get_site_url(null, '/wp-content/uploads/2022/08/', 'https');
    $large_side = $base . "Dimensions-Air-head-mm-Large-Seat.png";
    $large_front = $base . "AH-Front-Dimensions-Large-Seat-.png";
    $small_side = $base . "Dimensions-Air-head-mm.png";
    $small_front = $base . "AH-Front-Dimensions-Small-Seat-.png";
 return '
 <h2 class="title">Mått</h2>
    <div class="columns py-6 has-text-centered">
        <div class="column">
            <img alt="Air Head sidovy av stort säte" src="' . $large_side . '"></img>
<h3>Sidovy av stort säte</h3>
</div>
<div class=" column">
    <img alt="Air Head stor sits framifrån" src="' . $large_front .'"></img>
    <h3>Stor sits framifrån</h3>
</div>
<div class="column">
    <img alt="Air Head sidovy av det lilla sätet" src="' . $small_side .'"></img>
<h3>Sidovy av det lilla sätet</h3>
</div>
<div class="column">
    <img alt="Air Head liten sittplats framifrån" src="'. $small_front .'"></img>
<h3>Liten sittplats framifrån</h3>
</div>
</div>
';
}
add_shortcode('dimensions', 'get_dimensions');
/*
* CUSTOM COMMENT WALKERE
*/

class comment_walker extends Walker_Comment {
var $tree_type = 'comment';
var $db_fields = array( 'parent' => 'comment_parent', 'id' => 'comment_ID' );

// constructor – wrapper for the comments list
function __construct() { ?>

<section class="comments-list">

    <?php }

        // start_lvl – wrapper for child comments list
        function start_lvl( &$output, $depth = 0, $args = array() ) {
            $GLOBALS['comment_depth'] = $depth + 2; ?>

    <section class="child-comments comments-list">

        <?php }
    
        // end_lvl – closing wrapper for child comments list
        function end_lvl( &$output, $depth = 0, $args = array() ) {
            $GLOBALS['comment_depth'] = $depth + 2; ?>

    </section>

    <?php }

        // start_el – HTML for comment template
        function start_el( &$output, $comment, $depth = 0, $args = array(), $id = 0 ) {
            $depth++;
            $GLOBALS['comment_depth'] = $depth;
            $GLOBALS['comment'] = $comment;
            $parent_class = ( empty( $args['has_children'] ) ? '' : 'parent' ); 
    
            if ( 'article' == $args['style'] ) {
                $tag = 'article';
                $add_below = 'comment';
            } else {
                $tag = 'article';
                $add_below = 'comment';
            } ?>

    <article <?php comment_class(empty( $args['has_children'] ) ? '' :'parent') ?> id="comment-<?php comment_ID() ?>"
        itemprop="comment" itemscope itemtype="http://schema.org/Comment">
        <div class="comment-meta post-meta" role="complementary">
            <h2 class="comment-author">
                <?php comment_author(); ?>
                <time class="comment-meta-item" datetime="<?php comment_date('Y-m-d') ?>T<?php comment_time('H:iP') ?>"
                    itemprop="datePublished"> - <?php comment_date('jS F Y') ?></time>
            </h2>
            <?php edit_comment_link('<p class="comment-meta-item">Redigera denna recension</p>','',''); ?>
            <?php if ($comment->comment_approved == '0') : ?>
            <p class="comment-meta-item">Din recension inväntar moderering.</p>
            <?php endif; ?>
        </div>
        <div class="comment-content post-content" itemprop="text">
            <?php comment_text() ?>
            <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
        </div>

        <?php }

        // end_el – closing HTML for comment template
        function end_el(&$output, $comment, $depth = 0, $args = array() ) { ?>

    </article>

    <?php }

        // destructor – closing wrapper for the comments list
        function __destruct() { ?>

</section>

<?php }

    }
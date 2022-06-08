<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Air_Head_Sweden
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    return;
}
?>

<aside id="secondary" class="widget-area section">
    <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
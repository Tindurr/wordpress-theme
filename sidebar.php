<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Weaver
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>
<link rel="stylesheet" href="style.css">
<div class = "align-right">
<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside><!-- #secondary -->
</div>

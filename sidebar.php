<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rimk
 */

if ( ! is_active_sidebar( 'sidebar-blog' ) ) {
	return;
}

$sidebarClass = "col-lg-4 order-1 order-lg-1 sidebarclass";
$rightSidebar = "right col-lg-8 order-0 order-lg-0 home1 blog";
$leftSidebar = "col-lg-8 order-0 order-lg-0 home1 blog";
$noSidebar = "col-lg-8 order-0 order-lg-0 home1 blog";

?>

<!-- start blog sidebar area -->
<div class='<?php echo $sidebarClass; ?>'>
	<aside class="blog-sidebar">
		<?php dynamic_sidebar( 'sidebar-blog' ); ?>
	</aside>
</div>
<!-- end blog sidebar area -->


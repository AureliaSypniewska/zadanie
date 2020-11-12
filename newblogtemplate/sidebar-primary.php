<?php
/**
 * Sidebar
 */
?>

<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<aside id="secondary" class="sidebar widget-area col-md-3" role="complementary">
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>

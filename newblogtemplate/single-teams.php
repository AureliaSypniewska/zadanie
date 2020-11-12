
<?php
/**
 * The template for displaying all single posts
 */

get_header(); ?>

<?php 
$args = array( 'post_type' => 'teams', 'posts_per_page' => 10 );
$the_query = new WP_Query( $args ); 
?>

<div class="container">
  <div class="row">
  <?php get_sidebar(); ?>
  <div class="col-md-6 column">
<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<?php if ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<?php
			// Start the Loop.
			while ( have_posts() ) :
			
				the_post();
			?> <h2>	<?php the_title(); ?> </h2>
			
<?php
			the_content();

			

				

			endwhile; // End the loop.
			?>
<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->
	
</div><!-- .wrap -->
</div>

<?php get_sidebar( 'primary' ); ?>
<?php
get_footer();

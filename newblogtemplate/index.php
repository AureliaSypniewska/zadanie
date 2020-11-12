<?php get_header(); ?>
 
<div class="container">
  <div class="row">
  <?php get_sidebar(); ?>
  <div class="col-md-6 column">
    <?php if ( is_home() ){ ?>
      <h1 class="entry-title">Blog</h1>
   <?php } ?>
 
<?php while ( have_posts() ) : the_post() ?>
    <div class="entry-content">
      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
     <?php if ( is_home() ){ ?>
 
<div class="imgpost four columns"><?php the_post_thumbnail(); ?></div>
<div class="content col-md-12">
<div class="title"><h3 class="entry-title"> <?php echo get_the_date( 'Y-m-d' ); ?> | <?php the_title(); ?></h3></div>
<?php the_content( __( 'Continue reading <span class="meta-nav">&amp;raquo;</span>', 'your-theme' ) ); ?></div>
 
<?php } else{ ?>
 
<h1 class="entry-title"><?php the_title(); ?></h1>
<?php the_content( __( 'Continue reading <span class="meta-nav">&amp;raquo;</span>', 'your-theme' ) ); ?>
<?php } ?>
<div class="clear"></div>
 
<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'your-theme' ) . '&amp;after=</div>') ?>
</div><!-- .entry-content -->
 
 
<div class="clear"></div>
</article>
<?php endwhile; ?>
</div>

<?php get_sidebar( 'primary' ); ?>
</div>
</div>
 
<?php get_footer(); ?>
<!DOCTYPE html>
<!--[if IE 7]>
  <html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
  <html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
  <html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>">
   <meta name="viewport" content="width=device-width">
     <title><?php wp_title( '|', true, 'right' ); ?></title>
   <link rel="profile" href="http://gmpg.org/xfn/11">
   <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script> 
   $(document).ready(function(){
     $("#flip").click(function(){
       $("#panel").slideToggle("slow");
     });
   });
  </script>
</head>
<body <?php body_class(); ?>>
<header id="top" role="banner" class="top">
<div class="container">
  <div class="row">
   
    <div id="flip">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
	</div>
   </div>
   <div class="col-md-9"></div>
   <div class="col-md-12">
   <hgroup>
				<h3 id="site-title">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<?php bloginfo( 'name' ); ?></a> </h3>
				<p><?php bloginfo( 'description' ); ?></p>
    </hgroup>
    <nav class="nav-collapse navbar" id="panel">
      <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'navbar-list', 'menu_id' => 'primary-menu' ) ); ?>
    </nav>
   </div>
   </div>
  </div>
</header>
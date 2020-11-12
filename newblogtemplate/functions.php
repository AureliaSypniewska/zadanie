<?php
add_action( 'wp_enqueue_scripts', 'enqueue_and_register_my_scripts' );
function enqueue_and_register_my_scripts()
{
//register scripts for our theme
wp_register_script('jquery-min', get_stylesheet_directory_uri() . '/js/jquery.min.js');
wp_register_script('run_prettify', get_stylesheet_directory_uri() . '/js/run_prettify.js' );
wp_enqueue_script( 'site', get_stylesheet_directory_uri() . '/js/site.js' );
 
}
 
function shape_scripts() {
wp_enqueue_style( 'style', get_stylesheet_uri() );
 
}
add_action( 'wp_enqueue_scripts', 'shape_scripts' );
 
add_action( 'after_setup_theme', 'register_my_menu' );
function register_my_menu() {
	register_nav_menu( 'primary', __( 'Primary Menu', 'nazwa-szablonu' ) );
	register_nav_menu('second-menu', __('Second Menu'));
}
register_nav_menus( array(
	'primary' => __( 'Primary Navigation', 'nazwa-szablonu' ),
) );
 

 
add_theme_support( 'post-thumbnails');
function remove_more_link_scroll( $link ) {
	$link = preg_replace( '|#more-[0-9]+|', '', $link );
	return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );
add_filter( 'the_content_more_link', 'modify_read_more_link' );
function modify_read_more_link() {
	return '<div class="more"><a class="more-link" href="' . get_permalink() . '">Zobacz</a></div>';
}
 
function cats_meow($glue) {
	$current_cat = single_cat_title( '', false );
	$separator = "n";
	$cats = explode( $separator, get_the_category_list($separator) );
	foreach ( $cats as $i => $str ) {
		if ( strstr( $str, ">$current_cat<" ) ) {
		unset($cats[$i]);
		break;
		}
	}
if ( empty($cats) )
return false;
 
return trim(join( $glue, $cats ));
}
 
function newblogtemplate_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'Blog Sidebar', 'newblogtemplate' ),
			'id'            => 'sidebar-1',
			'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'newblogtemplate' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Second', 'newblogtemplate' ),
			'id'            => 'sidebar-2',
			'description'   => __( 'Add widgets here to appear in your footer.', 'newblogtemplate' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Third', 'newblogtemplate' ),
			'id'            => 'sidebar-3',
			'description'   => __( 'Add widgets here to appear in your footer.', 'newblogtemplate' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		)
	);
}
add_action( 'widgets_init', 'newblogtemplate_widgets_init' ); 




// Our custom post type function
function create_posttype() {
 
    register_post_type( 'teams',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'teams' ),
                'singular_name' => __( 'teams' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'teams'),
            'show_in_rest' => true,
 
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );


/*
* Creating a function to create our CPT
*/
 
function custom_post_type() {
 
// Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'teams', 'Post Type General Name', 'twentytwenty' ),
        'singular_name'       => _x( 'teams', 'Post Type Singular Name', 'twentytwenty' ),
        'menu_name'           => __( 'teams', 'twentytwenty' ),
        'parent_item_colon'   => __( 'Parent teams', 'twentytwenty' ),
        'all_items'           => __( 'All teams', 'twentytwenty' ),
        'view_item'           => __( 'View teams', 'twentytwenty' ),
        'add_new_item'        => __( 'Add New teams', 'twentytwenty' ),
        'add_new'             => __( 'Add New', 'twentytwenty' ),
        'edit_item'           => __( 'Edit teams', 'twentytwenty' ),
        'update_item'         => __( 'Update teams', 'twentytwenty' ),
        'search_items'        => __( 'Search teams', 'twentytwenty' ),
        'not_found'           => __( 'Not Found', 'twentytwenty' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentytwenty' ),
    );
     
// Set other options for Custom Post Type
     
    $args = array(
        'label'               => __( 'teams', 'twentytwenty' ),
        'description'         => __( 'teams news and reviews', 'twentytwenty' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'show_in_rest' => true,
 
    );
     
    // Registering your Custom Post Type
    register_post_type( 'teams', $args );
 
}
 
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
 
add_action( 'init', 'custom_post_type', 0 );
 
 
?>
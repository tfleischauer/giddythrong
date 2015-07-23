<?php

//for security, hide wp version in web pages and feeds
function remove_version_info() {
     return '';
}
add_filter('the_generator', 'remove_version_info');

// use shortcodes in widgets
add_filter( 'widget_text', 'shortcode_unautop');
add_filter( 'widget_text', 'do_shortcode');

//Register custom menus
function register_my_menus() {
  register_nav_menus(
    array( 
		  'nav-main' => __( 'Nav-Main' ),
		  'nav-footer' => __( 'Nav-Footer' )
		  )
  );
  
  add_action( 'init', 'register_my_menus' );

}

// Add custom menus to Dashboard > menus when theme is active, if you have menus registered   
if ( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
		  'nav-main' => 'Nav-Main',
		  'nav-footer' => 'Nav-Footer'
			 )
	);
}    

add_action( 'widgets_init', 'my_register_sidebars' );

function my_register_sidebars() {

	/* Register the primary sidebar. */
	register_sidebar(
		array(
			'id' => 'primary',
			'name' => __( 'Primary Widget Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	
	/* Register the breadcrumbs widget area. */
	register_sidebar(
		array(
			'id' => 'breadcrumbs',
			'name' => __( 'Breadcrumb Widget' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	
	/* Register the header widget area. */
	register_sidebar(
		array(
			'id' => 'header',
			'name' => __( 'Header Widget Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	
	/* Register the slideshow widget area. */
	register_sidebar(
		array(
			'id' => 'slideshow',
			'name' => __( 'Slideshow Widget Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="widget-title">',
			'after_title' => '</h2>'
		)
	);
	
	/* Register the CTA One Widget Sidebar. */
	register_sidebar(
		array(
			'id' => 'ctaone',
			'name' => __( 'CTA One Widget Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	
	/* Register the CTA Two Sidebar. */
	register_sidebar(
		array(
			'id' => 'ctatwo',
			'name' => __( 'CTA Two Widget Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	
	/* Register the CTA Three Sidebar. */
	register_sidebar(
		array(
			'id' => 'ctathree',
			'name' => __( 'CTA Three Widget Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	
	/* Register the CTA Four Sidebar. */
	register_sidebar(
		array(
			'id' => 'ctafour',
			'name' => __( 'CTA Four Widget Sidebar' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="widget-title">',
			'after_title' => '</h3>'
		)
	);
	
	/* Repeat register_sidebar() code for additional sidebars. */
}


// Remove rel attribute from the category list
function remove_category_list_rel($output)
{
  $output = str_replace(' rel="category tag"', '', $output);
  return $output;
}
add_filter('wp_list_categories', 'remove_category_list_rel');
add_filter('the_category', 'remove_category_list_rel');

/* to remove a single category of 'blog' (blog is category 22) */
function exclude_category($query) {
if ( $query->is_home() ) {
$query->set('cat', '-22');
}
return $query;
}
add_filter('pre_get_posts', 'exclude_category');

// to enable support for post thumbnails / featured image
add_theme_support( 'post-thumbnails' ); 

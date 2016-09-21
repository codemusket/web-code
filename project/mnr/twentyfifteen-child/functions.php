<?php


/**
 * Register our sidebars and widgetized areas.
 *
 */
 
function twentyfifteen_child_widgets_init() {

	register_sidebar( array(
		'name'          => 'Home headline 1 WHY',
		'id'            => 'home_headline_why',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => 'Home headline 2 DISCOVER',
		'id'            => 'home_headline_discover',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	register_sidebar( array(
		'name'          => 'Home trailer, subtitle',
		'id'            => 'home_trailer_subtitle',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

		register_sidebar( array(
		'name'          => 'Home trailer, video: Please consult',
		'id'            => 'home_trailer_code',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => 'Consulting trailer, video: Please consult',
		'id'            => 'consulting_trailer_code',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => 'Institute trailer, video: Please consult',
		'id'            => 'institute_trailer_code',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	register_sidebar( array(
		'name'          => 'Projects trailer, video: Please consult',
		'id'            => 'projects_trailer_code',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
		
	register_sidebar( array(
		'name'          => 'Home headline 3 EXPLORE',
		'id'            => 'home_headline_explore',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	
	register_sidebar( array(
		'name'          => 'Home Rollover Institute',
		'id'            => 'home_rollover_institute',
		'before_widget' => "<p style='margin-bottom:1em; '>",
		'after_widget'  => '</p>',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
	) );
	
	register_sidebar( array(
		'name'          => 'Home Rollover Consulting',
		'id'            => 'home_rollover_consulting',
		'before_widget' => '<p style="margin-bottom:1em; ">',
		'after_widget'  => '</p>',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
	) );
	
	register_sidebar( array(
		'name'          => 'Home Rollover Projects',
		'id'            => 'home_rollover_projects',
		'before_widget' => '<p style="margin-bottom:1em; ">',
		'after_widget'  => '</p>',
		'before_title'  => '<h6>',
		'after_title'   => '</h6>',
	) );

	
	register_sidebar( array(
		'name'          => 'Home headline 3 CONTACT',
		'id'            => 'home_headline_contact',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
	/*
	register_sidebar( array(
		'name'          => 'Home contact form area',
		'id'            => 'home_contact_form',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );*/
	
	

	register_sidebar( array(
		'name'          => 'Learn-more hero',
		'id'            => 'home_headline_1',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => 'Learn-more email-cta',
		'id'            => 'learn-more-email-cta',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="rounded">',
		'after_title'   => '</h2>',
	) );



	register_sidebar( array(
		'name'          => 'Home Info Bubble 1',
		'id'            => 'home-bubble-1',
		'before_widget' => '<div class="info-bubble-sidebar" id="info-bubble-sidebar-1">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="info-bubble-sidebar-title">',
		'after_title'   => '</div>'
	) );
	
	register_sidebar( array(
		'name'          => 'Home Info Bubble 2',
		'id'            => 'home-bubble-2',
		'before_widget' => '<div class="info-bubble-sidebar" id="info-bubble-sidebar-2">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="info-bubble-sidebar-title">',
		'after_title'   => '</div>'
	) );
	
	register_sidebar( array(
		'name'          => 'Home Info Bubble 3',
		'id'            => 'home-bubble-3',
		'before_widget' => '<div class="info-bubble-sidebar" id="info-bubble-sidebar-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="info-bubble-sidebar-title">',
		'after_title'   => '</div>'
	) );
	
	register_sidebar( array(
		'name'          => 'Home Info Bubble 4',
		'id'            => 'home-bubble-4',
		'before_widget' => '<div class="info-bubble-sidebar" id="info-bubble-sidebar-4">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="info-bubble-sidebar-title">',
		'after_title'   => '</div>'
	) );
	
	register_sidebar( array(
		'name'          => 'Home Info Bubble 5',
		'id'            => 'home-bubble-5',
		'before_widget' => '<div class="info-bubble-sidebar" id="info-bubble-sidebar-5">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="info-bubble-sidebar-title">',
		'after_title'   => '</div>'
	) );
	
	
	
	
	register_sidebar( array(
		'name'          => 'Consulting Info Bubble 1',
		'id'            => 'consulting-bubble-1',
		'before_widget' => '<div class="info-bubble-sidebar" id="info-bubble-sidebar-1">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="info-bubble-sidebar-title">',
		'after_title'   => '</div>'
	) );
	
	register_sidebar( array(
		'name'          => 'Consulting Info Bubble 2',
		'id'            => 'consulting-bubble-2',
		'before_widget' => '<div class="info-bubble-sidebar" id="info-bubble-sidebar-2">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="info-bubble-sidebar-title">',
		'after_title'   => '</div>'
	) );
	
	register_sidebar( array(
		'name'          => 'Consulting Info Bubble 3',
		'id'            => 'consulting-bubble-3',
		'before_widget' => '<div class="info-bubble-sidebar" id="info-bubble-sidebar-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="info-bubble-sidebar-title">',
		'after_title'   => '</div>'
	) );
	
	register_sidebar( array(
		'name'          => 'Consulting Info Bubble 4',
		'id'            => 'consulting-bubble-4',
		'before_widget' => '<div class="info-bubble-sidebar" id="info-bubble-sidebar-4">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="info-bubble-sidebar-title">',
		'after_title'   => '</div>'
	) );
	
	register_sidebar( array(
		'name'          => 'Consulting Info Bubble 5',
		'id'            => 'consulting-bubble-5',
		'before_widget' => '<div class="info-bubble-sidebar" id="info-bubble-sidebar-5">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="info-bubble-sidebar-title">',
		'after_title'   => '</div>'
	) );
	
	register_sidebar( array(
		'name'          => 'Consulting Info Bubble 6',
		'id'            => 'consulting-bubble-6',
		'before_widget' => '<div class="info-bubble-sidebar" id="info-bubble-sidebar-6">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="info-bubble-sidebar-title">',
		'after_title'   => '</div>'
	) );
	
	
	
	register_sidebar( array(
		'name'          => 'Institute Info Bubble 1',
		'id'            => 'institute-bubble-1',
		'before_widget' => '<div class="info-bubble-sidebar" id="info-bubble-sidebar-1">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="info-bubble-sidebar-title">',
		'after_title'   => '</div>'
	) );
	
	register_sidebar( array(
		'name'          => 'Institute Info Bubble 2',
		'id'            => 'institute-bubble-2',
		'before_widget' => '<div class="info-bubble-sidebar" id="info-bubble-sidebar-2">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="info-bubble-sidebar-title">',
		'after_title'   => '</div>'
	) );
	
	register_sidebar( array(
		'name'          => 'Institute Info Bubble 3',
		'id'            => 'institute-bubble-3',
		'before_widget' => '<div class="info-bubble-sidebar" id="info-bubble-sidebar-3">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="info-bubble-sidebar-title">',
		'after_title'   => '</div>'
	) );
	
	register_sidebar( array(
		'name'          => 'Donation Link',
		'id'            => 'donation-link',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => ''
	) );
	



}
add_action( 'widgets_init', 'twentyfifteen_child_widgets_init' );


function twentyfifteen_child_register_menu() {
	register_nav_menu('nav-menu-home-top', __('Home Top'));
	register_nav_menu('nav-menu-home-bottom', __('Home Bottom'));
	
	register_nav_menu('nav-menu-learn-more-top', __('Learn more Top'));	
	register_nav_menu('nav-menu-learn-more-bottom', __('Learn more Bottom'));	
	
	register_nav_menu('nav-menu-consulting-top', __('Consulting Top'));
	register_nav_menu('nav-menu-institute-top', __('Institute Top'));
	register_nav_menu('nav-menu-projects-top', __('Projects Top'));

	
	
	register_nav_menu('nav-menu-sites-top', __('Sites Top'));
	register_nav_menu('nav-menu-sites-bottom', __('Sites Bottom'));
	

	
}

add_action( 'init', 'twentyfifteen_child_register_menu');

remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'start_post_rel_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'adjacent_posts_rel_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'feed_links' );
remove_action( 'wp_head', 'parent_post_rel_link');



/**
* Recent Comments Style Removal
*/

function my_remove_recent_comments_style() {
	add_filter( 'show_recent_comments_widget_style', '__return_false' );
}
add_action( 'widgets_init', 'my_remove_recent_comments_style' );


/*
function wpt_register_js() {
    wp_register_script('jquery.bootstrap.min', get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery');
    wp_enqueue_script('jquery.bootstrap.min');
}
add_action( 'init', 'wpt_register_js' );
function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap.min' );
}
add_action( 'wp_enqueue_scripts', 'wpt_register_css' );
*/

/**
 * Dequeue the stock twentyfifteen script (messes with my nav walker)
 *
 * Hooked to the wp_print_scripts action, with a late priority (100),
 * so that it is after the script was enqueued.
 */
function wpdocs_dequeue_script() {
   wp_dequeue_script( 'twentyfifteen-script' );
}
add_action( 'wp_print_scripts', 'wpdocs_dequeue_script', 100 );

require_once('wp_bootstrap_navwalker.php');


function my_theme_add_editor_styles() {
	  add_editor_style( 'css/bootstrap.min.css' );
    add_editor_style( 'css/main.css' );
    add_editor_style( 'css/style_custom.css' );
}
add_action( 'admin_init', 'my_theme_add_editor_styles' );

function my_wp_footer() {
	

	$footer = '<link rel="stylesheet" type="text/css" property="stylesheet" 
						 href="http://missioneer.com/wp-content/themes/twentyfifteen-child/css/bigware-responsive-text-bootstrap.css">';
/*	$footer .= '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>'; */
	$footer .= '<script src="http://missioneer.com/wp-content/themes/twentyfifteen-child/js/unelastic-master/unelastic.js"></script>';
	$footer .= '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>';
	$footer .= '<script src="http://missioneer.com/wp-content/themes/twentyfifteen-child/js/main.js"></script>';
	echo $footer;
}
add_action( 'wp_footer', 'my_wp_footer' );

function dequeue_my_css() {
  wp_dequeue_style('twentyfifteen-style');
  wp_deregister_style('twentyfifteen-style');

  wp_dequeue_style('genericons');
  wp_deregister_style('genericons');

  wp_dequeue_style('twentyfifteen-fonts');
  wp_deregister_style('twentyfifteen-fonts');

}
add_action('wp_enqueue_scripts','dequeue_my_css', 20);



function wpjd_load_scripts() {

	wp_register_script( 'jQuery', "https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" );
	wp_enqueue_script( 'jQuery' );
	
}

//add_action( 'wp_enqueue_scripts', 'wpjd_load_scripts' );

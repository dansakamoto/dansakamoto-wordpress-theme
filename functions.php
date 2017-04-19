<?php 

//
// CUSTOM POST TYPE DEFINITIONS
//
///////////////

add_action('init', 'register_custom_post_types');
function register_custom_post_types() {

	// Custom Post Type: Work
	register_post_type('work', array(
      		'labels' => array(
          		'name' => __('Work'),
          		'menu_name' => __('Work'),
          		'singular_name' => __('Work'),
          		'add_new_item' => __('Add New Work'),
          		'edit_item' => __('Edit Work'),
      		),
      		'description' => 'Work',
      		'supports' => array('title', 'editor', 'thumbnail', 'custom-fields', 'post-formats'),
      		'public' => true,
      		'menu_position' => 5,
	));

}

add_theme_support( 'post-thumbnails', array('work') ); 


//
// WIDGET AREA DEFINITIONS
//
///////////////

add_action( 'init', 'register_widgets' );
function register_widgets() {

	// Widget: Newsletter Subscribe
	register_sidebar(array(
		'name' => __( 'Newsletter Subscribe'),
		'id' => 'newsletter-subscribe',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	));
}


//
// SHORTCODE DEFINITIONS
//
///////////////

add_shortcode( 'zipDownloadEventTrack', 'zipDLEventTrackScript' );
function zipDLEventTrackScript( $atts ) {
	return "onClick=\"_gaq.push(['_trackEvent', 'Downloads', 'zip', 'Magnetic EP']);\"";
}

?>
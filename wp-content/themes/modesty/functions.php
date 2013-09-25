<?php

/* Enable theme translation and more*/

add_action('after_setup_theme', 'modesty_setup');
function modesty_setup(){
	load_theme_textdomain( 'modesty', get_template_directory() . '/languages' );

	$modesty_background = array('default-color' => 'FFFFFF');

	add_theme_support( 'custom-background', $modesty_background );	

	add_theme_support( 'menus','modesty');

	add_theme_support( 'automatic-feed-links');

	add_editor_style();

	register_nav_menus(array('main_menu'=> __('Main Menu','modesty')));
	
}

add_action( 'widgets_init', 'modesty_widgets_init' );

function modesty_widgets_init() {
register_sidebar( array (
'name' => __('Sidebar Widget Area','modesty'),
'id' => 'primary-widget-area',
'before_widget' => '<div id="%1$s" class="box"><div class="scroll">',
'after_widget' => "</div></div>",
'before_title' => '<h3 class="widget-title">',
'after_title' => '</h3>',
) );
}

if ( ! isset( $content_width ) ) $content_width = 960;

function modesty_style_in_head(){
	wp_enqueue_style('style',get_stylesheet_uri());
	if ( is_singular() ) wp_enqueue_script( "comment-reply" );	
}

add_action( 'wp_enqueue_scripts', 'modesty_style_in_head' );

/*Show the date and time as title if there isn't any*/

function modesty_date_as_title(){
	if(!get_the_title()){
		the_time('j. F, Y  H:i');
	} else {
		the_title();
	}
}

function modesty_are_there_pages(){
	global $modesty_numpages;
	if ( is_singular() && $modesty_numpages > 1 ) {
    		wp_link_pages();
	}
}

add_filter('wp_title','modesty_title');

function modesty_title($title){
	$title .= get_bloginfo( 'name' ) ;
	return $title;
}

/*add_action('wp_head','modesty_meta');

function modesty_meta(){
	echo '<meta charset="'. get_bloginfo( 'charset' ).'" />';	
}*/

?>
<?php
add_theme_support( 'post-thumbnails' );
add_action( 'wp_enqueue_scripts', 'add_scripts_and_styles' );
add_action( 'after_setup_theme', 'add_features' );
add_action( 'after_setup_theme', 'add_menu' );
function add_scripts_and_styles() {
	if(is_page_template( 'templates/portfolio.php' ) || is_single()) {
		wp_enqueue_style( 'baguetteBox', get_template_directory_uri() . '/assets/css/baguetteBox.min.css' );
		wp_enqueue_script( 'baguetteBox', get_template_directory_uri() . '/assets/js/baguetteBox.min.js', null, null, true );}
if(is_category('diiplom')) {
	wp_enqueue_script( 'mixitup', get_template_directory_uri() . '/assets/js/mixitup.min.js', null, null, true );
}		
	
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}
function add_features() {
	add_theme_support( 'custom-logo', [
	'height'      => 50,
	'width'       => 100,
	'flex-width'  => false,
	'flex-height' => false,
	'header-text' => '',
	'unlink-homepage-logo' => false, // WP 5.5
] );
}
function add_menu() {
	register_nav_menu('top', 'Главное меню сайта');
	register_nav_menu('bottom', 'Политика кофидециальности' );
}
add_filter('navigation_markup_template', 'my_navigation_template', 10,2 );
function my_navigation_template( $template, $class ){
	return '
	<nav class="navigation %1$s" role="navigation">
	<div class="nav-links">%3$s</div>
	</nav>
	';
}
?>
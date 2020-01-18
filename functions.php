<?php

	// Menu Support
	add_action('init', 'wpj_register_menu');
	function wpj_register_menu() {
		if (function_exists('register_nav_menu')) {
			register_nav_menu( 'wpj-main-menu', __( 'Main Menu', 'brightpage' ) );
		}
	}
	function wpj_default_menu() {
		echo '<ul class="nav">';
		if ('page' != get_option('show_on_front')) {
			echo '<li><a href="'. home_url() . '/">Home</a></li>';
		}
		wp_list_pages('title_li=');
		echo '</ul>';
	}


	// Including ACF Pro to Theme as a core
	define( 'MY_ACF_PATH', get_stylesheet_directory() . '/inc/acf/' );
	define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/inc/acf/' );
	include_once( MY_ACF_PATH . 'acf.php' );
	add_filter('acf/settings/url', 'my_acf_settings_url');
	function my_acf_settings_url( $url ) {
	    return MY_ACF_URL;
	}

	// Gutenberg Block support
	$blocks = array_slice(scandir(__DIR__ . '/gutenberg/blocks'),2);
	foreach( $blocks as $block ) {
	    include('gutenberg/blocks/' . $block . '/ACF.php');
	}

	# Create wickandmortar Block Category

	function hitech_block_category( $categories, $post ) {
		return array_merge(
			$categories,
			array(
				array(
					'slug' => 'hitech-blocks',
					'title' => __( 'Hitech Dental Blocks', 'hitech-blocks' ),
				),
			)
		);
	}
	add_filter( 'block_categories', 'hitech_block_category', 10, 2);	
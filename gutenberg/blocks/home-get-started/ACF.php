<?php

# Builds this block only "Home Hero"

add_action('acf/init', 'acf_build_block_home_get_started');

function acf_build_block_home_get_started() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
        acf_register_block(array(
			'name'				=> 'home-get-started',
			'title'				=> __('Home Get Started'),
			'description'		=> __('Home Get Started block'),
			'render_callback'	=> 'acf_block_home_get_started_render_callback',
			'category'			=> 'hitech-blocks',
			'icon'				=> 'admin-plugins',
		));
        
	}
}


function acf_block_home_get_started_render_callback( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	if( file_exists( get_theme_file_path("/gutenberg/blocks/{$slug}/block.php") ) ) {
		include( get_theme_file_path("/gutenberg/blocks/{$slug}/block.php") );
	}
}



# Register Field Group

function hitech_home_get_started_acf_field_groups() {

	acf_add_local_field_group(array(
		'key' => 'home_get_started_group',
		'title' => 'Home Branding',
		'fields' => array(

			array(
				'key' => 'hitech_home_get_started_title',
				'label' => 'Get Started Title',
				'name' => 'hitech_home_get_started_title',
				'type' => 'text',
				'default_value' => 'Ready to Get Started?',

			),
			array(
				'key' => 'hitech_home_get_started_subtitle',
				'label' => 'Get Started Sub Title',
				'name' => 'hitech_home_get_started_subtitle',
				'type' => 'text',
				'default_value' => 'Sending a Case to Apex is Easy!',

			),
			array(
				'key' => 'hitech_home_get_started_desc',
				'label' => 'Get Started Description Text',
				'name' => 'hitech_home_get_started_desc',
				'type' => 'textarea',
				'default_value' => "Whether you're sending your first or hundredth case to Apex Dental Laboratory, the process will only take a couple minutes. We want to make working with our team as easy as possible, so we have streamlined our online case submission process. Now you can do everything online, including download Rx forms, generate and print shipping labels, and request local pick-ups. Ready to get started? The Apex team is excited to build a partnership with your practice today.",

			),

			array(
				'key' => 'home_get_started_img',
				'label' => 'Area Image',
				'name' => 'home_get_started_img',
				'type' => 'image',
				'return_format' => 'url',
			),

			array(
				'key' => 'home_get_started_link',
				'label' => 'Link Target',
				'name' => 'home_get_started_link',
				'type' => 'link',
				'return_format' => 'url',
			),


		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/home-get-started',
				),
			),
		),
	));
}

add_action('acf/init', 'hitech_home_get_started_acf_field_groups');

?>
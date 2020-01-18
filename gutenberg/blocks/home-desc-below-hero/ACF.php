<?php

# Builds this block only "Home Hero"

add_action('acf/init', 'acf_build_block_hitech_home_descriptin_below_hero');

function acf_build_block_hitech_home_descriptin_below_hero() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
        acf_register_block(array(
			'name'				=> 'home-desc-below-hero',
			'title'				=> __('Home Description Below Hero Section'),
			'description'		=> __('Description Below Home Hero Section'),
			'render_callback'	=> 'acf_block_desc_blw_hero_render_callback',
			'category'			=> 'hitech-blocks',
			'icon'				=> 'slides',
		));
        
	}
}


function acf_block_desc_blw_hero_render_callback( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	if( file_exists( get_theme_file_path("/gutenberg/blocks/{$slug}/block.php") ) ) {
		include( get_theme_file_path("/gutenberg/blocks/{$slug}/block.php") );
	}
}



# Register Field Group

function hitech_desc_blw_hero_acf_field_groups() {

	acf_add_local_field_group(array(
		'key' => 'hitech_group_home_desc_blw_hero',
		'title' => 'Home Description Below Hero Sectin',
		'fields' => array(
			array(
				'key' => 'hitech_desc_blw_hero_image',
				'label' => 'Icon Image',
				'name' => 'hitech_desc_blw_hero_image',
				'type' => 'image',
				'return_format'=> 'url'
			),

			array(
				'key' => 'desc_blw_hero_text',
				'label' => 'Description Text',
				'name' => 'desc_blw_hero_text',
				'type' => 'textarea',
				'default_value' => 'Apex Dental has been your Nebraskan resource for quality fixed and implant restorations, dedicated partnership, and patient satisfaction since 1989.',

			),

			array(
				'key' => 'desc_blw_hero_link_text',
				'label' => 'Button Text',
				'name' => 'desc_blw_hero_link_text',
				'type' => 'text',
				'default_value' => 'Learn More',

			),
			array(
				'key' => 'desc_blw_hero_link_target',
				'label' => 'Button Link Target',
				'name' => 'desc_blw_hero_link_target',
				'type' => 'link',
				'return_format' => 'url',

			),

		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/home-desc-below-hero',
				),
			),
		),
	));
}

add_action('acf/init', 'hitech_desc_blw_hero_acf_field_groups');

?>
<?php

# Builds this block only "Home Hero"

add_action('acf/init', 'acf_build_block_hitech_home_hero');

function acf_build_block_hitech_home_hero() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
        acf_register_block(array(
			'name'				=> 'home-hero',
			'title'				=> __('Home Hero'),
			'description'		=> __('Home hero block'),
			'render_callback'	=> 'acf_block_home_hero_render_callback',
			'category'			=> 'hitech-blocks',
			'icon'				=> 'slides',
		));
        
	}
}


function acf_block_home_hero_render_callback( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	if( file_exists( get_theme_file_path("/gutenberg/blocks/{$slug}/block.php") ) ) {
		include( get_theme_file_path("/gutenberg/blocks/{$slug}/block.php") );
	}
}



# Register Field Group

function hitech_home_hero_acf_field_groups() {

	acf_add_local_field_group(array(
		'key' => 'hitech_group_home_hero',
		'title' => 'Home Hero',
		'fields' => array(

			array(
				'key' => 'hitech_home_hero_heading',
				'label' => 'Hero Title',
				'name' => 'hitech_home_hero_heading',
				'type' => 'text',
				'default_value' => 'The Small Dental Team You Can Trust',

			),

			array(
				'key' => 'hitech_home_hero_subheading',
				'label' => 'Hero Sub Title',
				'name' => 'hitech_home_hero_subheading',
				'type' => 'text',
				'default_value' => 'Hands-On Partnership. Guaranteed Turn Around Times.',

			),


			array(
				'key' => 'hitech_home_hero_bg',
				'label' => 'Hero Area Background Image',
				'name' => 'hitech_home_hero_bg',
				'type' => 'image',
				'return_format'=> 'url'
			),

			array(

				'key' => 'hitech_home_hero_button',
				'label' => 'Hero Buttons',
				'name' => 'hitech_home_hero_button',
				'type' => 'repeater',
				'button_label' => 'Add a New Button',

				'sub_fields' => array(

					array(
						'key' => 'home_hero_button_text',
						'label' => 'Button Text',
						'name' => 'home_hero_button_text',
						'type' => 'text',
					),
					array(
						'key' => 'home_hero_button_link',
						'label' => 'Button Link Target',
						'name' => 'home_hero_button_link',
						'type' => 'link',
						'return_format' => 'url',
					)



				),
			),

		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/home-hero',
				),
			),
		),
	));
}

add_action('acf/init', 'hitech_home_hero_acf_field_groups');

?>
<?php

# Builds this block only "Home Hero"

add_action('acf/init', 'acf_build_block_home_testimonial');

function acf_build_block_home_testimonial() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
        acf_register_block(array(
			'name'				=> 'home-testimonial',
			'title'				=> __('Home Testimonial'),
			'description'		=> __('Home Testimonial block'),
			'render_callback'	=> 'acf_block_home_testimonial_render_callback',
			'category'			=> 'hitech-blocks',
			'icon'				=> 'welcome-write-blog',
		));
        
	}
}


function acf_block_home_testimonial_render_callback( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	if( file_exists( get_theme_file_path("/gutenberg/blocks/{$slug}/block.php") ) ) {
		include( get_theme_file_path("/gutenberg/blocks/{$slug}/block.php") );
	}
}



# Register Field Group

function hitech_home_testimonial_acf_field_groups() {

	acf_add_local_field_group(array(
		'key' => 'home_testimonial_group',
		'title' => 'Home Branding',
		'fields' => array(

			array(
				'key' => 'home_testimonial_img',
				'label' => 'Icon Image',
				'name' => 'home_testimonial_img',
				'type' => 'image',
				'return_format' => 'url',
			),

			array(
				'key' => 'hitech_home_testimonial_title',
				'label' => 'Testimonial Title',
				'name' => 'hitech_home_testimonial_title',
				'type' => 'text',
				'default_value' => 'Client Testimonials',

			),
			array(
				'key' => 'hitech_home_testimonial_subtitle',
				'label' => 'Testimonial Sub Title',
				'name' => 'hitech_home_testimonial_subtitle',
				'type' => 'textarea',
				'default_value' => 'See Why Apex is the Fixed and Implant Lab of Choice for Nebraskan Clinicians',

			),

			array(
				'key' => 'home_testimonials',
				'label' => 'Home Testimonials',
				'name' => 'home_testimonials',
				'type' => 'repeater',
				'button_label' => 'Add New Testimonial',
				'layout' => 'row',
				'sub_fields' => array(
					array(
						'key' => 'home_testimonial_text',
						'label' => 'Testimonial Text',
						'name' => 'home_testimonial_text',
						'type' => 'textarea',
					),
					array(
						'key' => 'home_testimonial_client',
						'label' => 'Client Name',
						'name' => 'home_testimonial_client',
						'type' => 'text',
					),

				)
			),


		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/home-testimonial',
				),
			),
		),
	));
}

add_action('acf/init', 'hitech_home_testimonial_acf_field_groups');

?>
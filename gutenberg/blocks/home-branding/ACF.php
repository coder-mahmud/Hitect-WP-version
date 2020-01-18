<?php

# Builds this block only "Home Hero"

add_action('acf/init', 'acf_build_block_home_branding');

function acf_build_block_home_branding() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
        acf_register_block(array(
			'name'				=> 'home-branding',
			'title'				=> __('Home Branding'),
			'description'		=> __('Home Branding block'),
			'render_callback'	=> 'acf_block_home_branding_render_callback',
			'category'			=> 'hitech-blocks',
			'icon'				=> 'visibility',
		));
        
	}
}


function acf_block_home_branding_render_callback( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	if( file_exists( get_theme_file_path("/gutenberg/blocks/{$slug}/block.php") ) ) {
		include( get_theme_file_path("/gutenberg/blocks/{$slug}/block.php") );
	}
}



# Register Field Group

function hitech_home_branding_acf_field_groups() {

	acf_add_local_field_group(array(
		'key' => 'home_branding_group',
		'title' => 'Home Branding',
		'fields' => array(

			array(
				'key' => 'home_branding_img',
				'label' => 'Icon Image',
				'name' => 'home_branding_img',
				'type' => 'image',
				'return_format' => 'url',
			),
			array(
				'key' => 'hitech_home_branding_title',
				'label' => 'Branding Title',
				'name' => 'hitech_home_branding_title',
				'type' => 'textarea',
				'default_value' => 'The Family-Owned, Nebraska-Based Dental Laboratory that Keeps Your Best Interests in Mind.',

			),
			array(
				'key' => 'hitech_home_branding_text',
				'label' => 'Branding Text',
				'name' => 'hitech_home_branding_text',
				'type' => 'textarea',
				'default_value' => 'HiTech Dental Laboratory is proudly located in the thriving city of Omaha, Nebraska. Our team of dental experts fully embody the spirit of hospitality that is quintessential to the Good Life State. Hard work and craftsmanship are key to our laboratory’s success, because we believe in only crafting the absolute best restorations possible. We are a fixed and implant lab that provides the latest innovations and industry standards to fit both your expectations and your patient’s needs. In order to provide consistently superior restorations and informed services, we have made numerous investments in our state-of-the-art technology. We are equipped with the latest additive and subtractive technologies, as well as scanners and design software.',

			),

			array(
				'key' => 'home_branding_link',
				'label' => 'Area Link',
				'name' => 'home_branding_link',
				'type' => 'link',
				'return_format' => 'url',
			),

		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/home-branding',
				),
			),
		),
	));
}

add_action('acf/init', 'hitech_home_branding_acf_field_groups');

?>
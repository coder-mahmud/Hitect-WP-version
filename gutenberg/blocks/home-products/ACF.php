<?php

# Builds this block only "Home Hero"

add_action('acf/init', 'acf_build_block_home_product');

function acf_build_block_home_product() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
        acf_register_block(array(
			'name'				=> 'home-products',
			'title'				=> __('Home Products'),
			'description'		=> __('Home Products block'),
			'render_callback'	=> 'acf_block_home_product_render_callback',
			'category'			=> 'hitech-blocks',
			'icon'				=> 'feedback',
		));
        
	}
}


function acf_block_home_product_render_callback( $block ) {
	
	$slug = str_replace('acf/', '', $block['name']);
	
	if( file_exists( get_theme_file_path("/gutenberg/blocks/{$slug}/block.php") ) ) {
		include( get_theme_file_path("/gutenberg/blocks/{$slug}/block.php") );
	}
}



# Register Field Group

function hitech_home_product_acf_field_groups() {

	acf_add_local_field_group(array(
		'key' => 'home_products_group',
		'title' => 'Home Products',
		'fields' => array(

			array(
				'key' => 'hitech_home_products_title',
				'label' => 'Products Title',
				'name' => 'hitech_home_products_title',
				'type' => 'textarea',
				'default_value' => 'Exceptional Product and Dedicated Service Combined.',

			),



			array(

				'key' => 'hitech_home_products',
				'label' => 'Products',
				'name' => 'hitech_home_products',
				'type' => 'repeater',
				'button_label' => 'Add a New Product',
				'layout' => 'row',

				'sub_fields' => array(

					array(
						'key' => 'home_product_title',
						'label' => 'Product Title',
						'name' => 'home_product_title',
						'type' => 'text',
					),
					array(
						'key' => 'home_product_desc',
						'label' => 'Product Description',
						'name' => 'home_product_desc',
						'type' => 'textarea',
					),


					array(
						'key' => 'home_product_img',
						'label' => 'Product Image',
						'name' => 'home_product_img',
						'type' => 'image',
						'return_format' => 'url',
					),
					array(
						'key' => 'home_product_link',
						'label' => 'Product Link',
						'name' => 'home_product_link',
						'type' => 'link',
						'return_format' => 'url',
					),



				),
			),

		),
		'location' => array(
			array(
				array(
					'param' => 'block',
					'operator' => '==',
					'value' => 'acf/home-products',
				),
			),
		),
	));
}

add_action('acf/init', 'hitech_home_product_acf_field_groups');

?>
<?php
	add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
	function theme_enqueue_styles() {
	    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
		wp_enqueue_script( 'child-script', get_stylesheet_directory_uri() . '/js/child.js', array('jquery'), '1.0.0', true );
	}

	add_action( 'admin_menu', 'et_settings_fix' );
	function et_settings_fix() {
		wp_enqueue_script( 'child-script', get_stylesheet_directory_uri() . '/js/et-settings-fix.js', array('jquery'), '1.0.0', true );
	}
		
	add_action( 'admin_print_styles', 'add_admin_css' );
	function add_admin_css() {
		wp_enqueue_script( 'child-script', get_stylesheet_directory_uri() . '/js/et-settings-fix.js', array('jquery'), '1.0.0', true );
		wp_enqueue_style( 'admin-style', get_stylesheet_directory_uri() . '/admin.css');
	}

	function add_custom_types_to_tax( $query ) {
		if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {

			// Get all your post types
			$post_types = get_post_types();

			$query->set( 'post_type', $post_types );
			return $query;
		}
	}
	add_filter( 'pre_get_posts', 'add_custom_types_to_tax' );


	/* Remove billing details from Woocommerce */

	add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );
 
	function custom_override_checkout_fields( $fields ) {
	    unset($fields['billing']['billing_first_name']);
	    unset($fields['billing']['billing_last_name']);
	    unset($fields['billing']['billing_company']);
	    unset($fields['billing']['billing_address_1']);
	    unset($fields['billing']['billing_address_2']);
	    unset($fields['billing']['billing_city']);
	    unset($fields['billing']['billing_postcode']);
	    unset($fields['billing']['billing_country']);
	    unset($fields['billing']['billing_state']);
	    unset($fields['billing']['billing_phone']);
	    unset($fields['order']['order_comments']);
	    unset($fields['billing']['billing_address_2']);
	    unset($fields['billing']['billing_postcode']);
	    unset($fields['billing']['billing_company']);
	    unset($fields['billing']['billing_last_name']);
	    unset($fields['billing']['billing_email']);
	    unset($fields['billing']['billing_city']);
	    return $fields;
	}



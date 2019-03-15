<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

 // Register Custom Post Type
function custom_post_testimonials_() {

	$labels = array(
		'name'                  => _x( 'Post testimonials', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Post testimonial', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Post testimonial', 'text_domain' ),
		'name_admin_bar'        => __( 'Post testimonial', 'text_domain' ),
		'archives'              => __( 'Testimonial Archives', 'text_domain' ),
		'attributes'            => __( 'Testimonial Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Testimonial:', 'text_domain' ),
		'all_items'             => __( 'All Testimonial', 'text_domain' ),
		'add_new_item'          => __( 'Add New Testimonial', 'text_domain' ),
		'add_new'               => __( 'Add Testimonial', 'text_domain' ),
		'new_item'              => __( 'New Testimonial', 'text_domain' ),
		'edit_item'             => __( 'Edit Testimonial', 'text_domain' ),
		'update_item'           => __( 'Update Testimonial', 'text_domain' ),
		'view_item'             => __( 'View Testimonial', 'text_domain' ),
		'view_items'            => __( 'View Testimonial', 'text_domain' ),
		'search_items'          => __( 'Search Testimonial', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into testimonial', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this testimonial', 'text_domain' ),
		'items_list'            => __( 'Testimonials list', 'text_domain' ),
		'items_list_navigation' => __( 'Testimonials list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter testimonials list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Post testimonial', 'text_domain' ),
		'description'           => __( 'Post testimonial Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'post_testimonial', $args );

}
add_action( 'init', 'custom_post_testimonials_', 0 );

// Register Custom Post Type
function custom_post_faq() {

	$labels = array(
		'name'                  => _x( 'Post faqs', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Post faq', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Post faq', 'text_domain' ),
		'name_admin_bar'        => __( 'Post faq', 'text_domain' ),
		'archives'              => __( 'faq Archives', 'text_domain' ),
		'attributes'            => __( 'faq Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent faq:', 'text_domain' ),
		'all_items'             => __( 'All faqs', 'text_domain' ),
		'add_new_item'          => __( 'Add New faq', 'text_domain' ),
		'add_new'               => __( 'faq New', 'text_domain' ),
		'new_item'              => __( 'New faq', 'text_domain' ),
		'edit_item'             => __( 'Edit faq', 'text_domain' ),
		'update_item'           => __( 'Update faq', 'text_domain' ),
		'view_item'             => __( 'View faq', 'text_domain' ),
		'view_items'            => __( 'View faqs', 'text_domain' ),
		'search_items'          => __( 'Search faq', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into faq', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this faq', 'text_domain' ),
		'items_list'            => __( 'faqs list', 'text_domain' ),
		'items_list_navigation' => __( 'faqs list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter faqs list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Post faq', 'text_domain' ),
		'description'           => __( 'Post fat Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor' ),
		'taxonomies'            => array( 'category', 'faq_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'post_faq', $args );

}
add_action( 'init', 'custom_post_faq', 0 );

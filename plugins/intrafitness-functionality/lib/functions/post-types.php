<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Register Custom Post Type
function posts_intra_posts_() {

	$labels = array(
		'name'                  => _x( 'Post intra-post', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Post intra-post', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Post intra-post', 'text_domain' ),
		'name_admin_bar'        => __( 'Post intra-post', 'text_domain' ),
		'archives'              => __( 'intra-post Archives', 'text_domain' ),
		'attributes'            => __( 'intra-post Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent intra-post:', 'text_domain' ),
		'all_items'             => __( 'All intra-post', 'text_domain' ),
		'add_new_item'          => __( 'Add New post-intra', 'text_domain' ),
		'add_new'               => __( 'Add intra-post', 'text_domain' ),
		'new_item'              => __( 'New intra-post', 'text_domain' ),
		'edit_item'             => __( 'Edit intra-post', 'text_domain' ),
		'update_item'           => __( 'Update intra-post', 'text_domain' ),
		'view_item'             => __( 'View intra-post', 'text_domain' ),
		'view_items'            => __( 'View intra-post', 'text_domain' ),
		'search_items'          => __( 'Search intra-post', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into intra-post', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this post-intra', 'text_domain' ),
		'items_list'            => __( 'intra-post list', 'text_domain' ),
		'items_list_navigation' => __( 'intra-post list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter intra-post list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Post intra-post', 'text_domain' ),
		'description'           => __( 'Post intra-post Description', 'text_domain' ),
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
		'show_in_rest'          => true,
	);
	register_post_type( 'post_intra-post', $args );

}
add_action( 'init', 'posts_intra_posts_', 0 );

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

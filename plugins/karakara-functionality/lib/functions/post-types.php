<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
function events_post_type() {

	$labels = array(
		'name'                  => _x( 'Event Post Types', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Event Post Type', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Post Event', 'text_domain' ),
		'name_admin_bar'        => __( 'Post Event', 'text_domain' ),
		'archives'              => __( 'Event Archives', 'text_domain' ),
		'attributes'            => __( 'Event Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Event:', 'text_domain' ),
		'all_items'             => __( 'All Events', 'text_domain' ),
		'add_new_item'          => __( 'Add New Event', 'text_domain' ),
		'add_new'               => __( 'Add New Event', 'text_domain' ),
		'new_item'              => __( 'New Event', 'text_domain' ),
		'edit_item'             => __( 'Edit Event', 'text_domain' ),
		'update_item'           => __( 'Update Event', 'text_domain' ),
		'view_item'             => __( 'View Event', 'text_domain' ),
		'view_items'            => __( 'View Events', 'text_domain' ),
		'search_items'          => __( 'Search Events', 'text_domain' ),
		'not_found'             => __( 'Event Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Event Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into Event', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Event', 'text_domain' ),
		'items_list'            => __( 'Events list', 'text_domain' ),
		'items_list_navigation' => __( 'Events list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter Events list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Event Post Type', 'text_domain' ),
		'description'           => __( 'adds a custom post-type for events', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
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
	register_post_type( 'events_post_type', $args );

}

// Register Custom Post Type
function services_post_type() {

	$labels = array(
		'name'                  => _x( 'services Post Types', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'service Post Type', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Post service', 'text_domain' ),
		'name_admin_bar'        => __( 'Post service', 'text_domain' ),
		'archives'              => __( 'service Archives', 'text_domain' ),
		'attributes'            => __( 'service Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent service:', 'text_domain' ),
		'all_items'             => __( 'All services', 'text_domain' ),
		'add_new_item'          => __( 'Add New service', 'text_domain' ),
		'add_new'               => __( 'Add New service', 'text_domain' ),
		'new_item'              => __( 'New service', 'text_domain' ),
		'edit_item'             => __( 'Edit service', 'text_domain' ),
		'update_item'           => __( 'Update service', 'text_domain' ),
		'view_item'             => __( 'View service', 'text_domain' ),
		'view_items'            => __( 'View services', 'text_domain' ),
		'search_items'          => __( 'Search services', 'text_domain' ),
		'not_found'             => __( 'service Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'service Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into service', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this service', 'text_domain' ),
		'items_list'            => __( 'service list', 'text_domain' ),
		'items_list_navigation' => __( 'services list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter service list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'service Post Type', 'text_domain' ),
		'description'           => __( 'adds a custom post-type for products and services', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
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
	register_post_type( 'services_post_type', $args );

}
add_action( 'init', 'services_post_type', 0 );
add_action( 'init', 'events_post_type', 0 );

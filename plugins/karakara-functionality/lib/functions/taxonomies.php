<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Register Custom Taxonomy
function service_taxonomy() {

	$labels = array(
		'name'                       => _x( 'services', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'service', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'service', 'text_domain' ),
		'all_items'                  => __( 'All services', 'text_domain' ),
		'parent_item'                => __( 'Parent service', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent service:', 'text_domain' ),
		'new_item_name'              => __( 'New service Name', 'text_domain' ),
		'add_new_item'               => __( 'Add service Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit service', 'text_domain' ),
		'update_item'                => __( 'Update service', 'text_domain' ),
		'view_item'                  => __( 'View service', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate services with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove service', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular service', 'text_domain' ),
		'search_items'               => __( 'Search services', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No services', 'text_domain' ),
		'items_list'                 => __( 'service list', 'text_domain' ),
		'items_list_navigation'      => __( 'service list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'service', array( 'services_post_type' ), $args );

}

// Register Custom Taxonomy
function show_taxonomy() {

	$labels = array(
		'name'                       => _x( 'shows', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'show', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'shows', 'text_domain' ),
		'all_items'                  => __( 'All shows', 'text_domain' ),
		'parent_item'                => __( 'Parent show', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent show:', 'text_domain' ),
		'new_item_name'              => __( 'New show Name', 'text_domain' ),
		'add_new_item'               => __( 'Add show Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit show', 'text_domain' ),
		'update_item'                => __( 'Update show', 'text_domain' ),
		'view_item'                  => __( 'View show', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate shows with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove show', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular shows', 'text_domain' ),
		'search_items'               => __( 'Search shows', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No shows', 'text_domain' ),
		'items_list'                 => __( 'show list', 'text_domain' ),
		'items_list_navigation'      => __( 'show list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'show_in_rest'               => true,
	);
	register_taxonomy( 'show', array( 'event_post_type' ), $args );

}
add_action( 'init', 'show_taxonomy', 0 );
add_action( 'init', 'service_taxonomy', 0 );
<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
// Register Custom Taxonomy
// Register Custom Taxonomy
// Register Custom Taxonomy
function service_taxonomy() {

	$labels = array(
		'name'                       => _x( 'service Taxonomies', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'service Taxonomy', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'service Taxonomy', 'text_domain' ),
		'all_items'                  => __( 'All services', 'text_domain' ),
		'parent_item'                => __( 'Parent service', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent service:', 'text_domain' ),
		'new_item_name'              => __( 'New service Name', 'text_domain' ),
		'add_new_item'               => __( 'Add service Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit service', 'text_domain' ),
		'update_item'                => __( 'Update service', 'text_domain' ),
		'view_item'                  => __( 'View service', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate services with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or service items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular services', 'text_domain' ),
		'search_items'               => __( 'Search services', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No services', 'text_domain' ),
		'items_list'                 => __( 'services list', 'text_domain' ),
		'items_list_navigation'      => __( 'services list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'service taxonomy', array( 'services_post_type' ), $args );

}

// Register Custom Taxonomy
function show_taxonomy() {

	$labels = array(
		'name'                       => _x( 'show Taxonomies', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'show Taxonomy', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'show Taxonomy', 'text_domain' ),
		'all_items'                  => __( 'All shows', 'text_domain' ),
		'parent_item'                => __( 'Parent show', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent show:', 'text_domain' ),
		'new_item_name'              => __( 'New show Name', 'text_domain' ),
		'add_new_item'               => __( 'Add show Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit show', 'text_domain' ),
		'update_item'                => __( 'Update show', 'text_domain' ),
		'view_item'                  => __( 'View show', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate shows with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or show items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular shows', 'text_domain' ),
		'search_items'               => __( 'Search shows', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No shows', 'text_domain' ),
		'items_list'                 => __( 'shows list', 'text_domain' ),
		'items_list_navigation'      => __( 'shows list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'show taxonomy', array( 'event_post_type' ), $args );

}
add_action( 'init', 'show_taxonomy', 0 );
add_action( 'init', 'service_taxonomy', 0 );
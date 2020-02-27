<?php
/**
 * TAXONOMIES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_taxonomy
 */

// Add your custom taxonomies here...
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
		'add_new_item'               => __( 'Add New show', 'text_domain' ),
		'edit_item'                  => __( 'Edit show', 'text_domain' ),
		'update_item'                => __( 'Update show', 'text_domain' ),
		'view_item'                  => __( 'View show', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate shows with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove shows', 'text_domain' ),
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
	);
	register_taxonomy( 'shows', array( 'events_post_type' ), $args );

}

// Register Custom Taxonomy
function event_taxonomy() {

	$labels = array(
		'name'                       => _x( 'events', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'event', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'events', 'text_domain' ),
		'all_items'                  => __( 'All events', 'text_domain' ),
		'parent_item'                => __( 'Parent event', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent event:', 'text_domain' ),
		'new_item_name'              => __( 'New event Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New event', 'text_domain' ),
		'edit_item'                  => __( 'Edit event', 'text_domain' ),
		'update_item'                => __( 'Update event', 'text_domain' ),
		'view_item'                  => __( 'View event', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate events with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove events', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular events', 'text_domain' ),
		'search_items'               => __( 'Search events', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No events', 'text_domain' ),
		'items_list'                 => __( 'event list', 'text_domain' ),
		'items_list_navigation'      => __( 'event list navigation', 'text_domain' ),
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
	register_taxonomy( 'events', array( 'events_post_type' ), $args );

}

// Register Custom Taxonomy
function drum_taxonomy() {

	$labels = array(
		'name'                       => _x( 'drums', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'drum', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'drums', 'text_domain' ),
		'all_items'                  => __( 'All drums', 'text_domain' ),
		'parent_item'                => __( 'Parent drum', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent drum:', 'text_domain' ),
		'new_item_name'              => __( 'New drum Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New drum', 'text_domain' ),
		'edit_item'                  => __( 'Edit drum', 'text_domain' ),
		'update_item'                => __( 'Update drum', 'text_domain' ),
		'view_item'                  => __( 'View drum', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate drums with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove drums', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular drums', 'text_domain' ),
		'search_items'               => __( 'Search drums', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No drums', 'text_domain' ),
		'items_list'                 => __( 'drum list', 'text_domain' ),
		'items_list_navigation'      => __( 'drum list navigation', 'text_domain' ),
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
	register_taxonomy( 'drums', array( 'services_post_type' ), $args );

}

// Register Custom Taxonomy
function meditation_taxonomy() {

	$labels = array(
		'name'                       => _x( 'meditation', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'meditation', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'meditation', 'text_domain' ),
		'all_items'                  => __( 'All meditation', 'text_domain' ),
		'parent_item'                => __( 'Parent meditation', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent meditation:', 'text_domain' ),
		'new_item_name'              => __( 'New meditation Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New meditation', 'text_domain' ),
		'edit_item'                  => __( 'Edit meditation', 'text_domain' ),
		'update_item'                => __( 'Update meditation', 'text_domain' ),
		'view_item'                  => __( 'View meditation', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate meditation with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove meditation', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular meditation', 'text_domain' ),
		'search_items'               => __( 'Search meditation', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No meditation', 'text_domain' ),
		'items_list'                 => __( 'meditation list', 'text_domain' ),
		'items_list_navigation'      => __( 'meditation list navigation', 'text_domain' ),
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
	register_taxonomy( 'meditation', array( 'services_post_type' ), $args );

}

// Register Custom Taxonomy
function music_taxonomy() {

	$labels = array(
		'name'                       => _x( 'music', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'music', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'music', 'text_domain' ),
		'all_items'                  => __( 'All music', 'text_domain' ),
		'parent_item'                => __( 'Parent music', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent music:', 'text_domain' ),
		'new_item_name'              => __( 'New music Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New music', 'text_domain' ),
		'edit_item'                  => __( 'Edit music', 'text_domain' ),
		'update_item'                => __( 'Update music', 'text_domain' ),
		'view_item'                  => __( 'View music', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate music with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove music', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular music', 'text_domain' ),
		'search_items'               => __( 'Search music', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No music', 'text_domain' ),
		'items_list'                 => __( 'music list', 'text_domain' ),
		'items_list_navigation'      => __( 'music list navigation', 'text_domain' ),
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
	register_taxonomy( 'music', array( 'services_post_type' ), $args );

}

// Register Custom Taxonomy
function yoga_taxonomy() {

	$labels = array(
		'name'                       => _x( 'yoga', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'yoga', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'yoga', 'text_domain' ),
		'all_items'                  => __( 'All yoga', 'text_domain' ),
		'parent_item'                => __( 'Parent yoga', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent yoga:', 'text_domain' ),
		'new_item_name'              => __( 'New yoga Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New yoga', 'text_domain' ),
		'edit_item'                  => __( 'Edit yoga', 'text_domain' ),
		'update_item'                => __( 'Update yoga', 'text_domain' ),
		'view_item'                  => __( 'View yoga', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate yoga with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove yoga', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular yoga', 'text_domain' ),
		'search_items'               => __( 'Search yoga', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No yoga', 'text_domain' ),
		'items_list'                 => __( 'yoga list', 'text_domain' ),
		'items_list_navigation'      => __( 'yoga list navigation', 'text_domain' ),
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
	register_taxonomy( 'yoga', array( 'services_post_type' ), $args );

}

// Register Custom Taxonomy
function cook_taxonomy() {

	$labels = array(
		'name'                       => _x( 'cook', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'cook', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'cook', 'text_domain' ),
		'all_items'                  => __( 'All cook', 'text_domain' ),
		'parent_item'                => __( 'Parent cook', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent cook:', 'text_domain' ),
		'new_item_name'              => __( 'New cook Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New cook', 'text_domain' ),
		'edit_item'                  => __( 'Edit cook', 'text_domain' ),
		'update_item'                => __( 'Update cook', 'text_domain' ),
		'view_item'                  => __( 'View cook', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate cook with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove cook', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular cook', 'text_domain' ),
		'search_items'               => __( 'Search cook', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No cook', 'text_domain' ),
		'items_list'                 => __( 'cook list', 'text_domain' ),
		'items_list_navigation'      => __( 'cook list navigation', 'text_domain' ),
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
	register_taxonomy( 'cook', array( 'services_post_type' ), $args );

}
add_action( 'init', 'cook_taxonomy', 0 );
add_action( 'init', 'yoga_taxonomy', 0 );
add_action( 'init', 'music_taxonomy', 0 );
add_action( 'init', 'meditation_taxonomy', 0 );
add_action( 'init', 'drum_taxonomy', 0 );
add_action( 'init', 'event_taxonomy', 0 );
add_action( 'init', 'show_taxonomy', 0 );
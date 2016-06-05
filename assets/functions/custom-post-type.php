<?php
//Register team bios CPT
function site_team_bios() {

	$labels = array(
		'name'                  => _x( 'Team Members', 'Post Type General Name', 'infinity' ),
		'singular_name'         => _x( 'Team Member', 'Post Type Singular Name', 'infinity' ),
		'menu_name'             => __( 'Team Members', 'infinity' ),
		'name_admin_bar'        => __( 'Team Members', 'infinity' ),
		'archives'              => __( 'Team Member Archives', 'infinity' ),
		'parent_item_colon'     => __( 'Parent Team Member:', 'infinity' ),
		'all_items'             => __( 'All Team Members', 'infinity' ),
		'add_new_item'          => __( 'Add New Team Member', 'infinity' ),
		'add_new'               => __( 'Add New Team Member', 'infinity' ),
		'new_item'              => __( 'New Team Member', 'infinity' ),
		'edit_item'             => __( 'Edit Team Member', 'infinity' ),
		'update_item'           => __( 'Update Team Member', 'infinity' ),
		'view_item'             => __( 'View Team Member', 'infinity' ),
		'search_items'          => __( 'Search Team Member', 'infinity' ),
		'not_found'             => __( 'Team Member Not found', 'infinity' ),
		'not_found_in_trash'    => __( 'Team Member Not found in Trash', 'infinity' ),
		'featured_image'        => __( 'Team Member Featured Image', 'infinity' ),
		'set_featured_image'    => __( 'Set Team Member featured image', 'infinity' ),
		'remove_featured_image' => __( 'Remove Team Member featured image', 'infinity' ),
		'use_featured_image'    => __( 'Use as Team Member featured image', 'infinity' ),
		'insert_into_item'      => __( 'Insert into Team Member', 'infinity' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Team Member', 'infinity' ),
		'items_list'            => __( 'Team Member list', 'infinity' ),
		'items_list_navigation' => __( 'Team Member list navigation', 'infinity' ),
		'filter_items_list'     => __( 'Filter Team Member list', 'infinity' ),
	);

	$rewrite = array(
		'slug'                  => 'about/our-team',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);

	$args = array(
		'label'                 => __( 'Team Members', 'infinity' ),
		'description'           => __( 'Your Description here', 'infinity' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'page-attributes', ),
		'taxonomies'            => array( 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-businessman',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'rewrite'               => $rewrite,
		'capability_type'       => 'page',
	);
	register_post_type( 'our-team', $args );

}
add_action( 'init', 'site_team_bios', 0 );

// Register Custom Post Type
function open_positions() {

	$labels = array(
		'name'                  => _x( 'Jobs', 'Post Type General Name', 'infinity' ),
		'singular_name'         => _x( 'Job', 'Post Type Singular Name', 'infinity' ),
		'menu_name'             => __( 'Jobs', 'infinity' ),
		'name_admin_bar'        => __( 'Jobs', 'infinity' ),
		'archives'              => __( 'Job Archives', 'infinity' ),
		'parent_item_colon'     => __( '', 'infinity' ),
		'all_items'             => __( 'All Jobs', 'infinity' ),
		'add_new_item'          => __( 'Add New Job', 'infinity' ),
		'add_new'               => __( 'Add Job', 'infinity' ),
		'new_item'              => __( 'New Job', 'infinity' ),
		'edit_item'             => __( 'Edit Job', 'infinity' ),
		'update_item'           => __( 'Update Job', 'infinity' ),
		'view_item'             => __( 'View Job', 'infinity' ),
		'search_items'          => __( 'Search Job', 'infinity' ),
		'not_found'             => __( 'Not found', 'infinity' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'infinity' ),
		'featured_image'        => __( '', 'infinity' ),
		'set_featured_image'    => __( '', 'infinity' ),
		'remove_featured_image' => __( '', 'infinity' ),
		'use_featured_image'    => __( '', 'infinity' ),
		'insert_into_item'      => __( '', 'infinity' ),
		'uploaded_to_this_item' => __( '', 'infinity' ),
		'items_list'            => __( 'Items list', 'infinity' ),
		'items_list_navigation' => __( 'Items list navigation', 'infinity' ),
		'filter_items_list'     => __( 'Filter items list', 'infinity' ),
	);
	$args = array(
		'label'                 => __( 'Job', 'infinity' ),
		'description'           => __( 'Create and manage open job postings', 'infinity' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes', ),
		'taxonomies'            => array( 'jobs_category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-megaphone',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'open-positions', $args );

}
add_action( 'init', 'open_positions', 0 );


// Register Job Category Taxonomy

function jobs_category() {

	$labels = array(
		'name'                       => _x( 'Job Category', 'Taxonomy General Name', 'infinity' ),
		'singular_name'              => _x( 'Job Category', 'Taxonomy Singular Name', 'infinity' ),
		'menu_name'                  => __( 'Job Categories', 'infinity' ),
		'all_items'                  => __( 'All Items', 'infinity' ),
		'parent_item'                => __( 'Parent Item', 'infinity' ),
		'parent_item_colon'          => __( 'Parent Item:', 'infinity' ),
		'new_item_name'              => __( 'New Job Category', 'infinity' ),
		'add_new_item'               => __( 'Add New Job Category', 'infinity' ),
		'edit_item'                  => __( 'Edit Job Category', 'infinity' ),
		'update_item'                => __( 'Update Job Category', 'infinity' ),
		'view_item'                  => __( 'View Job Category', 'infinity' ),
		'separate_items_with_commas' => __( 'Separate job categories by comma.', 'infinity' ),
		'add_or_remove_items'        => __( 'Add or remove job category', 'infinity' ),
		'choose_from_most_used'      => __( 'Choose from the most used job categories', 'infinity' ),
		'popular_items'              => __( 'Popular Job Categories', 'infinity' ),
		'search_items'               => __( 'Search Job Categories', 'infinity' ),
		'not_found'                  => __( 'Job Category Not Found', 'infinity' ),
		'no_terms'                   => __( 'No Job Category', 'infinity' ),
		'items_list'                 => __( '', 'infinity' ),
		'items_list_navigation'      => __( '', 'infinity' ),
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
	register_taxonomy( 'jobs-category', array( 'open-positions' ), $args );

}
add_action( 'init', 'jobs_category', 0 );
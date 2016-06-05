<?php
//Register team bios CPT
function site_team_bios() {

	$labels = array(
		'name'                  => _x( 'Team Members', 'Post Type General Name', 'jointswp' ),
		'singular_name'         => _x( 'Team Member', 'Post Type Singular Name', 'jointswp' ),
		'menu_name'             => __( 'Team Members', 'jointswp' ),
		'name_admin_bar'        => __( 'Team Members', 'jointswp' ),
		'archives'              => __( 'Team Member Archives', 'jointswp' ),
		'parent_item_colon'     => __( 'Parent Team Member:', 'jointswp' ),
		'all_items'             => __( 'All Team Members', 'jointswp' ),
		'add_new_item'          => __( 'Add New Team Member', 'jointswp' ),
		'add_new'               => __( 'Add New Team Member', 'jointswp' ),
		'new_item'              => __( 'New Team Member', 'jointswp' ),
		'edit_item'             => __( 'Edit Team Member', 'jointswp' ),
		'update_item'           => __( 'Update Team Member', 'jointswp' ),
		'view_item'             => __( 'View Team Member', 'jointswp' ),
		'search_items'          => __( 'Search Team Member', 'jointswp' ),
		'not_found'             => __( 'Team Member Not found', 'jointswp' ),
		'not_found_in_trash'    => __( 'Team Member Not found in Trash', 'jointswp' ),
		'featured_image'        => __( 'Team Member Featured Image', 'jointswp' ),
		'set_featured_image'    => __( 'Set Team Member featured image', 'jointswp' ),
		'remove_featured_image' => __( 'Remove Team Member featured image', 'jointswp' ),
		'use_featured_image'    => __( 'Use as Team Member featured image', 'jointswp' ),
		'insert_into_item'      => __( 'Insert into Team Member', 'jointswp' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Team Member', 'jointswp' ),
		'items_list'            => __( 'Team Member list', 'jointswp' ),
		'items_list_navigation' => __( 'Team Member list navigation', 'jointswp' ),
		'filter_items_list'     => __( 'Filter Team Member list', 'jointswp' ),
	);

	$rewrite = array(
		'slug'                  => 'about/our-team',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);

	$args = array(
		'label'                 => __( 'Team Members', 'jointswp' ),
		'description'           => __( 'Your Description here', 'jointswp' ),
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
		'name'                  => _x( 'Jobs', 'Post Type General Name', 'jointswp' ),
		'singular_name'         => _x( 'Job', 'Post Type Singular Name', 'jointswp' ),
		'menu_name'             => __( 'Jobs', 'jointswp' ),
		'name_admin_bar'        => __( 'Jobs', 'jointswp' ),
		'archives'              => __( 'Job Archives', 'jointswp' ),
		'parent_item_colon'     => __( '', 'jointswp' ),
		'all_items'             => __( 'All Jobs', 'jointswp' ),
		'add_new_item'          => __( 'Add New Job', 'jointswp' ),
		'add_new'               => __( 'Add Job', 'jointswp' ),
		'new_item'              => __( 'New Job', 'jointswp' ),
		'edit_item'             => __( 'Edit Job', 'jointswp' ),
		'update_item'           => __( 'Update Job', 'jointswp' ),
		'view_item'             => __( 'View Job', 'jointswp' ),
		'search_items'          => __( 'Search Job', 'jointswp' ),
		'not_found'             => __( 'Not found', 'jointswp' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'jointswp' ),
		'featured_image'        => __( '', 'jointswp' ),
		'set_featured_image'    => __( '', 'jointswp' ),
		'remove_featured_image' => __( '', 'jointswp' ),
		'use_featured_image'    => __( '', 'jointswp' ),
		'insert_into_item'      => __( '', 'jointswp' ),
		'uploaded_to_this_item' => __( '', 'jointswp' ),
		'items_list'            => __( 'Items list', 'jointswp' ),
		'items_list_navigation' => __( 'Items list navigation', 'jointswp' ),
		'filter_items_list'     => __( 'Filter items list', 'jointswp' ),
	);
	$args = array(
		'label'                 => __( 'Job', 'jointswp' ),
		'description'           => __( 'Create and manage open job postings', 'jointswp' ),
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
		'name'                       => _x( 'Job Category', 'Taxonomy General Name', 'jointswp' ),
		'singular_name'              => _x( 'Job Category', 'Taxonomy Singular Name', 'jointswp' ),
		'menu_name'                  => __( 'Job Categories', 'jointswp' ),
		'all_items'                  => __( 'All Items', 'jointswp' ),
		'parent_item'                => __( 'Parent Item', 'jointswp' ),
		'parent_item_colon'          => __( 'Parent Item:', 'jointswp' ),
		'new_item_name'              => __( 'New Job Category', 'jointswp' ),
		'add_new_item'               => __( 'Add New Job Category', 'jointswp' ),
		'edit_item'                  => __( 'Edit Job Category', 'jointswp' ),
		'update_item'                => __( 'Update Job Category', 'jointswp' ),
		'view_item'                  => __( 'View Job Category', 'jointswp' ),
		'separate_items_with_commas' => __( 'Separate job categories by comma.', 'jointswp' ),
		'add_or_remove_items'        => __( 'Add or remove job category', 'jointswp' ),
		'choose_from_most_used'      => __( 'Choose from the most used job categories', 'jointswp' ),
		'popular_items'              => __( 'Popular Job Categories', 'jointswp' ),
		'search_items'               => __( 'Search Job Categories', 'jointswp' ),
		'not_found'                  => __( 'Job Category Not Found', 'jointswp' ),
		'no_terms'                   => __( 'No Job Category', 'jointswp' ),
		'items_list'                 => __( '', 'jointswp' ),
		'items_list_navigation'      => __( '', 'jointswp' ),
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
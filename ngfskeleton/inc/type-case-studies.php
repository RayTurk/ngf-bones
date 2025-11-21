<?php function create_case_studies() {

	$labels = array(
		'name'                => _x( 'Case Studies', 'Post Type General Name', 'text_domain' ),
		'singular_name'       => _x( 'Case', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'           => __( 'Case Studies', 'text_domain' ),
		'name_admin_bar'      => __( 'Case Studies', 'text_domain' ),
		'parent_item_colon'   => __( 'Parent Item:', 'text_domain' ),
		'all_items'           => __( 'All Cases', 'text_domain' ),
		'add_new_item'        => __( 'Add Case', 'text_domain' ),
		'add_new'             => __( 'Add New', 'text_domain' ),
		'new_item'            => __( 'New Case', 'text_domain' ),
		'edit_item'           => __( 'Edit Case', 'text_domain' ),
		'update_item'         => __( 'Update Case', 'text_domain' ),
		'view_item'           => __( 'View Case', 'text_domain' ),
		'search_items'        => __( 'Search Cases', 'text_domain' ),
		'not_found'           => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'text_domain' ),
	);
	$args = array(
		'label'               => __( 'Case', 'text_domain' ),
		'description'         => __( 'Case Studies for Website', 'text_domain' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,		
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'case', $args );

} 
add_action( 'init', 'create_case_studies', 0 );
?>
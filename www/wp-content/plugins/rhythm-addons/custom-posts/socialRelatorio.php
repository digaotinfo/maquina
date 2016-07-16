<?php
/**
 * Relatório Social custom post type
 */
$labels = array(
	'name'               => _x( 'Relatório Social', 'Relatório Social','rhythm-addons' ),
	'singular_name'      => _x( 'Relatório Social', 'Relatório Social','rhythm-addons' ),
	'add_new'            => _x( 'Add New', 'Relatório Social','rhythm-addons' ),
	'add_new_item'       => __( 'Add New Relatório Social','rhythm-addons' ),
	'edit_item'          => __( 'Edit Relatório Social','rhythm-addons' ),
	'new_item'           => __( 'New Relatório Social','rhythm-addons' ),
	'all_items'          => __( 'All Relatório Social','rhythm-addons' ),
	'view_item'          => __( 'View Relatório Social','rhythm-addons' ),
	'search_items'       => __( 'Search Relatório Social','rhythm-addons' ),
	'not_found'          => __( 'No Relatório Social found','rhythm-addons' ),
	'not_found_in_trash' => __( 'No Relatório Social found in the Trash','rhythm-addons' ), 
	'parent_item_colon'  => '',
	'menu_name'          => __('Relatório Social', 'rhythm-addons')
);
$args = array(
	'labels'        => $labels,
	'public'        => false,
	'show_ui'       => true,
	'menu_position' => 21,
	'supports'      => array( 'title', 'thumbnail' ),
	'has_archive'   => true,
	'rewrite' => array(
		'slug' => 'cpt-socialRelatorio'
	)
	//'menu_icon' =>  get_template_directory_uri() . '/admin/assets/images/pin_green.png',
);
register_post_type( 'socialRelatorio', $args ); 

?>

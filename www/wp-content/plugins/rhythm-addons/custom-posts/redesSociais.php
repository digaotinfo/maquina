<?php
/**
 * Redes Sociais custom post type
 */
$labels = array(
	'name'               => _x( 'Redes Sociais', 'Redes Sociais','rhythm-addons' ),
	'singular_name'      => _x( 'Redes Sociais', 'Redes Sociais','rhythm-addons' ),
	'add_new'            => _x( 'Add New', 'Team','rhythm-addons' ),
	'add_new_item'       => __( 'Add New Rede Sociail','rhythm-addons' ),
	'edit_item'          => __( 'Edit Rede Sociail','rhythm-addons' ),
	'new_item'           => __( 'New Rede Sociail','rhythm-addons' ),
	'all_items'          => __( 'All Redes Sociais','rhythm-addons' ),
	'view_item'          => __( 'View Rede Sociail','rhythm-addons' ),
	'search_items'       => __( 'Search Rede Sociail','rhythm-addons' ),
	'not_found'          => __( 'No Rede Sociail found','rhythm-addons' ),
	'not_found_in_trash' => __( 'No Redes Sociais found in the Trash','rhythm-addons' ), 
	'parent_item_colon'  => '',
	'menu_name'          => __('Redes Sociais', 'rhythm-addons')
);
$args = array(
	'labels'        => $labels,
	'public'        => false,
	'show_ui'       => true,
	'menu_position' => 21,
	'supports'      => array( 'title' ),
	'has_archive'   => true,
	'rewrite' => array(
		'slug' => 'cpt-redes'
	)
	//'menu_icon' =>  get_template_directory_uri() . '/admin/assets/images/pin_green.png',
);
register_post_type( 'redesSociais', $args ); 

?>

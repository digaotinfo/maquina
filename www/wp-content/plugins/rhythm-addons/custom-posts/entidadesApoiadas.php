<?php
/**
 * Entidades Apoiadas custom post type
 */
$labels = array(
	'name'               => _x( 'Entidades Apoiadas', 'Entidades Apoiadas','rhythm-addons' ),
	'singular_name'      => _x( 'Entidades Apoiadas', 'Entidades Apoiadas','rhythm-addons' ),
	'add_new'            => _x( 'Add New', 'Entidade Apoiada','rhythm-addons' ),
	'add_new_item'       => __( 'Add New Entidade Apoiada','rhythm-addons' ),
	'edit_item'          => __( 'Edit Entidade Apoiada','rhythm-addons' ),
	'new_item'           => __( 'New Entidade Apoiada','rhythm-addons' ),
	'all_items'          => __( 'All Entidades Apoiadas','rhythm-addons' ),
	'view_item'          => __( 'View Entidade Apoiada','rhythm-addons' ),
	'search_items'       => __( 'Search Entidade Apoiada','rhythm-addons' ),
	'not_found'          => __( 'No Entidade Apoiada found','rhythm-addons' ),
	'not_found_in_trash' => __( 'No Entidades Apoiadas found in the Trash','rhythm-addons' ), 
	'parent_item_colon'  => '',
	'menu_name'          => __('Entidades Apoiadas', 'rhythm-addons')
);
$args = array(
	'labels'        => $labels,
	'public'        => false,
	'show_ui'       => true,
	'menu_position' => 21,
	'supports'      => array( 'title', 'thumbnail' ),
	'has_archive'   => true,
	'rewrite' => array(
		'slug' => 'cpt-entidadesApoiadas'
	)
	//'menu_icon' =>  get_template_directory_uri() . '/admin/assets/images/pin_green.png',
);
register_post_type( 'entidadesApoiadas', $args ); 

?>

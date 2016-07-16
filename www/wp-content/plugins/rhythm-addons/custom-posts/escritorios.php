<?php
/**
 * Team custom post type
 */
$labels = array(
	'name'               => _x( 'Escritorios', 'Escritorios','rhythm-addons' ),
	'singular_name'      => _x( 'Escritorios', 'Escritorios','rhythm-addons' ),
	'add_new'            => _x( 'Add Novo', 'Escritorios','rhythm-addons' ),
	'add_new_item'       => __( 'Add Novo Escritorio','rhythm-addons' ),
	'edit_item'          => __( 'Editar Escritorio','rhythm-addons' ),
	'new_item'           => __( 'Novo Escritorio','rhythm-addons' ),
	'all_items'          => __( 'Todos os Escritorios','rhythm-addons' ),
	'view_item'          => __( 'Ver Escritorios','rhythm-addons' ),
	'search_items'       => __( 'Buscar Escritorio','rhythm-addons' ),
	'not_found'          => __( 'No Membro found','rhythm-addons' ),
	'not_found_in_trash' => __( 'No Escritorios found in the Trash','rhythm-addons' ), 
	'parent_item_colon'  => 'Escritorios',
	'menu_name'          => __('Escritorios', 'rhythm-addons')
);
$args = array(
	'labels'        => $labels,
	'public'        => false,
	'show_ui'       => true,
	'menu_position' => 21,
	'taxonomies' => array('category'),
	'supports'      => array( 'title', 'editor' ),
	'has_archive'   => true,
	'rewrite' => array(
		'slug' => 'cpt-escritorios'
	)
	//'menu_icon' =>  get_template_directory_uri() . '/admin/assets/images/pin_green.png',
);
register_post_type( 'escritorios', $args ); 

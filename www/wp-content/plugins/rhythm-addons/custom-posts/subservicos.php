<?php
/**
 * Team custom post type
 */
$labels = array(
	'name'               => _x( 'Sub-Servicos', 'Sub-Servicos','rhythm-addons' ),
	'singular_name'      => _x( 'Sub-Servicos', 'Sub-Servicos','rhythm-addons' ),
	'add_new'            => _x( 'Add Novo', 'Sub-Servicos','rhythm-addons' ),
	'add_new_item'       => __( 'Add Novo Membro daSub-Servicos','rhythm-addons' ),
	'edit_item'          => __( 'Editar Membro da Sub-Servicos','rhythm-addons' ),
	'new_item'           => __( 'Novo Membro da Sub-Servicos','rhythm-addons' ),
	'all_items'          => __( 'Todos os Membros da Sub-Servicos','rhythm-addons' ),
	'view_item'          => __( 'Ver Sub-Servicos','rhythm-addons' ),
	'search_items'       => __( 'Buscar Membro da Sub-Servicos','rhythm-addons' ),
	'not_found'          => __( 'No Membro found','rhythm-addons' ),
	'not_found_in_trash' => __( 'No Membro da Sub-Servicos found in the Trash','rhythm-addons' ), 
	'parent_item_colon'  => 'Sub-Servicos',
	'menu_name'          => __('Sub-Servicos', 'rhythm-addons')
);
$args = array(
	'labels'        => $labels,
	'public'        => false,
	'show_ui'       => true,
	'menu_position' => 21,
	'supports'      => array( 'title', 'thumbnail', 'editor' ),
	'has_archive'   => true,
	'rewrite' => array(
		'slug' => 'cpt-subservicos'
	)
	//'menu_icon' =>  get_template_directory_uri() . '/admin/assets/images/pin_green.png',
);
register_post_type( 'subservicos', $args ); 

<?php
/**
 * Team custom post type
 */
$labels = array(
	'name'               => _x( 'Equipe', 'Equipe','rhythm-addons' ),
	'singular_name'      => _x( 'Equipe', 'Equipe','rhythm-addons' ),
	'add_new'            => _x( 'Add Novo', 'Equipe','rhythm-addons' ),
	'add_new_item'       => __( 'Add Novo Membro daEquipe','rhythm-addons' ),
	'edit_item'          => __( 'Editar Membro da Equipe','rhythm-addons' ),
	'new_item'           => __( 'Novo Membro da Equipe','rhythm-addons' ),
	'all_items'          => __( 'Todos os Membros da Equipe','rhythm-addons' ),
	'view_item'          => __( 'Ver Equipe','rhythm-addons' ),
	'search_items'       => __( 'Buscar Membro da Equipe','rhythm-addons' ),
	'not_found'          => __( 'No Membro found','rhythm-addons' ),
	'not_found_in_trash' => __( 'No Membro da Equipe found in the Trash','rhythm-addons' ), 
	'parent_item_colon'  => '',
	'menu_name'          => __('Equipe', 'rhythm-addons')
);
$args = array(
	'labels'        => $labels,
	'public'        => false,
	'show_ui'       => true,
	'menu_position' => 21,
	'supports'      => array( 'title', 'thumbnail', 'editor' ),
	'has_archive'   => true,
	'rewrite' => array(
		'slug' => 'cpt-team'
	)
	//'menu_icon' =>  get_template_directory_uri() . '/admin/assets/images/pin_green.png',
);
register_post_type( 'team', $args ); 

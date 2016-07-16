<?php
/**
 * Trabalhe Conosco custom post type
*/
$labels = array(
		'name'               => _x( 'Trabalhe Conosco', 'Trabalhe Conosco','rhythm-addons' ),
		'singular_name'      => _x( 'Trabalhe Conosco', 'Trabalhe Conosco','rhythm-addons' ),
		'add_new'            => _x( 'Add New', 'Trabalhe Conosco','rhythm-addons' ),
		'add_new_item'       => __( 'Add New Trabalhe Conosco','rhythm-addons' ),
		'edit_item'          => __( 'Edit Trabalhe Conosco','rhythm-addons' ),
		'new_item'           => __( 'New Trabalhe Conosco','rhythm-addons' ),
		'all_items'          => __( 'All Trabalhe Conosco','rhythm-addons' ),
		'view_item'          => __( 'View Trabalhe Conosco','rhythm-addons' ),
		'search_items'       => __( 'Search Trabalhe Conosco','rhythm-addons' ),
		'not_found'          => __( 'No Trabalhe Conosco found','rhythm-addons' ),
		'not_found_in_trash' => __( 'No Trabalhe Conosco found in the Trash','rhythm-addons' ),
		'parent_item_colon'  => '',
		'menu_name'          => __('Trabalhe Conosco', 'rhythm-addons')
);
$args = array(
		'labels'        => $labels,
		'public'        => false,
		'show_ui'       => true,
		'menu_position' => 21,
		'supports'      => array( 'title', 'editor' ),
		'has_archive'   => true,
		'rewrite' => array(
				'slug' => 'relatorio-social'
		)
		//'menu_icon' =>  get_template_directory_uri() . '/admin/assets/images/pin_green.png',
);
register_post_type( 'trabalheConosco', $args );

?>

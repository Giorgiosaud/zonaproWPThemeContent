<?php
if ( ! function_exists('quehacemos_post_type') ) {


	function quehacemos_post_type() {
		$labels = array(
		                'name'                => _x( 'Que Hacemos', 'Post Type General Name', 'zonapro' ),
		                'singular_name'       => _x( 'Que Hacemos', 'Post Type Singular Name', 'zonapro' ),
		                'menu_name'           => __( 'Que Hacemos', 'zonapro' ),
		                'parent_item_colon'   => __( 'Parent Item:', 'zonapro' ),
		                'all_items'           => __( 'Todos nuestros que Haceres', 'zonapro' ),
		                'view_item'           => __( 'Ver Que Hacemos', 'zonapro' ),
		                'add_new_item'        => __( 'Añadir Que Hacer', 'zonapro' ),
		                'add_new'             => __( 'Añadir nuevo Que Hacer', 'zonapro' ),
		                'edit_item'           => __( 'Editar Que Hacer', 'zonapro' ),
		                'update_item'         => __( 'Actualizar Que Hacemos', 'zonapro' ),
		                'search_items'        => __( 'Buscar Que Hacemos', 'zonapro' ),
		                'not_found'           => __( 'No hacen Nada', 'zonapro' ),
		                'not_found_in_trash'  => __( 'No hay nada que hacer en la papelera', 'zonapro' ),
		);
		$rewrite = array(
		                 'slug'                => 'quehacemos',
		                 'with_front'          => true,
		                 'pages'               => true,
		                 'feeds'               => true,
		                 );
		$args = array(
		              'label'               => __( 'Que Hacemos', 'zonapro' ),
		              'description'         => __( 'Que hacemos', 'zonapro' ),
		              'labels'              => $labels,
		              'supports'            => array( 'title', 'editor', 'author', 'revisions','thumbnail' ),
		              'hierarchical'        => false,
		              'public'              => true,
		              'show_ui'             => true,
		              'show_in_menu'        => true,
		              'show_in_nav_menus'   => true,
		              'show_in_admin_bar'   => true,
		              'menu_position'       => 5,
		              'menu_icon'           => 'dashicons-hammer',
		              'can_export'          => true,
		              'has_archive'         => true,
		              'exclude_from_search' => false,
		              'publicly_queryable'  => true,
		              'query_var'           => 'quehacemos',
		              'rewrite'             => $rewrite,
		              'capability_type'     => 'post',
		              );
		register_post_type( 'quehacemos', $args );

	}	

}
add_action( 'init', 'quehacemos_post_type', 0 );
?>
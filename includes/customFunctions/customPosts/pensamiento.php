<?php
if ( ! function_exists('pensamiento_post_type') ) {


	function pensamiento_post_type() {
		$labels = array(
		                'name'                => _x( 'Pensamientos', 'Post Type General Name', 'zonapro' ),
		                'singular_name'       => _x( 'Pensamiento', 'Post Type Singular Name', 'zonapro' ),
		                'menu_name'           => __( 'Pensamientos', 'zonapro' ),
		                'parent_item_colon'   => __( 'Parent Item:', 'zonapro' ),
		                'all_items'           => __( 'Todos nuestros Pensamientos', 'zonapro' ),
		                'view_item'           => __( 'Ver Pensamientos', 'zonapro' ),
		                'add_new_item'        => __( 'Añadir Pensamiento', 'zonapro' ),
		                'add_new'             => __( 'Añadir nuevo Pensamiento', 'zonapro' ),
		                'edit_item'           => __( 'Editar Pensamiento', 'zonapro' ),
		                'update_item'         => __( 'Actualizar Pensamiento', 'zonapro' ),
		                'search_items'        => __( 'Buscar Pensamiento', 'zonapro' ),
		                'not_found'           => __( 'No hay Pensamientos', 'zonapro' ),
		                'not_found_in_trash'  => __( 'No hay ningun Pensamiento en la papelera', 'zonapro' ),
		);
		$rewrite = array(
		                 'slug'                => 'pensamientos',
		                 'with_front'          => true,
		                 'pages'               => true,
		                 'feeds'               => true,
		                 );
		$args = array(
		              'label'               => __( 'Pensamientos', 'zonapro' ),
		              'description'         => __( 'Pensamientos Importantes', 'zonapro' ),
		              'labels'              => $labels,
		              'supports'            => array( 'title', 'editor', 'author', 'revisions','thumbnail' ),
		              'hierarchical'        => false,
		              'public'              => true,
		              'show_ui'             => true,
		              'show_in_menu'        => true,
		              'show_in_nav_menus'   => true,
		              'show_in_admin_bar'   => true,
		              'menu_position'       => 7,
		              'menu_icon'           => 'dashicons-format-quote',
		              'can_export'          => true,
		              'has_archive'         => true,
		              'exclude_from_search' => false,
		              'publicly_queryable'  => true,
		              'query_var'           => 'proyectos',
		              'rewrite'             => $rewrite,
		              'capability_type'     => 'post',
		              );
		register_post_type( 'pensamientos', $args );

	}	

}
add_action( 'init', 'pensamiento_post_type', 0 );
?>
<?php
if ( ! function_exists('proyectos_post_type') ) {
	function proyectos_post_type() {
		$labels = array(
		                'name'                => _x( 'Proyectos', 'Post Type General Name', 'zonapro' ),
		                'singular_name'       => _x( 'Proyecto', 'Post Type Singular Name', 'zonapro' ),
		                'menu_name'           => __( 'Proyectos', 'zonapro' ),
		                'parent_item_colon'   => __( 'Parent Item:', 'zonapro' ),
		                'all_items'           => __( 'Todos nuestros Proyectos', 'zonapro' ),
		                'view_item'           => __( 'Ver Proyecto Actual', 'zonapro' ),
		                'add_new_item'        => __( 'Añadir Proyecto', 'zonapro' ),
		                'add_new'             => __( 'Añadir nuevo Proyecto', 'zonapro' ),
		                'edit_item'           => __( 'Editar Proyecto', 'zonapro' ),
		                'update_item'         => __( 'Actualizar Proyecto', 'zonapro' ),
		                'search_items'        => __( 'Buscar Proyecto', 'zonapro' ),
		                'not_found'           => __( 'No hay Proyectos', 'zonapro' ),
		                'not_found_in_trash'  => __( 'No hay ningun Proyecto en la papelera', 'zonapro' ),
		);
		$rewrite = array(
		                 'slug'                => 'proyectos',
		                 'with_front'          => true,
		                 'pages'               => true,
		                 'feeds'               => true,
		                 );
		$args = array(
		              'label'               => __( 'Nuestros Proyectos', 'zonapro' ),
		              'description'         => __( 'Proyectos Realizados por la empresa Zonapro', 'zonapro' ),
		              'labels'              => $labels,
		              'supports'            => array( 'title' ),
		              'hierarchical'        => false,
		              'public'              => true,
		              'show_ui'             => true,
		              'show_in_menu'        => true,
		              'show_in_nav_menus'   => true,
		              'show_in_admin_bar'   => true,
		              'menu_position'       => 6,
		              'menu_icon'           => 'dashicons-portfolio',
		              'can_export'          => true,
		              'has_archive'         => true,
		              'exclude_from_search' => false,
		              'publicly_queryable'  => true,
		              'query_var'           => 'proyectos',
		              'rewrite'             => $rewrite,
		              'capability_type'     => 'post',
		              );
		register_post_type( 'proyectos', $args );

	}	

}
add_action( 'init', 'proyectos_post_type', 0 );
?>
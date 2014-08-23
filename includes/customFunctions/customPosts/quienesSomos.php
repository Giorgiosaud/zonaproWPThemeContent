<?php
if ( ! function_exists('quienesSomos_post_type') ) {


	function quienesSomos_post_type() {
		$labels = array(
		                'name'                => _x( 'Quienes Somos', 'Post Type General Name', 'zonapro' ),
		                'singular_name'       => _x( 'Quienes Somos', 'Post Type Singular Name', 'zonapro' ),
		                'menu_name'           => __( 'Quienes Somos', 'zonapro' ),
		                'parent_item_colon'   => __( 'Parent Item:', 'zonapro' ),
		                'all_items'           => __( 'Todo el Equipo', 'zonapro' ),
		                'view_item'           => __( 'Ver Quienes Somos', 'zonapro' ),
		                'add_new_item'        => __( 'Añadir Miembro', 'zonapro' ),
		                'add_new'             => __( 'Añadir nuevo Miembro', 'zonapro' ),
		                'edit_item'           => __( 'Editar Miembro', 'zonapro' ),
		                'update_item'         => __( 'Actualizar Quienes Somos', 'zonapro' ),
		                'search_items'        => __( 'Buscar Quienes Somos', 'zonapro' ),
		                'not_found'           => __( 'No hay nadie', 'zonapro' ),
		                'not_found_in_trash'  => __( 'No hay  nadie en la papelera', 'zonapro' ),
		);
		$rewrite = array(
		                 'slug'                => 'quienesSomos',
		                 'with_front'          => true,
		                 'pages'               => true,
		                 'feeds'               => true,
		                 );
		$args = array(
		              'label'               => __( 'Quienes Somos', 'zonapro' ),
		              'description'         => __( 'Quienes Somos', 'zonapro' ),
		              'labels'              => $labels,
		              'supports'            => array( 'title','thumbnail' ),
		              'hierarchical'        => false,
		              'public'              => true,
		              'show_ui'             => true,
		              'show_in_menu'        => true,
		              'show_in_nav_menus'   => true,
		              'show_in_admin_bar'   => true,
		              'menu_position'       => 5,
		              'menu_icon'           => 'dashicons-groups',
		              'can_export'          => true,
		              'has_archive'         => true,
		              'exclude_from_search' => false,
		              'publicly_queryable'  => true,
		              'query_var'           => 'quienesSomos',
		              'rewrite'             => $rewrite,
		              'capability_type'     => 'post',
		              );
		register_post_type( 'quienesSomos', $args );

	}	

}
add_action( 'init', 'quienesSomos_post_type', 0 );
?>
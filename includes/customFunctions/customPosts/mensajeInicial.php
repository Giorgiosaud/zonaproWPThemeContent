<?php
if ( ! function_exists('mensajeInicial_post_type') ) {


	function mensajeInicial_post_type() {
		$labels = array(
		                'name'                => _x( 'Mensajes Inicio', 'Post Type General Name', 'zonapro' ),
		                'singular_name'       => _x( 'Mensaje Inicio', 'Post Type Singular Name', 'zonapro' ),
		                'menu_name'           => __( 'Mensajes Inicio', 'zonapro' ),
		                'parent_item_colon'   => __( 'Parent Item:', 'zonapro' ),
		                'all_items'           => __( 'Todos los Mensajes de Inicio', 'zonapro' ),
		                'view_item'           => __( 'Ver Mensaje', 'zonapro' ),
		                'add_new_item'        => __( 'Añadir nuevo mensaje', 'zonapro' ),
		                'add_new'             => __( 'Añadir nuevo', 'zonapro' ),
		                'edit_item'           => __( 'Editar mensaje', 'zonapro' ),
		                'update_item'         => __( 'Actualizar mensaje', 'zonapro' ),
		                'search_items'        => __( 'Buscar Mensaje', 'zonapro' ),
		                'not_found'           => __( 'No Encontrado', 'zonapro' ),
		                'not_found_in_trash'  => __( 'No encontrado en la papelera', 'zonapro' ),
		);
		$rewrite = array(
		                 'slug'                => 'slogans',
		                 'with_front'          => true,
		                 'pages'               => true,
		                 'feeds'               => true,
		                 );
		$args = array(
		              'label'               => __( 'mensajeInicio', 'zonapro' ),
		              'description'         => __( 'Mensaje de la empresa al Inicio de la Pagina', 'zonapro' ),
		              'labels'              => $labels,
		              'supports'            => array( 'title'),
		              'hierarchical'        => false,
		              'public'              => true,
		              'show_ui'             => true,
		              'show_in_menu'        => true,
		              'show_in_nav_menus'   => true,
		              'show_in_admin_bar'   => true,
		              'menu_position'       =>4,
		              'menu_icon'           => 'dashicons-format-status',
		              'can_export'          => true,
		              'has_archive'         => true,
		              'exclude_from_search' => false,
		              'publicly_queryable'  => true,
		              'query_var'           => 'mensajeInicio',
		              'rewrite'             => $rewrite,
		              'capability_type'     => 'post',
		              );
		register_post_type( 'mensajeInicio', $args );

}
}
add_action( 'init', 'mensajeInicial_post_type', 0 );
?>
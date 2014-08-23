<?php
add_action( 'init', 'crear_taxonomias_proyectos', 0 );
function crear_taxonomias_proyectos() {
	$labels = array(
		'name'                       => _x( 'Rubro', 'taxonomy general name' ),
		'singular_name'              => _x( 'Rubro', 'taxonomy singular name' ),
		'search_items'               => __( 'Buscar Rubros' ),
		'popular_items'              => __( 'Rubros Populares' ),
		'all_items'                  => __( 'Todos Los Rubros' ),
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => __( 'Editar Rubro' ),
		'update_item'                => __( 'Actualizar Rubro' ),
		'add_new_item'               => __( 'Añadir Rubro' ),
		'new_item_name'              => __( 'Nuevo Rubro' ),
		'separate_items_with_commas' => __( 'Separar Rubros con comas' ),
		'add_or_remove_items'        => __( 'Añadir o eliminar Rubros' ),
		'choose_from_most_used'      => __( 'Escojer entre los Rubros Mas Utilizados' ),
		'not_found'                  => __( 'Sin Rubros' ),
		'menu_name'                  => __( 'Rubros' ),
	);
	$args = array(
		'hierarchical'          => false,
		'labels'                => $labels,
		'show_ui'               => true,
		'show_admin_column'     => true,
		'update_count_callback' => '_update_post_term_count',
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'rubros' ),
	);
	register_taxonomy( 'rubros', 'proyectos', $args );
}
?>
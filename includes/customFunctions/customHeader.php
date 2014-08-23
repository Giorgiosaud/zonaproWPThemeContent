<?php
$defaults = array(
	'default-image'          => get_template_directory_uri().'/imagenes/top/header/logo_zonapro.png',
	'random-default'         => false,
	'height'=>240,
	'width'=>240,
	'flex-height'            => true,
	'flex-width'             => true,
	'default-text-color'     => '',
	'header-text'            => true,
	'uploads'                => true,
	'wp-head-callback'       => '',
	'admin-head-callback'    => '',
	'admin-preview-callback' => '',
);
add_theme_support( 'custom-header', $defaults );
?>
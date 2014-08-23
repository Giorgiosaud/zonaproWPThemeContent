<?php
/*
 *  Author: Jorge saud
 *  URL: zonapro.net | @giorgiosaud
 *  Custom functions, support, custom -thum types and more.
 */

    /*------------------------------------*\
    Include Files
    \*------------------------------------*/
    include_once ('includes/customFunctions/customCcs.php');
    include_once ('includes/customFunctions/customFunction.php');
    include_once ('includes/customFunctions/customHeader.php');
    include_once ('includes/customFunctions/customizerPage.php');
    include_once ('includes/customFunctions/customMenu.php');
    include_once ('includes/customFunctions/customPosts.php');
    include_once ('includes/customFunctions/customTaxonomies.php');
    include_once ('includes/customFunctions/wp_bootstrap_navwalker.php');
    include_once ('includes/customFunctions/shortcode.php');
    include_once('advanced-custom-fields/acf.php');

/*------------------------------------*\
	Theme Support
\*------------------------------------*/

    if (function_exists('add_theme_support'))
    {
    // Add Menu Support
        add_theme_support('menus');

    // Add Thumbnail Theme Support
        add_theme_support('post-thumbnails');
        add_theme_support('automatic-feed-links');
     // Tamaños de Imagen
        add_image_size( 'imagenNosotros', '300', '300', false );
    // Localisation Support
        load_theme_textdomain('Zonapro', get_template_directory() . '/languages');
    }
    register_nav_menus( array(
                       'primary' => __( 'Primary Menu', 'zonapro' )
                       ) );
    /*------------------------------------*\
    Functions
    \*------------------------------------*/
    function zonapro_base_scripts()
    {
        // Verificar si esta en la pantalla admin o login
        if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
        wp_deregister_script('jQuery'); // eliminar el jQuery usado por la version de wordpress
        wp_register_script('jQuery', get_template_directory_uri() . '/includes/baseJs/jQuery.js', array(), '2.1.0'); // Conditionizr
        wp_enqueue_script('jQuery'); // Enqueue it!

        wp_register_script('conditionizr', get_template_directory_uri() . '/includes/baseJs/conditionizr.js', array('jQuery'), '4.3.0'); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!
        wp_register_script('mousewheel', get_template_directory_uri() . '/includes/customJs/jquery.mousewheel.min.js', array('jQuery'), '3.5.0 b'); // mousewheel.min
        wp_enqueue_script('mousewheel'); // Enqueue it!

        wp_register_script('modernizr', get_template_directory_uri() . '/includes/baseJs/modernizr.js', array('jQuery'), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!
        wp_register_script( 'stellar', get_template_directory_uri().'/includes/customJs/jquery.stellar.js', array('jQuery'), '1.0',false );
        wp_enqueue_script('stellar');
        wp_register_script( 'iscroll', get_template_directory_uri().'/includes/customJs/iScroll.js', array('stellar'), '1.0',false );
        wp_enqueue_script('iscroll');
        wp_register_script( 'waypoints', get_template_directory_uri().'/includes/customJs/jquery.waypoints.min.js', array('jQuery'), '1.0',false );
         wp_enqueue_script('waypoints');
         wp_register_script( 'easing', get_template_directory_uri().'/includes/customJs/jquery.easing.min.js', array('jQuery'), '1.0',false );
         wp_enqueue_script('easing');
         wp_register_script( 'color', get_template_directory_uri().'/includes/customJs/jquery.color.min.js', array('jQuery'), '1.0',false );
        wp_enqueue_script('color');
        wp_register_script( 'hoverdir', get_template_directory_uri().'/includes/customJs/jquery.hoverdir.js', array('jQuery'), '1.0',false );
        wp_enqueue_script('hoverdir');

        wp_register_script( 'cusotmJs', get_template_directory_uri().'/includes/customJs/customJs.js', array('hoverdir'), '1.0',false );
        wp_enqueue_script('cusotmJs');


    }
}
function zonapro_base_styles()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

    }
}
function bootstrap_base(){
         // Verificar si esta en la pantalla admin o login
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
        wp_register_style( 'bootstrap', get_template_directory_uri(). '/includes/bootstrap/css/bootstrap.min.css', false, '3.1.1' );
        wp_enqueue_style('bootstrap');
        wp_register_style( 'bootstraptheme', get_template_directory_uri(). '/includes/bootstrap/css/bootstrap-theme.min.css', array('bootstrap'), '3.1.1' );
        wp_enqueue_style('bootstraptheme');
        wp_register_script( 'bootstrapjs', get_template_directory_uri().'/includes/bootstrap/js/bootstrap.min.js', array('jQuery'), '3.1.1',false );
        wp_enqueue_script('bootstrapjs');
    }
}

function zonaproCss(){
         // Verificar si esta en la pantalla admin o login
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
        wp_register_style( 'fuentes', 'http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800|Open+Sans+Condensed:300,300italic,700', array('zonaproCustom'), '1.0' );
        wp_enqueue_style('fuentes' );
    }
}


function html5blankgravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}
// Removes ul class from wp_nav_menu
function remove_ul ( $menu ){
    return preg_replace( array( '#^<ul[^>]*>#', '#</ul>$#' ), '', $menu );
}

/**
 * Filters the page title appropriately depending on the current page
 *
 * This function is attached to the 'wp_title' fiilter hook.
 *
 * @uses    get_bloginfo()
 * @uses    is_home()
 * @uses    is_front_page()
 */
function filter_wp_title( $title ) {
    global $page, $paged;

    if ( is_feed() )
        return $title;

    $site_description = get_bloginfo( 'description' );

    $filtered_title = $title . get_bloginfo( 'name' );
    $filtered_title .= ( ! empty( $site_description ) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description: '';
    $filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) ) : '';

    return $filtered_title;
}
function include_all_php($folder){
    foreach (glob("{$folder}/*.php") as $filename)
    {
        include_once $filename;
    }
}
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');
    /*------------------------------------*\
    Actions + Filters + ShortCodes
    \*------------------------------------*/
    add_action('init', 'zonapro_base_scripts'); // Add Custom Scripts to wp_head
    add_action('init', 'zonapro_base_styles'); // Add Custom Scripts to wp_head
    add_action('init', 'bootstrap_base'); // Add Custom Scripts to wp_head
    add_filter( 'wp_title', 'filter_wp_title' );
    add_action('init', 'zonaproCss'); 
    add_filter('show_admin_bar', '__return_false');
    add_filter('avatar_defaults', 'html5blankgravatar'); // Custom Gravatar in Settings > Discussion
    add_filter( 'wp_nav_menu', 'remove_ul' );
    

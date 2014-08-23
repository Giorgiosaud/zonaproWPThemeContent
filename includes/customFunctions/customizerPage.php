<?php
new theme_customizer();

class theme_customizer
{
    public function __construct()
    {
        add_action ('admin_menu', array(&$this, 'customizer_admin'));
        add_action( 'customize_register', array(&$this, 'customize_manager_demo' ));
    }

    /**
     * Add the Customize link to the admin menu
     * @return void
     */
    public function customizer_admin() {
        add_theme_page( 'Customize ZP', 'Customize ZP', 'edit_theme_options', 'customize.php' );
    }

    /**
     * Customizer manager demo
     * @param  WP_Customizer_Manager $wp_manager
     * @return void
     */
    public function customize_manager_demo( $wp_manager )
    {
        $this->demo_section( $wp_manager );
    }

    public function demo_section( $wp_manager )
    {
        $wp_manager->add_section( 'pie' , array(
                                 'title'         => __( 'Pie', 'ZonaproTheme' ),
                                 'priority'      => 130,
                                 'description'=>'contenido del pie'
                                 ));
        $wp_manager->add_section( 'contacto' , array(
                                 'title'         => __( 'Contactos', 'ZonaproTheme' ),
                                 'priority'      => 130,
                                 'description'=>'configuracion de Contacto'
                                 ));
        $wp_manager->add_section( 'cabecera' , array(
                                 'title'         => __( 'Cabecera', 'ZonaproTheme' ),
                                 'priority'      => 10,
                                 'description'=>'contenido de la cabecera'
                                 ));
        $wp_manager->add_setting( 'color_principal', array(
                                 'default'        => '#2f727c',
                                 ) );
        $wp_manager->add_setting( 'imagen_de_fondo', array(
                                 'default'        => 'http://zonapro.net/site/wp-content/themes/Zonapro/imagenes/top/header/imagen_zonapro.png',
                                 ) );
        $wp_manager->add_setting( 'imagen_de_grid', array(
                                 'default'        => 'http://zonapro.net/site/wp-content/themes/Zonapro/imagenes/top/header/grid.png',
                                 ) );
        $wp_manager->add_setting('correoElectronico' , array(
                                 'default'     => 'info@zonapro.net',
                                 'transport'   => 'refresh',
                                 ));
        $wp_manager->add_setting('correoElectronicoCopias' , array(
                                 'default'     => '',
                                 'transport'   => 'refresh',
                                 ));
        $wp_manager->add_setting('footer_text_copyright' , array(
                                 'default'     => 'Copyright 2014 | zonapro.net, c.a. J-29797240-4 | Algunos Derechos Reservados',
                                 'transport'   => 'refresh',
                                 ));
        $wp_manager->add_setting('footer_text_telefono' , array(
                                 'default'     => '+58 0286 923.31.47',
                                 'transport'   => 'refresh',
                                 ));
        $wp_manager->add_setting('footer_text_correo' , array(
                                 'default'     => 'info@zonapro.net',
                                 'transport'   => 'refresh',
                                 ));
        $wp_manager->add_setting('footer_text_ubicacion' , array(
                                 'default'     => 'Ciudad Guayana - Venezuela',
                                 'transport'   => 'refresh',
                                 ));
        $wp_manager->add_control(new WP_Customize_Control($wp_manager,'correoElectronico',array(
                                 'label'          => __( 'Correo de Contacto', 'Zonapro' ),
                                 'section'        => 'contacto',
                                 'settings'       => 'correoElectronico',
                                 'type'           => 'text',
                                 )));

        $wp_manager->add_control(new WP_Customize_Control($wp_manager,'correoElectronicoCopias',array(
                                 'label'          => __( 'Copiar a (separado por comas)', 'Zonapro' ),
                                 'section'        => 'contacto',
                                 'settings'       => 'correoElectronicoCopias',
                                 'type'           => 'text',
                                 )));
        $wp_manager->add_control( new WP_Customize_Image_Control( $wp_manager, 'imagen_de_fondo', array(
                                 'label'   => 'Imagen de Fondo',
                                 'section' => 'cabecera',
                                 'settings'   => 'imagen_de_fondo',
                                 'priority' => 8
                                 ) ) );
        $wp_manager->add_control( new WP_Customize_Image_Control( $wp_manager, 'imagen_de_grid', array(
                                 'label'   => 'Imagen de Grid',
                                 'section' => 'cabecera',
                                 'settings'   => 'imagen_de_grid',
                                 'priority' => 8
                                 ) ) );
        $wp_manager->add_control( new WP_Customize_Color_Control( $wp_manager, 'color_principal', array(
                                 'label'        => 'Color Principal',
                                 'section'    => 'cabecera',
                                 'settings'   => 'color_principal',
                                 ) ) );
        $wp_manager->add_control(new WP_Customize_Control($wp_manager,'footer_text_copyright',array(
                                 'label'          => __( 'Texto del pie area Copyright', 'ZonaproTheme' ),
                                 'section'        => 'pie',
                                 'settings'       => 'footer_text_copyright',
                                 'type'           => 'text',
                                 )));
        $wp_manager->add_control(new WP_Customize_Control($wp_manager,'footer_text_telefono',array(
                                 'label'          => __( 'Texto del Telefono', 'ZonaproTheme' ),
                                 'section'        => 'pie',
                                 'settings'       => 'footer_text_telefono',
                                 'type'           => 'text',
                                 )));
        $wp_manager->add_control(new WP_Customize_Control($wp_manager,'footer_text_correo',array(
                                 'label'          => __( 'Texto del Telefono', 'ZonaproTheme' ),
                                 'section'        => 'pie',
                                 'settings'       => 'footer_text_correo',
                                 'type'           => 'text',
                                 )));
        $wp_manager->add_control(new WP_Customize_Control($wp_manager,'footer_text_ubicacion',array(
                                 'label'          => __( 'Texto del Telefono', 'ZonaproTheme' ),
                                 'section'        => 'pie',
                                 'settings'       => 'footer_text_ubicacion',
                                 'type'           => 'text',
                                 )));
        // // $wp_manager->add_section( 'customiser_demo_section', array(
        //     'title'          => 'Default Demo Controls',
        //     'priority'       => 35,
        // ) );

        // // Textbox control
        // $wp_manager->add_setting( 'textbox_setting', array(
        //     'default'        => 'default_value',
        // ) );

        // $wp_manager->add_control( 'textbox_setting', array(
        //     'label'   => 'Text Setting',
        //     'section' => 'customiser_demo_section',
        //     'type'    => 'text',
        //     'priority' => 1
        // ) );

        // // Checkbox control
        // $wp_manager->add_setting( 'checkbox_setting', array(
        //     'default'        => '1',
        // ) );

        // $wp_manager->add_control( 'checkbox_setting', array(
        //     'label'   => 'Checkbox Setting',
        //     'section' => 'customiser_demo_section',
        //     'type'    => 'checkbox',
        //     'priority' => 2
        // ) );

        // // Radio control
        // $wp_manager->add_setting( 'radio_setting', array(
        //     'default'        => '1',
        // ) );

        // $wp_manager->add_control( 'radio_setting', array(
        //     'label'   => 'Radio Setting',
        //     'section' => 'customiser_demo_section',
        //     'type'    => 'radio',
        //     'choices' => array("1", "2", "3", "4", "5"),
        //     'priority' => 3
        // ) );

        // // Select control
        // $wp_manager->add_setting( 'select_setting', array(
        //     'default'        => '1',
        // ) );

        // $wp_manager->add_control( 'select_setting', array(
        //     'label'   => 'Select Dropdown Setting',
        //     'section' => 'customiser_demo_section',
        //     'type'    => 'select',
        //     'choices' => array("1", "2", "3", "4", "5"),
        //     'priority' => 4
        // ) );

        // // Dropdown pages control
        // $wp_manager->add_setting( 'dropdown_pages_setting', array(
        //     'default'        => '1',
        // ) );

        // $wp_manager->add_control( 'dropdown_pages_setting', array(
        //     'label'   => 'Dropdown Pages Setting',
        //     'section' => 'customiser_demo_section',
        //     'type'    => 'dropdown-pages',
        //     'priority' => 5
        // ) );

        // Color control
        

        // WP_Customize_Upload_Control
        

        // WP_Customize_Image_Control

    }

}

?>
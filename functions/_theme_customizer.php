<?php
//
// Allow custom logo and colors
//
function themeslug_theme_customizer( $wp_customize ) {
    //logo
    $wp_customize->add_section( 'themeslug_logo_section' , array(
        'title'       => __( 'Logo', 'themeslug' ),
        'priority'    => 30,
        'description' => 'Upload a logo to replace the default site name and description in the header',
    ) );

    $wp_customize->add_setting( 'themeslug_logo' );

    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'themeslug_logo', array(
        'label'    => __( 'Logo', 'themeslug' ),
        'section'  => 'themeslug_logo_section',
        'settings' => 'themeslug_logo',
    ) ) );

    //link color
    $wp_customize->add_setting(
        'banda_link_color',
        array(
            'default'     => '#000000',
            'transport'   => 'postMessage'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'link_color',
            array(
                'label'      => __( 'Link Color', 'banda' ),
                'section'    => 'colors',
                'settings'   => 'banda_link_color'
            )
        )
    );
    //header color
    
}
add_action('customize_register', 'themeslug_theme_customizer');

//
// allow css to be updates in theme options admin area
//
function banda_customizer_css() {
    ?>
    <style type="text/css">
        a { color: <?php echo get_theme_mod( 'banda_link_color' ); ?>; }
    </style>
    <?php
}
add_action( 'wp_head', 'banda_customizer_css' );

//
// add auto-refresh
//
function banda_customizer_live_preview() {
 
    wp_enqueue_script(
        'banda-theme-customizer',
        get_template_directory_uri() . '/js/theme_customizer.js',
        array( 'jquery', 'customize-preview' ),
        '0.3.0',
        true
    );
 
}
add_action( 'customize_preview_init', 'banda_customizer_live_preview' );


?>
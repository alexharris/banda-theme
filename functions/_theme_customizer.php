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
     //link hover color
    $wp_customize->add_setting(
        'banda_link_hover_color',
        array(
            'default'     => '#000000',
            'transport'   => 'postMessage'
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'link__hovercolor',
            array(
                'label'      => __( 'Link Hover Color', 'banda' ),
                'section'    => 'colors',
                'settings'   => 'banda_link_hover_color'
            )
        )
    );

    //primary color
    $wp_customize->add_setting(
        'banda_primary_color',
        array(
            'default'     => '#93eec1',
            'transport'   => 'postMessage'
        ) 

    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'primary_color',
            array(
                'label'      => __( 'Primary Color', 'banda' ),
                'section'    => 'colors',
                'settings'   => 'banda_primary_color'
            )
        )
    );
    //secondary color
    // $wp_customize->add_setting(
    //     'banda_secondary_color',
    //     array(
    //         'default'     => '#000000',
    //         'transport'   => 'postMessage'
    //     ) 
        
    // );
    // $wp_customize->add_control(
    //     new WP_Customize_Color_Control(
    //         $wp_customize,
    //         'secondary_color',
    //         array(
    //             'label'      => __( 'Secondary Color', 'banda' ),
    //             'section'    => 'colors',
    //             'settings'   => 'banda_secondary_color'
    //         )
    //     )
    // );
    //primary text
    $wp_customize->add_setting(
        'banda_primary_text_color',
        array(
            'default'     => '#000000',
            'transport'   => 'postMessage'
        ) 
        
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'primary_text_color',
            array(
                'label'      => __( 'Primary Text Color', 'banda' ),
                'section'    => 'colors',
                'settings'   => 'banda_primary_text_color'
            )
        )
    );
    //secondary text color
    $wp_customize->add_setting(
        'banda_secondary_text_color',
        array(
            'default'     => '#000000',
            'transport'   => 'postMessage'
        ) 
        
    );
    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'secondary_text_color',
            array(
                'label'      => __( 'Secondary Text Color', 'banda' ),
                'section'    => 'colors',
                'settings'   => 'banda_secondary_text_color'
            )
        )
    );

}
add_action('customize_register', 'themeslug_theme_customizer');

//
// allow css to be updates in theme options admin area
//
function banda_customizer_css() {
    ?>
    <style type="text/css">
        .maincontent a { 
            color: <?php echo get_theme_mod( 'banda_link_color' ); ?>; 
        }
        .maincontent a:hover {
            color: <?php echo get_theme_mod( 'banda_link_hover_color' ); ?>;  
        }
        .bg-primary {
            background-color:  <?php echo get_theme_mod( 'banda_primary_color' ); ?>;
        }
        .navbar-light .navbar-brand {
            color: <?php echo get_theme_mod( 'banda_primary_text_color' ); ?> ;
        }
        .navbar-light .navbar-nav .nav-link {
            color: <?php echo get_theme_mod( 'banda_primary_text_color' ); ?> ;
        }
        .btn-primary {
            color: <?php echo get_theme_mod( 'banda_primary_text_color' ); ?> ;
            background-color:  <?php echo get_theme_mod( 'banda_primary_color' ); ?> ;
            border-color:  <?php echo get_theme_mod( 'banda_primary_color' ); ?> ;
        }
        body, p, li, h2,h3,h4,h5,h6,blockquote {
            color:  <?php echo get_theme_mod( 'banda_secondary_text_color' ); ?> ;
        }
        .card, #banda-sidebar ul.banda-nav, .jumbotron, .table{
            border-left: 2px solid <?php echo get_theme_mod( 'banda_primary_color' ); ?> ;
        }
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